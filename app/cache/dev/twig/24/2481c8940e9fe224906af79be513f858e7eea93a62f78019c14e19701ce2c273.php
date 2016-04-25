<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fcd6b994346731d9a7cf2353602d8ad98eb8809b1d309f88b007c60398969f22 extends Twig_Template
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
        $__internal_1c35ac260e3cc356d7facfd6a2bec160de00436cb852a2392d7559119185fb0f = $this->env->getExtension("native_profiler");
        $__internal_1c35ac260e3cc356d7facfd6a2bec160de00436cb852a2392d7559119185fb0f->enter($__internal_1c35ac260e3cc356d7facfd6a2bec160de00436cb852a2392d7559119185fb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1c35ac260e3cc356d7facfd6a2bec160de00436cb852a2392d7559119185fb0f->leave($__internal_1c35ac260e3cc356d7facfd6a2bec160de00436cb852a2392d7559119185fb0f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
