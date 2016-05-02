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
        $__internal_8a05654632845066ef5236a965cf0b68a8e76f07e3b0950e101bbb29787cbab4 = $this->env->getExtension("native_profiler");
        $__internal_8a05654632845066ef5236a965cf0b68a8e76f07e3b0950e101bbb29787cbab4->enter($__internal_8a05654632845066ef5236a965cf0b68a8e76f07e3b0950e101bbb29787cbab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:createNewFeed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a05654632845066ef5236a965cf0b68a8e76f07e3b0950e101bbb29787cbab4->leave($__internal_8a05654632845066ef5236a965cf0b68a8e76f07e3b0950e101bbb29787cbab4_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2a0d9d8dd99f7d783649d7fc24181544fbb9b28f728bfec93cbcb2aa3c6eb5a7 = $this->env->getExtension("native_profiler");
        $__internal_2a0d9d8dd99f7d783649d7fc24181544fbb9b28f728bfec93cbcb2aa3c6eb5a7->enter($__internal_2a0d9d8dd99f7d783649d7fc24181544fbb9b28f728bfec93cbcb2aa3c6eb5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>CREATE A NEW New</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_insertnew");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>TITLE:</label><input type=\"text\" name=\"title\" style=\"margin-left: 40px;\"><br>
        <label>CONTENT:</label><input type=\"textarea\" name=\"content\" style=\"margin-left: 15px;\"> <br>
                                     <input type=\"submit\" value=\"CREATE\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"expenses\">
                                     <input type=\"hidden\" name=\"actualDate\">
   </form>



";
        
        $__internal_2a0d9d8dd99f7d783649d7fc24181544fbb9b28f728bfec93cbcb2aa3c6eb5a7->leave($__internal_2a0d9d8dd99f7d783649d7fc24181544fbb9b28f728bfec93cbcb2aa3c6eb5a7_prof);

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
/*                                      <input type="submit" value="CREATE">*/
/*                                      <input type="hidden" name="typeF" value="expenses">*/
/*                                      <input type="hidden" name="actualDate">*/
/*    </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
