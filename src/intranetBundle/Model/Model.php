<?php

 namespace intranetBundle\Model;
 use intranetBundle\Entity\Entity\Users;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Bundle\FrameworkBundle\Controller\Controller;

 class Model extends Controller{

   protected $conexion;
   protected $n;
   protected $p;

   public function login($ldaprdn,$ldappass){
      $GLOBALS['n']=$ldaprdn;
      $GLOBALS['p']=$ldappass;
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

   public function getSplitRole($rol){
      //Divide the whole thing in strings, first with comas, then with equals signs
      //CN=ROL, OU=cuisine, DC=cuisine, DC=lan
      //In this way I am always taking the rol after the first CN, So I suppose it is the same for developers, or admins, or buos or whatever
      return explode("=",explode(",",$rol)[0]);
   }

}
