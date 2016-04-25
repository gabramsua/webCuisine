<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_42349db2847f28a4a0caf5cc6ec2009cd1eceda207361728527d25d926293d8e extends Twig_Template
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
        $__internal_8648b7d4319aba6db05df88b00079e809dff99b4a8ba0d432cab96bbf062f7c5 = $this->env->getExtension("native_profiler");
        $__internal_8648b7d4319aba6db05df88b00079e809dff99b4a8ba0d432cab96bbf062f7c5->enter($__internal_8648b7d4319aba6db05df88b00079e809dff99b4a8ba0d432cab96bbf062f7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8648b7d4319aba6db05df88b00079e809dff99b4a8ba0d432cab96bbf062f7c5->leave($__internal_8648b7d4319aba6db05df88b00079e809dff99b4a8ba0d432cab96bbf062f7c5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
