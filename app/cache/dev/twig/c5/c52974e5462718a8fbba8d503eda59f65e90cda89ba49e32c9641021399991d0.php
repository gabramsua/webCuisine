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
        $__internal_aac6bc09eb8eec613f853f5b8da1bf9cb580ef071a044eeb309560670fe8ca8e = $this->env->getExtension("native_profiler");
        $__internal_aac6bc09eb8eec613f853f5b8da1bf9cb580ef071a044eeb309560670fe8ca8e->enter($__internal_aac6bc09eb8eec613f853f5b8da1bf9cb580ef071a044eeb309560670fe8ca8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_aac6bc09eb8eec613f853f5b8da1bf9cb580ef071a044eeb309560670fe8ca8e->leave($__internal_aac6bc09eb8eec613f853f5b8da1bf9cb580ef071a044eeb309560670fe8ca8e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ccacbe6982efb242f0d05bc32167b7db84b62feb531efac51eda748c00f7810 = $this->env->getExtension("native_profiler");
        $__internal_5ccacbe6982efb242f0d05bc32167b7db84b62feb531efac51eda748c00f7810->enter($__internal_5ccacbe6982efb242f0d05bc32167b7db84b62feb531efac51eda748c00f7810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Intranet WebCuisine";
        
        $__internal_5ccacbe6982efb242f0d05bc32167b7db84b62feb531efac51eda748c00f7810->leave($__internal_5ccacbe6982efb242f0d05bc32167b7db84b62feb531efac51eda748c00f7810_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be494278b9b97817cc30436eef8ed5bbc41bbea241398e336793376a58e540f3 = $this->env->getExtension("native_profiler");
        $__internal_be494278b9b97817cc30436eef8ed5bbc41bbea241398e336793376a58e540f3->enter($__internal_be494278b9b97817cc30436eef8ed5bbc41bbea241398e336793376a58e540f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_be494278b9b97817cc30436eef8ed5bbc41bbea241398e336793376a58e540f3->leave($__internal_be494278b9b97817cc30436eef8ed5bbc41bbea241398e336793376a58e540f3_prof);

    }

    // line 10
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_d45065967481819e23a8e98d0d26f4af87751bda2dabb2863f7e8a00a15d355c = $this->env->getExtension("native_profiler");
        $__internal_d45065967481819e23a8e98d0d26f4af87751bda2dabb2863f7e8a00a15d355c->enter($__internal_d45065967481819e23a8e98d0d26f4af87751bda2dabb2863f7e8a00a15d355c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        
        $__internal_d45065967481819e23a8e98d0d26f4af87751bda2dabb2863f7e8a00a15d355c->leave($__internal_d45065967481819e23a8e98d0d26f4af87751bda2dabb2863f7e8a00a15d355c_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f0b04a26c223bcae2b427248ff42d8b0c1d239d9935e837cfaff1e6ba64ba0c = $this->env->getExtension("native_profiler");
        $__internal_6f0b04a26c223bcae2b427248ff42d8b0c1d239d9935e837cfaff1e6ba64ba0c->enter($__internal_6f0b04a26c223bcae2b427248ff42d8b0c1d239d9935e837cfaff1e6ba64ba0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_6f0b04a26c223bcae2b427248ff42d8b0c1d239d9935e837cfaff1e6ba64ba0c->leave($__internal_6f0b04a26c223bcae2b427248ff42d8b0c1d239d9935e837cfaff1e6ba64ba0c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c4f0200557da0d90d69204f7e53f8b650b847a467a03a8caf126bf0304faf01 = $this->env->getExtension("native_profiler");
        $__internal_3c4f0200557da0d90d69204f7e53f8b650b847a467a03a8caf126bf0304faf01->enter($__internal_3c4f0200557da0d90d69204f7e53f8b650b847a467a03a8caf126bf0304faf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3c4f0200557da0d90d69204f7e53f8b650b847a467a03a8caf126bf0304faf01->leave($__internal_3c4f0200557da0d90d69204f7e53f8b650b847a467a03a8caf126bf0304faf01_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11dadf805ada770dde31cef8bff397d6032e2179da31ba54c8754d97187e5ebc = $this->env->getExtension("native_profiler");
        $__internal_11dadf805ada770dde31cef8bff397d6032e2179da31ba54c8754d97187e5ebc->enter($__internal_11dadf805ada770dde31cef8bff397d6032e2179da31ba54c8754d97187e5ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_11dadf805ada770dde31cef8bff397d6032e2179da31ba54c8754d97187e5ebc->leave($__internal_11dadf805ada770dde31cef8bff397d6032e2179da31ba54c8754d97187e5ebc_prof);

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
