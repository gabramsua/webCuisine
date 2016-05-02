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
        $__internal_4dabd50e3e713a44480e5432393d5988258f2fa53023482582acb4e2424614a3 = $this->env->getExtension("native_profiler");
        $__internal_4dabd50e3e713a44480e5432393d5988258f2fa53023482582acb4e2424614a3->enter($__internal_4dabd50e3e713a44480e5432393d5988258f2fa53023482582acb4e2424614a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:bd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dabd50e3e713a44480e5432393d5988258f2fa53023482582acb4e2424614a3->leave($__internal_4dabd50e3e713a44480e5432393d5988258f2fa53023482582acb4e2424614a3_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_f5ed5a048bef37e0f581dd8b3e00d1348ba244c45d10bde64d621c43e0e94fc5 = $this->env->getExtension("native_profiler");
        $__internal_f5ed5a048bef37e0f581dd8b3e00d1348ba244c45d10bde64d621c43e0e94fc5->enter($__internal_f5ed5a048bef37e0f581dd8b3e00d1348ba244c45d10bde64d621c43e0e94fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "

";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nameU", array()), "html", null, true);
        echo " es ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()), "html", null, true);
        echo "
<br><br>
";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getNombreCompleto", array()), "html", null, true);
        echo "
";
        
        $__internal_f5ed5a048bef37e0f581dd8b3e00d1348ba244c45d10bde64d621c43e0e94fc5->leave($__internal_f5ed5a048bef37e0f581dd8b3e00d1348ba244c45d10bde64d621c43e0e94fc5_prof);

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
        return array (  51 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* */
/* {{user.nameU}} es {{user.rol}}*/
/* <br><br>*/
/* {{user.getNombreCompleto}}*/
/* {% endblock %}*/
/* */
