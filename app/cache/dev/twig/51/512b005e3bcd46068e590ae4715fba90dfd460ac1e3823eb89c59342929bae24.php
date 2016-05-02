<?php

/* intranetBundle:Default:landinga.html.twig */
class __TwigTemplate_59621fc0b10a3d290b40e09636783fd1db0701e86ab17609961d6bbfe0af2b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout2.html.twig", "intranetBundle:Default:landinga.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "intranetBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acc3fbaee4bedf7410070cfc8837aaffc44673b56e18be26d9985cda0deef30c = $this->env->getExtension("native_profiler");
        $__internal_acc3fbaee4bedf7410070cfc8837aaffc44673b56e18be26d9985cda0deef30c->enter($__internal_acc3fbaee4bedf7410070cfc8837aaffc44673b56e18be26d9985cda0deef30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:landinga.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acc3fbaee4bedf7410070cfc8837aaffc44673b56e18be26d9985cda0deef30c->leave($__internal_acc3fbaee4bedf7410070cfc8837aaffc44673b56e18be26d9985cda0deef30c_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_7c1611a129fabf9a96beeac0ef589092aee8372b214b299742c78fdcb0845d6e = $this->env->getExtension("native_profiler");
        $__internal_7c1611a129fabf9a96beeac0ef589092aee8372b214b299742c78fdcb0845d6e->enter($__internal_7c1611a129fabf9a96beeac0ef589092aee8372b214b299742c78fdcb0845d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<script>
    window.onload = function(){
          document.forms['form1'].submit();
    }
</script>
    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_homepage", array("_locale" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lang", array()))), "html", null, true);
        echo "\" method=\"post\" id=\"form1\"></form>
";
        
        $__internal_7c1611a129fabf9a96beeac0ef589092aee8372b214b299742c78fdcb0845d6e->leave($__internal_7c1611a129fabf9a96beeac0ef589092aee8372b214b299742c78fdcb0845d6e_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:landinga.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout2.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <script>*/
/*     window.onload = function(){*/
/*           document.forms['form1'].submit();*/
/*     }*/
/* </script>*/
/*     <form action="{{ path('intranet_homepage', {_locale: user.lang }) }}" method="post" id="form1"></form>*/
/* {% endblock %}*/
/* */
