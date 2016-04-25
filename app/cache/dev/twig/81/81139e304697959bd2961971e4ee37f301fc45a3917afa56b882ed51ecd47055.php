<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_7f911d1c2e8e3f12377bbb90b9aa4b19970f49b6288803aadc1764694911330b extends Twig_Template
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
        $__internal_d67d7b2329d35881057fc5e5203c3034739c7f69216e07a87135608b96075732 = $this->env->getExtension("native_profiler");
        $__internal_d67d7b2329d35881057fc5e5203c3034739c7f69216e07a87135608b96075732->enter($__internal_d67d7b2329d35881057fc5e5203c3034739c7f69216e07a87135608b96075732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_d67d7b2329d35881057fc5e5203c3034739c7f69216e07a87135608b96075732->leave($__internal_d67d7b2329d35881057fc5e5203c3034739c7f69216e07a87135608b96075732_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
