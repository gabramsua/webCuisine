<?php
namespace intranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use intranetBundle\Model\Model;
use intranetBundle\Entity\Entity\NewFeed;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller{

  public function newsAction(){

      $news = $this->getDoctrine()
                      ->getRepository('intranetBundle:Entity\NewFeed')
                      ->findAll();

      //if (!$user) {throw $this->createNotFoundException('No product found for id '.$id);}
      $params=array('new'=>$news);
      return $this->render('::news.html.twig', $params);
   }

  }
