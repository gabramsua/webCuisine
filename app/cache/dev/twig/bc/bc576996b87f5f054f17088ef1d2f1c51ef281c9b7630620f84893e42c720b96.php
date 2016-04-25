<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_c588e622822e76de75ad9e1d54e90f0e620c719a9a8c6fda61735d6a30c962ab extends Twig_Template
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
        $__internal_6c046090fd39bb58346cc604aeaf5261741a1820651b36353800e25b8a7b2bb4 = $this->env->getExtension("native_profiler");
        $__internal_6c046090fd39bb58346cc604aeaf5261741a1820651b36353800e25b8a7b2bb4->enter($__internal_6c046090fd39bb58346cc604aeaf5261741a1820651b36353800e25b8a7b2bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6c046090fd39bb58346cc604aeaf5261741a1820651b36353800e25b8a7b2bb4->leave($__internal_6c046090fd39bb58346cc604aeaf5261741a1820651b36353800e25b8a7b2bb4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
