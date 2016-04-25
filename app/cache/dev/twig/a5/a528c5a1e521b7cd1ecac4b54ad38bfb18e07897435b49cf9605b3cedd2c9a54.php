<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_84a3ff62b57fdeff75fe0f8399c2aa9baec4b0c4f8818f9f1a57995695c53411 extends Twig_Template
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
        $__internal_5577b008e986a6473ff1a11b7b7084da725fff5a35a746f744bd16c05284a935 = $this->env->getExtension("native_profiler");
        $__internal_5577b008e986a6473ff1a11b7b7084da725fff5a35a746f744bd16c05284a935->enter($__internal_5577b008e986a6473ff1a11b7b7084da725fff5a35a746f744bd16c05284a935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5577b008e986a6473ff1a11b7b7084da725fff5a35a746f744bd16c05284a935->leave($__internal_5577b008e986a6473ff1a11b7b7084da725fff5a35a746f744bd16c05284a935_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
