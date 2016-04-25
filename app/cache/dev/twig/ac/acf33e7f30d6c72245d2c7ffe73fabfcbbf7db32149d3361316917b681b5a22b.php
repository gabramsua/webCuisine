<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_c2ccc30f8c393f825ac10ed083f3756e00ea847f6bc46f829b3d6d4d1fb65589 extends Twig_Template
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
        $__internal_88add171dc7ea95c832c275388968f1acb3811c3ec52ca8c869090654f93d2ac = $this->env->getExtension("native_profiler");
        $__internal_88add171dc7ea95c832c275388968f1acb3811c3ec52ca8c869090654f93d2ac->enter($__internal_88add171dc7ea95c832c275388968f1acb3811c3ec52ca8c869090654f93d2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_88add171dc7ea95c832c275388968f1acb3811c3ec52ca8c869090654f93d2ac->leave($__internal_88add171dc7ea95c832c275388968f1acb3811c3ec52ca8c869090654f93d2ac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
