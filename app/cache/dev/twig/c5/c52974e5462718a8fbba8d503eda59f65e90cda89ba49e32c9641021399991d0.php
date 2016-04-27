<?php

/* ::base.html.twig */
class __TwigTemplate_7d0498533d17d45f6f5451c2bae65f1bcdbb980dad869cb23998e9a9822078e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98fd236144d650f41eaa522cbe6f1dc1644c877ccaad560b41828f91f51b1f89 = $this->env->getExtension("native_profiler");
        $__internal_98fd236144d650f41eaa522cbe6f1dc1644c877ccaad560b41828f91f51b1f89->enter($__internal_98fd236144d650f41eaa522cbe6f1dc1644c877ccaad560b41828f91f51b1f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('cabecera', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_98fd236144d650f41eaa522cbe6f1dc1644c877ccaad560b41828f91f51b1f89->leave($__internal_98fd236144d650f41eaa522cbe6f1dc1644c877ccaad560b41828f91f51b1f89_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fc05a92d9a39daae15b8f4157d4d3075f0eac58e1dba089f2d87d630595e2f7 = $this->env->getExtension("native_profiler");
        $__internal_0fc05a92d9a39daae15b8f4157d4d3075f0eac58e1dba089f2d87d630595e2f7->enter($__internal_0fc05a92d9a39daae15b8f4157d4d3075f0eac58e1dba089f2d87d630595e2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Intranet WebCuisine";
        
        $__internal_0fc05a92d9a39daae15b8f4157d4d3075f0eac58e1dba089f2d87d630595e2f7->leave($__internal_0fc05a92d9a39daae15b8f4157d4d3075f0eac58e1dba089f2d87d630595e2f7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0805ef4447709ed97e73cf08964f267f55bfe5312fcf24f5428b89aacfcb0bfc = $this->env->getExtension("native_profiler");
        $__internal_0805ef4447709ed97e73cf08964f267f55bfe5312fcf24f5428b89aacfcb0bfc->enter($__internal_0805ef4447709ed97e73cf08964f267f55bfe5312fcf24f5428b89aacfcb0bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0805ef4447709ed97e73cf08964f267f55bfe5312fcf24f5428b89aacfcb0bfc->leave($__internal_0805ef4447709ed97e73cf08964f267f55bfe5312fcf24f5428b89aacfcb0bfc_prof);

    }

    // line 10
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_0bd7b346785a7c1dae8453adadea19928374e182715540da39c67e4768972271 = $this->env->getExtension("native_profiler");
        $__internal_0bd7b346785a7c1dae8453adadea19928374e182715540da39c67e4768972271->enter($__internal_0bd7b346785a7c1dae8453adadea19928374e182715540da39c67e4768972271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        
        $__internal_0bd7b346785a7c1dae8453adadea19928374e182715540da39c67e4768972271->leave($__internal_0bd7b346785a7c1dae8453adadea19928374e182715540da39c67e4768972271_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf5554ff6850f094c7d02ed1186e1e694b79c931b6051d9787c797604119e348 = $this->env->getExtension("native_profiler");
        $__internal_cf5554ff6850f094c7d02ed1186e1e694b79c931b6051d9787c797604119e348->enter($__internal_cf5554ff6850f094c7d02ed1186e1e694b79c931b6051d9787c797604119e348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_cf5554ff6850f094c7d02ed1186e1e694b79c931b6051d9787c797604119e348->leave($__internal_cf5554ff6850f094c7d02ed1186e1e694b79c931b6051d9787c797604119e348_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b9cca9c712ab54700824991b8d3ccedda4c25735df7adb752529aec5d3262cc = $this->env->getExtension("native_profiler");
        $__internal_8b9cca9c712ab54700824991b8d3ccedda4c25735df7adb752529aec5d3262cc->enter($__internal_8b9cca9c712ab54700824991b8d3ccedda4c25735df7adb752529aec5d3262cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b9cca9c712ab54700824991b8d3ccedda4c25735df7adb752529aec5d3262cc->leave($__internal_8b9cca9c712ab54700824991b8d3ccedda4c25735df7adb752529aec5d3262cc_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e610a8172f68818a643a08533b2cd3cb2b741df435da7bf353bb1b682d71a43 = $this->env->getExtension("native_profiler");
        $__internal_6e610a8172f68818a643a08533b2cd3cb2b741df435da7bf353bb1b682d71a43->enter($__internal_6e610a8172f68818a643a08533b2cd3cb2b741df435da7bf353bb1b682d71a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6e610a8172f68818a643a08533b2cd3cb2b741df435da7bf353bb1b682d71a43->leave($__internal_6e610a8172f68818a643a08533b2cd3cb2b741df435da7bf353bb1b682d71a43_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 13,  112 => 12,  101 => 11,  90 => 10,  79 => 6,  67 => 5,  58 => 14,  55 => 13,  52 => 12,  49 => 11,  47 => 10,  40 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Intranet WebCuisine{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block cabecera %}{% endblock %}*/
/*         {% block menu %}{% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
