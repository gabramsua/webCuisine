<?php

/* intranetBundle:Error:error_news.html.twig */
class __TwigTemplate_3e0fc596da2033d492f503150589a67f8c3864802a3d2103890e7c28901d2793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Error:error_news.html.twig", 1);
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
        $__internal_077ce689883ddd59b0803218b3c3f24b9a760b1a6ffb36625c759eadbf9cd0cf = $this->env->getExtension("native_profiler");
        $__internal_077ce689883ddd59b0803218b3c3f24b9a760b1a6ffb36625c759eadbf9cd0cf->enter($__internal_077ce689883ddd59b0803218b3c3f24b9a760b1a6ffb36625c759eadbf9cd0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Error:error_news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_077ce689883ddd59b0803218b3c3f24b9a760b1a6ffb36625c759eadbf9cd0cf->leave($__internal_077ce689883ddd59b0803218b3c3f24b9a760b1a6ffb36625c759eadbf9cd0cf_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_64fdab720b18ab2396b221e9393964151bcbc27e7cddf3f1075e2c16a60c491b = $this->env->getExtension("native_profiler");
        $__internal_64fdab720b18ab2396b221e9393964151bcbc27e7cddf3f1075e2c16a60c491b->enter($__internal_64fdab720b18ab2396b221e9393964151bcbc27e7cddf3f1075e2c16a60c491b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<i>";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("message_2", array(), "messages");
        echo "</i><hr>

<h1>NO HAY NADA QUE MOSTRAR</h1>

<br><br>

<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("intranet_newnew");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
    <input type=\"submit\" name=\"newNew\" value=\"NEW NEW\">
  </form>

";
        
        $__internal_64fdab720b18ab2396b221e9393964151bcbc27e7cddf3f1075e2c16a60c491b->leave($__internal_64fdab720b18ab2396b221e9393964151bcbc27e7cddf3f1075e2c16a60c491b_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Error:error_news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* <i>{% trans %}message_2{% endtrans %}</i><hr>*/
/* */
/* <h1>NO HAY NADA QUE MOSTRAR</h1>*/
/* */
/* <br><br>*/
/* */
/* <form action="{{ path('intranet_newnew')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*     <input type="submit" name="newNew" value="NEW NEW">*/
/*   </form>*/
/* */
/* {% endblock %}*/
/* */
