<?php

 namespace intranetBundle\Model;
 use intranetBundle\Entity\Entity\Users;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Bundle\FrameworkBundle\Controller\Controller;

 class Model extends Controller{

   protected $conexion;

   public function login($ldaprdn,$ldappass){
      $ldapDomainName = 'cuisine.lan';
      // conexión al servidor LDAP
      $ldapconn = ldap_connect($ldapDomainName, 3268) or die("Could not connect to LDAP server.");
      if ($ldapconn) {
          // realizando la autenticación
          $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);
          // verificación del enlace
          if ($ldapbind) {
              //echo "<b>LDAP bind successful...</b><br><br>";
          } else {echo "LDAP bind failed...";}
      }else{echo "no connection =(";}

      $baseDN ="dc=cuisine, dc=lan";
      $query = "(cn=".$ldaprdn.")";
      // limit attributes we want to look for
      $attributes_ad = array("givenName","objectClass","cn","givenName","sn","mail","co","memberOf","sAMAccountName");
      $result = ldap_search($ldapconn, $baseDN, $query, $attributes_ad) or die ("Error in search query");
      // put search results into the array ($conn variable is defined in the included 'ad_con.php')
      $user = ldap_get_entries($ldapconn, $result);
      return $user;
      ldap_close($ldapconn);
   }

   public function __construct() {
         $mongo = new \MongoDB\Driver\Manager("mongodb://localhost:27017");
         if (!$mongo) {
             die('No ha sido posible realizar la conexión con la base de datos: ');
         }
         $this->conexion = $mongo;
     }

      public function getRooms() {
        //Aqui el filtro es que el usuario sea BÜO => TO DO
         $filter = ['number' => array('$gt' => 0)];

         $query = new \MongoDB\Driver\Query($filter);
         $rooms = $this->conexion->executeQuery('webCuisine.rooms', $query); // $mongo contains the connection object to MongoDB
         return  $rooms->toArray();


     }
     public function getRoomsFecha($date){
       //Aqui el filtro es que el usuario sea BÜO => TO DO
        $filter = ['data.date' => $date];

        $query = new \MongoDB\Driver\Query($filter);
        $books = $this->conexion->executeQuery('webCuisine.books', $query); // $mongo contains the connection object to MongoDB
        return  $books->toArray();//Este es el array con las reservas de ese dia


    }

    public function giveNews() {
        //Aqui el filtro es que el usuario sea BÜO
         $filter = ['login' =>  $_SESSION['userLDAP']];

         $query = new \MongoDB\Driver\Query($filter);
         $new = $this->conexion->executeQuery('webCuisine.News', $query); // $mongo contains the connection object to MongoDB
         $arrayNews=$new->toArray();

         return $arrayNews;
     }

     public function getIncomingForms() {
         //Aqui el filtro es que el usuario sea BÜO => TO DO
          $filter = ['login' => $_SESSION['userLDAP']];

          $query = new \MongoDB\Driver\Query($filter);
          $forms = $this->conexion->executeQuery('webCuisine.Forms', $query); // $mongo contains the connection object to MongoDB
          return  $forms->toArray();


      }

      public function giveOldForms() {
          //Aqui el filtro es que el usuario sea BÜO
           $filter = ['read' => 1];

           $query = new \MongoDB\Driver\Query($filter);
           $new = $this->conexion->executeQuery('webCuisine.Forms', $query); // $mongo contains the connection object to MongoDB
           $arrayNews=$new->toArray();

           return $arrayNews;
       }

       public function getTasks() {
           //Aqui el filtro es que el usuario sea BÜO
            $filter = ['users' =>  array('$ne' => null)];

            $query = new \MongoDB\Driver\Query($filter);
            $new = $this->conexion->executeQuery('webCuisine.Tasks', $query); // $mongo contains the connection object to MongoDB
            $arrayNews=$new->toArray();

            return $arrayNews;
        }

        public function getUsers() {
            //Aqui el filtro es que el usuario sea BÜO
             $filter = ['login' => array('$ne' => null)];

             $query = new \MongoDB\Driver\Query($filter);
             $new = $this->conexion->executeQuery('webCuisine.Users', $query); // $mongo contains the connection object to MongoDB
             $arrayNews=$new->toArray();

             return $arrayNews;

/*

             $usuarios = $this->getDoctrine()
                             ->getRepository('intranetBundle:Entity\Users')
                             ->findAll(); #findAll

             if (!$usuarios) {throw $this->createNotFoundException('No product found for id '.$id);}

            #$params=array('user'=>$usuario);
             return $usuarios;*/



         }

         public function getSettings() {
              $filter = ['login' => $_SESSION['userLDAP']];

              $query = new \MongoDB\Driver\Query($filter);
              $new = $this->conexion->executeQuery('webCuisine.Users', $query); // $mongo contains the connection object to MongoDB
              #$arrayNews=$new->toArray();

              return iterator_to_array($new);

/*
              $usuario = $this->getDoctrine()
                              ->getRepository('intranetBundle:Entity\Users')
                              ->findOneByLogin($_SESSION['userLDAP']); #findAll

              if (!$usuario) {throw $this->createNotFoundException('No product found for id '.$id);}

              #$params=array('user'=>$usuario);

              return $usuario;*/
          }

          public function addUser(){
            $conn = new \MongoDB\Driver\Manager("mongodb://localhost:27017");
            $bulk = new \MongoDB\Driver\BulkWrite;
            //registro para insertar
            $document = ["name" => "Carlos","surname" => "Pérez","login" => "carpediem","rol" => "user",
                         "photo" => "not yet","notifications" => "off","lang" => "es","tel" => "000"];

            $bulk->insert($document);
            return $conn->executeBulkWrite("webCuisine.Users", $bulk);
          }

          public function addNew($user,$login,$send,$title, $content){
            $conn = new \MongoDB\Driver\Manager("mongodb://localhost:27017");
            $bulk = new \MongoDB\Driver\BulkWrite;
            //registro para insertar
            $document = ["user" => $user,"login" => $login,"send" => $send,
                         "title" => $title,"content" => $content];

            $bulk->insert($document);
            return $conn->executeBulkWrite("webCuisine.Users", $bulk);
          }
          public function dimeRol(){
            $usuario = $this->getDoctrine()->getRepository('intranetBundle:Entity\Users')->findOneByLogin('gram1i');

            return $usuario;
          }

          public function getSplitRole($rol){
            return explode("=",explode(",",$rol)[0]);

          }

}
