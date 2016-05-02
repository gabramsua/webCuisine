<?php

/* intranetBundle::layout.html.twig */
class __TwigTemplate_8da637489a513cb6fcaf85388d5b2da144d45b22e8b32932ba2ce8fbec9b2b1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "intranetBundle::layout.html.twig", 1);
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
        $__internal_352e4398eaecb22b0fd8c8c5e4657f9852d6a1d67ee65fc76669ed74e8f465f9 = $this->env->getExtension("native_profiler");
        $__internal_352e4398eaecb22b0fd8c8c5e4657f9852d6a1d67ee65fc76669ed74e8f465f9->enter($__internal_352e4398eaecb22b0fd8c8c5e4657f9852d6a1d67ee65fc76669ed74e8f465f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout.html.twig"));

        // line 2
        $context["__internal_4669837f2b3b623462be1dced95e0299dad286c13c50d338cff88834f104f11c"] = $this->loadTemplate("intranetBundle::macroMenu.html.twig", "intranetBundle::layout.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_352e4398eaecb22b0fd8c8c5e4657f9852d6a1d67ee65fc76669ed74e8f465f9->leave($__internal_352e4398eaecb22b0fd8c8c5e4657f9852d6a1d67ee65fc76669ed74e8f465f9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e8e1bef36483e3bc4b322c2492258a94194e6bc8f35379d2b1c86c10ab2a1a7 = $this->env->getExtension("native_profiler");
        $__internal_3e8e1bef36483e3bc4b322c2492258a94194e6bc8f35379d2b1c86c10ab2a1a7->enter($__internal_3e8e1bef36483e3bc4b322c2492258a94194e6bc8f35379d2b1c86c10ab2a1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<!-- ESTA CARPETA NO ESTÁ CREADA AÚN -->
 <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/alimentos/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<meta charset=\"UTF-8\">
";
        
        $__internal_3e8e1bef36483e3bc4b322c2492258a94194e6bc8f35379d2b1c86c10ab2a1a7->leave($__internal_3e8e1bef36483e3bc4b322c2492258a94194e6bc8f35379d2b1c86c10ab2a1a7_prof);

    }

    // line 14
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_608108ace8f2c15b67c578a68c7ad8c914ed76f877dc71bbe860e3a6f6d0ba43 = $this->env->getExtension("native_profiler");
        $__internal_608108ace8f2c15b67c578a68c7ad8c914ed76f877dc71bbe860e3a6f6d0ba43->enter($__internal_608108ace8f2c15b67c578a68c7ad8c914ed76f877dc71bbe860e3a6f6d0ba43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 15
        echo "    <div id=\"cabecera\">
      <h1>Aquí irá la imagen de la cabecera</h1>
    </div>
";
        
        $__internal_608108ace8f2c15b67c578a68c7ad8c914ed76f877dc71bbe860e3a6f6d0ba43->leave($__internal_608108ace8f2c15b67c578a68c7ad8c914ed76f877dc71bbe860e3a6f6d0ba43_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        $__internal_690b4dcf393081e2574bdfb1ba7b9935ace71ff91d42e64d6844255b4c07fb3c = $this->env->getExtension("native_profiler");
        $__internal_690b4dcf393081e2574bdfb1ba7b9935ace71ff91d42e64d6844255b4c07fb3c->enter($__internal_690b4dcf393081e2574bdfb1ba7b9935ace71ff91d42e64d6844255b4c07fb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 21
        echo "  ";
        // line 22
        echo "  ";
        // line 23
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("intranetBundle:Menu:menu"));
        echo "
";
        
        $__internal_690b4dcf393081e2574bdfb1ba7b9935ace71ff91d42e64d6844255b4c07fb3c->leave($__internal_690b4dcf393081e2574bdfb1ba7b9935ace71ff91d42e64d6844255b4c07fb3c_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dda9c5a0479ab817da72d8dcca54ef38296a54fe823809e96f7f55ca8ac881a = $this->env->getExtension("native_profiler");
        $__internal_7dda9c5a0479ab817da72d8dcca54ef38296a54fe823809e96f7f55ca8ac881a->enter($__internal_7dda9c5a0479ab817da72d8dcca54ef38296a54fe823809e96f7f55ca8ac881a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <div id=\"contenido\">
        ";
        // line 29
        $this->displayBlock('contenido', $context, $blocks);
        // line 31
        echo "    </div>

    <div id=\"pie\">
        <hr/>
        <div align=\"center\">- pie de página -</div>
    </div>
";
        
        $__internal_7dda9c5a0479ab817da72d8dcca54ef38296a54fe823809e96f7f55ca8ac881a->leave($__internal_7dda9c5a0479ab817da72d8dcca54ef38296a54fe823809e96f7f55ca8ac881a_prof);

    }

    // line 29
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ed91f9e5bb272ebafcfabf936fbb815f5350bcc308c99f7940b3dc51385a56a2 = $this->env->getExtension("native_profiler");
        $__internal_ed91f9e5bb272ebafcfabf936fbb815f5350bcc308c99f7940b3dc51385a56a2->enter($__internal_ed91f9e5bb272ebafcfabf936fbb815f5350bcc308c99f7940b3dc51385a56a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 30
        echo "        ";
        
        $__internal_ed91f9e5bb272ebafcfabf936fbb815f5350bcc308c99f7940b3dc51385a56a2->leave($__internal_ed91f9e5bb272ebafcfabf936fbb815f5350bcc308c99f7940b3dc51385a56a2_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 30,  123 => 29,  110 => 31,  108 => 29,  105 => 28,  99 => 27,  89 => 23,  87 => 22,  85 => 21,  79 => 20,  69 => 15,  63 => 14,  50 => 6,  47 => 5,  41 => 4,  34 => 1,  32 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% from 'intranetBundle::macroMenu.html.twig' import uROL %}*/
/* */
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
/*   {#{% include '::menu.html.twig' %}#}*/
/*   {# {{ uROL('buo') }} #}*/
/*   {{ render(controller('intranetBundle:Menu:menu')) }}*/
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
