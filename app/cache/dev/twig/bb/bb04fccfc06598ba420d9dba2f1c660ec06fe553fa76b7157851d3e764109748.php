<?php

/* intranetBundle:Default:editVacations.html.twig */
class __TwigTemplate_40052c02a7af299034744736e786a3a4080029b34531657cc81035345dcbaf50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:editVacations.html.twig", 1);
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
        $__internal_0da42878994fb1289639512ee54a3e5eeaac0d0f747d88a58f923fb54aacbe16 = $this->env->getExtension("native_profiler");
        $__internal_0da42878994fb1289639512ee54a3e5eeaac0d0f747d88a58f923fb54aacbe16->enter($__internal_0da42878994fb1289639512ee54a3e5eeaac0d0f747d88a58f923fb54aacbe16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:editVacations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0da42878994fb1289639512ee54a3e5eeaac0d0f747d88a58f923fb54aacbe16->leave($__internal_0da42878994fb1289639512ee54a3e5eeaac0d0f747d88a58f923fb54aacbe16_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_784701c447b3de6634183942c9396cf6ac38f0fd52fe7ab15bf084ad81df56bb = $this->env->getExtension("native_profiler");
        $__internal_784701c447b3de6634183942c9396cf6ac38f0fd52fe7ab15bf084ad81df56bb->enter($__internal_784701c447b3de6634183942c9396cf6ac38f0fd52fe7ab15bf084ad81df56bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>VACATIONS</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_editForm");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>From: </label><input type='date' id=\"from\" name=\"from\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date1", array()), "html", null, true);
        echo "\"><BR>
        <label>To: </label><input type='date' id=\"to\" name=\"to\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date2", array()), "html", null, true);
        echo "\"><BR>
        ";
        // line 8
        if (($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "isread", array()) == 0)) {
            // line 9
            echo "                                     <input type=\"submit\" value=\"Delete\" name=\"delete\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"vacations\">
                                     <input type=\"hidden\" name=\"id\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "id", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 13
        echo "   </form>


";
        
        $__internal_784701c447b3de6634183942c9396cf6ac38f0fd52fe7ab15bf084ad81df56bb->leave($__internal_784701c447b3de6634183942c9396cf6ac38f0fd52fe7ab15bf084ad81df56bb_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:editVacations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  61 => 11,  57 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>VACATIONS</h3><br>*/
/*  <form action="{{ path('intranet_editForm') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>From: </label><input type='date' id="from" name="from" value="{{f.date1}}"><BR>*/
/*         <label>To: </label><input type='date' id="to" name="to" value="{{f.date2}}"><BR>*/
/*         {% if f.isread==0 %}*/
/*                                      <input type="submit" value="Delete" name="delete">*/
/*                                      <input type="hidden" name="typeF" value="vacations">*/
/*                                      <input type="hidden" name="id" value="{{ f.id }}">*/
/*         {% endif %}*/
/*    </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
