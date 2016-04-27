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
        $__internal_b2a79d38682c694169a5dfb8deb1b6dada84d469372be34b0772cb798ffe0086 = $this->env->getExtension("native_profiler");
        $__internal_b2a79d38682c694169a5dfb8deb1b6dada84d469372be34b0772cb798ffe0086->enter($__internal_b2a79d38682c694169a5dfb8deb1b6dada84d469372be34b0772cb798ffe0086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:landinga.html.twig"));

        // line 2
        $context["__internal_01cda9be2ddc377209306bdaeca66ae5116991d35330c175d2e1a06815493a2e"] = $this->loadTemplate("intranetBundle::macroMenu.html.twig", "intranetBundle:Default:landinga.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2a79d38682c694169a5dfb8deb1b6dada84d469372be34b0772cb798ffe0086->leave($__internal_b2a79d38682c694169a5dfb8deb1b6dada84d469372be34b0772cb798ffe0086_prof);

    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_6ef56c8071b52ada86ccec6ed7043894b2572bef14d8e7bd0cd432b907850202 = $this->env->getExtension("native_profiler");
        $__internal_6ef56c8071b52ada86ccec6ed7043894b2572bef14d8e7bd0cd432b907850202->enter($__internal_6ef56c8071b52ada86ccec6ed7043894b2572bef14d8e7bd0cd432b907850202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 6
        echo "<script>
    window.onload = function(){
          document.forms['form1'].submit()
    }
</script>
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 12
            echo "      ";
            if (($this->getAttribute($context["me"], "rol", array()) == "buo")) {
                $context["var"] = "buo";
            }
            // line 13
            $context["urol"] = $this->getAttribute($context["me"], "rol", array());
            // line 14
            echo "
    <form action=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_homepage", array("_locale" => $this->getAttribute($context["me"], "lang", array()))), "html", null, true);
            echo "\" method=\"post\" id=\"form1\">
        <input type=\"hidden\" id=\"r\" name=\"r\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "rol", array()), "html", null, true);
            echo "\">
    </form>
";
            // line 18
            if ($this->env->getExtension('security')->isGranted("ROLE_BUO")) {
                // line 19
                echo $context["__internal_01cda9be2ddc377209306bdaeca66ae5116991d35330c175d2e1a06815493a2e"]->getuROL((isset($context["urol"]) ? $context["urol"] : $this->getContext($context, "urol")));
                echo "
";
            }
            // line 21
            echo "
    <script>
        var roll=document.getElementById(\"r\").value;
        //sessionStorage.setItem(\"ROL\", roll);
        //alert(roll);
        document.getElementById(\"pp\").innerHTML =roll;
    </script>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6ef56c8071b52ada86ccec6ed7043894b2572bef14d8e7bd0cd432b907850202->leave($__internal_6ef56c8071b52ada86ccec6ed7043894b2572bef14d8e7bd0cd432b907850202_prof);

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
        return array (  80 => 21,  75 => 19,  73 => 18,  68 => 16,  64 => 15,  61 => 14,  59 => 13,  54 => 12,  50 => 11,  43 => 6,  37 => 5,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout2.html.twig' %}*/
/* {% from 'intranetBundle::macroMenu.html.twig' import uROL %}*/
/* */
/* */
/* {% block contenido %}*/
/* <script>*/
/*     window.onload = function(){*/
/*           document.forms['form1'].submit()*/
/*     }*/
/* </script>*/
/* {% for me in user %}*/
/*       {% if me.rol=="buo" %}{% set var='buo'%}{% endif %}*/
/* {% set urol=me.rol %}*/
/* */
/*     <form action="{{ path('intranet_homepage', {_locale: me.lang }) }}" method="post" id="form1">*/
/*         <input type="hidden" id="r" name="r" value="{{me.rol}}">*/
/*     </form>*/
/* {% if is_granted('ROLE_BUO') %}*/
/* {{ uROL(urol) }}*/
/* {% endif %}*/
/* */
/*     <script>*/
/*         var roll=document.getElementById("r").value;*/
/*         //sessionStorage.setItem("ROL", roll);*/
/*         //alert(roll);*/
/*         document.getElementById("pp").innerHTML =roll;*/
/*     </script>*/
/*  {% endfor %}*/
/* {% endblock %}*/
/* */
