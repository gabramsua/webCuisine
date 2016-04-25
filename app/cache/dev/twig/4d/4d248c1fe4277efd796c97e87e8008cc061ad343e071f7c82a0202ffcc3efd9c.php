<?php

/* intranetBundle:Default:translate.html.twig */
class __TwigTemplate_8a1cf9258347ee5ca92fd3059a0256e7a64298e942fa8ced1352dee256d61e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:translate.html.twig", 1);
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
        $__internal_342910e048b19f4a11498fcd93ab899545d122bd515d3cddacd9ca80be0ee446 = $this->env->getExtension("native_profiler");
        $__internal_342910e048b19f4a11498fcd93ab899545d122bd515d3cddacd9ca80be0ee446->enter($__internal_342910e048b19f4a11498fcd93ab899545d122bd515d3cddacd9ca80be0ee446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:translate.html.twig"));

        // line 2
        $context["__internal_f449a1627d5f00bb012646958b5f58fecee04c082cc7cb6de085c79e3b7a3579"] = $this->loadTemplate("intranetBundle::macroMenu.html.twig", "intranetBundle:Default:translate.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_342910e048b19f4a11498fcd93ab899545d122bd515d3cddacd9ca80be0ee446->leave($__internal_342910e048b19f4a11498fcd93ab899545d122bd515d3cddacd9ca80be0ee446_prof);

    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_be19a377f135ec6fcede026ce7f536c9c065fec36995c7bc66d6362eed93755e = $this->env->getExtension("native_profiler");
        $__internal_be19a377f135ec6fcede026ce7f536c9c065fec36995c7bc66d6362eed93755e->enter($__internal_be19a377f135ec6fcede026ce7f536c9c065fec36995c7bc66d6362eed93755e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 7
        echo "NUEVO:";
        echo $context["__internal_f449a1627d5f00bb012646958b5f58fecee04c082cc7cb6de085c79e3b7a3579"]->getuROL("internship");
        echo "
<br>
<h1>Inicio</h1>
<h2>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("TRANSLATING PAGE", array(), "messages");
        echo "</h2>
";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("New User", array(), "messages");
        echo "<br>
";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("Welcome", array(), "messages");
        echo "<br>
";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Symfony2 is great", array(), "messages");
        echo "<br>
Escogiste: ";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("lang", array(), "messages");
        // line 15
        echo "<hr><br>
<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("intranet_translation", array("_locale" => "en"));
        echo "\">ENGLISH </a><br>
<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("intranet_translation", array("_locale" => "es"));
        echo "\">SPANISH </a><br>
<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("intranet_translation", array("_locale" => "fr"));
        echo "\">FRENCH </a><br>




";
        
        $__internal_be19a377f135ec6fcede026ce7f536c9c065fec36995c7bc66d6362eed93755e->leave($__internal_be19a377f135ec6fcede026ce7f536c9c065fec36995c7bc66d6362eed93755e_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:translate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  75 => 17,  71 => 16,  68 => 15,  66 => 14,  62 => 13,  58 => 12,  54 => 11,  50 => 10,  43 => 7,  37 => 6,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* {% from 'intranetBundle::macroMenu.html.twig' import uROL %}*/
/* */
/* */
/* */
/* {% block contenido %}*/
/* NUEVO:{{uROL('internship')}}*/
/* <br>*/
/* <h1>Inicio</h1>*/
/* <h2>{% trans %} TRANSLATING PAGE   {% endtrans %}</h2>*/
/* {% trans %}  New User{% endtrans %}<br>*/
/* {% trans %}  Welcome {% endtrans %}<br>*/
/* {% trans %}Symfony2 is great{% endtrans %}<br>*/
/* Escogiste: {% trans %} lang   {% endtrans %}*/
/* <hr><br>*/
/* <a href="{{ path('intranet_translation', {_locale: 'en'}) }}">ENGLISH </a><br>*/
/* <a href="{{ path('intranet_translation', {_locale: 'es'}) }}">SPANISH </a><br>*/
/* <a href="{{ path('intranet_translation', {_locale: 'fr'}) }}">FRENCH </a><br>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
