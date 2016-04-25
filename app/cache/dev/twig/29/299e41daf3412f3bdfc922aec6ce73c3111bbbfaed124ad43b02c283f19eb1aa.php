<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1e87b13c602f0beb9ad6af3040e72b0e577da34a7828849d2d9a8c6f0a3a5ac9 extends Twig_Template
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
        $__internal_b78b13596b9a3b7bd3f358107e50b9d149d70cd1145cfa2192061f0cefc50eba = $this->env->getExtension("native_profiler");
        $__internal_b78b13596b9a3b7bd3f358107e50b9d149d70cd1145cfa2192061f0cefc50eba->enter($__internal_b78b13596b9a3b7bd3f358107e50b9d149d70cd1145cfa2192061f0cefc50eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_b78b13596b9a3b7bd3f358107e50b9d149d70cd1145cfa2192061f0cefc50eba->leave($__internal_b78b13596b9a3b7bd3f358107e50b9d149d70cd1145cfa2192061f0cefc50eba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
