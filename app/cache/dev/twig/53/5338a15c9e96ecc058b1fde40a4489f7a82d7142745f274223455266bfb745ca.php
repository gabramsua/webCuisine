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
            'newsfeed' => array($this, 'block_newsfeed'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32e50476a78d4cb9b305044f5938dc63db9aa71f95c19d089fa79ed718021417 = $this->env->getExtension("native_profiler");
        $__internal_32e50476a78d4cb9b305044f5938dc63db9aa71f95c19d089fa79ed718021417->enter($__internal_32e50476a78d4cb9b305044f5938dc63db9aa71f95c19d089fa79ed718021417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout.html.twig"));

        // line 2
        $context["__internal_c2c51bfac828aaea12904e02cc3661c2097500b84a1a90cc0e1f5723c15def82"] = $this->loadTemplate("intranetBundle::macroMenu.html.twig", "intranetBundle::layout.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32e50476a78d4cb9b305044f5938dc63db9aa71f95c19d089fa79ed718021417->leave($__internal_32e50476a78d4cb9b305044f5938dc63db9aa71f95c19d089fa79ed718021417_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29e45f72f1338087713b9ec2f76b591be9856459ee704cac29e7b0311d1e3a45 = $this->env->getExtension("native_profiler");
        $__internal_29e45f72f1338087713b9ec2f76b591be9856459ee704cac29e7b0311d1e3a45->enter($__internal_29e45f72f1338087713b9ec2f76b591be9856459ee704cac29e7b0311d1e3a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_29e45f72f1338087713b9ec2f76b591be9856459ee704cac29e7b0311d1e3a45->leave($__internal_29e45f72f1338087713b9ec2f76b591be9856459ee704cac29e7b0311d1e3a45_prof);

    }

    // line 14
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_618eac4cdad379a3a440dfe39c4ee000b01857a3b9c7b4de7d55bd72ac0f5395 = $this->env->getExtension("native_profiler");
        $__internal_618eac4cdad379a3a440dfe39c4ee000b01857a3b9c7b4de7d55bd72ac0f5395->enter($__internal_618eac4cdad379a3a440dfe39c4ee000b01857a3b9c7b4de7d55bd72ac0f5395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 15
        echo "    <div id=\"cabecera\">
      <h1>Here will be the image</h1>
    </div>
";
        
        $__internal_618eac4cdad379a3a440dfe39c4ee000b01857a3b9c7b4de7d55bd72ac0f5395->leave($__internal_618eac4cdad379a3a440dfe39c4ee000b01857a3b9c7b4de7d55bd72ac0f5395_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa600022894b094a5b8c0cd75df1eb982b84060d1e8dda66f6582e4c21a307b4 = $this->env->getExtension("native_profiler");
        $__internal_aa600022894b094a5b8c0cd75df1eb982b84060d1e8dda66f6582e4c21a307b4->enter($__internal_aa600022894b094a5b8c0cd75df1eb982b84060d1e8dda66f6582e4c21a307b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 21
        echo "  ";
        // line 22
        echo "  ";
        // line 23
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("intranetBundle:Menu:menu"));
        echo "
";
        
        $__internal_aa600022894b094a5b8c0cd75df1eb982b84060d1e8dda66f6582e4c21a307b4->leave($__internal_aa600022894b094a5b8c0cd75df1eb982b84060d1e8dda66f6582e4c21a307b4_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1d75c48d415d9e340ec08567da1323bd467b9ff0496d2acc77478da3cf9f93f = $this->env->getExtension("native_profiler");
        $__internal_b1d75c48d415d9e340ec08567da1323bd467b9ff0496d2acc77478da3cf9f93f->enter($__internal_b1d75c48d415d9e340ec08567da1323bd467b9ff0496d2acc77478da3cf9f93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "
    <div id=\"newsfeed\" style=\"width: 200px; float: right; margin-top: 100px; margin-right: 100px;\">
        ";
        // line 30
        $this->displayBlock('newsfeed', $context, $blocks);
        // line 33
        echo "    </div>

    <div id=\"contenido\">
        ";
        // line 36
        $this->displayBlock('contenido', $context, $blocks);
        // line 38
        echo "    </div>

    <div id=\"pie\">
        <hr/>
        <div align=\"center\">- pie de página -</div>
    </div>
";
        
        $__internal_b1d75c48d415d9e340ec08567da1323bd467b9ff0496d2acc77478da3cf9f93f->leave($__internal_b1d75c48d415d9e340ec08567da1323bd467b9ff0496d2acc77478da3cf9f93f_prof);

    }

    // line 30
    public function block_newsfeed($context, array $blocks = array())
    {
        $__internal_36d19e32a0dee3a74a6c7745e358a4fb17982b530dc462678a98238d6484b643 = $this->env->getExtension("native_profiler");
        $__internal_36d19e32a0dee3a74a6c7745e358a4fb17982b530dc462678a98238d6484b643->enter($__internal_36d19e32a0dee3a74a6c7745e358a4fb17982b530dc462678a98238d6484b643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "newsfeed"));

        // line 31
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("intranetBundle:News:news"));
        echo "
        ";
        
        $__internal_36d19e32a0dee3a74a6c7745e358a4fb17982b530dc462678a98238d6484b643->leave($__internal_36d19e32a0dee3a74a6c7745e358a4fb17982b530dc462678a98238d6484b643_prof);

    }

    // line 36
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_97bd726a417544be7115b5094af9c067641080fec3edc36d4d2b1a1dc41a6e37 = $this->env->getExtension("native_profiler");
        $__internal_97bd726a417544be7115b5094af9c067641080fec3edc36d4d2b1a1dc41a6e37->enter($__internal_97bd726a417544be7115b5094af9c067641080fec3edc36d4d2b1a1dc41a6e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 37
        echo "        ";
        
        $__internal_97bd726a417544be7115b5094af9c067641080fec3edc36d4d2b1a1dc41a6e37->leave($__internal_97bd726a417544be7115b5094af9c067641080fec3edc36d4d2b1a1dc41a6e37_prof);

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
        return array (  154 => 37,  148 => 36,  138 => 31,  132 => 30,  119 => 38,  117 => 36,  112 => 33,  110 => 30,  106 => 28,  100 => 27,  90 => 23,  88 => 22,  86 => 21,  80 => 20,  70 => 15,  64 => 14,  51 => 6,  48 => 5,  42 => 4,  35 => 1,  33 => 2,  11 => 1,);
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
/* */
/*     <div id="newsfeed" style="width: 200px; float: right; margin-top: 100px; margin-right: 100px;">*/
/*         {% block newsfeed %}*/
/*             {{ render(controller('intranetBundle:News:news')) }}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
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
