<?php
namespace intranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use intranetBundle\Model\Model;

class MenuController extends Controller{

  public function menuAction(){

      $me = new Model();
      $user = array('user' => $me->getSettings(),);
      $userWeb=json_decode(json_encode($user), true)['user'][0];

      return $this->render('::menu.html.twig', $user);
   }

  }
