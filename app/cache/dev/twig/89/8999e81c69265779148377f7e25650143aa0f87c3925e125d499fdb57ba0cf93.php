<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3e134d000e461d41c2ef724371275921dcc9f96cf25c8171385d17298d316798 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e410e730f6f58c2567229755e9f662d4ae5d9491de6e4f499f41fdae392f4815 = $this->env->getExtension("native_profiler");
        $__internal_e410e730f6f58c2567229755e9f662d4ae5d9491de6e4f499f41fdae392f4815->enter($__internal_e410e730f6f58c2567229755e9f662d4ae5d9491de6e4f499f41fdae392f4815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e410e730f6f58c2567229755e9f662d4ae5d9491de6e4f499f41fdae392f4815->leave($__internal_e410e730f6f58c2567229755e9f662d4ae5d9491de6e4f499f41fdae392f4815_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1978b1e8e5c7fbd7b56b253c9a49bad22d46035e9d3b503dab732b656857aca = $this->env->getExtension("native_profiler");
        $__internal_f1978b1e8e5c7fbd7b56b253c9a49bad22d46035e9d3b503dab732b656857aca->enter($__internal_f1978b1e8e5c7fbd7b56b253c9a49bad22d46035e9d3b503dab732b656857aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f1978b1e8e5c7fbd7b56b253c9a49bad22d46035e9d3b503dab732b656857aca->leave($__internal_f1978b1e8e5c7fbd7b56b253c9a49bad22d46035e9d3b503dab732b656857aca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7700fcdff559b4a33dee8603b68f59122b6f67fe8e962ba22b43bb9034ef6b81 = $this->env->getExtension("native_profiler");
        $__internal_7700fcdff559b4a33dee8603b68f59122b6f67fe8e962ba22b43bb9034ef6b81->enter($__internal_7700fcdff559b4a33dee8603b68f59122b6f67fe8e962ba22b43bb9034ef6b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7700fcdff559b4a33dee8603b68f59122b6f67fe8e962ba22b43bb9034ef6b81->leave($__internal_7700fcdff559b4a33dee8603b68f59122b6f67fe8e962ba22b43bb9034ef6b81_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_48dfe88d8bb628f5d70a70bcdb28b95c2226e463101dd33479bb3b9b99dd8474 = $this->env->getExtension("native_profiler");
        $__internal_48dfe88d8bb628f5d70a70bcdb28b95c2226e463101dd33479bb3b9b99dd8474->enter($__internal_48dfe88d8bb628f5d70a70bcdb28b95c2226e463101dd33479bb3b9b99dd8474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_48dfe88d8bb628f5d70a70bcdb28b95c2226e463101dd33479bb3b9b99dd8474->leave($__internal_48dfe88d8bb628f5d70a70bcdb28b95c2226e463101dd33479bb3b9b99dd8474_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
