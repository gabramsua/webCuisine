<?php

/* intranetBundle:Default:settingsForAdmin.html.twig */
class __TwigTemplate_d1782896c72ecd646a185d3a4c1dd1f73c887a22835d838ac8f8bbaf5a2d4662 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:settingsForAdmin.html.twig", 1);
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
        $__internal_1efd49aade50169ee37265bf2ecc41f757f5fe5c3b4a3e97fac8811f45c5b4bf = $this->env->getExtension("native_profiler");
        $__internal_1efd49aade50169ee37265bf2ecc41f757f5fe5c3b4a3e97fac8811f45c5b4bf->enter($__internal_1efd49aade50169ee37265bf2ecc41f757f5fe5c3b4a3e97fac8811f45c5b4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:settingsForAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1efd49aade50169ee37265bf2ecc41f757f5fe5c3b4a3e97fac8811f45c5b4bf->leave($__internal_1efd49aade50169ee37265bf2ecc41f757f5fe5c3b4a3e97fac8811f45c5b4bf_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_62321bf648b03af1f0ceae3feffbc6f18312b6cb3cc16f36a8ba88cc4e43ca63 = $this->env->getExtension("native_profiler");
        $__internal_62321bf648b03af1f0ceae3feffbc6f18312b6cb3cc16f36a8ba88cc4e43ca63->enter($__internal_62321bf648b03af1f0ceae3feffbc6f18312b6cb3cc16f36a8ba88cc4e43ca63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        echo "</label><input type='text' id=\"mySurname\" name=\"mySurname\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "surnameU", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Language", array(), "messages");
        echo "</label><br>
                <input type='radio' id=\"myLanguage\" name=\"myLanguage\" value=\"es\" ";
        // line 9
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "lang", array()) == "es")) {
            echo " checked ";
        }
        echo "><label for=\"myLanguage\">ES</label><BR>
                <input type='radio' id=\"myLanguage\" name=\"myLanguage\" value=\"en\" ";
        // line 10
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "lang", array()) == "en")) {
            echo " checked ";
        }
        echo "><label for=\"myLanguage\">EN</label><BR>
                <input type='radio' id=\"myLanguage\" name=\"myLanguage\" value=\"fr\" ";
        // line 11
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "lang", array()) == "fr")) {
            echo " checked ";
        }
        echo "><label for=\"myLanguage\">FR</label><BR>
                <input type='radio' id=\"myLanguage\" name=\"myLanguage\" value=\"de\" ";
        // line 12
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "lang", array()) == "de")) {
            echo " checked ";
        }
        echo "><label for=\"myLanguage\">DE</label><BR>
      <label>";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Photo", array(), "messages");
        echo "</label><input type='file' id=\"myPhoto\" name=\"myPhoto\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "photo", array()), "html", null, true);
        echo "\"><BR>
<!-- SI NO SOY YO, PUEDO BORRAR EL USUARIO YA QUE SOY ADMIN -->
";
        // line 16
        echo "      <label>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Onboard", array(), "messages");
        echo "</label><input type='checkbox' id=\"myOnboard\" name=\"myOnboard\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "onboard", array()), "html", null, true);
        echo "\"";
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "onboard", array()) == 1)) {
            echo " checked ";
        }
        echo "><BR>
";
        // line 18
        echo "      <label>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Notifications", array(), "messages");
        echo "</label>
                <input type='radio' id=\"myNotifications\" name=\"myNotifications\" value=\"1\" ";
        // line 19
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "notifications", array()) == 1)) {
            echo " checked ";
        }
        echo " ><label for=\"myNotification\">ON</label>
                <input type='radio' id=\"myNotifications\" name=\"myNotifications\" value=\"0\"  ";
        // line 20
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "notifications", array()) == 0)) {
            echo " checked ";
        }
        echo "><label for=\"myNotifications\">OFF</label><br>

                                   <input type=\"submit\" value=\"";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("Modify", array(), "messages");
        echo "\" name=\"update\">
<!-- SI NO SOY YO, PUEDO BORRAR EL USUARIO YA QUE SOY ADMIN -->
";
        // line 25
        echo "                                   <input type=\"submit\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("DELETE", array(), "messages");
        echo "\" name=\"delete\">
";
        // line 27
        echo "
                                   <input type=\"text\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "login", array()), "html", null, true);
        echo "\" name=\"myLogin\" readonly>
                                   <input type=\"hidden\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "id", array()), "html", null, true);
        echo "\" name=\"id\">
 </form>



";
        
        $__internal_62321bf648b03af1f0ceae3feffbc6f18312b6cb3cc16f36a8ba88cc4e43ca63->leave($__internal_62321bf648b03af1f0ceae3feffbc6f18312b6cb3cc16f36a8ba88cc4e43ca63_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:settingsForAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 29,  136 => 28,  133 => 27,  128 => 25,  123 => 22,  116 => 20,  110 => 19,  105 => 18,  94 => 16,  87 => 13,  81 => 12,  75 => 11,  69 => 10,  63 => 9,  59 => 8,  53 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/*  */
/* <form action="{{ path('intranet_cruduser') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*       <label>{% trans %}Name{% endtrans %}</label><input type='text' name="myName" id="myName" value="{{ me.nameU }}"><BR>*/
/*       <label>{% trans %}Surname{% endtrans %}</label><input type='text' id="mySurname" name="mySurname" value="{{ me.surnameU }}"><BR>*/
/*       <label>{% trans %}Language{% endtrans %}</label><br>*/
/*                 <input type='radio' id="myLanguage" name="myLanguage" value="es" {% if me.lang=="es" %} checked {% endif %}><label for="myLanguage">ES</label><BR>*/
/*                 <input type='radio' id="myLanguage" name="myLanguage" value="en" {% if me.lang=="en" %} checked {% endif %}><label for="myLanguage">EN</label><BR>*/
/*                 <input type='radio' id="myLanguage" name="myLanguage" value="fr" {% if me.lang=="fr" %} checked {% endif %}><label for="myLanguage">FR</label><BR>*/
/*                 <input type='radio' id="myLanguage" name="myLanguage" value="de" {% if me.lang=="de" %} checked {% endif %}><label for="myLanguage">DE</label><BR>*/
/*       <label>{% trans %}Photo{% endtrans %}</label><input type='file' id="myPhoto" name="myPhoto"><img src="{{ me.photo }}"><BR>*/
/* <!-- SI NO SOY YO, PUEDO BORRAR EL USUARIO YA QUE SOY ADMIN -->*/
/* {# if no soy yo#}*/
/*       <label>{% trans %}Onboard{% endtrans %}</label><input type='checkbox' id="myOnboard" name="myOnboard" value="{{ me.onboard }}"{% if me.onboard==1 %} checked {% endif %}><BR>*/
/* {# endif #}*/
/*       <label>{% trans %}Notifications{% endtrans %}</label>*/
/*                 <input type='radio' id="myNotifications" name="myNotifications" value="1" {% if me.notifications==1 %} checked {% endif %} ><label for="myNotification">ON</label>*/
/*                 <input type='radio' id="myNotifications" name="myNotifications" value="0"  {% if me.notifications==0 %} checked {% endif %}><label for="myNotifications">OFF</label><br>*/
/* */
/*                                    <input type="submit" value="{% trans %}Modify{% endtrans %}" name="update">*/
/* <!-- SI NO SOY YO, PUEDO BORRAR EL USUARIO YA QUE SOY ADMIN -->*/
/* {# if no soy yo#}*/
/*                                    <input type="submit" value="{% trans %}DELETE{% endtrans %}" name="delete">*/
/* {# endif #}*/
/* */
/*                                    <input type="text" value="{{ me.login }}" name="myLogin" readonly>*/
/*                                    <input type="hidden" value="{{ me.id }}" name="id">*/
/*  </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
