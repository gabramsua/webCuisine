<?php
namespace intranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use intranetBundle\Model\Model;
use intranetBundle\Entity\Entity\Users;
use intranetBundle\Entity\Entity\Tasks;
use intranetBundle\Entity\Entity\NewFeed;
use intranetBundle\Entity\Entity\userschannel;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

  public function loginAction(){
    $ldaprdn  = $_POST['login'];     // ldap rdn or dn
    $ldappass =$_POST['pass'];

    $m = new Model();
    $params = array('user' => $m->login($ldaprdn,$ldappass),);
//var_dump($params);
    $userLDAP=json_decode(json_encode($params), true);
    $logged=$userLDAP['user'][0]['samaccountname'][0];
    $rol=$userLDAP['user'][0]['memberof'][0];

$_SESSION['userLDAP_']=$ldaprdn; //NAME
$_SESSION['userLDAP']=$logged;  //LOGIN
$_SESSION['passLDAP']=$ldappass;//PASS
$_SESSION['rol']=$rol;          //ROL
    /*
        Hago una llamada al método con los valores que recojo del formulario. Me devuelve MI usuario.
        Lo reenvío con esos campos y ya puedo filtrar su idioma, y vámono!!!!!
    */

    //$user = array('user' => $m->getSettings(),);

    #$userWeb=json_decode(json_encode($user), true)['user'][0];
    #echo $userWeb['lang'];

    $user = $this->getDoctrine()
                    ->getRepository('intranetBundle:Entity\Users')
                    ->findOneByLogin($_SESSION['userLDAP']); #findAll

    if (!$user) {throw $this->createNotFoundException('No product found for id '.$id);}

    $params=array('user'=>$user);
    //return $usuario;
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
    $allNews = $this->getDoctrine()
                    ->getRepository('intranetBundle:Entity\NewFeed')
                    ->findBy([], ['date' => 'DESC', 'time' => 'DESC']); #findAll

    if (!$allNews) {throw $this->createNotFoundException('No news found');}

    $params=array('new'=>$allNews);
    //echo gettype($params['new'][0]->getDate());


    return $this->render('intranetBundle:Default:news.html.twig',$params);
    }

    public function incomingFormsAction(){
            $m = new Model();
            $params = array(
            'listIncomingForms' => $m->getIncomingForms(),
          );
         return $this->render(
            'intranetBundle:Default:incomingForms.html.twig',
            $params
           );


         $allNews = $this->getDoctrine()
                         ->getRepository('intranetBundle:Entity\NewFeed')
                         ->findAll(); #findAll

         if (!$allNews) {throw $this->createNotFoundException('No news found');}

         $params=array('new'=>$allNews);
         return $this->render('intranetBundle:Default:news.html.twig',$params);
     }

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
       $tareas = $this->getDoctrine()->getRepository('intranetBundle:Entity\Tasks')->findAll();
       
       if (!$tareas) {throw $this->createNotFoundException('No product found for id '.$id);}
       $params=array('listTasks'=>$tareas);

          return $this->render('intranetBundle:Default:tasks.html.twig',$params);
    }

    public function userManagementAction(){

        $usuario = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users')
                        ->findAll(); #findAll

        if (!$usuario) {throw $this->createNotFoundException('No product found for id '.$id);}
        $params=array('listUsers'=>$usuario);
        return $this->render('intranetBundle:Default:userManagement.html.twig',$usuario);
      }

      public function settingsAction(){
          $usuario = $this->getDoctrine()->getRepository('intranetBundle:Entity\Users')->findOneByLogin($_SESSION['userLDAP']); #findAll

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

       public function translationAction(){
           return $this->render( 'intranetBundle:Default:translate.html.twig'  );
       }

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

         #PRIMERO INSERTO LA NOTICIA NUEVA

         $new = new NewFeed(); //date, hour, title, content
         $new->setDate(date("Y-m-d"));
         $new->setTime(date("H:i:s"));
         $new->setTitle($_REQUEST['title']);
         $new->setContent($_REQUEST['content']);

         $em = $this->getDoctrine()->getManager();
         $em->persist($new);
         $em->flush();

        #TAMBIEN HAY QUE HACER LA INSERCION EN LA TABLA INTERMEDIA

        $usch = new userschannel();
        $usch->setLogin($_SESSION['userLDAP']);
        $usch->setName($_REQUEST['channel']);//HAY QUE ASEGURARSE DE QUE EL CANAL EXISTA=> SOLVED IF CHECKBOX=> SEVERAL INSERTS

        $em = $this->getDoctrine()->getManager();
        $em->persist($usch);
        $em->flush();

        #REDIRIJO AL USUARIO HASTA DONDE ESTABA donde se puede ver la noticia ya insertada
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
public function usarDoctrineAction(){
    $usuario = $this->getDoctrine()->getRepository('intranetBundle:Entity\Users')->findOneByNameU('Ignacio'); #findAll
  $params=array('user'=>$usuario);
    return $this->render('intranetBundle:Default:bd.html.twig', $params);
    }


    #*********************************************THE BOOK ROOM PART, NOT AVAILABLE *********************************************
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
