<?php

/* intranetBundle:Default:news.html.twig */
class __TwigTemplate_ba0f25606d2bda927139e202e005474d4392013a6bbd4cfe3a55d86a4b117e89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:news.html.twig", 1);
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
        $__internal_45be24dad64714e9c746a2464f5233f56f7935c59c49c5b8c0950f6b1b2b8dc3 = $this->env->getExtension("native_profiler");
        $__internal_45be24dad64714e9c746a2464f5233f56f7935c59c49c5b8c0950f6b1b2b8dc3->enter($__internal_45be24dad64714e9c746a2464f5233f56f7935c59c49c5b8c0950f6b1b2b8dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45be24dad64714e9c746a2464f5233f56f7935c59c49c5b8c0950f6b1b2b8dc3->leave($__internal_45be24dad64714e9c746a2464f5233f56f7935c59c49c5b8c0950f6b1b2b8dc3_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_e8ced837ae868c81449b04b1f96764b114eb1edd94c38323793e46f7ca7ce07e = $this->env->getExtension("native_profiler");
        $__internal_e8ced837ae868c81449b04b1f96764b114eb1edd94c38323793e46f7ca7ce07e->enter($__internal_e8ced837ae868c81449b04b1f96764b114eb1edd94c38323793e46f7ca7ce07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<i>No estaría mal poder hacer un filtro por canal <br> o mostrar también los canales en los que se haya y hacer click en el nombre de la columna</i><hr>
<table border=1>
<tr>
    <th>DATE</th>
    <th>HOUR</th>
    <th>TITLE</th>
    <th>CONTENT</th>
</tr>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 14
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["n"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["n"], "time", array()), "H:i"), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "title", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">
          <form action='";
            // line 19
            echo $this->env->getExtension('routing')->getPath("intranet_crudnew");
            echo "' method='post'>
                <input type=\"submit\" value=\"VER\" >
                <input type=\"hidden\" value=\"";
            // line 21
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
        // line 26
        echo "</table>

<br><br>

<form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("intranet_newnew");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
    <input type=\"submit\" name=\"newNew\" value=\"NEW NEW\">
  </form>

";
        
        $__internal_e8ced837ae868c81449b04b1f96764b114eb1edd94c38323793e46f7ca7ce07e->leave($__internal_e8ced837ae868c81449b04b1f96764b114eb1edd94c38323793e46f7ca7ce07e_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 30,  87 => 26,  76 => 21,  71 => 19,  66 => 17,  62 => 16,  58 => 15,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* <i>No estaría mal poder hacer un filtro por canal <br> o mostrar también los canales en los que se haya y hacer click en el nombre de la columna</i><hr>*/
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
/* */
/* <br><br>*/
/* */
/* <form action="{{ path('intranet_newnew')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*     <input type="submit" name="newNew" value="NEW NEW">*/
/*   </form>*/
/* */
/* {% endblock %}*/
/* */
