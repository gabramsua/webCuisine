<?php
namespace intranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use intranetBundle\Model\Model;
use intranetBundle\Entity\Entity\Users;
use intranetBundle\Entity\Entity\Tasks;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

  public function loginAction(){
    $ldaprdn  = $_POST['login'];     // ldap rdn or dn
    $ldappass =$_POST['pass'];

    $m = new Model();
    $params = array('user' => $m->login($ldaprdn,$ldappass),);

    $userLDAP=json_decode(json_encode($params), true);
    $logged=$userLDAP['user'][0]['samaccountname'][0];
    //echo "<br>".$logged;
$_SESSION['userLDAP_']=$ldaprdn; //NAME
$_SESSION['userLDAP']=$logged;  //LOGIN
$_SESSION['passLDAP']=$ldappass;//PASS
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

  public function formVacationsAction(){
       return $this->render('intranetBundle:Default:formVacations.html.twig');
   }
   public function formRequestAction(){
       return $this->render('intranetBundle:Default:formRequest.html.twig');
   }

   public function formExpensesAction(){
        return $this->render('intranetBundle:Default:formExpenses.html.twig');
   }

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

    public function newsAction(){
         $m = new Model();
         $params = array(
         'listnews' => $m->giveNews(),
       );
         return $this->render(
            'intranetBundle:Default:news.html.twig',
            $params
           );
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
             $m = new Model();
             $params = array(
             'listTasks' => $m->getTasks(),
           );
          return $this->render(
             'intranetBundle:Default:tasks.html.twig',
             $params
            );
    }

    public function userManagementAction(){
        $m = new Model();
        /*$params = array('listUsers' => $m->getUsers(),'listLDAP' => $m->getUsersLDAP());
        $params2 = array('listLDAP' => $m->getUsersLDAP());
        $userLDAP=json_decode(json_encode($params2), true);*/
        //*echo $userLDAP['user'][0]['samaccountname'][0];

        $usuario = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users')
                        ->findAll(); #findAll

        if (!$usuario) {throw $this->createNotFoundException('No product found for id '.$id);}

        $params=array('listUsers'=>$usuario,'listLDAP' => $m->getUsersLDAP());
        return $this->render('intranetBundle:Default:userManagement.html.twig',$params);
      }

      public function settingsAction(){
              $m = new Model();
              $params = array(
              'listSettings' => $m->getSettings(),
            );
           return $this->render(
              'intranetBundle:Default:settings.html.twig',
              $params
             );
       }

      public function logoutAction(){
        unset($_SESSION["nome"]);
        return $this->render(
          'intranetBundle:Default:index.html.twig'
         );
       }

       public function translationAction(){
           return $this->render(
             'intranetBundle:Default:translate.html.twig'
            );
       }

       public function addUserAction(){
         $m = new Model();
         $params0 = array('add' => $m->addUser(),);

         $params = array('listUsers' => $m->getUsers(),);
         return $this->render('intranetBundle:Default:userManagement.html.twig',$params);
       }

       public function createNewAction(){
         $m = new Model();
         #$params0 = array('add' => $m->addUser(),);

         #$params = array('listUsers' => $m->getUsers(),);
         return $this->render('intranetBundle:Default:createNewFeed.html.twig');
       }

       public function insertNewAction(){

         #PRIMERO INSERTO LA NOTICIA NUEVA Y LUEGO REDIRIJO AL USUARIO HASTA DONDE ESTABA,
         #donde se puede ver la noticia ya insertada

         $m = new Model();
         //$user,$login,$send,$title, $content
         $params0 = array('add' => $m->addNew($_SESSION['userLDAP_'],$_SESSION['userLDAP'],date("Y-m-d H:i:s"),$_POST['title'], $_POST['content']),);
         $params = array('listnews' => $m->giveNews(),);
         return $this->render('intranetBundle:Default:news.html.twig',$params);
       }
#usarDoctrine


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
    $usuario = $this->getDoctrine()
        ->getRepository('intranetBundle:Entity\Users')
        ->findOneByLogin('gram1i'); #findAll

    if (!$usuario) {
        throw $this->createNotFoundException(
            'No product found for id '.$id
        );
      }
      $params=array('user'=>$usuario);
    return $this->render('intranetBundle:Default:bd.html.twig', $params);
    }




}
