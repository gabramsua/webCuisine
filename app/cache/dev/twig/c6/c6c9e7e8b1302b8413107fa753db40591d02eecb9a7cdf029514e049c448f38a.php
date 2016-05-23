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
        $__internal_78d92c0578a16032b4d67c17714cbab63a495735de0d6ac772bbcfe3160d4bf6 = $this->env->getExtension("native_profiler");
        $__internal_78d92c0578a16032b4d67c17714cbab63a495735de0d6ac772bbcfe3160d4bf6->enter($__internal_78d92c0578a16032b4d67c17714cbab63a495735de0d6ac772bbcfe3160d4bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:bd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78d92c0578a16032b4d67c17714cbab63a495735de0d6ac772bbcfe3160d4bf6->leave($__internal_78d92c0578a16032b4d67c17714cbab63a495735de0d6ac772bbcfe3160d4bf6_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2bcae9eb46e231db5b4b06c5020cdd203ab6669698780df3e6f2064c06847f4f = $this->env->getExtension("native_profiler");
        $__internal_2bcae9eb46e231db5b4b06c5020cdd203ab6669698780df3e6f2064c06847f4f->enter($__internal_2bcae9eb46e231db5b4b06c5020cdd203ab6669698780df3e6f2064c06847f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_2bcae9eb46e231db5b4b06c5020cdd203ab6669698780df3e6f2064c06847f4f->leave($__internal_2bcae9eb46e231db5b4b06c5020cdd203ab6669698780df3e6f2064c06847f4f_prof);

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
/* {% endblock %}*/
/* */
