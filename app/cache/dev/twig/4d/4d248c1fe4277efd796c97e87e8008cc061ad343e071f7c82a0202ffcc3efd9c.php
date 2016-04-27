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
        $__internal_4d015143065d32299ef26536ef84dba5620ee7bf4490f3e71d93015007f8710b = $this->env->getExtension("native_profiler");
        $__internal_4d015143065d32299ef26536ef84dba5620ee7bf4490f3e71d93015007f8710b->enter($__internal_4d015143065d32299ef26536ef84dba5620ee7bf4490f3e71d93015007f8710b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:translate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d015143065d32299ef26536ef84dba5620ee7bf4490f3e71d93015007f8710b->leave($__internal_4d015143065d32299ef26536ef84dba5620ee7bf4490f3e71d93015007f8710b_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_5480bba688d81f8d8233c65376f716b9ce502de4affd28b37cab71939ffda8c6 = $this->env->getExtension("native_profiler");
        $__internal_5480bba688d81f8d8233c65376f716b9ce502de4affd28b37cab71939ffda8c6->enter($__internal_5480bba688d81f8d8233c65376f716b9ce502de4affd28b37cab71939ffda8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<br>
<h1>Inicio</h1>
<h2>";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("TRANSLATING PAGE", array(), "messages");
        echo "</h2>
";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("New User", array(), "messages");
        echo "<br>
";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Welcome", array(), "messages");
        echo "<br>
";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Symfony2 is great", array(), "messages");
        echo "<br>
Escogiste: ";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("lang", array(), "messages");
        // line 11
        echo "<hr><br>
<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("intranet_translation", array("_locale" => "en"));
        echo "\">ENGLISH </a><br>
<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("intranet_translation", array("_locale" => "es"));
        echo "\">SPANISH </a><br>
<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("intranet_translation", array("_locale" => "fr"));
        echo "\">FRENCH </a><br>




";
        
        $__internal_5480bba688d81f8d8233c65376f716b9ce502de4affd28b37cab71939ffda8c6->leave($__internal_5480bba688d81f8d8233c65376f716b9ce502de4affd28b37cab71939ffda8c6_prof);

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
        return array (  73 => 14,  69 => 13,  65 => 12,  62 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/* {% block contenido %}*/
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
