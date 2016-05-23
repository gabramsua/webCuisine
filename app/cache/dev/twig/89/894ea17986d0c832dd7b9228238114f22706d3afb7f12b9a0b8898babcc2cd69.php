<?php

/* intranetBundle:Default:editHours.html.twig */
class __TwigTemplate_f4bd9b9596746641ef3344a3b399c235e7cfd526aae2509351bd42eb3ce5827b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:editHours.html.twig", 1);
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
        $__internal_ff8a697369126738bbc43727df5fec430de3e551c02731af0494bae53396b87e = $this->env->getExtension("native_profiler");
        $__internal_ff8a697369126738bbc43727df5fec430de3e551c02731af0494bae53396b87e->enter($__internal_ff8a697369126738bbc43727df5fec430de3e551c02731af0494bae53396b87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:editHours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff8a697369126738bbc43727df5fec430de3e551c02731af0494bae53396b87e->leave($__internal_ff8a697369126738bbc43727df5fec430de3e551c02731af0494bae53396b87e_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_b4d2693ac9f2f74d5d1727f91ca5fa76f46e9ed13a3d7cab5a2ffd58f9941713 = $this->env->getExtension("native_profiler");
        $__internal_b4d2693ac9f2f74d5d1727f91ca5fa76f46e9ed13a3d7cab5a2ffd58f9941713->enter($__internal_b4d2693ac9f2f74d5d1727f91ca5fa76f46e9ed13a3d7cab5a2ffd58f9941713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>HOURS</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_editForm");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>Number of hours: </label><input type='number' name=\"numhours\" id=\"numhours\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "numhours", array()), "html", null, true);
        echo "\"><BR>
        <label>Between: </label><input type='date' id=\"betw\" name=\"betw\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date1", array()), "html", null, true);
        echo "\"><BR>
        <label>and: </label><input type='date' id=\"and\" name=\"and\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date2", array()), "html", null, true);
        echo "\"><BR>
        ";
        // line 9
        if (($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "isread", array()) != 0)) {
            // line 10
            echo "                                     <input type=\"submit\" value=\"Delete\" name=\"delete\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"hours\">
                                     <input type=\"hidden\" name=\"id\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "id", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 14
        echo "   </form>


";
        
        $__internal_b4d2693ac9f2f74d5d1727f91ca5fa76f46e9ed13a3d7cab5a2ffd58f9941713->leave($__internal_b4d2693ac9f2f74d5d1727f91ca5fa76f46e9ed13a3d7cab5a2ffd58f9941713_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:editHours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  65 => 12,  61 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>HOURS</h3><br>*/
/*  <form action="{{ path('intranet_editForm') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>Number of hours: </label><input type='number' name="numhours" id="numhours" value="{{ f.numhours }}"><BR>*/
/*         <label>Between: </label><input type='date' id="betw" name="betw" value="{{f.date1}}"><BR>*/
/*         <label>and: </label><input type='date' id="and" name="and" value="{{f.date2}}"><BR>*/
/*         {% if f.isread!=0 %}*/
/*                                      <input type="submit" value="Delete" name="delete">*/
/*                                      <input type="hidden" name="typeF" value="hours">*/
/*                                      <input type="hidden" name="id" value="{{ f.id }}">*/
/*         {% endif %}*/
/*    </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
