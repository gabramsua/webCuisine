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
        $__internal_599504b7794bd4a16bb2cabd18676518a3ad286fe497fcf5bba3d8396af2ce83 = $this->env->getExtension("native_profiler");
        $__internal_599504b7794bd4a16bb2cabd18676518a3ad286fe497fcf5bba3d8396af2ce83->enter($__internal_599504b7794bd4a16bb2cabd18676518a3ad286fe497fcf5bba3d8396af2ce83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:settings.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_599504b7794bd4a16bb2cabd18676518a3ad286fe497fcf5bba3d8396af2ce83->leave($__internal_599504b7794bd4a16bb2cabd18676518a3ad286fe497fcf5bba3d8396af2ce83_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_aa6fca3de2e1eda8a9630e706dbf290ef667ba9a7880a983701e13a758348e45 = $this->env->getExtension("native_profiler");
        $__internal_aa6fca3de2e1eda8a9630e706dbf290ef667ba9a7880a983701e13a758348e45->enter($__internal_aa6fca3de2e1eda8a9630e706dbf290ef667ba9a7880a983701e13a758348e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSettings"]) ? $context["listSettings"] : $this->getContext($context, "listSettings")));
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 6
            echo "
<form action=\"updateme.php\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
      <label>";
            // line 8
            echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
            echo "</label><input type='text' name=\"myName\" id=\"myName\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "name", array()), "html", null, true);
            echo "\"><BR>
      <label>";
            // line 9
            echo $this->env->getExtension('translator')->getTranslator()->trans("Surname", array(), "messages");
            echo "</label><input type='text' id=\"mySurname\"name=\"mySurname\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "surname", array()), "html", null, true);
            echo "\"><BR>
      <label>";
            // line 10
            echo $this->env->getExtension('translator')->getTranslator()->trans("Language", array(), "messages");
            echo "</label><input type='text' id=\"myLanguage\"name=\"myLanguage\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "lang", array()), "html", null, true);
            echo "\"><BR>
      <label>";
            // line 11
            echo $this->env->getExtension('translator')->getTranslator()->trans("Telephone", array(), "messages");
            echo "</label><input type='text' id=\"myTelephone\"name=\"myTelephone\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "tel", array()), "html", null, true);
            echo "\"><BR>
      <label>";
            // line 12
            echo $this->env->getExtension('translator')->getTranslator()->trans("Notifications", array(), "messages");
            echo "</label><input type='radio' id=\"myNotification\" name=\"myNotifications\" value=\"on\" ";
            if (($this->getAttribute($context["me"], "notifications", array()) == "on")) {
                echo " checked ";
            }
            echo " ><label for=\"myNotification\">ON</label>
                                  <input type='radio' id=\"myNotifications\" name=\"myNotifications\" value=\"off\"  ";
            // line 13
            if (($this->getAttribute($context["me"], "notifications", array()) == "off")) {
                echo " checked ";
            }
            echo "><label for=\"myNotifications\">OFF</label><br>
      <label>";
            // line 14
            echo $this->env->getExtension('translator')->getTranslator()->trans("Photo", array(), "messages");
            echo "</label><input type='file' id=\"myPhoto\"name=\"myPhoto\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "photo", array()), "html", null, true);
            echo "\"><BR>
                                   <input type=\"submit\" value=\"";
            // line 15
            echo $this->env->getExtension('translator')->getTranslator()->trans("Modify", array(), "messages");
            echo "\">
                                   <input type=\"hidden\" id=\"oldPhoto\" name=\"oldPhoto\" value=\"<?php echo \$field->photo; ?>\">
 </form>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
";
        
        $__internal_aa6fca3de2e1eda8a9630e706dbf290ef667ba9a7880a983701e13a758348e45->leave($__internal_aa6fca3de2e1eda8a9630e706dbf290ef667ba9a7880a983701e13a758348e45_prof);

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
        return array (  105 => 19,  95 => 15,  89 => 14,  83 => 13,  75 => 12,  69 => 11,  63 => 10,  57 => 9,  51 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* {% for me in listSettings %}*/
/* */
/* <form action="updateme.php" method="post" style="border: 1px solid;width: 500px;">*/
/*       <label>{% trans %}Name{% endtrans %}</label><input type='text' name="myName" id="myName" value="{{ me.name }}"><BR>*/
/*       <label>{% trans %}Surname{% endtrans %}</label><input type='text' id="mySurname"name="mySurname" value="{{ me.surname }}"><BR>*/
/*       <label>{% trans %}Language{% endtrans %}</label><input type='text' id="myLanguage"name="myLanguage" value="{{ me.lang }}"><BR>*/
/*       <label>{% trans %}Telephone{% endtrans %}</label><input type='text' id="myTelephone"name="myTelephone" value="{{ me.tel }}"><BR>*/
/*       <label>{% trans %}Notifications{% endtrans %}</label><input type='radio' id="myNotification" name="myNotifications" value="on" {% if me.notifications=="on" %} checked {% endif %} ><label for="myNotification">ON</label>*/
/*                                   <input type='radio' id="myNotifications" name="myNotifications" value="off"  {% if me.notifications=="off" %} checked {% endif %}><label for="myNotifications">OFF</label><br>*/
/*       <label>{% trans %}Photo{% endtrans %}</label><input type='file' id="myPhoto"name="myPhoto"><img src="{{ me.photo }}"><BR>*/
/*                                    <input type="submit" value="{% trans %}Modify{% endtrans %}">*/
/*                                    <input type="hidden" id="oldPhoto" name="oldPhoto" value="<?php echo $field->photo; ?>">*/
/*  </form>*/
/*  {% endfor %}*/
/* */
/* {% endblock %}*/
/* */
