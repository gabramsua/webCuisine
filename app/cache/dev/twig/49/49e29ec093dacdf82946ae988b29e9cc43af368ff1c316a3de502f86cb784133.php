<?php

/* @intranet/layout.html.twig */
class __TwigTemplate_e38062bbcaf42b4dd29a6df31a0f14503c9eb98a49e2e89204eb5b81320a13ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@intranet/layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'menu' => array($this, 'block_menu'),
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
        $__internal_2b66c249f1350ee63b70fa6fff11b973bde19f2456fa54f3d24bde4cf40b1c07 = $this->env->getExtension("native_profiler");
        $__internal_2b66c249f1350ee63b70fa6fff11b973bde19f2456fa54f3d24bde4cf40b1c07->enter($__internal_2b66c249f1350ee63b70fa6fff11b973bde19f2456fa54f3d24bde4cf40b1c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b66c249f1350ee63b70fa6fff11b973bde19f2456fa54f3d24bde4cf40b1c07->leave($__internal_2b66c249f1350ee63b70fa6fff11b973bde19f2456fa54f3d24bde4cf40b1c07_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be46f29263a4222c8f229e997366745b0505a8a4c61c300443c8efde3f082abb = $this->env->getExtension("native_profiler");
        $__internal_be46f29263a4222c8f229e997366745b0505a8a4c61c300443c8efde3f082abb->enter($__internal_be46f29263a4222c8f229e997366745b0505a8a4c61c300443c8efde3f082abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_be46f29263a4222c8f229e997366745b0505a8a4c61c300443c8efde3f082abb->leave($__internal_be46f29263a4222c8f229e997366745b0505a8a4c61c300443c8efde3f082abb_prof);

    }

    // line 12
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_a8b125ceb9317e9beeefc4ceaf384ef30679c9e4eeb20239266d619a1bb37e5a = $this->env->getExtension("native_profiler");
        $__internal_a8b125ceb9317e9beeefc4ceaf384ef30679c9e4eeb20239266d619a1bb37e5a->enter($__internal_a8b125ceb9317e9beeefc4ceaf384ef30679c9e4eeb20239266d619a1bb37e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 13
        echo "    <div id=\"cabecera\">
      <h1>Aquí irá la imagen de la cabecera</h1>
    </div>
";
        
        $__internal_a8b125ceb9317e9beeefc4ceaf384ef30679c9e4eeb20239266d619a1bb37e5a->leave($__internal_a8b125ceb9317e9beeefc4ceaf384ef30679c9e4eeb20239266d619a1bb37e5a_prof);

    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b33a852b47a1876e7aa07f54e14f4ff42e7e5c290cb3b434b1cbd772bb2c2942 = $this->env->getExtension("native_profiler");
        $__internal_b33a852b47a1876e7aa07f54e14f4ff42e7e5c290cb3b434b1cbd772bb2c2942->enter($__internal_b33a852b47a1876e7aa07f54e14f4ff42e7e5c290cb3b434b1cbd772bb2c2942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 19
        echo "  ";
        $this->loadTemplate("::menu.html.twig", "@intranet/layout.html.twig", 19)->display($context);
        
        $__internal_b33a852b47a1876e7aa07f54e14f4ff42e7e5c290cb3b434b1cbd772bb2c2942->leave($__internal_b33a852b47a1876e7aa07f54e14f4ff42e7e5c290cb3b434b1cbd772bb2c2942_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_130ca73a5206714dec0723eca5db3c47b896ecab6a98b9583871450511c83d88 = $this->env->getExtension("native_profiler");
        $__internal_130ca73a5206714dec0723eca5db3c47b896ecab6a98b9583871450511c83d88->enter($__internal_130ca73a5206714dec0723eca5db3c47b896ecab6a98b9583871450511c83d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "    <div id=\"contenido\">
        ";
        // line 25
        $this->displayBlock('contenido', $context, $blocks);
        // line 27
        echo "    </div>

    <div id=\"pie\">
        <hr/>
        <div align=\"center\">- pie de página -</div>
    </div>
";
        
        $__internal_130ca73a5206714dec0723eca5db3c47b896ecab6a98b9583871450511c83d88->leave($__internal_130ca73a5206714dec0723eca5db3c47b896ecab6a98b9583871450511c83d88_prof);

    }

    // line 25
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_88e3a29d1ca36b885c5e25d178e943df4419f5d3d737c2f472d8e374184fe2f4 = $this->env->getExtension("native_profiler");
        $__internal_88e3a29d1ca36b885c5e25d178e943df4419f5d3d737c2f472d8e374184fe2f4->enter($__internal_88e3a29d1ca36b885c5e25d178e943df4419f5d3d737c2f472d8e374184fe2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 26
        echo "        ";
        
        $__internal_88e3a29d1ca36b885c5e25d178e943df4419f5d3d737c2f472d8e374184fe2f4->leave($__internal_88e3a29d1ca36b885c5e25d178e943df4419f5d3d737c2f472d8e374184fe2f4_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 26,  114 => 25,  101 => 27,  99 => 25,  96 => 24,  90 => 23,  82 => 19,  76 => 18,  66 => 13,  60 => 12,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
/*       <h1>Aquí irá la imagen de la cabecera</h1>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*   {% include '::menu.html.twig' %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <div id="contenido">*/
/*         {% block contenido %}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div id="pie">*/
/*         <hr/>*/
/*         <div align="center">- pie de página -</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
