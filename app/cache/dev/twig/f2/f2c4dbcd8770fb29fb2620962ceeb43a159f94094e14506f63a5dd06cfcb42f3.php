<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_34ca7c81b7e50408219834e177b2082f6d23e13b55246d53f8b8f16aca7a4d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_f41aa6dd33e3d3ece654a6078d5bc164e9198e847f39d21168af8c19b22072ec = $this->env->getExtension("native_profiler");
        $__internal_f41aa6dd33e3d3ece654a6078d5bc164e9198e847f39d21168af8c19b22072ec->enter($__internal_f41aa6dd33e3d3ece654a6078d5bc164e9198e847f39d21168af8c19b22072ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f41aa6dd33e3d3ece654a6078d5bc164e9198e847f39d21168af8c19b22072ec->leave($__internal_f41aa6dd33e3d3ece654a6078d5bc164e9198e847f39d21168af8c19b22072ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6127def7202d3a156583514965fa8715268973d4fa82e144a83748d789027e25 = $this->env->getExtension("native_profiler");
        $__internal_6127def7202d3a156583514965fa8715268973d4fa82e144a83748d789027e25->enter($__internal_6127def7202d3a156583514965fa8715268973d4fa82e144a83748d789027e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6127def7202d3a156583514965fa8715268973d4fa82e144a83748d789027e25->leave($__internal_6127def7202d3a156583514965fa8715268973d4fa82e144a83748d789027e25_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b55d3d87ff57a054778e433b874f0401d0d70b5cf74685cb6073c0dc83154a32 = $this->env->getExtension("native_profiler");
        $__internal_b55d3d87ff57a054778e433b874f0401d0d70b5cf74685cb6073c0dc83154a32->enter($__internal_b55d3d87ff57a054778e433b874f0401d0d70b5cf74685cb6073c0dc83154a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b55d3d87ff57a054778e433b874f0401d0d70b5cf74685cb6073c0dc83154a32->leave($__internal_b55d3d87ff57a054778e433b874f0401d0d70b5cf74685cb6073c0dc83154a32_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_73ab41e35623be75d4dcbb19345139493378c526dd52f553467de275c244b9d5 = $this->env->getExtension("native_profiler");
        $__internal_73ab41e35623be75d4dcbb19345139493378c526dd52f553467de275c244b9d5->enter($__internal_73ab41e35623be75d4dcbb19345139493378c526dd52f553467de275c244b9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_73ab41e35623be75d4dcbb19345139493378c526dd52f553467de275c244b9d5->leave($__internal_73ab41e35623be75d4dcbb19345139493378c526dd52f553467de275c244b9d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
