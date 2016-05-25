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
        $__internal_1930dc94ee250d510f0f27eda4f135dad1533b6e16afb319c43292a59d74efc9 = $this->env->getExtension("native_profiler");
        $__internal_1930dc94ee250d510f0f27eda4f135dad1533b6e16afb319c43292a59d74efc9->enter($__internal_1930dc94ee250d510f0f27eda4f135dad1533b6e16afb319c43292a59d74efc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:bd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1930dc94ee250d510f0f27eda4f135dad1533b6e16afb319c43292a59d74efc9->leave($__internal_1930dc94ee250d510f0f27eda4f135dad1533b6e16afb319c43292a59d74efc9_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_aa9907f78450b02a1e22a1610cd3f2e0e1ece5bc28046a549cd683fdeb7a372d = $this->env->getExtension("native_profiler");
        $__internal_aa9907f78450b02a1e22a1610cd3f2e0e1ece5bc28046a549cd683fdeb7a372d->enter($__internal_aa9907f78450b02a1e22a1610cd3f2e0e1ece5bc28046a549cd683fdeb7a372d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_aa9907f78450b02a1e22a1610cd3f2e0e1ece5bc28046a549cd683fdeb7a372d->leave($__internal_aa9907f78450b02a1e22a1610cd3f2e0e1ece5bc28046a549cd683fdeb7a372d_prof);

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
