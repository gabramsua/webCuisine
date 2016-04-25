<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_82d10791a92ea0960cf856c9321f6833562818333a7f2987d860561106e31480 extends Twig_Template
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
        $__internal_3e1e04a7019fc5c85d8614d921b95b0479dc2fdffec6cab94f119c48c1668cf1 = $this->env->getExtension("native_profiler");
        $__internal_3e1e04a7019fc5c85d8614d921b95b0479dc2fdffec6cab94f119c48c1668cf1->enter($__internal_3e1e04a7019fc5c85d8614d921b95b0479dc2fdffec6cab94f119c48c1668cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3e1e04a7019fc5c85d8614d921b95b0479dc2fdffec6cab94f119c48c1668cf1->leave($__internal_3e1e04a7019fc5c85d8614d921b95b0479dc2fdffec6cab94f119c48c1668cf1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
