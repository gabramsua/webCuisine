<?php

/* @intranet/Default/translate.html.twig */
class __TwigTemplate_c082e85e7d7cd481e8ef8132bea5560071bd38d982eae8221b30d959222fa763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/translate.html.twig", 1);
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
        $__internal_334cec00d80e31d092686c6564f8a7d1d64531c2a05926cdbff083e91b0f1671 = $this->env->getExtension("native_profiler");
        $__internal_334cec00d80e31d092686c6564f8a7d1d64531c2a05926cdbff083e91b0f1671->enter($__internal_334cec00d80e31d092686c6564f8a7d1d64531c2a05926cdbff083e91b0f1671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/translate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_334cec00d80e31d092686c6564f8a7d1d64531c2a05926cdbff083e91b0f1671->leave($__internal_334cec00d80e31d092686c6564f8a7d1d64531c2a05926cdbff083e91b0f1671_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_80d4b2d58433f0a1678341cbc8dd7c67d920e7e03ad43cdedf59648aeba44c44 = $this->env->getExtension("native_profiler");
        $__internal_80d4b2d58433f0a1678341cbc8dd7c67d920e7e03ad43cdedf59648aeba44c44->enter($__internal_80d4b2d58433f0a1678341cbc8dd7c67d920e7e03ad43cdedf59648aeba44c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 3
        echo "<h1>Inicio</h1>
<h2>";
        // line 4
        echo $this->env->getExtension('translator')->getTranslator()->trans("TRANSLATING PAGE", array(), "messages");
        echo "</h2>
";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("New User", array(), "messages");
        echo "<br>
";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Welcome", array(), "messages");
        echo "<br>
";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Symfony2 is great", array(), "messages");
        echo "<br>
Escogiste: ";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("lang", array(), "messages");
        // line 9
        echo "<hr><br>
<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("intranet_translation", array("_locale" => "en"));
        echo "\">ENGLISH </a><br>
<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("intranet_translation", array("_locale" => "es"));
        echo "\">SPANISH </a><br>
<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("intranet_translation", array("_locale" => "fr"));
        echo "\">FRENCH </a><br>


";
        
        $__internal_80d4b2d58433f0a1678341cbc8dd7c67d920e7e03ad43cdedf59648aeba44c44->leave($__internal_80d4b2d58433f0a1678341cbc8dd7c67d920e7e03ad43cdedf59648aeba44c44_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/translate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  68 => 11,  64 => 10,  61 => 9,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* {% block contenido %}*/
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
/* {% endblock %}*/
/* */
