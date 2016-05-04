<?php

/* intranetBundle:Error:error_login.html.twig */
class __TwigTemplate_7e3dc4726dfc096b7a40a3f7792d43ea3ad84fbe88e03721c97ccd1b50a16405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout2.html.twig", "intranetBundle:Error:error_login.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "intranetBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a45704d48f36513b851e3310c5dfdc195cc453e9b6602fcd0c3bb2720f06dfdf = $this->env->getExtension("native_profiler");
        $__internal_a45704d48f36513b851e3310c5dfdc195cc453e9b6602fcd0c3bb2720f06dfdf->enter($__internal_a45704d48f36513b851e3310c5dfdc195cc453e9b6602fcd0c3bb2720f06dfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Error:error_login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a45704d48f36513b851e3310c5dfdc195cc453e9b6602fcd0c3bb2720f06dfdf->leave($__internal_a45704d48f36513b851e3310c5dfdc195cc453e9b6602fcd0c3bb2720f06dfdf_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1b77a8b18d3cf5a760e54f68310222a4505792e2b56e4398177bacd7c50749d6 = $this->env->getExtension("native_profiler");
        $__internal_1b77a8b18d3cf5a760e54f68310222a4505792e2b56e4398177bacd7c50749d6->enter($__internal_1b77a8b18d3cf5a760e54f68310222a4505792e2b56e4398177bacd7c50749d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "Si has llegado aquí es porque no existes compay.
<br><br>
Voy a crearte en la BD.
<br><br>

LOGIN; NOMBRE; APELLIDOS; LANGUE; ROL; FOTO; notifications

<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("intranet_nonExistingUser");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
      <label class=\"control-label\">Hola ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["surname"]) ? $context["surname"] : $this->getContext($context, "surname")), "html", null, true);
        echo "</label>

      Login: <input type='text' name=\"myLogin\" id=\"myLogin\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
        echo "\" class=\"form-control\" readonly>
      Nombre: <input type='text' name=\"myName\" id=\"myName\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"form-control\" readonly>
      Apellidos: <input type='text' id=\"mySurname\"name=\"mySurname\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["surname"]) ? $context["surname"] : $this->getContext($context, "surname")), "html", null, true);
        echo "\" class=\"form-control\" readonly><BR>
      <label>";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("Language", array(), "messages");
        echo "</label>
            <select class=\"form-control\" name=\"myLang\">
              <option value=\"es\">ES</option>
              <option value=\"en\">EN</option>
              <option value=\"fr\">FR</option>
              <option value=\"de\">DE</option>
            </select>
      <BR>

      <label>";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("Photo", array(), "messages");
        echo "</label><input type='file' id=\"myPhoto\"name=\"myPhoto\"><img src=\"\"><BR>
      <label class=\"radio\">";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Notifications", array(), "messages");
        echo "</label><input type='radio' id=\"myNotification\" name=\"myNotifications\" value=\"1\"  ><label for=\"myNotification\">ON</label>
                                  <input type='radio' id=\"myNotifications\" name=\"myNotifications\" value=\"0\"   checked ><label for=\"myNotifications\">OFF</label><br>
                                  <input type=\"submit\" value=\"";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("Modify", array(), "messages");
        echo "\">
 </form>

";
        
        $__internal_1b77a8b18d3cf5a760e54f68310222a4505792e2b56e4398177bacd7c50749d6->leave($__internal_1b77a8b18d3cf5a760e54f68310222a4505792e2b56e4398177bacd7c50749d6_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Error:error_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  88 => 27,  84 => 26,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout2.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* Si has llegado aquí es porque no existes compay.*/
/* <br><br>*/
/* Voy a crearte en la BD.*/
/* <br><br>*/
/* */
/* LOGIN; NOMBRE; APELLIDOS; LANGUE; ROL; FOTO; notifications*/
/* */
/* <form action="{{ path('intranet_nonExistingUser') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*       <label class="control-label">Hola {{name}} {{ surname }}</label>*/
/* */
/*       Login: <input type='text' name="myLogin" id="myLogin" value="{{login}}" class="form-control" readonly>*/
/*       Nombre: <input type='text' name="myName" id="myName" value="{{name}}" class="form-control" readonly>*/
/*       Apellidos: <input type='text' id="mySurname"name="mySurname" value="{{surname}}" class="form-control" readonly><BR>*/
/*       <label>{% trans %}Language{% endtrans %}</label>*/
/*             <select class="form-control" name="myLang">*/
/*               <option value="es">ES</option>*/
/*               <option value="en">EN</option>*/
/*               <option value="fr">FR</option>*/
/*               <option value="de">DE</option>*/
/*             </select>*/
/*       <BR>*/
/* */
/*       <label>{% trans %}Photo{% endtrans %}</label><input type='file' id="myPhoto"name="myPhoto"><img src=""><BR>*/
/*       <label class="radio">{% trans %}Notifications{% endtrans %}</label><input type='radio' id="myNotification" name="myNotifications" value="1"  ><label for="myNotification">ON</label>*/
/*                                   <input type='radio' id="myNotifications" name="myNotifications" value="0"   checked ><label for="myNotifications">OFF</label><br>*/
/*                                   <input type="submit" value="{% trans %}Modify{% endtrans %}">*/
/*  </form>*/
/* */
/* {% endblock %}*/
/* */
