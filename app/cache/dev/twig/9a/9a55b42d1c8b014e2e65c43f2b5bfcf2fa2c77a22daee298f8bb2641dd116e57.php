<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_731b401ed85853f95d9a61a44d316b9f08689da00f1855cdb953a81ccb01d97b extends Twig_Template
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
        $__internal_ee7009d3172ea92f1ff104a1b198a7fe8e0b1248a0a2d971298e0067d34ade23 = $this->env->getExtension("native_profiler");
        $__internal_ee7009d3172ea92f1ff104a1b198a7fe8e0b1248a0a2d971298e0067d34ade23->enter($__internal_ee7009d3172ea92f1ff104a1b198a7fe8e0b1248a0a2d971298e0067d34ade23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ee7009d3172ea92f1ff104a1b198a7fe8e0b1248a0a2d971298e0067d34ade23->leave($__internal_ee7009d3172ea92f1ff104a1b198a7fe8e0b1248a0a2d971298e0067d34ade23_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
