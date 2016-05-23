<?php

/* intranetBundle:Default:landing.html.twig */
class __TwigTemplate_a52eb5577537b37a77e42de1be1f303ac10035fb345ba24c7fe83e0229c0d5bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:landing.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "intranetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c841ed2067c7cc7a1152feecb395ad549251d58731693f0894ae759f9474e51 = $this->env->getExtension("native_profiler");
        $__internal_0c841ed2067c7cc7a1152feecb395ad549251d58731693f0894ae759f9474e51->enter($__internal_0c841ed2067c7cc7a1152feecb395ad549251d58731693f0894ae759f9474e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:landing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c841ed2067c7cc7a1152feecb395ad549251d58731693f0894ae759f9474e51->leave($__internal_0c841ed2067c7cc7a1152feecb395ad549251d58731693f0894ae759f9474e51_prof);

    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_cf6c38a3dcc2ce4d72eb06f77c82b8a1dab0f6c5591733a7f836b48f55a2b467 = $this->env->getExtension("native_profiler");
        $__internal_cf6c38a3dcc2ce4d72eb06f77c82b8a1dab0f6c5591733a7f836b48f55a2b467->enter($__internal_cf6c38a3dcc2ce4d72eb06f77c82b8a1dab0f6c5591733a7f836b48f55a2b467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 5
        echo "<h2> LANDING PAGE   </h2>
";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("This is Landing Page", array(), "messages");
        // line 7
        echo "<hr>
Menu not visible for all => indicate routes?<br><br>
\t<b>Login\t </b>  /<i>language</i>/intranet_logout<br>
\t<b>Channel</b>  /<i>language</i>/channels<br>
\t<b>News\t  </b> /<i>language</i>/news<br>
\t<b>Tasks\t </b>  /<i>language</i>/tasks<br>
  <b>User Management\t </b>  /<i>language</i>/userManagement<br>
<br>The language can be /es/, /en/ or /fr/
";
        
        $__internal_cf6c38a3dcc2ce4d72eb06f77c82b8a1dab0f6c5591733a7f836b48f55a2b467->leave($__internal_cf6c38a3dcc2ce4d72eb06f77c82b8a1dab0f6c5591733a7f836b48f55a2b467_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block contenido %}*/
/* <h2> LANDING PAGE   </h2>*/
/* {% trans %} This is Landing Page {% endtrans %}*/
/* <hr>*/
/* Menu not visible for all => indicate routes?<br><br>*/
/* 	<b>Login	 </b>  /<i>language</i>/intranet_logout<br>*/
/* 	<b>Channel</b>  /<i>language</i>/channels<br>*/
/* 	<b>News	  </b> /<i>language</i>/news<br>*/
/* 	<b>Tasks	 </b>  /<i>language</i>/tasks<br>*/
/*   <b>User Management	 </b>  /<i>language</i>/userManagement<br>*/
/* <br>The language can be /es/, /en/ or /fr/*/
/* {% endblock %}*/
/* */
