<?php

/* intranetBundle:Error:error_channels.html.twig */
class __TwigTemplate_ffea77a8f5480e990ee521222bca4cd60f7c79e11fea5239a18c73cb2abad1a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Error:error_channels.html.twig", 1);
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
        $__internal_eb2b2cd7a9cc988629175df8e1f8dcac2d16321fa27068e8c6b981ab907fe613 = $this->env->getExtension("native_profiler");
        $__internal_eb2b2cd7a9cc988629175df8e1f8dcac2d16321fa27068e8c6b981ab907fe613->enter($__internal_eb2b2cd7a9cc988629175df8e1f8dcac2d16321fa27068e8c6b981ab907fe613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Error:error_channels.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb2b2cd7a9cc988629175df8e1f8dcac2d16321fa27068e8c6b981ab907fe613->leave($__internal_eb2b2cd7a9cc988629175df8e1f8dcac2d16321fa27068e8c6b981ab907fe613_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_095e09cb480d8a17a5bf4434247586ec705b45f59c5ee8c4fe8f236e4574ca5d = $this->env->getExtension("native_profiler");
        $__internal_095e09cb480d8a17a5bf4434247586ec705b45f59c5ee8c4fe8f236e4574ca5d->enter($__internal_095e09cb480d8a17a5bf4434247586ec705b45f59c5ee8c4fe8f236e4574ca5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "

<h1>NO HAY CHANNELS QUE MOSTRAR</h1>
<br><br>

<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("intranet_newchannel");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
    <input type=\"submit\" name=\"newChannel\" value=\"";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("new_channel", array(), "messages");
        echo "\">
  </form>


";
        
        $__internal_095e09cb480d8a17a5bf4434247586ec705b45f59c5ee8c4fe8f236e4574ca5d->leave($__internal_095e09cb480d8a17a5bf4434247586ec705b45f59c5ee8c4fe8f236e4574ca5d_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Error:error_channels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* */
/* <h1>NO HAY CHANNELS QUE MOSTRAR</h1>*/
/* <br><br>*/
/* */
/* <form action="{{ path('intranet_newchannel')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*     <input type="submit" name="newChannel" value="{% trans %}new_channel{% endtrans %}">*/
/*   </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
