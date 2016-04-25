<?php

/* base.html.twig */
class __TwigTemplate_d5310164c774d46ba162070dc23777d0e62465ae58eb90f05524afa352e76af3 extends Twig_Template
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
        $__internal_19939872df39e09a5a026b4c22d3a5d998a9ad636d691260ed025762abea5866 = $this->env->getExtension("native_profiler");
        $__internal_19939872df39e09a5a026b4c22d3a5d998a9ad636d691260ed025762abea5866->enter($__internal_19939872df39e09a5a026b4c22d3a5d998a9ad636d691260ed025762abea5866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_19939872df39e09a5a026b4c22d3a5d998a9ad636d691260ed025762abea5866->leave($__internal_19939872df39e09a5a026b4c22d3a5d998a9ad636d691260ed025762abea5866_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_483f04bfb63c051aadee7a839815513b98834b436a11f29ffd4be8f632892c72 = $this->env->getExtension("native_profiler");
        $__internal_483f04bfb63c051aadee7a839815513b98834b436a11f29ffd4be8f632892c72->enter($__internal_483f04bfb63c051aadee7a839815513b98834b436a11f29ffd4be8f632892c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Intranet WebCuisine";
        
        $__internal_483f04bfb63c051aadee7a839815513b98834b436a11f29ffd4be8f632892c72->leave($__internal_483f04bfb63c051aadee7a839815513b98834b436a11f29ffd4be8f632892c72_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1eed4a6c8cbbcbffaa4c0d9cc27cd6c708f601fb8b53b4a780ea96417f92d8ef = $this->env->getExtension("native_profiler");
        $__internal_1eed4a6c8cbbcbffaa4c0d9cc27cd6c708f601fb8b53b4a780ea96417f92d8ef->enter($__internal_1eed4a6c8cbbcbffaa4c0d9cc27cd6c708f601fb8b53b4a780ea96417f92d8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1eed4a6c8cbbcbffaa4c0d9cc27cd6c708f601fb8b53b4a780ea96417f92d8ef->leave($__internal_1eed4a6c8cbbcbffaa4c0d9cc27cd6c708f601fb8b53b4a780ea96417f92d8ef_prof);

    }

    // line 10
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_68cc5180d8312828b5cbea0768c9847879c7ca791c8a429b81245e9f178f3017 = $this->env->getExtension("native_profiler");
        $__internal_68cc5180d8312828b5cbea0768c9847879c7ca791c8a429b81245e9f178f3017->enter($__internal_68cc5180d8312828b5cbea0768c9847879c7ca791c8a429b81245e9f178f3017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        
        $__internal_68cc5180d8312828b5cbea0768c9847879c7ca791c8a429b81245e9f178f3017->leave($__internal_68cc5180d8312828b5cbea0768c9847879c7ca791c8a429b81245e9f178f3017_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae4feec4ef9d2dfa1c260965906b46def57d04074dd1362cc2176cec31d239d6 = $this->env->getExtension("native_profiler");
        $__internal_ae4feec4ef9d2dfa1c260965906b46def57d04074dd1362cc2176cec31d239d6->enter($__internal_ae4feec4ef9d2dfa1c260965906b46def57d04074dd1362cc2176cec31d239d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_ae4feec4ef9d2dfa1c260965906b46def57d04074dd1362cc2176cec31d239d6->leave($__internal_ae4feec4ef9d2dfa1c260965906b46def57d04074dd1362cc2176cec31d239d6_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae0a32c28cfcbd8c1b1a8d1e8624c4bad37af71d64823465f33ffea687ab1ffd = $this->env->getExtension("native_profiler");
        $__internal_ae0a32c28cfcbd8c1b1a8d1e8624c4bad37af71d64823465f33ffea687ab1ffd->enter($__internal_ae0a32c28cfcbd8c1b1a8d1e8624c4bad37af71d64823465f33ffea687ab1ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae0a32c28cfcbd8c1b1a8d1e8624c4bad37af71d64823465f33ffea687ab1ffd->leave($__internal_ae0a32c28cfcbd8c1b1a8d1e8624c4bad37af71d64823465f33ffea687ab1ffd_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_704555aedf878d66f274a253a0403496797220750243a6ab5874cce5424ee3ef = $this->env->getExtension("native_profiler");
        $__internal_704555aedf878d66f274a253a0403496797220750243a6ab5874cce5424ee3ef->enter($__internal_704555aedf878d66f274a253a0403496797220750243a6ab5874cce5424ee3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_704555aedf878d66f274a253a0403496797220750243a6ab5874cce5424ee3ef->leave($__internal_704555aedf878d66f274a253a0403496797220750243a6ab5874cce5424ee3ef_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
