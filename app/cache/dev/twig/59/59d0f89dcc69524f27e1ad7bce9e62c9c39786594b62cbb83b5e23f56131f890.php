<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ac2fd9da1d055d586b7baa32b0114a202bc5699d988f12ed7359018ae7080d02 extends Twig_Template
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
        $__internal_69c1aa9090ee18e590428bf74f6c0dbc8b7066c981a209d47abc76f2d0001a2c = $this->env->getExtension("native_profiler");
        $__internal_69c1aa9090ee18e590428bf74f6c0dbc8b7066c981a209d47abc76f2d0001a2c->enter($__internal_69c1aa9090ee18e590428bf74f6c0dbc8b7066c981a209d47abc76f2d0001a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_69c1aa9090ee18e590428bf74f6c0dbc8b7066c981a209d47abc76f2d0001a2c->leave($__internal_69c1aa9090ee18e590428bf74f6c0dbc8b7066c981a209d47abc76f2d0001a2c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
