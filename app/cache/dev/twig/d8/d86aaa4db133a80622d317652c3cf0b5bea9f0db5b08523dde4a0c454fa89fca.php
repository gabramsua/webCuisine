<?php

/* intranetBundle::layout2.html.twig */
class __TwigTemplate_06d406ef817b8961f29eddd5134d827beacada598e7c442f4f728253b8420867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "intranetBundle::layout2.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bea5d9f59011084a05f412fa4157f7afaa660851338b957a72db7dd05893150 = $this->env->getExtension("native_profiler");
        $__internal_9bea5d9f59011084a05f412fa4157f7afaa660851338b957a72db7dd05893150->enter($__internal_9bea5d9f59011084a05f412fa4157f7afaa660851338b957a72db7dd05893150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bea5d9f59011084a05f412fa4157f7afaa660851338b957a72db7dd05893150->leave($__internal_9bea5d9f59011084a05f412fa4157f7afaa660851338b957a72db7dd05893150_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b67e6fdfdb14e614f9e7ec610e24113b35fd4b8ca16ae160f47096fafc35109 = $this->env->getExtension("native_profiler");
        $__internal_9b67e6fdfdb14e614f9e7ec610e24113b35fd4b8ca16ae160f47096fafc35109->enter($__internal_9b67e6fdfdb14e614f9e7ec610e24113b35fd4b8ca16ae160f47096fafc35109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/alimentos/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<meta charset=\"UTF-8\">
";
        
        $__internal_9b67e6fdfdb14e614f9e7ec610e24113b35fd4b8ca16ae160f47096fafc35109->leave($__internal_9b67e6fdfdb14e614f9e7ec610e24113b35fd4b8ca16ae160f47096fafc35109_prof);

    }

    // line 11
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_04059015bc5a703ab93837d14d77f715ee0d6a89a065b3cd77b24c70c413f88e = $this->env->getExtension("native_profiler");
        $__internal_04059015bc5a703ab93837d14d77f715ee0d6a89a065b3cd77b24c70c413f88e->enter($__internal_04059015bc5a703ab93837d14d77f715ee0d6a89a065b3cd77b24c70c413f88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 12
        echo "    <div id=\"cabecera\">
    </div>
";
        
        $__internal_04059015bc5a703ab93837d14d77f715ee0d6a89a065b3cd77b24c70c413f88e->leave($__internal_04059015bc5a703ab93837d14d77f715ee0d6a89a065b3cd77b24c70c413f88e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_0adee153fae0def3421b60553afaf1203d2db762c5743e6dba5f2314dea8189e = $this->env->getExtension("native_profiler");
        $__internal_0adee153fae0def3421b60553afaf1203d2db762c5743e6dba5f2314dea8189e->enter($__internal_0adee153fae0def3421b60553afaf1203d2db762c5743e6dba5f2314dea8189e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <div id=\"contenido\">
        ";
        // line 18
        $this->displayBlock('contenido', $context, $blocks);
        // line 20
        echo "    </div>

    <div id=\"pie\">
        <div align=\"center\"></div>
    </div>
";
        
        $__internal_0adee153fae0def3421b60553afaf1203d2db762c5743e6dba5f2314dea8189e->leave($__internal_0adee153fae0def3421b60553afaf1203d2db762c5743e6dba5f2314dea8189e_prof);

    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_07bdc6df3c01483945b514d1008b0e21e9fcb2fa9a203c6a987ab4fa8b7fe931 = $this->env->getExtension("native_profiler");
        $__internal_07bdc6df3c01483945b514d1008b0e21e9fcb2fa9a203c6a987ab4fa8b7fe931->enter($__internal_07bdc6df3c01483945b514d1008b0e21e9fcb2fa9a203c6a987ab4fa8b7fe931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 19
        echo "        ";
        
        $__internal_07bdc6df3c01483945b514d1008b0e21e9fcb2fa9a203c6a987ab4fa8b7fe931->leave($__internal_07bdc6df3c01483945b514d1008b0e21e9fcb2fa9a203c6a987ab4fa8b7fe931_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 19,  95 => 18,  83 => 20,  81 => 18,  78 => 17,  72 => 16,  63 => 12,  57 => 11,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*  <link href="{{ asset('bundles/alimentos/estilo.css') }}" type="text/css" rel="stylesheet" />*/
/*   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/*   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* <meta charset="UTF-8">*/
/* {% endblock %}*/
/* */
/* */
/* {% block cabecera %}*/
/*     <div id="cabecera">*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="contenido">*/
/*         {% block contenido %}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div id="pie">*/
/*         <div align="center"></div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
