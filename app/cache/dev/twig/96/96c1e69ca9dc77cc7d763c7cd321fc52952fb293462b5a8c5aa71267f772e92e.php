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
        $__internal_03245991e21da93adfcb74dc363631c34aac9ad23f5861fd4470e334fdd43ca4 = $this->env->getExtension("native_profiler");
        $__internal_03245991e21da93adfcb74dc363631c34aac9ad23f5861fd4470e334fdd43ca4->enter($__internal_03245991e21da93adfcb74dc363631c34aac9ad23f5861fd4470e334fdd43ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Error:error_login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03245991e21da93adfcb74dc363631c34aac9ad23f5861fd4470e334fdd43ca4->leave($__internal_03245991e21da93adfcb74dc363631c34aac9ad23f5861fd4470e334fdd43ca4_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_b4eb07e6b43667d6c1aae4861c0f7209268a8a7d659d0a5995acca1025aadcca = $this->env->getExtension("native_profiler");
        $__internal_b4eb07e6b43667d6c1aae4861c0f7209268a8a7d659d0a5995acca1025aadcca->enter($__internal_b4eb07e6b43667d6c1aae4861c0f7209268a8a7d659d0a5995acca1025aadcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
      <label>";
        // line 20
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
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("Photo", array(), "messages");
        echo "</label><input type='file' id=\"myPhoto\"name=\"myPhoto\"><img src=\"\"><BR>
      <label class=\"radio\">";
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("Notifications", array(), "messages");
        echo "</label>
                                  <input type='radio' id=\"myNotification\" name=\"myNotifications\" value=\"1\"><label for=\"myNotification\">ON</label>
                                  <input type='radio' id=\"myNotifications\" name=\"myNotifications\" value=\"0\"   checked ><label for=\"myNotifications\">OFF</label><br>
                                  <input type=\"submit\" value=\"";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("OK", array(), "messages");
        echo "\">
 </form>

";
        
        $__internal_b4eb07e6b43667d6c1aae4861c0f7209268a8a7d659d0a5995acca1025aadcca->leave($__internal_b4eb07e6b43667d6c1aae4861c0f7209268a8a7d659d0a5995acca1025aadcca_prof);

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
        return array (  103 => 33,  97 => 30,  93 => 29,  81 => 20,  75 => 19,  69 => 18,  65 => 17,  56 => 15,  52 => 14,  47 => 11,  45 => 8,  42 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
