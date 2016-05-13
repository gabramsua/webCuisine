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
        $__internal_569a73ca2b5be592b0262e11e175a1df8556fcb43dfd903224722d1b43a6220b = $this->env->getExtension("native_profiler");
        $__internal_569a73ca2b5be592b0262e11e175a1df8556fcb43dfd903224722d1b43a6220b->enter($__internal_569a73ca2b5be592b0262e11e175a1df8556fcb43dfd903224722d1b43a6220b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:createNewFeed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_569a73ca2b5be592b0262e11e175a1df8556fcb43dfd903224722d1b43a6220b->leave($__internal_569a73ca2b5be592b0262e11e175a1df8556fcb43dfd903224722d1b43a6220b_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_627fdb072e0a78423678ac232edfe095cf5f494da7dc9447b1247b2602514115 = $this->env->getExtension("native_profiler");
        $__internal_627fdb072e0a78423678ac232edfe095cf5f494da7dc9447b1247b2602514115->enter($__internal_627fdb072e0a78423678ac232edfe095cf5f494da7dc9447b1247b2602514115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>CREATE A NEW New</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_insertnew");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>TITLE:</label><input type=\"text\" name=\"title\" style=\"margin-left: 40px;\"><br>
        <label>CONTENT:</label><input type=\"textarea\" name=\"content\" style=\"margin-left: 13px;\"> <br>
        <label>Channel:</label>

   ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) ? $context["channels"] : $this->getContext($context, "channels")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 11
            echo "       <input type=\"checkbox\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "\" style=\"margin-left: 17px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "<br>

                                       <input type=\"submit\" value=\"CREATE\">
                                       <input type=\"hidden\" name=\"typeF\" value=\"expenses\">
   </form>

";
        
        $__internal_627fdb072e0a78423678ac232edfe095cf5f494da7dc9447b1247b2602514115->leave($__internal_627fdb072e0a78423678ac232edfe095cf5f494da7dc9447b1247b2602514115_prof);

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
        return array (  68 => 12,  55 => 11,  51 => 10,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>CREATE A NEW New</h3><br>*/
/*  <form action="{{path('intranet_insertnew')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>TITLE:</label><input type="text" name="title" style="margin-left: 40px;"><br>*/
/*         <label>CONTENT:</label><input type="textarea" name="content" style="margin-left: 13px;"> <br>*/
/*         <label>Channel:</label>*/
/* */
/*    {% for c in channels %}*/
/*        <input type="checkbox" name="{{ c.name }}" value="{{ c.name }}" style="margin-left: 17px;">{{ c.name }}*/
/*    {% endfor %}<br>*/
/* */
/*                                        <input type="submit" value="CREATE">*/
/*                                        <input type="hidden" name="typeF" value="expenses">*/
/*    </form>*/
/* */
/* {% endblock %}*/
/* */
