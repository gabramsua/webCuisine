<?php

/* intranetBundle:Default:settings.html.twig */
class __TwigTemplate_4cfb2aa281f3ab8391dc5b95722da8188e422dbbb1d05c6d942d9ded466b2e53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:settings.html.twig", 1);
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
        $__internal_8f29141e6863bece4833f697d6683dcb3f286b5e92d1f1328c6bfb371ac1c4b6 = $this->env->getExtension("native_profiler");
        $__internal_8f29141e6863bece4833f697d6683dcb3f286b5e92d1f1328c6bfb371ac1c4b6->enter($__internal_8f29141e6863bece4833f697d6683dcb3f286b5e92d1f1328c6bfb371ac1c4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:settings.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f29141e6863bece4833f697d6683dcb3f286b5e92d1f1328c6bfb371ac1c4b6->leave($__internal_8f29141e6863bece4833f697d6683dcb3f286b5e92d1f1328c6bfb371ac1c4b6_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ea54629cb74bc18269ec9058525d70440ac8f449ca875bb8a2c3786bc7703e40 = $this->env->getExtension("native_profiler");
        $__internal_ea54629cb74bc18269ec9058525d70440ac8f449ca875bb8a2c3786bc7703e40->enter($__internal_ea54629cb74bc18269ec9058525d70440ac8f449ca875bb8a2c3786bc7703e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_cruduser");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
      <label>";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        echo "</label><input type='text' name=\"myName\" id=\"myName\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "nameU", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Surname", array(), "messages");
        echo "</label><input type='text' id=\"mySurname\"name=\"mySurname\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "surnameU", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Language", array(), "messages");
        echo "</label><input type='text' id=\"myLanguage\"name=\"myLanguage\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "lang", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Photo", array(), "messages");
        echo "</label><input type='file' id=\"myPhoto\"name=\"myPhoto\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "photo", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Onboard", array(), "messages");
        echo "</label><input type='CHECKBOX' id=\"onb\" name=\"onb\"><BR>
      <label>";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Notifications", array(), "messages");
        echo "</label><input type='radio' id=\"myNotification\" name=\"myNotifications\" value=\"on\" ";
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "notifications", array()) == 1)) {
            echo " checked ";
        }
        echo " ><label for=\"myNotification\">ON</label>
                                   <input type='radio' id=\"myNotifications\" name=\"myNotifications\" value=\"off\"  ";
        // line 12
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "notifications", array()) == 0)) {
            echo " checked ";
        }
        echo "><label for=\"myNotifications\">OFF</label><br>
                                   <input type=\"submit\" value=\"";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Modify", array(), "messages");
        echo "\" name=\"update\">
<!-- SI NO SOY YO, PUEDO BORRAR EL USUARIO YA QUE SOY ADMIN -->
";
        // line 16
        echo "                                   <input type=\"submit\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("DELETE", array(), "messages");
        echo "\" name=\"delete\">
";
        // line 18
        echo "                                   <input type=\"text\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "login", array()), "html", null, true);
        echo "\" name=\"myLogin\" readonly>
 </form>



";
        
        $__internal_ea54629cb74bc18269ec9058525d70440ac8f449ca875bb8a2c3786bc7703e40->leave($__internal_ea54629cb74bc18269ec9058525d70440ac8f449ca875bb8a2c3786bc7703e40_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 18,  94 => 16,  89 => 13,  83 => 12,  75 => 11,  71 => 10,  65 => 9,  59 => 8,  53 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* <form action="{{ path('intranet_cruduser') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*       <label>{% trans %}Name{% endtrans %}</label><input type='text' name="myName" id="myName" value="{{ me.nameU }}"><BR>*/
/*       <label>{% trans %}Surname{% endtrans %}</label><input type='text' id="mySurname"name="mySurname" value="{{ me.surnameU }}"><BR>*/
/*       <label>{% trans %}Language{% endtrans %}</label><input type='text' id="myLanguage"name="myLanguage" value="{{ me.lang }}"><BR>*/
/*       <label>{% trans %}Photo{% endtrans %}</label><input type='file' id="myPhoto"name="myPhoto"><img src="{{ me.photo }}"><BR>*/
/*       <label>{% trans %}Onboard{% endtrans %}</label><input type='CHECKBOX' id="onb" name="onb"><BR>*/
/*       <label>{% trans %}Notifications{% endtrans %}</label><input type='radio' id="myNotification" name="myNotifications" value="on" {% if me.notifications==1 %} checked {% endif %} ><label for="myNotification">ON</label>*/
/*                                    <input type='radio' id="myNotifications" name="myNotifications" value="off"  {% if me.notifications==0 %} checked {% endif %}><label for="myNotifications">OFF</label><br>*/
/*                                    <input type="submit" value="{% trans %}Modify{% endtrans %}" name="update">*/
/* <!-- SI NO SOY YO, PUEDO BORRAR EL USUARIO YA QUE SOY ADMIN -->*/
/* {# if no soy yo#}*/
/*                                    <input type="submit" value="{% trans %}DELETE{% endtrans %}" name="delete">*/
/* {# endif #}*/
/*                                    <input type="text" value="{{ me.login }}" name="myLogin" readonly>*/
/*  </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
