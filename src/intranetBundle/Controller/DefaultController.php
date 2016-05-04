<?php
namespace intranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use intranetBundle\Model\Model;
use intranetBundle\Entity\Entity\Users;
use intranetBundle\Entity\Entity\Tasks;
use intranetBundle\Entity\Entity\NewFeed;
use intranetBundle\Entity\Entity\userschannel;
use intranetBundle\Entity\Entity\F_Expenses;
use intranetBundle\Entity\Entity\F_Hours;
use intranetBundle\Entity\Entity\F_Trip;
use intranetBundle\Entity\Entity\F_Vacation;
use intranetBundle\Entity\Entity\Users_F_Hours;
use intranetBundle\Entity\Entity\Users_F_Vacations;
use intranetBundle\Entity\Entity\Users_F_Expenses;
use intranetBundle\Entity\Entity\Users_F_Trip;
use Symfony\Component\HttpFoundation\Response;

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

        $params=array('new'=>$allNews);
        return $this->render('intranetBundle:Default:news.html.twig',$params);
    }

    //TODO uses MongoDB
    public function incomingFormsAction(){
            $m = new Model();
            $params = array(
            'listIncomingForms' => $m->getIncomingForms(),
          );
         return $this->render(
            'intranetBundle:Default:incomingForms.html.twig',
            $params
           );
     }

     //TODO uses MongoDB
     public function oldFormsAction(){
             $m = new Model();
             $params = array(
             'listOldForms' => $m->giveOldForms(),
           );
          return $this->render(
             'intranetBundle:Default:oldForms.html.twig',
             $params
            );
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
        return $this->render('intranetBundle:Default:userManagement.html.twig',$usuario);
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
        $usch = new userschannel();
        $usch->setLogin($_SESSION['userLDAP']);
        //TODO
        $usch->setName($_REQUEST['channel']);//NEEDS TO ASSURE THAT THE CHANNEL EXISTS=> SOLVED IF CHECKBOX=> SEVERAL INSERTS

        $em = $this->getDoctrine()->getManager();
        $em->persist($usch);
        $em->flush();

        #REDIRIJO AL USUARIO HASTA DONDE ESTABA donde se puede ver la noticia ya insertada
        //Redirect the user where he can see the new already inserted
        $allNews = $this->getDoctrine()->getRepository('intranetBundle:Entity\NewFeed')->findAll();
        if (!$allNews) {throw $this->createNotFoundException('No news found');}
        $params=array('new'=>$allNews);
        return $this->render('intranetBundle:Default:news.html.twig',$params);
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
          $form = new F_Hours();//numHours, date1, date2, status, type, send
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
         $usform = new Users_F_Hours();//login, id_form => para coger el id  del formulario necesito hacer un método aparte... //TODO
         $usform->setLogin($_SESSION['userLDAP']);
         $usform->setIdForm(3);


         $em = $this->getDoctrine()->getManager();
         $em->persist($usform);
         $em->flush();
         ################################################################################
         //Redirect the user to where he can see the form already inserted
         $allNews = $this->getDoctrine()->getRepository('intranetBundle:Entity\NewFeed')->findAll();
         if (!$allNews) {throw $this->createNotFoundException('No news found');}
         $params=array('new'=>$allNews);
         return $this->render('intranetBundle:Default:news.html.twig',$params);
        }

        public function insertFormVacationAction($date1, $date2, $formtype){
          //The first thing is persist the Form
          $form = new F_Vacation();//date1, date2, status, type, send
          $form->setDate1($date1);
          $form->setDate2($date2);
          //$form->setStatus(null);
          $form->setType($formtype);
          $form->setSend(date("Y-m-d"));

          $em = $this->getDoctrine()->getManager();
          $em->persist($form);
          $em->flush();

         //But it is also needed to insert in the intermediate table
         $usform = new Users_F_Vacations();//login, id_form => para coger el id  del formulario necesito hacer un método aparte... //TODO
         $usform->setLogin($_SESSION['userLDAP']);
         $usform->setIdForm(2);


         $em = $this->getDoctrine()->getManager();
         $em->persist($usform);
         $em->flush();
         ################################################################################
         #REDIRIJO AL USUARIO HASTA DONDE ESTABA donde se puede ver la noticia ya insertada
         //Redirect the user where he can see the new already inserted
         $allNews = $this->getDoctrine()->getRepository('intranetBundle:Entity\NewFeed')->findAll();
         if (!$allNews) {throw $this->createNotFoundException('No news found');}
         $params=array('new'=>$allNews);
         return $this->render('intranetBundle:Default:news.html.twig',$params);
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
           $usform = new Users_F_Expenses();//login, id_form => para coger el id  del formulario necesito hacer un método aparte... //TODO
           $usform->setLogin($_SESSION['userLDAP']);
           $usform->setIdForm(5);


           $em = $this->getDoctrine()->getManager();
           $em->persist($usform);
           $em->flush();
           ################################################################################
           #REDIRIJO AL USUARIO HASTA DONDE ESTABA donde se puede ver la noticia ya insertada
           //Redirect the user where he can see the new already inserted
           $allNews = $this->getDoctrine()->getRepository('intranetBundle:Entity\NewFeed')->findAll();
           if (!$allNews) {throw $this->createNotFoundException('No news found');}
           $params=array('new'=>$allNews);
           return $this->render('intranetBundle:Default:news.html.twig',$params);
        }

        public function insertFormBusinessAction($date1,$date2,$where,$congress,$reason,$formtype){
          //The first thing is persist the Form
          $form = new F_Trip();//date1, date2, status, type, send
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
           $usform = new Users_F_Trip();//login, id_form => para coger el id  del formulario necesito hacer un método aparte... //TODO
           $usform->setLogin($_SESSION['userLDAP']);
           $usform->setIdForm(2);


           $em = $this->getDoctrine()->getManager();
           $em->persist($usform);
           $em->flush();
           ################################################################################
           #REDIRIJO AL USUARIO HASTA DONDE ESTABA donde se puede ver la noticia ya insertada
           //Redirect the user where he can see the new already inserted
           $allNews = $this->getDoctrine()->getRepository('intranetBundle:Entity\NewFeed')->findAll();
           if (!$allNews) {throw $this->createNotFoundException('No news found');}
           $params=array('new'=>$allNews);
           return $this->render('intranetBundle:Default:news.html.twig',$params);
        }




/*                INSERTA TAREA
  	public function usarDoctrineAction(){
        $tarea = new Tasks();
        $tarea->setTitle('Nombre Tarea');
        $tarea->setContent('Se trata de hacer la intranet de webCuisine');
        $tarea->setWhoCreate('Sven Bubblies');

        $em = $this->getDoctrine()->getManager();
        $em->persist($tarea);
        $em->flush();

        return new Response('Created task id '.$tarea->getId()." con el contenido ".$tarea->getContent());
  	}
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
