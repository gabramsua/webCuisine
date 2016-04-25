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
        $__internal_bb276c7581b0164a277ef99c057bf08f73ae7a46c25f09bbaba94962f538f298 = $this->env->getExtension("native_profiler");
        $__internal_bb276c7581b0164a277ef99c057bf08f73ae7a46c25f09bbaba94962f538f298->enter($__internal_bb276c7581b0164a277ef99c057bf08f73ae7a46c25f09bbaba94962f538f298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout.html.twig"));

        // line 2
        $context["__internal_bc75220009b995bee8e4f8fcaa93be411d0c3b67fe8aded2eae20a5626a7bfee"] = $this->loadTemplate("intranetBundle::macroMenu.html.twig", "intranetBundle::layout.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb276c7581b0164a277ef99c057bf08f73ae7a46c25f09bbaba94962f538f298->leave($__internal_bb276c7581b0164a277ef99c057bf08f73ae7a46c25f09bbaba94962f538f298_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16329e380523efbf5f0f4e0eeb4cc3dc077699ef837ec5fa55bb30f28d0328da = $this->env->getExtension("native_profiler");
        $__internal_16329e380523efbf5f0f4e0eeb4cc3dc077699ef837ec5fa55bb30f28d0328da->enter($__internal_16329e380523efbf5f0f4e0eeb4cc3dc077699ef837ec5fa55bb30f28d0328da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<!-- ESTA CARPETA NO ESTÁ CREADA AÚN -->
 <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/alimentos/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<meta charset=\"UTF-8\">
";
        
        $__internal_16329e380523efbf5f0f4e0eeb4cc3dc077699ef837ec5fa55bb30f28d0328da->leave($__internal_16329e380523efbf5f0f4e0eeb4cc3dc077699ef837ec5fa55bb30f28d0328da_prof);

    }

    // line 13
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_073185d0174717a2a73a1eaf9b613bf0a475e87fa7a94d24f68bc70908fd064c = $this->env->getExtension("native_profiler");
        $__internal_073185d0174717a2a73a1eaf9b613bf0a475e87fa7a94d24f68bc70908fd064c->enter($__internal_073185d0174717a2a73a1eaf9b613bf0a475e87fa7a94d24f68bc70908fd064c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 14
        echo "    <div id=\"cabecera\">
      <h1>Aquí irá la imagen de la cabecera</h1>
    </div>
";
        
        $__internal_073185d0174717a2a73a1eaf9b613bf0a475e87fa7a94d24f68bc70908fd064c->leave($__internal_073185d0174717a2a73a1eaf9b613bf0a475e87fa7a94d24f68bc70908fd064c_prof);

    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5888bff4bfe1758f3d8f516181005cc1bdb95c2b59309c3f107b71487aeeaf96 = $this->env->getExtension("native_profiler");
        $__internal_5888bff4bfe1758f3d8f516181005cc1bdb95c2b59309c3f107b71487aeeaf96->enter($__internal_5888bff4bfe1758f3d8f516181005cc1bdb95c2b59309c3f107b71487aeeaf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 20
        echo "  ";
        // line 21
        echo "  ";
        echo $context["__internal_bc75220009b995bee8e4f8fcaa93be411d0c3b67fe8aded2eae20a5626a7bfee"]->getuROL("internship");
        echo "
";
        
        $__internal_5888bff4bfe1758f3d8f516181005cc1bdb95c2b59309c3f107b71487aeeaf96->leave($__internal_5888bff4bfe1758f3d8f516181005cc1bdb95c2b59309c3f107b71487aeeaf96_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_c62e3c979e2038a16c0366b8b69b65108dce66e37ccfa114bc09b535546283e0 = $this->env->getExtension("native_profiler");
        $__internal_c62e3c979e2038a16c0366b8b69b65108dce66e37ccfa114bc09b535546283e0->enter($__internal_c62e3c979e2038a16c0366b8b69b65108dce66e37ccfa114bc09b535546283e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "    <div id=\"contenido\">
        ";
        // line 27
        $this->displayBlock('contenido', $context, $blocks);
        // line 29
        echo "    </div>

    <div id=\"pie\">
        <hr/>
        <div align=\"center\">- pie de página -</div>
    </div>
";
        
        $__internal_c62e3c979e2038a16c0366b8b69b65108dce66e37ccfa114bc09b535546283e0->leave($__internal_c62e3c979e2038a16c0366b8b69b65108dce66e37ccfa114bc09b535546283e0_prof);

    }

    // line 27
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_13b6cfd76beac8ca7f9f15854fea4598e6916b97bba523e0fac5706b5e0f7f59 = $this->env->getExtension("native_profiler");
        $__internal_13b6cfd76beac8ca7f9f15854fea4598e6916b97bba523e0fac5706b5e0f7f59->enter($__internal_13b6cfd76beac8ca7f9f15854fea4598e6916b97bba523e0fac5706b5e0f7f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 28
        echo "        ";
        
        $__internal_13b6cfd76beac8ca7f9f15854fea4598e6916b97bba523e0fac5706b5e0f7f59->leave($__internal_13b6cfd76beac8ca7f9f15854fea4598e6916b97bba523e0fac5706b5e0f7f59_prof);

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
        return array (  127 => 28,  121 => 27,  108 => 29,  106 => 27,  103 => 26,  97 => 25,  87 => 21,  85 => 20,  79 => 19,  69 => 14,  63 => 13,  50 => 5,  47 => 4,  41 => 3,  34 => 1,  32 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% from 'intranetBundle::macroMenu.html.twig' import uROL %}*/
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
/*   {#{% include '::menu.html.twig' %} #}*/
/*   {{uROL('internship')}}*/
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
