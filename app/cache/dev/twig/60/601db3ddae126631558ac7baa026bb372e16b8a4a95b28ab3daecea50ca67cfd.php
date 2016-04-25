<?php

/* @intranet/layout2.html.twig */
class __TwigTemplate_f19227370ff7b2f2579eb0ddd9d9e14e2af4e03044cbc5cc7ac4187c834946c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@intranet/layout2.html.twig", 1);
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
        $__internal_e197fab0f6ee364a480a59e71daca23e499d7d2dc76c55e7b56d09cd26cbc9ce = $this->env->getExtension("native_profiler");
        $__internal_e197fab0f6ee364a480a59e71daca23e499d7d2dc76c55e7b56d09cd26cbc9ce->enter($__internal_e197fab0f6ee364a480a59e71daca23e499d7d2dc76c55e7b56d09cd26cbc9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e197fab0f6ee364a480a59e71daca23e499d7d2dc76c55e7b56d09cd26cbc9ce->leave($__internal_e197fab0f6ee364a480a59e71daca23e499d7d2dc76c55e7b56d09cd26cbc9ce_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9df839121082cd11ac51d78831da9b8501cb805d594ca166d9cda742018370b0 = $this->env->getExtension("native_profiler");
        $__internal_9df839121082cd11ac51d78831da9b8501cb805d594ca166d9cda742018370b0->enter($__internal_9df839121082cd11ac51d78831da9b8501cb805d594ca166d9cda742018370b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9df839121082cd11ac51d78831da9b8501cb805d594ca166d9cda742018370b0->leave($__internal_9df839121082cd11ac51d78831da9b8501cb805d594ca166d9cda742018370b0_prof);

    }

    // line 12
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_c5e19a851040c748dbc58ec481f0d3af3e6cd384a35e1e51926ee00a45762d58 = $this->env->getExtension("native_profiler");
        $__internal_c5e19a851040c748dbc58ec481f0d3af3e6cd384a35e1e51926ee00a45762d58->enter($__internal_c5e19a851040c748dbc58ec481f0d3af3e6cd384a35e1e51926ee00a45762d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 13
        echo "    <div id=\"cabecera\">
      <!--<h1>Aquí irá la imagen de la cabecera</h1>-->
    </div>
";
        
        $__internal_c5e19a851040c748dbc58ec481f0d3af3e6cd384a35e1e51926ee00a45762d58->leave($__internal_c5e19a851040c748dbc58ec481f0d3af3e6cd384a35e1e51926ee00a45762d58_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_d17343ae5f25694d2efa207f290af4df3bd06d2baf81e45cd75a610f174567ef = $this->env->getExtension("native_profiler");
        $__internal_d17343ae5f25694d2efa207f290af4df3bd06d2baf81e45cd75a610f174567ef->enter($__internal_d17343ae5f25694d2efa207f290af4df3bd06d2baf81e45cd75a610f174567ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div id=\"contenido\">
        ";
        // line 20
        $this->displayBlock('contenido', $context, $blocks);
        // line 22
        echo "    </div>

    <div id=\"pie\">
        <hr/>
        <div align=\"center\">- pie de página -</div>
    </div>
";
        
        $__internal_d17343ae5f25694d2efa207f290af4df3bd06d2baf81e45cd75a610f174567ef->leave($__internal_d17343ae5f25694d2efa207f290af4df3bd06d2baf81e45cd75a610f174567ef_prof);

    }

    // line 20
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1131ec8dc10759882a048090e27a9a9764061313643da2ab0df9844fb2ceb6c6 = $this->env->getExtension("native_profiler");
        $__internal_1131ec8dc10759882a048090e27a9a9764061313643da2ab0df9844fb2ceb6c6->enter($__internal_1131ec8dc10759882a048090e27a9a9764061313643da2ab0df9844fb2ceb6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 21
        echo "        ";
        
        $__internal_1131ec8dc10759882a048090e27a9a9764061313643da2ab0df9844fb2ceb6c6->leave($__internal_1131ec8dc10759882a048090e27a9a9764061313643da2ab0df9844fb2ceb6c6_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 21,  99 => 20,  86 => 22,  84 => 20,  81 => 19,  75 => 18,  65 => 13,  59 => 12,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
/*         <hr/>*/
/*         <div align="center">- pie de página -</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
