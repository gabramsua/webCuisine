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
        $__internal_f2f21959daf35714db0da8bcbe969c5997317179f79a86307720c33a84c6f540 = $this->env->getExtension("native_profiler");
        $__internal_f2f21959daf35714db0da8bcbe969c5997317179f79a86307720c33a84c6f540->enter($__internal_f2f21959daf35714db0da8bcbe969c5997317179f79a86307720c33a84c6f540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2f21959daf35714db0da8bcbe969c5997317179f79a86307720c33a84c6f540->leave($__internal_f2f21959daf35714db0da8bcbe969c5997317179f79a86307720c33a84c6f540_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec832045d6b66623c1dfe01f93472ca2a6a2c95b987407ca01efdb60da0e7644 = $this->env->getExtension("native_profiler");
        $__internal_ec832045d6b66623c1dfe01f93472ca2a6a2c95b987407ca01efdb60da0e7644->enter($__internal_ec832045d6b66623c1dfe01f93472ca2a6a2c95b987407ca01efdb60da0e7644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/alimentos/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<meta charset=\"UTF-8\">
";
        
        $__internal_ec832045d6b66623c1dfe01f93472ca2a6a2c95b987407ca01efdb60da0e7644->leave($__internal_ec832045d6b66623c1dfe01f93472ca2a6a2c95b987407ca01efdb60da0e7644_prof);

    }

    // line 11
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_5d7754b60f8019f621e389175f8cd3ce51bcae6eba024ad9b4e00462f33cb66f = $this->env->getExtension("native_profiler");
        $__internal_5d7754b60f8019f621e389175f8cd3ce51bcae6eba024ad9b4e00462f33cb66f->enter($__internal_5d7754b60f8019f621e389175f8cd3ce51bcae6eba024ad9b4e00462f33cb66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 12
        echo "    <div id=\"cabecera\">
    </div>
";
        
        $__internal_5d7754b60f8019f621e389175f8cd3ce51bcae6eba024ad9b4e00462f33cb66f->leave($__internal_5d7754b60f8019f621e389175f8cd3ce51bcae6eba024ad9b4e00462f33cb66f_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_2927dcb12b3af770cd1a5bf86b61aa91437a1909e80dfb1817ea1ea237fcac1c = $this->env->getExtension("native_profiler");
        $__internal_2927dcb12b3af770cd1a5bf86b61aa91437a1909e80dfb1817ea1ea237fcac1c->enter($__internal_2927dcb12b3af770cd1a5bf86b61aa91437a1909e80dfb1817ea1ea237fcac1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2927dcb12b3af770cd1a5bf86b61aa91437a1909e80dfb1817ea1ea237fcac1c->leave($__internal_2927dcb12b3af770cd1a5bf86b61aa91437a1909e80dfb1817ea1ea237fcac1c_prof);

    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_0944681d85c8c6402a74fd1e8d0d4e3362936e7f182969572c280e8201f4abf1 = $this->env->getExtension("native_profiler");
        $__internal_0944681d85c8c6402a74fd1e8d0d4e3362936e7f182969572c280e8201f4abf1->enter($__internal_0944681d85c8c6402a74fd1e8d0d4e3362936e7f182969572c280e8201f4abf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 19
        echo "        ";
        
        $__internal_0944681d85c8c6402a74fd1e8d0d4e3362936e7f182969572c280e8201f4abf1->leave($__internal_0944681d85c8c6402a74fd1e8d0d4e3362936e7f182969572c280e8201f4abf1_prof);

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
