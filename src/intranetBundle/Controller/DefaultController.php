<?php
namespace intranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use intranetBundle\Model\Model;
use intranetBundle\Entity\Entity\Users;
use intranetBundle\Entity\Entity\Tasks;
use intranetBundle\Entity\Entity\NewFeed;
use intranetBundle\Entity\Entity\userschannel;
use intranetBundle\Entity\Entity\userstasks;
use intranetBundle\Entity\Entity\channelnew_feed;
use intranetBundle\Entity\Entity\F_Expenses;
use intranetBundle\Entity\Entity\F_Hours;
use intranetBundle\Entity\Entity\F_Trip;
use intranetBundle\Entity\Entity\F_Vacation;
use intranetBundle\Entity\Entity\Users_F_Hours;
use intranetBundle\Entity\Entity\Users_F_Vacations;
use intranetBundle\Entity\Entity\Users_F_Expenses;
use intranetBundle\Entity\Entity\Users_F_Trip;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Query\Expr\Join;

class DefaultController extends Controller
{

  //Method which does the login:
  //Verify LDAP credentials
  //link LDAP with the database if not, creates a new user in DB
  public function loginAction(){
    $ldaprdn  = $_POST['login'];     // ldap rdn or dn
    $ldappass =$_POST['pass'];

    $m = new Model();
    $params = array('user' => $m->login($ldaprdn,$ldappass),);

    //Once found the user in the LDAP Directory, Store his credentials in variables
    $userLDAP=json_decode(json_encode($params), true);
    $logged=$userLDAP['user'][0]['samaccountname'][0];
    $rol=$userLDAP['user'][0]['memberof'][0];
    $name=$userLDAP['user'][0]['givenname'][0];
    $surname=$userLDAP['user'][0]['sn'][0];

    //Method which split the whole role returned from LDAP used to know if the user is admin or not
    $m = new Model();
    $r = $m->getSplitRole($rol);

    $_SESSION['name']=$name;         //NAME
    $_SESSION['surname']=$surname;   //SURNAME
    $_SESSION['userLDAP']=$logged;   //LOGIN
    $_SESSION['rol']=$r[1];          //Admin, Buo, User

    //TODO
    #There is no way to difference Buos vs Users yet


    //Search the user in the local database with the credentials introduced before
    $user = $this->getDoctrine()
                    ->getRepository('intranetBundle:Entity\Users')
                    ->findOneByLogin($logged); #findAll

    $params=array('login'=>$logged,'name'=>$name,'surname'=>$surname,'rol'=>$rol[1]);

    if (!$user) {
      //If the user doesn't exists, redirect to another routing path to create one
      return $this->redirect($this->generateUrl('intranet_nonExistingUserA'));
    }else{
      //The user exists and store it to use on the template
      $params=array('user'=>$user);
      return $this->render('intranetBundle:Default:landinga.html.twig', $params);
    }
  }

  //Method which obtains the values from the LDAP Directory and redirects to the form to create the new User
  public function createUserAAction(){
    $params=array(
      'login'=>$_SESSION['userLDAP'],
      'name'=>$_SESSION['name'],
      'surname'=>$_SESSION['surname'],
      'rol'=>$_SESSION['rol']
      );

    return $this->render('intranetBundle:Error:error_login.html.twig', $params);
  }

    //Method which persist the object to the database with the form inputs
  public function createUserAction(){
     //Persist via doctrine
     $newuser = new Users();
     $newuser->setLogin($_REQUEST['myLogin']);
     $newuser->setNameU($_REQUEST['myName']);
     $newuser->setSurnameU($_REQUEST['mySurname']);
     $newuser->setLang($_REQUEST['myLang']);
     $newuser->setRol($_SESSION['rol']);
     $newuser->setPhoto($_REQUEST['myPhoto']);
     $newuser->setOnboard(0);
     $newuser->setNotifications($_REQUEST['myNotifications']);

     $em = $this->getDoctrine()->getManager();
     $em->persist($newuser);
     $em->flush();

     //Once the users exists in the database, redirect him to the intranet
     $user = $this->getDoctrine()
                   ->getRepository('intranetBundle:Entity\Users')
                   ->findOneByLogin($_SESSION['userLDAP']);
     $params=array('user'=>$user);
     return $this->render('intranetBundle:Default:landinga.html.twig', $params);
   }

   public function indexAction(){
    return $this->render('intranetBundle:Default:landing.html.twig');
  }

  public function formHoursAction(){
      return $this->render('intranetBundle:Default:formHours.html.twig');
  }

  public function formVacationAction(){
       return $this->render('intranetBundle:Default:formVacations.html.twig');
  }

  public function formRequestAction(){
       return $this->render('intranetBundle:Default:formRequest.html.twig');
   }

  public function formExpensesAction(){
        return $this->render('intranetBundle:Default:formExpenses.html.twig');
   }

    public function newsAction(){
        //Obtains all the news ordered by date DESC
        $allNews = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\NewFeed')
                        ->findBy([], ['date' => 'DESC', 'time' => 'DESC']); #findAll

        //TODO
        if (!$allNews) {
          throw $this->createNotFoundException('No news found');
        }

        $params= array('new' => $allNews, );
        return $this->render('intranetBundle:Default:news.html.twig',$params);
    }

    #In this web we can see all the forms send, order by non-read forms, date and type.
    public function incomingFormsAction(){

      #It is necessary to put all the forms of all tables in a big array and pour it into a table, which is viewed.
      #Not only all forms, but also the user who sent it.

      //WORST OPTION => DO IT MANUALLY => ON THE VIEW
      #I can do the join via field by field here in the method. I can use the $id to link one table to another
      $formH = $this->getDoctrine()
                    ->getRepository('intranetBundle:Entity\F_Hours')
                    ->findBy([], ['send' => 'DESC']);

      $userFormH = $this->getDoctrine()
                    ->getRepository('intranetBundle:Entity\Users_F_Hours')
                    ->findAll(); #findAll
                    /************************************************************************************************************************/
      $formV = $this->getDoctrine()
                    ->getRepository('intranetBundle:Entity\F_Vacation')
                    ->findBy([], ['send' => 'DESC']);

      $userFormV = $this->getDoctrine()
                    ->getRepository('intranetBundle:Entity\Users_F_Vacations')
                    ->findAll();
                    /************************************************************************************************************************/
      $formE = $this->getDoctrine()
                    ->getRepository('intranetBundle:Entity\F_Expenses')
                    ->findBy([], ['send' => 'DESC']);

      $userFormE = $this->getDoctrine()
                    ->getRepository('intranetBundle:Entity\Users_F_Expenses')
                    ->findAll();
                    /************************************************************************************************************************/
      $formT = $this->getDoctrine()
                    ->getRepository('intranetBundle:Entity\F_Trip')
                    ->findBy([], ['send' => 'DESC']);

      $userFormT = $this->getDoctrine()
                  ->getRepository('intranetBundle:Entity\Users_F_Trip')
                  ->findAll();

            if (!$formH||!$formV||!$formE||!$formT) {
              throw $this->createNotFoundException('No news found');
            }

        $params=array(
          'relationHours'=>$userFormH, 'listIncomingFormsH'=>$formH,
          'relationVacations'=>$userFormV, 'listIncomingFormsV'=>$formV,
          'relationExpenses'=>$userFormE, 'listIncomingFormsE'=>$formE,
          'relationTrips'=>$userFormT, 'listIncomingFormsT'=>$formT
        );
         return $this->render('intranetBundle:Default:incomingForms.html.twig',$params);
    }

    public function myFormsAction(){
      //Get the id of the intermediates tables, go to the forms and take only those who has the id got already, passed by parameters
      $userFormH = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users_F_Hours')
                        ->findBy(['login' => $_SESSION['userLDAP']]);

      //Now I have all forms of MY user, but I have to get their ID
      $ind=array();
      foreach ($userFormH as $index => $object) {
        array_push($ind,$object->getId());
      }

      //Search in the table all forms the user has send
      $myForms1=array();
      foreach ($ind as $indice) {
        $myformH = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\F_Hours')
                        ->findBy(['id' => $indice]);
        array_push($myForms1,$myformH);
      }

                    /************************************************************************************************************************/
      //Get the id of the intermediates tables, go to the forms and take only those who has the id got already, passed by parameters
      $userFormV = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users_F_Vacations')
                        ->findBy(['login' => $_SESSION['userLDAP']]);

      //Now I have all forms of MY user, but I have to get their ID
      $ind=array();
      foreach ($userFormV as $index => $object) {
        array_push($ind,$object->getId());
      }

      //Search in the table all forms the user has send
      $myForms2=array();
      foreach ($ind as $indice) {
        $myformV = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\F_Vacation')
                        ->findBy(['id' => $indice]);
        array_push($myForms2,$myformV);
      }

                    /************************************************************************************************************************/
      //Get the id of the intermediates tables, go to the forms and take only those who has the id got already, passed by parameters
      $userFormE = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users_F_Expenses')
                        ->findBy(['login' => $_SESSION['userLDAP']]);

      //Now I have all forms of MY user, but I have to get their ID
      $ind=array();
      foreach ($userFormE as $index => $object) {
        array_push($ind,$object->getId());
      }

      //Search in the table all forms the user has send
      $myForms3=array();
      foreach ($ind as $indice) {
        $myformE = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\F_Expenses')
                        ->findBy(['id' => $indice]);
        array_push($myForms3,$myformE);
      }

                    /************************************************************************************************************************/
      //Get the id of the intermediates tables, go to the forms and take only those who has the id got already, passed by parameters
      $userFormT = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users_F_Trip')
                        ->findBy(['login' => $_SESSION['userLDAP']]);

      //Now I have all forms of MY user, but I have to get their ID
      $ind=array();
      foreach ($userFormT as $index => $object) {
        array_push($ind,$object->getId());
      }

      //Search in the table all forms the user has send
      $myForms4=array();
      foreach ($ind as $indice) {
        $myformT = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\F_Trip')
                        ->findBy(['id' => $indice]);
        array_push($myForms4,$myformT);
      }

      $params=array('myHours'=>$myForms1, 'myVacations'=>$myForms2, 'myExpenses'=>$myForms3, 'myTrips'=>$myForms4);
      return $this->render('intranetBundle:Default:myhistoricalforms.html.twig',$params);

    }


     public function tasksAction(){
       $tareas = $this->getDoctrine()
                      ->getRepository('intranetBundle:Entity\Tasks')
                      ->findAll();

      //TODO
       if (!$tareas) {throw $this->createNotFoundException('No product found for id '.$id);}

       $params=array('listTasks'=>$tareas);
       return $this->render('intranetBundle:Default:tasks.html.twig',$params);
     }

    public function userManagementAction(){

        $usuario = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users')
                        ->findAll(); #findAll
        //TODO
        if (!$usuario) {throw $this->createNotFoundException('No product found for id '.$id);}
        $params=array('listUsers'=>$usuario);
        return $this->render('intranetBundle:Default:userManagement.html.twig',$params);
    }

      public function settingsAction(){
          $usuario = $this->getDoctrine()->getRepository('intranetBundle:Entity\Users')->findOneByLogin($_SESSION['userLDAP']); #findAll

          //TODO
          if (!$usuario) {throw $this->createNotFoundException('No product found for id '.$id);}

          $params=array('me'=>$usuario);
          return $this->render('intranetBundle:Default:settings.html.twig',$params);
      }

      public function logoutAction(){
        unset($_SESSION["nome"]);
        return $this->render(
          'intranetBundle:Default:index.html.twig'
         );
      }

//TODELETE
       public function translationAction(){
           return $this->render( 'intranetBundle:Default:translate.html.twig'  );
       }

//TODO uses MongoDB
       public function addUserAction(){
         $m = new Model();
         $params0 = array('add' => $m->addUser(),);

         $params = array('listUsers' => $m->getUsers(),);
         return $this->render('intranetBundle:Default:userManagement.html.twig',$params);
       }
//TODO
        public function insertFormAction(){

          //The first thing is to know what type of form is and persist it into the correct tables
          $formtype=$_REQUEST['typeF'];

          switch ($formtype) {
            case 'hours':
                  $numHours=$_REQUEST['numhours'];
                  $date1=$_REQUEST['betw'];
                  $date2=$_REQUEST['and'];
                  return self::insertFormHoursAction($numHours,$date1,$date2,$formtype);
                  break;
            case 'vacation':
                  $date1=$_REQUEST['from'];
                  $date2=$_REQUEST['to'];
                  return self::insertFormVacationAction($date1,$date2,$formtype);
                  break;
            case 'expenses':
                  $date1=$_REQUEST['earlier'];
                  $company=$_REQUEST['company'];
                  $amount=$_REQUEST['amount'];
                  $concept=$_REQUEST['concept'];
                  return self::insertFormExpensesAction($date1,$company,$amount,$concept,$formtype);
                  break;
            case 'businessRequest':
                  $date1=$_REQUEST['from'];
                  $date2=$_REQUEST['to'];
                  $where=$_REQUEST['where'];
                  $congress=$_REQUEST['congress'];
                  $reason=$_REQUEST['reason'];
                  return self::insertFormBusinessAction($date1,$date2,$where,$congress,$reason,$formtype);
                  break;
            default:
                  return new Response("A problem occurred during the submit of your ".$formtype." form");
                  break;
          }
        }

        public function insertFormHoursAction($numHours,$date1,$date2,$formtype){
          //The first thing is persist the Form
          $form = new F_Hours();
          $form->setNumHours($numHours);
          $form->setDate1($date1);
          $form->setDate2($date2);
          //$form->setStatus(null);
          $form->setType($formtype);
          $form->setSend(date("Y-m-d"));

          $em = $this->getDoctrine()->getManager();
          $em->persist($form);
          $em->flush();

         //But it is also needed to insert in the intermediate table
         //login, id_form => I need to take the ID of the last form inserted
         $lastForm = $this->getDoctrine()->getRepository('intranetBundle:Entity\F_Hours')->findBy([], ['id' => 'DESC'], 1);
         if (!$lastForm) {throw $this->createNotFoundException('No news found');}
         //echo $lastForm[0]->getId();
         $usform = new Users_F_Hours();
         $usform->setLogin($_SESSION['userLDAP']);
         $usform->setIdForm($lastForm[0]->getId());

         $em = $this->getDoctrine()->getManager();
         $em->persist($usform);
         $em->flush();
         ################################################################################
         //Redirect the user to where he can see the form already inserted
         return self::myFormsAction();
        }

        public function insertFormVacationAction($date1, $date2, $formtype){
          //The first thing is persist the Form
          $form = new F_Vacation();
          $form->setDate1($date1);
          $form->setDate2($date2);
          //$form->setStatus(null);
          $form->setType($formtype);
          $form->setSend(date("Y-m-d"));

          $em = $this->getDoctrine()->getManager();
          $em->persist($form);
          $em->flush();

         //But it is also needed to insert in the intermediate table
         //login, id_form => I need to take the ID of the last form inserted
         $lastForm = $this->getDoctrine()->getRepository('intranetBundle:Entity\F_Vacation')->findBy([], ['id' => 'DESC'], 1);
         if (!$lastForm) {throw $this->createNotFoundException('No news found');}

         $usform = new Users_F_Vacations();
         $usform->setLogin($_SESSION['userLDAP']);
         $usform->setIdForm($lastForm[0]->getId());


         $em = $this->getDoctrine()->getManager();
         $em->persist($usform);
         $em->flush();
         ################################################################################
         //Redirect the user where he can see the new already inserted
         return self::myFormsAction();
        }

        public function insertFormExpensesAction($date1,$company,$amount,$concept,$formtype){
          //The first thing is persist the Form
          $form = new F_Expenses();
          $form->setDate1($date1);
          $form->setCompany($company);
          $form->setAmount($amount);
          $form->setConcept($concept);
          //$form->setStatus(null);
          $form->setType($formtype);
          $form->setSend(date("Y-m-d"));

          $em = $this->getDoctrine()->getManager();
          $em->persist($form);
          $em->flush();

           //But it is also needed to insert in the intermediate table
           //login, id_form => I need to take the ID of the last form inserted
           $lastForm = $this->getDoctrine()->getRepository('intranetBundle:Entity\F_Expenses')->findBy([], ['id' => 'DESC'], 1);
           if (!$lastForm) {throw $this->createNotFoundException('No news found');}

           $usform = new Users_F_Expenses();
           $usform->setLogin($_SESSION['userLDAP']);
           $usform->setIdForm($lastForm[0]->getId());


           $em = $this->getDoctrine()->getManager();
           $em->persist($usform);
           $em->flush();
           ################################################################################
           //Redirect the user where he can see the new already inserted
           return self::myFormsAction();
        }

        public function insertFormBusinessAction($date1,$date2,$where,$congress,$reason,$formtype){
          //The first thing is persist the Form
          $form = new F_Trip();
          $form->setDate1($date1);
          $form->setDate2($date2);
          $form->setPlace($where);
          $form->setNameCongress($congress);
          $form->setReasons($reason);
          //$form->setStatus(null);
          $form->setType($formtype);
          $form->setSend(date("Y-m-d"));

          $em = $this->getDoctrine()->getManager();
          $em->persist($form);
          $em->flush();

           //But it is also needed to insert in the intermediate table
           //login, id_form => I need to take the ID of the last form inserted
           $lastForm = $this->getDoctrine()->getRepository('intranetBundle:Entity\F_Trip')->findBy([], ['id' => 'DESC'], 1);
           if (!$lastForm) {throw $this->createNotFoundException('No news found');}

           $usform = new Users_F_Trip();
           $usform->setLogin($_SESSION['userLDAP']);
           $usform->setIdForm($lastForm[0]->getId());


           $em = $this->getDoctrine()->getManager();
           $em->persist($usform);
           $em->flush();
           ################################################################################
           //Redirect the user where he can see the new already inserted
           return self::myFormsAction();
        }
#NEWS

       public function createNewAction(){
         return $this->render('intranetBundle:Default:createNewFeed.html.twig');
       }

       public function insertNewAction(){

         //The first thing is persist the New
         $new = new NewFeed();
         $new->setDate(date("Y-m-d"));
         $new->setTime(date("H:i:s"));
         $new->setTitle($_REQUEST['title']);
         $new->setContent($_REQUEST['content']);

         $em = $this->getDoctrine()->getManager();
         $em->persist($new);
         $em->flush();

        //But it is also needed to insert in the intermediate table
        $new2 = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\NewFeed')
                        ->findOneByContent($_REQUEST['content']);
        $i=$new2->getId();

        $usch = new channelnew_feed();
        $usch->setIdNew($i);
        //TODO
        $usch->setName($_REQUEST['channel']);//NEEDS TO ASSURE THAT THE CHANNEL EXISTS=> SOLVED IF CHECKBOX=> SEVERAL INSERTS

        $em = $this->getDoctrine()->getManager();
        $em->persist($usch);
        $em->flush();

        #REDIRIJO AL USUARIO HASTA DONDE ESTABA donde se puede ver la noticia ya insertada
        //Redirect the user where he can see the new already inserted
        $allNews = $this->getDoctrine()->getRepository('intranetBundle:Entity\NewFeed')->findBy([], ['date' => 'DESC', 'time' => 'DESC']);
        if (!$allNews) {throw $this->createNotFoundException('No news found');}
        $params=array('new'=>$allNews);
        return $this->render('intranetBundle:Default:news.html.twig',$params);
       }

        public function editeNewAction(){
          //get the values from the form, search the object in the database and send it to the view
          //Need to get the ID and search in the intermediate table, just to get the Name of the Channel.
          $content=$_REQUEST['content'];

          $new = $this->getDoctrine()
                          ->getRepository('intranetBundle:Entity\NewFeed')
                          ->findOneByContent($content);

          //Si ya tengo el ID, puedo buscar el nombre de su canal en la tabla intermedia => $new->getTitle()
          $i=$new->getId();
          $chan = $this->getDoctrine()
                       ->getRepository('intranetBundle:Entity\channelnew_feed')
                       ->findOneByIdNew($i);

          $params=array('new'=>$new, 'channel'=>$chan);
          return $this->render('intranetBundle:Default:editNew.html.twig', $params);
        }

        public function updateNewAction(){
          if (isset($_POST['update'])) {
              return self::updatNewAction();
          } else if (isset($_POST['delete'])) {
              return self::deletNewAction();
          }
        }

        public function updatNewAction(){
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('intranetBundle:Entity\NewFeed')->find($_REQUEST['id']);

            $product->setDate($_REQUEST['date']);
            $product->setTime($_REQUEST['time']);
            $product->setTitle($_REQUEST['title']);
            $product->setContent($_REQUEST['content']);
            $em->flush();

            $intermediate = $em->getRepository('intranetBundle:Entity\channelnew_feed')->findOneByIdNew($_REQUEST['id']);
            $intermediate->setName($_REQUEST['channel']);
            $em->flush();

            return self::newsAction();
        }

        public function deletNewAction(){
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('intranetBundle:Entity\NewFeed')->find($_REQUEST['id']);
            $em->remove($product);
            $em->flush();

            $intermediate = $em->getRepository('intranetBundle:Entity\channelnew_feed')->findOneByIdNew($_REQUEST['id']);
            $em->remove($intermediate);
            $em->flush();

            return self::newsAction();
        }
#TASKS

        public function createTaskAction(){
          return $this->render('intranetBundle:Default:createNewTask.html.twig');
        }

        public function insertTaskAction(){

          //The first thing is persist the New
          $task = new Tasks();
          $task->setTitle($_REQUEST['title']);
          $task->setContent($_REQUEST['content']);
          $task->setWhoCreate($_SESSION['userLDAP']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($task);
          $em->flush();

         //But it is also needed to insert in the intermediate table
         $task2 = $this->getDoctrine()
                         ->getRepository('intranetBundle:Entity\Tasks')
                         ->findOneByContent($_REQUEST['content']);
         $i=$task2->getId();

         $usta = new userstasks();
         $usta->setIdTask($i);
         //TODO
         $usta->setLogin($_REQUEST['login']);//NEEDS TO ASSURE THAT THE CHANNEL EXISTS=> SOLVED IF CHECKBOX=> SEVERAL INSERTS

         $em = $this->getDoctrine()->getManager();
         $em->persist($usta);
         $em->flush();

         #REDIRIJO AL USUARIO HASTA DONDE ESTABA donde se puede ver la noticia ya insertada
         //Redirect the user where he can see the task already inserted

         return self::tasksAction();
        }

        public function editeTaskAction(){
          //get the values from the form, search the object in the database and send it to the view
          //Need to get the ID and search in the intermediate table, just to get the Name of the Channel.
          $id=$_REQUEST['id'];

          $task = $this->getDoctrine()
                          ->getRepository('intranetBundle:Entity\Tasks')
                          ->findOneById($id);

           //Once had the ID, I can look for the users assigned in the intermediate table
           $users = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\userstasks')
                        ->findBy(['idTask'=>$id]);

           $params=array('task'=>$task,'users'=>$users);
           return $this->render('intranetBundle:Default:editTask.html.twig', $params);
        }

        public function updateTaskAction(){
          if (isset($_POST['update'])) {
              return self::updatTaskAction();
          } else if (isset($_POST['delete'])) {
              return self::deletTaskAction();
          }
        }

        public function updatTaskAction(){
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('intranetBundle:Entity\Tasks')->find($_REQUEST['id']);

            $product->setTitle($_REQUEST['title']);
            $product->setContent($_REQUEST['content']);
            $product->setWhoCreate($_REQUEST['whocreate']);
            $em->flush();
            //TODO HAY QUE ACTUALIZAR LOS USUARIOS ASIGNADOS A LA TAREA DE LA TABLA INTERMEDIA
            /*$intermediate = $em->getRepository('intranetBundle:Entity\userstasks')->findOneById($_REQUEST['id']);
            $intermediate->setName($_REQUEST['channel']);
            $em->flush();
            */
            return self::tasksAction();
        }

        public function deletTaskAction(){
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('intranetBundle:Entity\Tasks')->find($_REQUEST['id']);
            $em->remove($product);
            $em->flush();

            $intermediate = $em->getRepository('intranetBundle:Entity\userstasks')->findBy(['idTask' => $_REQUEST['id']]);

            for ($i=0; $i < sizeof($intermediate); $i++) {
                          $em->remove($intermediate[$i]);
                          $em->flush();
            }

            return self::tasksAction();
        }

/*
                  INSERTA USUARIO
    public function usarDoctrineAction(){
        $usuario = new Users();
        $usuario->setLogin('gram1i');
        $usuario->setNameU('Gabriel');
        $usuario->setSurnameU('Ramos Suan');
        $usuario->setLang('es');
        $usuario->setRol('admin');
        $usuario->setPhoto('no tengo');
        $usuario->setOnboard(1);

        $em = $this->getDoctrine()->getManager();
        $em->persist($usuario);
        $em->flush();

        return new Response('Created user: login '.$usuario->getLogin().", surname ".$usuario->getSurnameU());
    }
*/

//TODELETE
    public function usarDoctrineAction(){
      $usuario = $this->getDoctrine()->getRepository('intranetBundle:Entity\Users')->findOneByNameU('Gabriel'); #findAll
      $params=array('user'=>$usuario);

      return $this->render('intranetBundle:Default:bd.html.twig', $params);
    }


    #*********************************************THE BOOK ROOM PART, NOT AVAILABLE *********************************************#
       public function bookRoomAction(){
         //Aquí llamada a Ajax para que me devuelva todas las fechas y habitaciones

         //Para una fecha dada, return las horas ocupadasd de cada habitación
         $m = new Model();
         $params = array('listrooms' => $m->getRooms(),);

            return $this->render(
               'intranetBundle:Default:bookRoom.html.twig',
               $params
              );
      }

        public function bookAction(){
          if (!isset($_GET['fecha'])) {
           throw new Exception('Página no encontrada');
           }
             $date = $_GET['fecha'];
             $m = new Model();

             //Devuelve las reservas de la fecha que viene del formulario del calendario
             //$params = array('listrooms2' => $m->getBooks($date),);

            $roomsFecha = array('listrooms2' => $m->getRoomsFecha($date),);

             return $this->render(
                'intranetBundle:Default:book.html.twig',
                $roomsFecha//, $date
               );
        }


}
