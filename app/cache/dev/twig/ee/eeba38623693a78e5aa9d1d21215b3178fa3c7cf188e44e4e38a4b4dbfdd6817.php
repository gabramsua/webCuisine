<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5e2006ddcaccd357ad2bf03c20db5c6e24077f0c30f6ec133f6649f83c3d63aa extends Twig_Template
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
        $__internal_c07df5c663c7e55ad4d4dbe65fa7453d0118c3bd3fc8b05163560996115da3c2 = $this->env->getExtension("native_profiler");
        $__internal_c07df5c663c7e55ad4d4dbe65fa7453d0118c3bd3fc8b05163560996115da3c2->enter($__internal_c07df5c663c7e55ad4d4dbe65fa7453d0118c3bd3fc8b05163560996115da3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_c07df5c663c7e55ad4d4dbe65fa7453d0118c3bd3fc8b05163560996115da3c2->leave($__internal_c07df5c663c7e55ad4d4dbe65fa7453d0118c3bd3fc8b05163560996115da3c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
