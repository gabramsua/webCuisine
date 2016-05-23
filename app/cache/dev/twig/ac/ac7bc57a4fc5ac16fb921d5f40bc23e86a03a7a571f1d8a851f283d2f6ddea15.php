<?php

/* ::news.html.twig */
class __TwigTemplate_4cc7c2c7c7a21319f45d0863beee6b882bf43fd9485500bdb2cf8a3d8319a218 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6600b63aceb876ca504e4751021ad09e6a37f3491bf90925f8ee4e1e3cd4ffa5 = $this->env->getExtension("native_profiler");
        $__internal_6600b63aceb876ca504e4751021ad09e6a37f3491bf90925f8ee4e1e3cd4ffa5->enter($__internal_6600b63aceb876ca504e4751021ad09e6a37f3491bf90925f8ee4e1e3cd4ffa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::news.html.twig"));

        // line 2
        echo "
 ";
        // line 3
        $this->displayBlock('contenido', $context, $blocks);
        
        $__internal_6600b63aceb876ca504e4751021ad09e6a37f3491bf90925f8ee4e1e3cd4ffa5->leave($__internal_6600b63aceb876ca504e4751021ad09e6a37f3491bf90925f8ee4e1e3cd4ffa5_prof);

    }

    public function block_contenido($context, array $blocks = array())
    {
        $__internal_9f76fb540dee19d41c9f3a9d2ac5c7bcd49856a88cf0f5e96525a2227dc1c083 = $this->env->getExtension("native_profiler");
        $__internal_9f76fb540dee19d41c9f3a9d2ac5c7bcd49856a88cf0f5e96525a2227dc1c083->enter($__internal_9f76fb540dee19d41c9f3a9d2ac5c7bcd49856a88cf0f5e96525a2227dc1c083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<table border=1>
<tr>
    <th>DATE</th>
    <th>HOUR</th>
    <th>TITLE</th>
    <th>CONTENT</th>
</tr>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 13
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["n"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["n"], "time", array()), "H:i"), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "title", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">
          <form action='";
            // line 18
            echo $this->env->getExtension('routing')->getPath("intranet_crudnew");
            echo "' method='post'>
                <input type=\"submit\" value=\"VER\" >
                <input type=\"hidden\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "content", array()), "html", null, true);
            echo "\" name=\"content\">
          </form>
    </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>
";
        
        $__internal_9f76fb540dee19d41c9f3a9d2ac5c7bcd49856a88cf0f5e96525a2227dc1c083->leave($__internal_9f76fb540dee19d41c9f3a9d2ac5c7bcd49856a88cf0f5e96525a2227dc1c083_prof);

    }

    public function getTemplateName()
    {
        return "::news.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  73 => 20,  68 => 18,  63 => 16,  59 => 15,  55 => 14,  52 => 13,  48 => 12,  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {# extends 'intranetBundle::layout.html.twig' #}*/
/* */
/*  {% block contenido %}*/
/* */
/* <table border=1>*/
/* <tr>*/
/*     <th>DATE</th>*/
/*     <th>HOUR</th>*/
/*     <th>TITLE</th>*/
/*     <th>CONTENT</th>*/
/* </tr>*/
/* {% for n in new %}*/
/* <tr>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ n.date|date('Y-m-d')  }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ n.time|date('H:i') }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ n.title }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">*/
/*           <form action='{{ path('intranet_crudnew') }}' method='post'>*/
/*                 <input type="submit" value="VER" >*/
/*                 <input type="hidden" value="{{ n.content }}" name="content">*/
/*           </form>*/
/*     </td>*/
/* </tr>*/
/* {% endfor %}*/
/* </table>*/
/* {% endblock %}*/
/* */
