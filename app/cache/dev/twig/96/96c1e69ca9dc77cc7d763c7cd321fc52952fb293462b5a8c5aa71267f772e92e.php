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
        $__internal_5597350fc59ff226e636250311603bc6bd4fe7afb29929d10d03bb2f58f5c4a4 = $this->env->getExtension("native_profiler");
        $__internal_5597350fc59ff226e636250311603bc6bd4fe7afb29929d10d03bb2f58f5c4a4->enter($__internal_5597350fc59ff226e636250311603bc6bd4fe7afb29929d10d03bb2f58f5c4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Error:error_login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5597350fc59ff226e636250311603bc6bd4fe7afb29929d10d03bb2f58f5c4a4->leave($__internal_5597350fc59ff226e636250311603bc6bd4fe7afb29929d10d03bb2f58f5c4a4_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_170fd125ef561396250ce84fd716ac325d695263511042580b27a3b8c445fcd9 = $this->env->getExtension("native_profiler");
        $__internal_170fd125ef561396250ce84fd716ac325d695263511042580b27a3b8c445fcd9->enter($__internal_170fd125ef561396250ce84fd716ac325d695263511042580b27a3b8c445fcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo $this->env->getExtension('translator')->getTranslator()->trans("you dont exist", array(), "messages");
        // line 7
        echo "<br><br>
";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("creating on database", array(), "messages");
        // line 11
        echo "<br><br>


<form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("intranet_nonExistingUser");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
      <label class=\"control-label\">";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("Hello", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["surname"]) ? $context["surname"] : $this->getContext($context, "surname")), "html", null, true);
        echo "</label><br>

      Login: <input type='text' name=\"myLogin\" id=\"myLogin\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
        echo "\" class=\"form-control\" readonly>
      ";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        echo " <input type='text' name=\"myName\" id=\"myName\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"form-control\" readonly>
      ";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Surname", array(), "messages");
        echo " <input type='text' id=\"mySurname\"name=\"mySurname\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["surname"]) ? $context["surname"] : $this->getContext($context, "surname")), "html", null, true);
        echo "\" class=\"form-control\" readonly><BR>
      ";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email", array(), "messages");
        echo " <input type='text' id=\"myEmail\"name=\"myEmail\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\" class=\"form-control\" readonly><BR>
      <label>";
        // line 21
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
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("Photo", array(), "messages");
        echo "</label><input type='file' id=\"myPhoto\"name=\"myPhoto\"><img src=\"\"><BR>
      <label class=\"radio\">";
        // line 31
        echo $this->env->getExtension('translator')->getTranslator()->trans("Notifications", array(), "messages");
        echo "</label>
                                  <input type='radio' id=\"myNotification\" name=\"myNotifications\" value=\"1\"><label for=\"myNotification\">ON</label>
                                  <input type='radio' id=\"myNotifications\" name=\"myNotifications\" value=\"0\"   checked ><label for=\"myNotifications\">OFF</label><br>
                                  <input type=\"submit\" value=\"";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("OK", array(), "messages");
        echo "\">
 </form>

";
        
        $__internal_170fd125ef561396250ce84fd716ac325d695263511042580b27a3b8c445fcd9->leave($__internal_170fd125ef561396250ce84fd716ac325d695263511042580b27a3b8c445fcd9_prof);

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
        return array (  109 => 34,  103 => 31,  99 => 30,  87 => 21,  81 => 20,  75 => 19,  69 => 18,  65 => 17,  56 => 15,  52 => 14,  47 => 11,  45 => 8,  42 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout2.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* {% trans %}*/
/* you dont exist*/
/* {% endtrans %}*/
/* <br><br>*/
/* {% trans %}*/
/* creating on database*/
/* {% endtrans %}*/
/* <br><br>*/
/* */
/* */
/* <form action="{{ path('intranet_nonExistingUser') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*       <label class="control-label">{% trans %}Hello{% endtrans %} {{name}} {{ surname }}</label><br>*/
/* */
/*       Login: <input type='text' name="myLogin" id="myLogin" value="{{login}}" class="form-control" readonly>*/
/*       {% trans %}Name{% endtrans %} <input type='text' name="myName" id="myName" value="{{name}}" class="form-control" readonly>*/
/*       {% trans %}Surname{% endtrans %} <input type='text' id="mySurname"name="mySurname" value="{{surname}}" class="form-control" readonly><BR>*/
/*       {% trans %}Email{% endtrans %} <input type='text' id="myEmail"name="myEmail" value="{{email}}" class="form-control" readonly><BR>*/
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
/*       <label class="radio">{% trans %}Notifications{% endtrans %}</label>*/
/*                                   <input type='radio' id="myNotification" name="myNotifications" value="1"><label for="myNotification">ON</label>*/
/*                                   <input type='radio' id="myNotifications" name="myNotifications" value="0"   checked ><label for="myNotifications">OFF</label><br>*/
/*                                   <input type="submit" value="{% trans %}OK{% endtrans %}">*/
/*  </form>*/
/* */
/* {% endblock %}*/
/* */
