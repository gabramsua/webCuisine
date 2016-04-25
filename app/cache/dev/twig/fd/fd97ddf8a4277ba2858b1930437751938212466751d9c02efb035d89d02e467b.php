<?php

/* @intranet/Default/landing.html.twig */
class __TwigTemplate_49f948061a5ccd8b4dedad08ba303a043f3400d622f9ef68a0c1122b97d5c391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/landing.html.twig", 1);
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
        $__internal_5b675450d5199365cb84ca4695ed9c85d9d46edbe4f31757f3b1edf412d61bc8 = $this->env->getExtension("native_profiler");
        $__internal_5b675450d5199365cb84ca4695ed9c85d9d46edbe4f31757f3b1edf412d61bc8->enter($__internal_5b675450d5199365cb84ca4695ed9c85d9d46edbe4f31757f3b1edf412d61bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/landing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b675450d5199365cb84ca4695ed9c85d9d46edbe4f31757f3b1edf412d61bc8->leave($__internal_5b675450d5199365cb84ca4695ed9c85d9d46edbe4f31757f3b1edf412d61bc8_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_37c9dc5d3d2de564a66dfc3241e9df9beaf8fadaee2a6a09d39f7d611f9b08c1 = $this->env->getExtension("native_profiler");
        $__internal_37c9dc5d3d2de564a66dfc3241e9df9beaf8fadaee2a6a09d39f7d611f9b08c1->enter($__internal_37c9dc5d3d2de564a66dfc3241e9df9beaf8fadaee2a6a09d39f7d611f9b08c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 3
        echo "<h1>Inicio</h1>
<h2> LANDING PAGE   </h2>
";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("This is Landing Page", array(), "messages");
        // line 6
        echo "<hr>
";
        
        $__internal_37c9dc5d3d2de564a66dfc3241e9df9beaf8fadaee2a6a09d39f7d611f9b08c1->leave($__internal_37c9dc5d3d2de564a66dfc3241e9df9beaf8fadaee2a6a09d39f7d611f9b08c1_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* {% block contenido %}*/
/* <h1>Inicio</h1>*/
/* <h2> LANDING PAGE   </h2>*/
/* {% trans %} This is Landing Page {% endtrans %}*/
/* <hr>*/
/* {% endblock %}*/
/* */
