<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e2a285cf9fbbd39d23b34bbba9f5ae7e6636d0552cbba1c3a5e2ca3873ef4974 extends Twig_Template
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
        $__internal_9b6392a86388a34a9ec1e68e16d36b28e7e68479d9636923d65f4373bc697859 = $this->env->getExtension("native_profiler");
        $__internal_9b6392a86388a34a9ec1e68e16d36b28e7e68479d9636923d65f4373bc697859->enter($__internal_9b6392a86388a34a9ec1e68e16d36b28e7e68479d9636923d65f4373bc697859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9b6392a86388a34a9ec1e68e16d36b28e7e68479d9636923d65f4373bc697859->leave($__internal_9b6392a86388a34a9ec1e68e16d36b28e7e68479d9636923d65f4373bc697859_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
