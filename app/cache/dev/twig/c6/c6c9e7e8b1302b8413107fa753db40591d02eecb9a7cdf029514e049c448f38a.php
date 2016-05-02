<?php

/* intranetBundle:Default:bd.html.twig */
class __TwigTemplate_5e6e0e4acf3ae5930c534f7e825d28ccdb1d1795881eac442be7b8ead744fa39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:bd.html.twig", 1);
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
        $__internal_ec861468625210af6a349ca9dbabcc866e06986322d291642d2520519b08a6f1 = $this->env->getExtension("native_profiler");
        $__internal_ec861468625210af6a349ca9dbabcc866e06986322d291642d2520519b08a6f1->enter($__internal_ec861468625210af6a349ca9dbabcc866e06986322d291642d2520519b08a6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:bd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec861468625210af6a349ca9dbabcc866e06986322d291642d2520519b08a6f1->leave($__internal_ec861468625210af6a349ca9dbabcc866e06986322d291642d2520519b08a6f1_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_b44f42c8316231ac3ad14e073f4d5d00a656323e64d501f86ddad2cd80f8a671 = $this->env->getExtension("native_profiler");
        $__internal_b44f42c8316231ac3ad14e073f4d5d00a656323e64d501f86ddad2cd80f8a671->enter($__internal_b44f42c8316231ac3ad14e073f4d5d00a656323e64d501f86ddad2cd80f8a671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "

";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nameU", array()), "html", null, true);
        echo " es ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()), "html", null, true);
        echo "

";
        
        $__internal_b44f42c8316231ac3ad14e073f4d5d00a656323e64d501f86ddad2cd80f8a671->leave($__internal_b44f42c8316231ac3ad14e073f4d5d00a656323e64d501f86ddad2cd80f8a671_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:bd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* */
/* {{user.nameU}} es {{user.rol}}*/
/* */
/* {% endblock %}*/
/* */
