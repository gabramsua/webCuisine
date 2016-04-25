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
        $__internal_f9b053d0a5afa71f637a43545dd667bf10ac71525926f8d2bad405c67beefedb = $this->env->getExtension("native_profiler");
        $__internal_f9b053d0a5afa71f637a43545dd667bf10ac71525926f8d2bad405c67beefedb->enter($__internal_f9b053d0a5afa71f637a43545dd667bf10ac71525926f8d2bad405c67beefedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9b053d0a5afa71f637a43545dd667bf10ac71525926f8d2bad405c67beefedb->leave($__internal_f9b053d0a5afa71f637a43545dd667bf10ac71525926f8d2bad405c67beefedb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74add9f024332c2db48d4d845a81f9fd0b74278adeaf8351c526c9e1c8843a24 = $this->env->getExtension("native_profiler");
        $__internal_74add9f024332c2db48d4d845a81f9fd0b74278adeaf8351c526c9e1c8843a24->enter($__internal_74add9f024332c2db48d4d845a81f9fd0b74278adeaf8351c526c9e1c8843a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<!-- ESTA CARPETA NO ESTÁ CREADA AÚN -->
 <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/alimentos/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<meta charset=\"UTF-8\">
";
        
        $__internal_74add9f024332c2db48d4d845a81f9fd0b74278adeaf8351c526c9e1c8843a24->leave($__internal_74add9f024332c2db48d4d845a81f9fd0b74278adeaf8351c526c9e1c8843a24_prof);

    }

    // line 12
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_2edc86278cef227599dbf6fd961127b8ee9b3c14f52cfeec20724996eeb6abbb = $this->env->getExtension("native_profiler");
        $__internal_2edc86278cef227599dbf6fd961127b8ee9b3c14f52cfeec20724996eeb6abbb->enter($__internal_2edc86278cef227599dbf6fd961127b8ee9b3c14f52cfeec20724996eeb6abbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 13
        echo "    <div id=\"cabecera\">
      <!--<h1>Aquí irá la imagen de la cabecera</h1>-->
    </div>
";
        
        $__internal_2edc86278cef227599dbf6fd961127b8ee9b3c14f52cfeec20724996eeb6abbb->leave($__internal_2edc86278cef227599dbf6fd961127b8ee9b3c14f52cfeec20724996eeb6abbb_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca941d51a8b631e62dd41d9ffa6603b933d24fd0c23555377742b4dce5833906 = $this->env->getExtension("native_profiler");
        $__internal_ca941d51a8b631e62dd41d9ffa6603b933d24fd0c23555377742b4dce5833906->enter($__internal_ca941d51a8b631e62dd41d9ffa6603b933d24fd0c23555377742b4dce5833906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div id=\"contenido\">
        ";
        // line 20
        $this->displayBlock('contenido', $context, $blocks);
        // line 22
        echo "    </div>

    <div id=\"pie\">
        <div align=\"center\"><!-- Aquí el pie de página --></div>
    </div>
";
        
        $__internal_ca941d51a8b631e62dd41d9ffa6603b933d24fd0c23555377742b4dce5833906->leave($__internal_ca941d51a8b631e62dd41d9ffa6603b933d24fd0c23555377742b4dce5833906_prof);

    }

    // line 20
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_0cd0620f3f671b6bed8f8928ad99d4152a95752dc0d48e5f149fc7ba37c8b6ae = $this->env->getExtension("native_profiler");
        $__internal_0cd0620f3f671b6bed8f8928ad99d4152a95752dc0d48e5f149fc7ba37c8b6ae->enter($__internal_0cd0620f3f671b6bed8f8928ad99d4152a95752dc0d48e5f149fc7ba37c8b6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 21
        echo "        ";
        
        $__internal_0cd0620f3f671b6bed8f8928ad99d4152a95752dc0d48e5f149fc7ba37c8b6ae->leave($__internal_0cd0620f3f671b6bed8f8928ad99d4152a95752dc0d48e5f149fc7ba37c8b6ae_prof);

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
        return array (  104 => 21,  98 => 20,  86 => 22,  84 => 20,  81 => 19,  75 => 18,  65 => 13,  59 => 12,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
/* <!-- ESTA CARPETA NO ESTÁ CREADA AÚN -->*/
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
/*       <!--<h1>Aquí irá la imagen de la cabecera</h1>-->*/
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
/*         <div align="center"><!-- Aquí el pie de página --></div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
