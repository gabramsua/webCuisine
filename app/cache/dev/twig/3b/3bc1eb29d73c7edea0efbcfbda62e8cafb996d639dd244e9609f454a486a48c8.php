<?php

/* intranetBundle:Default:formHours.html.twig */
class __TwigTemplate_0e12c499555f0d310c0a59b2107ae6ff07ecb664053a23fe3763a3b4ebb549be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formHours.html.twig", 1);
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
        $__internal_e292a8d057999c976bd32dea10595a4b6b6b29917513109c2ff0b925bb67c348 = $this->env->getExtension("native_profiler");
        $__internal_e292a8d057999c976bd32dea10595a4b6b6b29917513109c2ff0b925bb67c348->enter($__internal_e292a8d057999c976bd32dea10595a4b6b6b29917513109c2ff0b925bb67c348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formHours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e292a8d057999c976bd32dea10595a4b6b6b29917513109c2ff0b925bb67c348->leave($__internal_e292a8d057999c976bd32dea10595a4b6b6b29917513109c2ff0b925bb67c348_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_453d21d30d8b7c508b651ba8fadb1b6a1908af7fe85841b611b4b1c77b02d660 = $this->env->getExtension("native_profiler");
        $__internal_453d21d30d8b7c508b651ba8fadb1b6a1908af7fe85841b611b4b1c77b02d660->enter($__internal_453d21d30d8b7c508b651ba8fadb1b6a1908af7fe85841b611b4b1c77b02d660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>HOURS</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_f");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>Number of hours: </label><input type='number' name=\"numhours\" id=\"numhours\" min=\"1\" max=\"50\"><i>min:1, max:50</i><BR>
        <label>Reasons</label><input type=\"textarea\" name=\"reasons\" id=\"reasons\"><br>
        <label>Ticket</label><input type=\"text\" name=\"ticket\" id=\"ticket\"><br>
                                     <input type=\"submit\" value=\"Modify\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"hours\">
   </form>


";
        
        $__internal_453d21d30d8b7c508b651ba8fadb1b6a1908af7fe85841b611b4b1c77b02d660->leave($__internal_453d21d30d8b7c508b651ba8fadb1b6a1908af7fe85841b611b4b1c77b02d660_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formHours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>HOURS</h3><br>*/
/*  <form action="{{ path('intranet_f') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>Number of hours: </label><input type='number' name="numhours" id="numhours" min="1" max="50"><i>min:1, max:50</i><BR>*/
/*         <label>Reasons</label><input type="textarea" name="reasons" id="reasons"><br>*/
/*         <label>Ticket</label><input type="text" name="ticket" id="ticket"><br>*/
/*                                      <input type="submit" value="Modify">*/
/*                                      <input type="hidden" name="typeF" value="hours">*/
/*    </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
