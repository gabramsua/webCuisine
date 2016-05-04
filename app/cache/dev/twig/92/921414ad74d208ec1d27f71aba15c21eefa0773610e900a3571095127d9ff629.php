<?php

/* intranetBundle:Default:formRequest.html.twig */
class __TwigTemplate_8d6e8861447c5b35ce88e8b004739ac1a8d1bb091c52cc8c726d591f62a7a37f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formRequest.html.twig", 1);
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
        $__internal_0db8fd9364ddf7f1ddf177ef990ed85cc9bc791e69d33bcbd64ed2b027275997 = $this->env->getExtension("native_profiler");
        $__internal_0db8fd9364ddf7f1ddf177ef990ed85cc9bc791e69d33bcbd64ed2b027275997->enter($__internal_0db8fd9364ddf7f1ddf177ef990ed85cc9bc791e69d33bcbd64ed2b027275997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formRequest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0db8fd9364ddf7f1ddf177ef990ed85cc9bc791e69d33bcbd64ed2b027275997->leave($__internal_0db8fd9364ddf7f1ddf177ef990ed85cc9bc791e69d33bcbd64ed2b027275997_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_92187b9927613f8c64f41e530fd1d3342d661a78ea385c13555897fbb1dcefaa = $this->env->getExtension("native_profiler");
        $__internal_92187b9927613f8c64f41e530fd1d3342d661a78ea385c13555897fbb1dcefaa->enter($__internal_92187b9927613f8c64f41e530fd1d3342d661a78ea385c13555897fbb1dcefaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>REQUEST BUSINESS TRIP</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_f");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
         <label>From: </label><input type='date' id=\"from\" name=\"from\"><BR>
         <label>to: </label><input type='date' id=\"to\" name=\"to\"><BR>
         <label>Where:</label><input type=\"text\" name=\"where\"><br>
         <label>Congress<i>if any</i>:</label><input type=\"text\" name=\"congress\"><br>
         <label>Reason:</label><input type=\"textarea\" name=\"reason\"><br>
                                      <input type=\"submit\" value=\"Modify\">
                                      <input type=\"hidden\" name=\"typeF\" value=\"businessRequest\">
    </form>



";
        
        $__internal_92187b9927613f8c64f41e530fd1d3342d661a78ea385c13555897fbb1dcefaa->leave($__internal_92187b9927613f8c64f41e530fd1d3342d661a78ea385c13555897fbb1dcefaa_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formRequest.html.twig";
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
/* <h3>REQUEST BUSINESS TRIP</h3><br>*/
/*  <form action="{{ path('intranet_f') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*          <label>From: </label><input type='date' id="from" name="from"><BR>*/
/*          <label>to: </label><input type='date' id="to" name="to"><BR>*/
/*          <label>Where:</label><input type="text" name="where"><br>*/
/*          <label>Congress<i>if any</i>:</label><input type="text" name="congress"><br>*/
/*          <label>Reason:</label><input type="textarea" name="reason"><br>*/
/*                                       <input type="submit" value="Modify">*/
/*                                       <input type="hidden" name="typeF" value="businessRequest">*/
/*     </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
