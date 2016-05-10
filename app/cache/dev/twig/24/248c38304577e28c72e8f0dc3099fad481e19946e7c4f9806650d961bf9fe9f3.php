<?php

/* intranetBundle:Default:createNewFeed.html.twig */
class __TwigTemplate_255e08a9b54e2896d3188c2a99984d8762fa28b44c80db42ba479de437cd38ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:createNewFeed.html.twig", 1);
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
        $__internal_dc8b525df37a6719a01686cff2c8c7287f3c16a8508e4dccb57d04f94f51191c = $this->env->getExtension("native_profiler");
        $__internal_dc8b525df37a6719a01686cff2c8c7287f3c16a8508e4dccb57d04f94f51191c->enter($__internal_dc8b525df37a6719a01686cff2c8c7287f3c16a8508e4dccb57d04f94f51191c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:createNewFeed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc8b525df37a6719a01686cff2c8c7287f3c16a8508e4dccb57d04f94f51191c->leave($__internal_dc8b525df37a6719a01686cff2c8c7287f3c16a8508e4dccb57d04f94f51191c_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_06c45e14d8019a7057888d6972fffdb34caf5fbf0b064f8dd8769ec75fe79139 = $this->env->getExtension("native_profiler");
        $__internal_06c45e14d8019a7057888d6972fffdb34caf5fbf0b064f8dd8769ec75fe79139->enter($__internal_06c45e14d8019a7057888d6972fffdb34caf5fbf0b064f8dd8769ec75fe79139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>CREATE A NEW New</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_insertnew");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>TITLE:</label><input type=\"text\" name=\"title\" style=\"margin-left: 40px;\"><br>
        <label>CONTENT:</label><input type=\"textarea\" name=\"content\" style=\"margin-left: 15px;\"> <br>
        <label>Channel:</label><input type=\"text\" name=\"channel\" style=\"margin-left: 15px;\"value=\"develop\"> <br>
                                     <input type=\"submit\" value=\"CREATE\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"expenses\">
   </form>



";
        
        $__internal_06c45e14d8019a7057888d6972fffdb34caf5fbf0b064f8dd8769ec75fe79139->leave($__internal_06c45e14d8019a7057888d6972fffdb34caf5fbf0b064f8dd8769ec75fe79139_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:createNewFeed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>CREATE A NEW New</h3><br>*/
/*  <form action="{{path('intranet_insertnew')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>TITLE:</label><input type="text" name="title" style="margin-left: 40px;"><br>*/
/*         <label>CONTENT:</label><input type="textarea" name="content" style="margin-left: 15px;"> <br>*/
/*         <label>Channel:</label><input type="text" name="channel" style="margin-left: 15px;"value="develop"> <br>*/
/*                                      <input type="submit" value="CREATE">*/
/*                                      <input type="hidden" name="typeF" value="expenses">*/
/*    </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
