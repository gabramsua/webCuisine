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
        $__internal_1353ccbb00615016b5efe7ca9ab7c71a11794de6e39fcb02290cac292f68aa5c = $this->env->getExtension("native_profiler");
        $__internal_1353ccbb00615016b5efe7ca9ab7c71a11794de6e39fcb02290cac292f68aa5c->enter($__internal_1353ccbb00615016b5efe7ca9ab7c71a11794de6e39fcb02290cac292f68aa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:editHours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1353ccbb00615016b5efe7ca9ab7c71a11794de6e39fcb02290cac292f68aa5c->leave($__internal_1353ccbb00615016b5efe7ca9ab7c71a11794de6e39fcb02290cac292f68aa5c_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1797eb91dc7cfa55004e2b2a2bffa9c4e403d0b2718df919e8d48f0659809708 = $this->env->getExtension("native_profiler");
        $__internal_1797eb91dc7cfa55004e2b2a2bffa9c4e403d0b2718df919e8d48f0659809708->enter($__internal_1797eb91dc7cfa55004e2b2a2bffa9c4e403d0b2718df919e8d48f0659809708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        <label>Reasons</label><input type=\"textarea\" name=\"reasons\" id=\"reasons\" value=";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "reasons", array()), "html", null, true);
        echo "><br>
        <label>Ticket</label><input type=\"text\" name=\"ticket\" id=\"ticket\" value=";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "ticket", array()), "html", null, true);
        echo "><br>
        ";
        // line 9
        if (($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "isread", array()) == 0)) {
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
        
        $__internal_1797eb91dc7cfa55004e2b2a2bffa9c4e403d0b2718df919e8d48f0659809708->leave($__internal_1797eb91dc7cfa55004e2b2a2bffa9c4e403d0b2718df919e8d48f0659809708_prof);

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
/*         <label>Reasons</label><input type="textarea" name="reasons" id="reasons" value={{ f.reasons }}><br>*/
/*         <label>Ticket</label><input type="text" name="ticket" id="ticket" value={{ f.ticket }}><br>*/
/*         {% if f.isread==0 %}*/
/*                                      <input type="submit" value="Delete" name="delete">*/
/*                                      <input type="hidden" name="typeF" value="hours">*/
/*                                      <input type="hidden" name="id" value="{{ f.id }}">*/
/*         {% endif %}*/
/*    </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
