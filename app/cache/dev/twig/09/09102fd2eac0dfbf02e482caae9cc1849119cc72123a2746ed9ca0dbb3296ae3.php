<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_029821ae0640afdf32f0ab9ec8c7145c09fc054d8cfbe236f2efd3e2a67640ff extends Twig_Template
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
        $__internal_6eac7508289923d7dc595e27932b16dfc932fb4b515ce8197f9cc2a8e2348908 = $this->env->getExtension("native_profiler");
        $__internal_6eac7508289923d7dc595e27932b16dfc932fb4b515ce8197f9cc2a8e2348908->enter($__internal_6eac7508289923d7dc595e27932b16dfc932fb4b515ce8197f9cc2a8e2348908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6eac7508289923d7dc595e27932b16dfc932fb4b515ce8197f9cc2a8e2348908->leave($__internal_6eac7508289923d7dc595e27932b16dfc932fb4b515ce8197f9cc2a8e2348908_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
