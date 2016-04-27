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
        $__internal_2d2dc2d3a11fbc24a75fff06d1ca7f11d6c5fd2d22737f0a60812425cf596f70 = $this->env->getExtension("native_profiler");
        $__internal_2d2dc2d3a11fbc24a75fff06d1ca7f11d6c5fd2d22737f0a60812425cf596f70->enter($__internal_2d2dc2d3a11fbc24a75fff06d1ca7f11d6c5fd2d22737f0a60812425cf596f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout.html.twig"));

        // line 2
        $context["__internal_14a276a2895efadb930f136029c303622821b792196fc1b78beb82b61e8d3095"] = $this->loadTemplate("intranetBundle::macroMenu.html.twig", "intranetBundle::layout.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d2dc2d3a11fbc24a75fff06d1ca7f11d6c5fd2d22737f0a60812425cf596f70->leave($__internal_2d2dc2d3a11fbc24a75fff06d1ca7f11d6c5fd2d22737f0a60812425cf596f70_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f259230b2d7276b7f5b9bb617d15246a9e474f83671613b073a4699dea3208f = $this->env->getExtension("native_profiler");
        $__internal_5f259230b2d7276b7f5b9bb617d15246a9e474f83671613b073a4699dea3208f->enter($__internal_5f259230b2d7276b7f5b9bb617d15246a9e474f83671613b073a4699dea3208f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5f259230b2d7276b7f5b9bb617d15246a9e474f83671613b073a4699dea3208f->leave($__internal_5f259230b2d7276b7f5b9bb617d15246a9e474f83671613b073a4699dea3208f_prof);

    }

    // line 14
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_eaa01c2ceee1e78852b0fd8c3e7eff8c29616f5617d6c3c9c9f5a6122407b564 = $this->env->getExtension("native_profiler");
        $__internal_eaa01c2ceee1e78852b0fd8c3e7eff8c29616f5617d6c3c9c9f5a6122407b564->enter($__internal_eaa01c2ceee1e78852b0fd8c3e7eff8c29616f5617d6c3c9c9f5a6122407b564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 15
        echo "    <div id=\"cabecera\">
      <h1>Aquí irá la imagen de la cabecera</h1>
    </div>
";
        
        $__internal_eaa01c2ceee1e78852b0fd8c3e7eff8c29616f5617d6c3c9c9f5a6122407b564->leave($__internal_eaa01c2ceee1e78852b0fd8c3e7eff8c29616f5617d6c3c9c9f5a6122407b564_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96f2cad96a16c3b2ac134c4c8ffeecf9786734b9afcf6a73f705e3b71467fdb4 = $this->env->getExtension("native_profiler");
        $__internal_96f2cad96a16c3b2ac134c4c8ffeecf9786734b9afcf6a73f705e3b71467fdb4->enter($__internal_96f2cad96a16c3b2ac134c4c8ffeecf9786734b9afcf6a73f705e3b71467fdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 21
        echo "  ";
        // line 22
        echo "  ";
        // line 23
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("intranetBundle:Menu:menu"));
        echo "
";
        
        $__internal_96f2cad96a16c3b2ac134c4c8ffeecf9786734b9afcf6a73f705e3b71467fdb4->leave($__internal_96f2cad96a16c3b2ac134c4c8ffeecf9786734b9afcf6a73f705e3b71467fdb4_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_636d06f5cd3c652daa61bb21e2aae828e8d3ea9131f36777f6a210828939c1fc = $this->env->getExtension("native_profiler");
        $__internal_636d06f5cd3c652daa61bb21e2aae828e8d3ea9131f36777f6a210828939c1fc->enter($__internal_636d06f5cd3c652daa61bb21e2aae828e8d3ea9131f36777f6a210828939c1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_636d06f5cd3c652daa61bb21e2aae828e8d3ea9131f36777f6a210828939c1fc->leave($__internal_636d06f5cd3c652daa61bb21e2aae828e8d3ea9131f36777f6a210828939c1fc_prof);

    }

    // line 29
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_a47a54fb4f8a042c6bab86d44603f51320f590bf3b662aa22c6804a0ee4ead63 = $this->env->getExtension("native_profiler");
        $__internal_a47a54fb4f8a042c6bab86d44603f51320f590bf3b662aa22c6804a0ee4ead63->enter($__internal_a47a54fb4f8a042c6bab86d44603f51320f590bf3b662aa22c6804a0ee4ead63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 30
        echo "        ";
        
        $__internal_a47a54fb4f8a042c6bab86d44603f51320f590bf3b662aa22c6804a0ee4ead63->leave($__internal_a47a54fb4f8a042c6bab86d44603f51320f590bf3b662aa22c6804a0ee4ead63_prof);

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
