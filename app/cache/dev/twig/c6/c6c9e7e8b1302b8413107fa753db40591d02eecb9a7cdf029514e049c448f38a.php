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
        $__internal_294b6cab1739787e374a99fcccbb3c41bd524e38c64c91302982fe0a4f63c209 = $this->env->getExtension("native_profiler");
        $__internal_294b6cab1739787e374a99fcccbb3c41bd524e38c64c91302982fe0a4f63c209->enter($__internal_294b6cab1739787e374a99fcccbb3c41bd524e38c64c91302982fe0a4f63c209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:bd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_294b6cab1739787e374a99fcccbb3c41bd524e38c64c91302982fe0a4f63c209->leave($__internal_294b6cab1739787e374a99fcccbb3c41bd524e38c64c91302982fe0a4f63c209_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_d899e2e8beea70c53479aa1725c4416b99cb6e09e98e70992be26e8066d6bd66 = $this->env->getExtension("native_profiler");
        $__internal_d899e2e8beea70c53479aa1725c4416b99cb6e09e98e70992be26e8066d6bd66->enter($__internal_d899e2e8beea70c53479aa1725c4416b99cb6e09e98e70992be26e8066d6bd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "

";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nameU", array()), "html", null, true);
        echo " is ";
        echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "html", null, true);
        echo "
<br><br>
";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getNombreCompleto", array()), "html", null, true);
        echo "

";
        
        $__internal_d899e2e8beea70c53479aa1725c4416b99cb6e09e98e70992be26e8066d6bd66->leave($__internal_d899e2e8beea70c53479aa1725c4416b99cb6e09e98e70992be26e8066d6bd66_prof);

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
/* {{user.nameU}} is {{ role }}*/
/* <br><br>*/
/* {{user.getNombreCompleto}}*/
/* */
/* {% endblock %}*/
/* */
