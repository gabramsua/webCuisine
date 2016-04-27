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
        $__internal_80921ea6283e57c84aca914e0362024e73bdbe2b04b24f7c4a5f6110af911f7f = $this->env->getExtension("native_profiler");
        $__internal_80921ea6283e57c84aca914e0362024e73bdbe2b04b24f7c4a5f6110af911f7f->enter($__internal_80921ea6283e57c84aca914e0362024e73bdbe2b04b24f7c4a5f6110af911f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80921ea6283e57c84aca914e0362024e73bdbe2b04b24f7c4a5f6110af911f7f->leave($__internal_80921ea6283e57c84aca914e0362024e73bdbe2b04b24f7c4a5f6110af911f7f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a2eda84b69bb8a1c0653f34a730b491f1023590afb4b9710aa68f6c2076698a3 = $this->env->getExtension("native_profiler");
        $__internal_a2eda84b69bb8a1c0653f34a730b491f1023590afb4b9710aa68f6c2076698a3->enter($__internal_a2eda84b69bb8a1c0653f34a730b491f1023590afb4b9710aa68f6c2076698a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/alimentos/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<meta charset=\"UTF-8\">
";
        
        $__internal_a2eda84b69bb8a1c0653f34a730b491f1023590afb4b9710aa68f6c2076698a3->leave($__internal_a2eda84b69bb8a1c0653f34a730b491f1023590afb4b9710aa68f6c2076698a3_prof);

    }

    // line 11
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_3e5a1cbe6a6d3105ad9826c186d84519c9c872f67ff1cde8830d1d6b814b007e = $this->env->getExtension("native_profiler");
        $__internal_3e5a1cbe6a6d3105ad9826c186d84519c9c872f67ff1cde8830d1d6b814b007e->enter($__internal_3e5a1cbe6a6d3105ad9826c186d84519c9c872f67ff1cde8830d1d6b814b007e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 12
        echo "    <div id=\"cabecera\">
    </div>
";
        
        $__internal_3e5a1cbe6a6d3105ad9826c186d84519c9c872f67ff1cde8830d1d6b814b007e->leave($__internal_3e5a1cbe6a6d3105ad9826c186d84519c9c872f67ff1cde8830d1d6b814b007e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3bc6e2cb171ca537826df5f8e7dfb77e3612b21f8f69141bf7645f8b7c0fea7 = $this->env->getExtension("native_profiler");
        $__internal_e3bc6e2cb171ca537826df5f8e7dfb77e3612b21f8f69141bf7645f8b7c0fea7->enter($__internal_e3bc6e2cb171ca537826df5f8e7dfb77e3612b21f8f69141bf7645f8b7c0fea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e3bc6e2cb171ca537826df5f8e7dfb77e3612b21f8f69141bf7645f8b7c0fea7->leave($__internal_e3bc6e2cb171ca537826df5f8e7dfb77e3612b21f8f69141bf7645f8b7c0fea7_prof);

    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_a4d3d93f4fab9103ed51a305931ecb9542a3394e833dfe84bae6eb2972bc11d8 = $this->env->getExtension("native_profiler");
        $__internal_a4d3d93f4fab9103ed51a305931ecb9542a3394e833dfe84bae6eb2972bc11d8->enter($__internal_a4d3d93f4fab9103ed51a305931ecb9542a3394e833dfe84bae6eb2972bc11d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 19
        echo "        ";
        
        $__internal_a4d3d93f4fab9103ed51a305931ecb9542a3394e833dfe84bae6eb2972bc11d8->leave($__internal_a4d3d93f4fab9103ed51a305931ecb9542a3394e833dfe84bae6eb2972bc11d8_prof);

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
