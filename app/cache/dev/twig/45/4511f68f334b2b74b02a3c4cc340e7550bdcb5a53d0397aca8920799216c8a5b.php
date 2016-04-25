<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8226530afcfa13e61a032d548857141944c591bbcfbee0cb54b1ac54a4146d6f extends Twig_Template
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
        $__internal_ba8160e4168c24728fcf73947423cf4e5df8fc82e00686cb9dcc1f21369aa5db = $this->env->getExtension("native_profiler");
        $__internal_ba8160e4168c24728fcf73947423cf4e5df8fc82e00686cb9dcc1f21369aa5db->enter($__internal_ba8160e4168c24728fcf73947423cf4e5df8fc82e00686cb9dcc1f21369aa5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ba8160e4168c24728fcf73947423cf4e5df8fc82e00686cb9dcc1f21369aa5db->leave($__internal_ba8160e4168c24728fcf73947423cf4e5df8fc82e00686cb9dcc1f21369aa5db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
