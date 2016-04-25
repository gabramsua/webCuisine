<?php
namespace intranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use intranetBundle\Model\Model;

class DefaultController extends Controller
{

  public function loginAction(){
    $ldaprdn  = $_POST['login'];     // ldap rdn or dn
    $ldappass =$_POST['pass'];

    $m = new Model();
    $params = array('user' => $m->login($ldaprdn,$ldappass),);
    /*
        Hago una llamada al método con los valores que recojo del formulario. Me devuelve MI usuario.
        Lo reenvío con esos campos y ya puedo filtrar su idioma, y vámono!!!!!
    */
    //$session = $this->getRequest()->getSession();

    $me = new Model();
    $user = array('user' => $me->getSettings(),);
    $userWeb=json_decode(json_encode($user), true)['user'][0];
    //echo $userWeb['lang'];


    return $this->render('intranetBundle:Default:landinga.html.twig', $user);
   }

  public function indexAction(){
    $me = new Model();
    $user = array('user' => $me->getSettings(),);
    $userWeb=json_decode(json_encode($user), true)['user'][0];
    /*$this->get('session')->set('_locale', $userWeb['lang']);*/

    return $this->render('intranetBundle:Default:landing.html.twig'
         );
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
           $params = array(
           'listUsers' => $m->getUsers(),
         );
        return $this->render(
           'intranetBundle:Default:userManagement.html.twig',
           $params
          );
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



}
