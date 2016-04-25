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
        $__internal_19da3c73d9e121e0a6883f72edddbc7073e1f489c2af13edd741c3b44ab0a531 = $this->env->getExtension("native_profiler");
        $__internal_19da3c73d9e121e0a6883f72edddbc7073e1f489c2af13edd741c3b44ab0a531->enter($__internal_19da3c73d9e121e0a6883f72edddbc7073e1f489c2af13edd741c3b44ab0a531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:landinga.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19da3c73d9e121e0a6883f72edddbc7073e1f489c2af13edd741c3b44ab0a531->leave($__internal_19da3c73d9e121e0a6883f72edddbc7073e1f489c2af13edd741c3b44ab0a531_prof);

    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_0bb01092c5b74d901db33a25dc79befab7132d348f324e9142b8ff59e395fa45 = $this->env->getExtension("native_profiler");
        $__internal_0bb01092c5b74d901db33a25dc79befab7132d348f324e9142b8ff59e395fa45->enter($__internal_0bb01092c5b74d901db33a25dc79befab7132d348f324e9142b8ff59e395fa45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 5
        echo "<script>
    window.onload = function(){
          document.forms['form1'].submit()
    }
</script>
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 11
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_homepage", array("_locale" => $this->getAttribute($context["me"], "lang", array())), array("_rol" => $this->getAttribute($context["me"], "rol", array()))), "html", null, true);
            echo "\" method=\"post\" id=\"form1\">
        <input type=\"hidden\" id=\"r\" name=\"r\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "rol", array()), "html", null, true);
            echo "\">
    </form>
    <script>
        var roll=document.getElementById(\"r\").value;
        sessionStorage.setItem(\"ROL\", roll);
        alert(roll);
    </script>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0bb01092c5b74d901db33a25dc79befab7132d348f324e9142b8ff59e395fa45->leave($__internal_0bb01092c5b74d901db33a25dc79befab7132d348f324e9142b8ff59e395fa45_prof);

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
        return array (  56 => 12,  51 => 11,  47 => 10,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout2.html.twig' %}*/
/* */
/* */
/* {% block contenido %}*/
/* <script>*/
/*     window.onload = function(){*/
/*           document.forms['form1'].submit()*/
/*     }*/
/* </script>*/
/* {% for me in user %}*/
/*     <form action="{{ path('intranet_homepage', {_locale: me.lang }, {_rol: me.rol }) }}" method="post" id="form1">*/
/*         <input type="hidden" id="r" name="r" value="{{me.rol}}">*/
/*     </form>*/
/*     <script>*/
/*         var roll=document.getElementById("r").value;*/
/*         sessionStorage.setItem("ROL", roll);*/
/*         alert(roll);*/
/*     </script>*/
/*  {% endfor %}*/
/* {% endblock %}*/
/* */
