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
        $__internal_b838f756d380ed4dc775cf31c549617d34496e46a0d343087c03477516dd8060 = $this->env->getExtension("native_profiler");
        $__internal_b838f756d380ed4dc775cf31c549617d34496e46a0d343087c03477516dd8060->enter($__internal_b838f756d380ed4dc775cf31c549617d34496e46a0d343087c03477516dd8060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:settings.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b838f756d380ed4dc775cf31c549617d34496e46a0d343087c03477516dd8060->leave($__internal_b838f756d380ed4dc775cf31c549617d34496e46a0d343087c03477516dd8060_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_e453717fc866886829fed85f42323d300266a50b5bbb4edc2616ff75b846caf7 = $this->env->getExtension("native_profiler");
        $__internal_e453717fc866886829fed85f42323d300266a50b5bbb4edc2616ff75b846caf7->enter($__internal_e453717fc866886829fed85f42323d300266a50b5bbb4edc2616ff75b846caf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<form action=\"updateme.php\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Notifications", array(), "messages");
        echo "</label><input type='radio' id=\"myNotification\" name=\"myNotifications\" value=\"on\" ";
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "notifications", array()) == 1)) {
            echo " checked ";
        }
        echo " ><label for=\"myNotification\">ON</label>
                                  <input type='radio' id=\"myNotifications\" name=\"myNotifications\" value=\"off\"  ";
        // line 11
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "notifications", array()) == 0)) {
            echo " checked ";
        }
        echo "><label for=\"myNotifications\">OFF</label><br>
                                   <input type=\"submit\" value=\"";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("Modify", array(), "messages");
        echo "\">
                                   <input type=\"hidden\" id=\"oldPhoto\" name=\"oldPhoto\" value=\"<?php echo \$field->photo; ?>\">
 </form>

";
        
        $__internal_e453717fc866886829fed85f42323d300266a50b5bbb4edc2616ff75b846caf7->leave($__internal_e453717fc866886829fed85f42323d300266a50b5bbb4edc2616ff75b846caf7_prof);

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
        return array (  82 => 12,  76 => 11,  68 => 10,  62 => 9,  56 => 8,  50 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* <form action="updateme.php" method="post" style="border: 1px solid;width: 500px;">*/
/*       <label>{% trans %}Name{% endtrans %}</label><input type='text' name="myName" id="myName" value="{{ me.nameU }}"><BR>*/
/*       <label>{% trans %}Surname{% endtrans %}</label><input type='text' id="mySurname"name="mySurname" value="{{ me.surnameU }}"><BR>*/
/*       <label>{% trans %}Language{% endtrans %}</label><input type='text' id="myLanguage"name="myLanguage" value="{{ me.lang }}"><BR>*/
/*       <label>{% trans %}Photo{% endtrans %}</label><input type='file' id="myPhoto"name="myPhoto"><img src="{{ me.photo }}"><BR>*/
/*       <label>{% trans %}Notifications{% endtrans %}</label><input type='radio' id="myNotification" name="myNotifications" value="on" {% if me.notifications==1 %} checked {% endif %} ><label for="myNotification">ON</label>*/
/*                                   <input type='radio' id="myNotifications" name="myNotifications" value="off"  {% if me.notifications==0 %} checked {% endif %}><label for="myNotifications">OFF</label><br>*/
/*                                    <input type="submit" value="{% trans %}Modify{% endtrans %}">*/
/*                                    <input type="hidden" id="oldPhoto" name="oldPhoto" value="<?php echo $field->photo; ?>">*/
/*  </form>*/
/* */
/* {% endblock %}*/
/* */
