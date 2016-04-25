<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_130130279a99f4dd032281e91f01f64981fd7020f7b6013368eb244df2a79b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92c0315ff0789c9175012af38b10db168a26179aee037abe2aaf0341109ed6af = $this->env->getExtension("native_profiler");
        $__internal_92c0315ff0789c9175012af38b10db168a26179aee037abe2aaf0341109ed6af->enter($__internal_92c0315ff0789c9175012af38b10db168a26179aee037abe2aaf0341109ed6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_92c0315ff0789c9175012af38b10db168a26179aee037abe2aaf0341109ed6af->leave($__internal_92c0315ff0789c9175012af38b10db168a26179aee037abe2aaf0341109ed6af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
