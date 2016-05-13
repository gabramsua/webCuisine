<?php

/* intranetBundle:Default:newuser.html.twig */
class __TwigTemplate_88b397cffa0d409a86d20861b7738d804dd2d656343d03385f3c39229c40e895 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:newuser.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "intranetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1455a4ba8c080acf9a5f2a9d21a82a2e9b248c9a6d87951b1f534afd4c7c08c8 = $this->env->getExtension("native_profiler");
        $__internal_1455a4ba8c080acf9a5f2a9d21a82a2e9b248c9a6d87951b1f534afd4c7c08c8->enter($__internal_1455a4ba8c080acf9a5f2a9d21a82a2e9b248c9a6d87951b1f534afd4c7c08c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:newuser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1455a4ba8c080acf9a5f2a9d21a82a2e9b248c9a6d87951b1f534afd4c7c08c8->leave($__internal_1455a4ba8c080acf9a5f2a9d21a82a2e9b248c9a6d87951b1f534afd4c7c08c8_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_87cbc2b35157a7ab7e430bf2d28a30e1892b24f7ea0ca4f1c87e18e212a5562f = $this->env->getExtension("native_profiler");
        $__internal_87cbc2b35157a7ab7e430bf2d28a30e1892b24f7ea0ca4f1c87e18e212a5562f->enter($__internal_87cbc2b35157a7ab7e430bf2d28a30e1892b24f7ea0ca4f1c87e18e212a5562f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_nonExistingUser");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">

      Login: <input type='text' name=\"myLogin\" id=\"myLogin\" value=\"\" class=\"form-control\">
      Nombre: <input type='text' name=\"myName\" id=\"myName\" value=\"\" class=\"form-control\">
      Apellidos: <input type='text' id=\"mySurname\"name=\"mySurname\" value=\"\" class=\"form-control\"><BR>
      <label>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Language", array(), "messages");
        echo "</label>
            <select class=\"form-control\" name=\"myLang\" >
              <option value=\"es\">ES</option>
              <option value=\"en\">EN</option>
              <option value=\"fr\">FR</option>
              <option value=\"de\">DE</option>
            </select>
      <BR>

      <label>";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Photo", array(), "messages");
        echo "</label><input type='file' id=\"myPhoto\"name=\"myPhoto\"><img src=\"\"><BR>
      <label class=\"radio\">";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("Notifications", array(), "messages");
        echo "</label>
                                  <input type='radio' id=\"myNotification\" name=\"myNotifications\" value=\"1\"><label for=\"myNotification\">ON</label>
                                  <input type='radio' id=\"myNotifications\" name=\"myNotifications\" value=\"0\"   checked ><label for=\"myNotifications\">OFF</label><br>

                                  <input type=\"submit\" value=\"";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("new", array(), "messages");
        echo "\">
                                  <input type=\"hidden\" name=\"webCuisine\" value=\"test\" >
 </form>

";
        
        $__internal_87cbc2b35157a7ab7e430bf2d28a30e1892b24f7ea0ca4f1c87e18e212a5562f->leave($__internal_87cbc2b35157a7ab7e430bf2d28a30e1892b24f7ea0ca4f1c87e18e212a5562f_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:newuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  67 => 20,  63 => 19,  51 => 10,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* <form action="{{ path('intranet_nonExistingUser') }}" method="post" style="border: 1px solid;width: 500px;">*/
/* */
/*       Login: <input type='text' name="myLogin" id="myLogin" value="" class="form-control">*/
/*       Nombre: <input type='text' name="myName" id="myName" value="" class="form-control">*/
/*       Apellidos: <input type='text' id="mySurname"name="mySurname" value="" class="form-control"><BR>*/
/*       <label>{% trans %}Language{% endtrans %}</label>*/
/*             <select class="form-control" name="myLang" >*/
/*               <option value="es">ES</option>*/
/*               <option value="en">EN</option>*/
/*               <option value="fr">FR</option>*/
/*               <option value="de">DE</option>*/
/*             </select>*/
/*       <BR>*/
/* */
/*       <label>{% trans %}Photo{% endtrans %}</label><input type='file' id="myPhoto"name="myPhoto"><img src=""><BR>*/
/*       <label class="radio">{% trans %}Notifications{% endtrans %}</label>*/
/*                                   <input type='radio' id="myNotification" name="myNotifications" value="1"><label for="myNotification">ON</label>*/
/*                                   <input type='radio' id="myNotifications" name="myNotifications" value="0"   checked ><label for="myNotifications">OFF</label><br>*/
/* */
/*                                   <input type="submit" value="{% trans %}new{% endtrans %}">*/
/*                                   <input type="hidden" name="webCuisine" value="test" >*/
/*  </form>*/
/* */
/* {% endblock %}*/
/* */
