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
        $__internal_5b3d340ba6f820daa5d0b5013554db4e7d495909f31e037b51435747db2236e9 = $this->env->getExtension("native_profiler");
        $__internal_5b3d340ba6f820daa5d0b5013554db4e7d495909f31e037b51435747db2236e9->enter($__internal_5b3d340ba6f820daa5d0b5013554db4e7d495909f31e037b51435747db2236e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout.html.twig"));

        // line 2
        $context["__internal_0773a49de6419347b69d96a03d2892499e09381030eda8c56396da445eb29d6d"] = $this->loadTemplate("intranetBundle::macroMenu.html.twig", "intranetBundle::layout.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b3d340ba6f820daa5d0b5013554db4e7d495909f31e037b51435747db2236e9->leave($__internal_5b3d340ba6f820daa5d0b5013554db4e7d495909f31e037b51435747db2236e9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fccc0359f0fe97c19f7b16909154de50b586d8093fedb5bcdb502ad3da235a1c = $this->env->getExtension("native_profiler");
        $__internal_fccc0359f0fe97c19f7b16909154de50b586d8093fedb5bcdb502ad3da235a1c->enter($__internal_fccc0359f0fe97c19f7b16909154de50b586d8093fedb5bcdb502ad3da235a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fccc0359f0fe97c19f7b16909154de50b586d8093fedb5bcdb502ad3da235a1c->leave($__internal_fccc0359f0fe97c19f7b16909154de50b586d8093fedb5bcdb502ad3da235a1c_prof);

    }

    // line 14
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_638da823249c34a6adbdfd39c340875d93e437ffff4bec8952543776077aa934 = $this->env->getExtension("native_profiler");
        $__internal_638da823249c34a6adbdfd39c340875d93e437ffff4bec8952543776077aa934->enter($__internal_638da823249c34a6adbdfd39c340875d93e437ffff4bec8952543776077aa934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 15
        echo "    <div id=\"cabecera\">
      <h1>Here will be the image</h1>
    </div>
";
        
        $__internal_638da823249c34a6adbdfd39c340875d93e437ffff4bec8952543776077aa934->leave($__internal_638da823249c34a6adbdfd39c340875d93e437ffff4bec8952543776077aa934_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        $__internal_13b2ca537468818effe0a4e342fa558b854376484a7d2695fdf81efad2dff1c0 = $this->env->getExtension("native_profiler");
        $__internal_13b2ca537468818effe0a4e342fa558b854376484a7d2695fdf81efad2dff1c0->enter($__internal_13b2ca537468818effe0a4e342fa558b854376484a7d2695fdf81efad2dff1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 21
        echo "  ";
        // line 22
        echo "  ";
        // line 23
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("intranetBundle:Menu:menu"));
        echo "
";
        
        $__internal_13b2ca537468818effe0a4e342fa558b854376484a7d2695fdf81efad2dff1c0->leave($__internal_13b2ca537468818effe0a4e342fa558b854376484a7d2695fdf81efad2dff1c0_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_adf57c76a0f6ae500fa1efd27f50d7fade80f3995dfa44a1e54ebaba14e69acc = $this->env->getExtension("native_profiler");
        $__internal_adf57c76a0f6ae500fa1efd27f50d7fade80f3995dfa44a1e54ebaba14e69acc->enter($__internal_adf57c76a0f6ae500fa1efd27f50d7fade80f3995dfa44a1e54ebaba14e69acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_adf57c76a0f6ae500fa1efd27f50d7fade80f3995dfa44a1e54ebaba14e69acc->leave($__internal_adf57c76a0f6ae500fa1efd27f50d7fade80f3995dfa44a1e54ebaba14e69acc_prof);

    }

    // line 29
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_212435988578cfd341b43c44b971a0c1a0f08436c8548c11d75fcce259029b11 = $this->env->getExtension("native_profiler");
        $__internal_212435988578cfd341b43c44b971a0c1a0f08436c8548c11d75fcce259029b11->enter($__internal_212435988578cfd341b43c44b971a0c1a0f08436c8548c11d75fcce259029b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 30
        echo "        ";
        
        $__internal_212435988578cfd341b43c44b971a0c1a0f08436c8548c11d75fcce259029b11->leave($__internal_212435988578cfd341b43c44b971a0c1a0f08436c8548c11d75fcce259029b11_prof);

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
/*       <h1>Here will be the image</h1>*/
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
