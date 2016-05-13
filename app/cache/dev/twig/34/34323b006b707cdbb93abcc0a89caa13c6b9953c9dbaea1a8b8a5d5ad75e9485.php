<?php

/* intranetBundle:Default:channels.html.twig */
class __TwigTemplate_da19cf34cc85329928a64ad08f4719f04f1a952878acae282a60569fe37b2ccf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:channels.html.twig", 1);
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
        $__internal_8f053afcabd14b9a2a455395f9a493818883ee8781b077fe7722bae7d5447964 = $this->env->getExtension("native_profiler");
        $__internal_8f053afcabd14b9a2a455395f9a493818883ee8781b077fe7722bae7d5447964->enter($__internal_8f053afcabd14b9a2a455395f9a493818883ee8781b077fe7722bae7d5447964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:channels.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f053afcabd14b9a2a455395f9a493818883ee8781b077fe7722bae7d5447964->leave($__internal_8f053afcabd14b9a2a455395f9a493818883ee8781b077fe7722bae7d5447964_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ef65b0ec58bff067d704e4503bc1e577a455d1cc9f16f48c133d663eda00a873 = $this->env->getExtension("native_profiler");
        $__internal_ef65b0ec58bff067d704e4503bc1e577a455d1cc9f16f48c133d663eda00a873->enter($__internal_ef65b0ec58bff067d704e4503bc1e577a455d1cc9f16f48c133d663eda00a873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "

<table border=1>
<tr>
    <th style=\"padding-left: 10px;padding-right: 10px;\">NAME</th>
</tr>
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listChannels"]) ? $context["listChannels"] : $this->getContext($context, "listChannels")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 11
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">
    <form action='";
            // line 13
            echo $this->env->getExtension('routing')->getPath("intranet_crudchannel");
            echo "' method='post'>
          <input type=\"submit\" name=\"nameChannel\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "\" >
          <input type=\"hidden\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\" name=\"id\">
    </form>
    </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>
<br><br>

<form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("intranet_newchannel");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
    <input type=\"submit\" name=\"newChannel\" value=\"NEW CHANNEL\">
  </form>


";
        
        $__internal_ef65b0ec58bff067d704e4503bc1e577a455d1cc9f16f48c133d663eda00a873->leave($__internal_ef65b0ec58bff067d704e4503bc1e577a455d1cc9f16f48c133d663eda00a873_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:channels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  75 => 20,  64 => 15,  60 => 14,  56 => 13,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* */
/* <table border=1>*/
/* <tr>*/
/*     <th style="padding-left: 10px;padding-right: 10px;">NAME</th>*/
/* </tr>*/
/* {% for c in listChannels %}*/
/* <tr>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">*/
/*     <form action='{{ path('intranet_crudchannel') }}' method='post'>*/
/*           <input type="submit" name="nameChannel" value="{{c.name}}" >*/
/*           <input type="hidden" value="{{ c.id }}" name="id">*/
/*     </form>*/
/*     </td>*/
/* </tr>*/
/* {% endfor %}*/
/* </table>*/
/* <br><br>*/
/* */
/* <form action="{{ path('intranet_newchannel')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*     <input type="submit" name="newChannel" value="NEW CHANNEL">*/
/*   </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
