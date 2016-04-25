<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5793a117cfb016e9342d952b488a60883d5ed669bf34a2d2d79378cc5e9dcdba extends Twig_Template
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
        $__internal_7477c63ba558ec08905915774d617c75addf3207732dcd1dae6dca4702b023d5 = $this->env->getExtension("native_profiler");
        $__internal_7477c63ba558ec08905915774d617c75addf3207732dcd1dae6dca4702b023d5->enter($__internal_7477c63ba558ec08905915774d617c75addf3207732dcd1dae6dca4702b023d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7477c63ba558ec08905915774d617c75addf3207732dcd1dae6dca4702b023d5->leave($__internal_7477c63ba558ec08905915774d617c75addf3207732dcd1dae6dca4702b023d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
