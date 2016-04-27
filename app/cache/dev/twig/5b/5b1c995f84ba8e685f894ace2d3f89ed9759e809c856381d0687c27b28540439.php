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
        $__internal_204484818b5732caeca4dbff22201bcfcac1a72d1550dddacfa7ac149dcd300b = $this->env->getExtension("native_profiler");
        $__internal_204484818b5732caeca4dbff22201bcfcac1a72d1550dddacfa7ac149dcd300b->enter($__internal_204484818b5732caeca4dbff22201bcfcac1a72d1550dddacfa7ac149dcd300b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:landing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_204484818b5732caeca4dbff22201bcfcac1a72d1550dddacfa7ac149dcd300b->leave($__internal_204484818b5732caeca4dbff22201bcfcac1a72d1550dddacfa7ac149dcd300b_prof);

    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_4510294e2ba543d50b4e99be6d646e12ec218cc58010afd194433cf07fc4a97a = $this->env->getExtension("native_profiler");
        $__internal_4510294e2ba543d50b4e99be6d646e12ec218cc58010afd194433cf07fc4a97a->enter($__internal_4510294e2ba543d50b4e99be6d646e12ec218cc58010afd194433cf07fc4a97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 5
        echo "<h1>Inicio</h1>
<h2> LANDING PAGE   </h2>
";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("This is Landing Page", array(), "messages");
        // line 8
        echo "<hr>
";
        
        $__internal_4510294e2ba543d50b4e99be6d646e12ec218cc58010afd194433cf07fc4a97a->leave($__internal_4510294e2ba543d50b4e99be6d646e12ec218cc58010afd194433cf07fc4a97a_prof);

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
        return array (  46 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block contenido %}*/
/* <h1>Inicio</h1>*/
/* <h2> LANDING PAGE   </h2>*/
/* {% trans %} This is Landing Page {% endtrans %}*/
/* <hr>*/
/* {% endblock %}*/
/* */
