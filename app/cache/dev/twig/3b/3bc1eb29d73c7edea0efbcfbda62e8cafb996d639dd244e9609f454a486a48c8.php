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
        $__internal_91d0f04cdc150dabb0b55a7b0a10c4bb047e245ef11732f1f1cd4671452897ff = $this->env->getExtension("native_profiler");
        $__internal_91d0f04cdc150dabb0b55a7b0a10c4bb047e245ef11732f1f1cd4671452897ff->enter($__internal_91d0f04cdc150dabb0b55a7b0a10c4bb047e245ef11732f1f1cd4671452897ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formHours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91d0f04cdc150dabb0b55a7b0a10c4bb047e245ef11732f1f1cd4671452897ff->leave($__internal_91d0f04cdc150dabb0b55a7b0a10c4bb047e245ef11732f1f1cd4671452897ff_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_d72163d53fe92905375f823b7dbc774d3ac516b4d23b114346ec2bdf71f66f63 = $this->env->getExtension("native_profiler");
        $__internal_d72163d53fe92905375f823b7dbc774d3ac516b4d23b114346ec2bdf71f66f63->enter($__internal_d72163d53fe92905375f823b7dbc774d3ac516b4d23b114346ec2bdf71f66f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>HOURS</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_f");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>Number of hours: </label><input type='number' name=\"numhours\" id=\"numhours\" min=\"1\" max=\"50\"><i>min:1, max:50</i><BR>
        <label>Between: </label><input type='date' id=\"betw\" name=\"betw\"><BR>
        <label>and: </label><input type='date' id=\"and\" name=\"and\">
        <i>default: 1 WEEK, max 3 months</i><BR>
                                     <input type=\"submit\" value=\"Modify\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"hours\">
   </form>


";
        
        $__internal_d72163d53fe92905375f823b7dbc774d3ac516b4d23b114346ec2bdf71f66f63->leave($__internal_d72163d53fe92905375f823b7dbc774d3ac516b4d23b114346ec2bdf71f66f63_prof);

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
/*         <label>Between: </label><input type='date' id="betw" name="betw"><BR>*/
/*         <label>and: </label><input type='date' id="and" name="and">*/
/*         <i>default: 1 WEEK, max 3 months</i><BR>*/
/*                                      <input type="submit" value="Modify">*/
/*                                      <input type="hidden" name="typeF" value="hours">*/
/*    </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
