<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_0567762cc43d76e3a4db2bc87bfaa53834c239f539b72ea854b95272307428bc extends Twig_Template
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
        $__internal_b0861ce1f2245a4508b8e08df540d3e2b9563362496a09d2c68526d8e90b5ca6 = $this->env->getExtension("native_profiler");
        $__internal_b0861ce1f2245a4508b8e08df540d3e2b9563362496a09d2c68526d8e90b5ca6->enter($__internal_b0861ce1f2245a4508b8e08df540d3e2b9563362496a09d2c68526d8e90b5ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b0861ce1f2245a4508b8e08df540d3e2b9563362496a09d2c68526d8e90b5ca6->leave($__internal_b0861ce1f2245a4508b8e08df540d3e2b9563362496a09d2c68526d8e90b5ca6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
