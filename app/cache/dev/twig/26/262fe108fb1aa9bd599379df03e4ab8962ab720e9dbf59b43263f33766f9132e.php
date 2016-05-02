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
        $__internal_e296a7b02e45d4c51cdc93333ebe64c7418a62afd22812d8b99086743d780872 = $this->env->getExtension("native_profiler");
        $__internal_e296a7b02e45d4c51cdc93333ebe64c7418a62afd22812d8b99086743d780872->enter($__internal_e296a7b02e45d4c51cdc93333ebe64c7418a62afd22812d8b99086743d780872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e296a7b02e45d4c51cdc93333ebe64c7418a62afd22812d8b99086743d780872->leave($__internal_e296a7b02e45d4c51cdc93333ebe64c7418a62afd22812d8b99086743d780872_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_bda94812a2d036780a9f2056a928608dfea12f2cb777384f2469cca8c262de71 = $this->env->getExtension("native_profiler");
        $__internal_bda94812a2d036780a9f2056a928608dfea12f2cb777384f2469cca8c262de71->enter($__internal_bda94812a2d036780a9f2056a928608dfea12f2cb777384f2469cca8c262de71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "

<table border=1>
<tr >
    <th>USER</th>
    <th>LOGIN</th>
    <th>DATE</th>
    <th>TITLE</th>
    <th>CONTENT</th>
</tr>
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listnews"]) ? $context["listnews"] : $this->getContext($context, "listnews")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 15
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "user", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "login", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "send", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "content", array()), "html", null, true);
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
</table>
<br><br>

<form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("intranet_newnew");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
    <input type=\"submit\" name=\"newNew\" value=\"NEW NEW\">
  </form>

";
        
        $__internal_bda94812a2d036780a9f2056a928608dfea12f2cb777384f2469cca8c262de71->leave($__internal_bda94812a2d036780a9f2056a928608dfea12f2cb777384f2469cca8c262de71_prof);

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
        return array (  90 => 27,  84 => 23,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* */
/* <table border=1>*/
/* <tr >*/
/*     <th>USER</th>*/
/*     <th>LOGIN</th>*/
/*     <th>DATE</th>*/
/*     <th>TITLE</th>*/
/*     <th>CONTENT</th>*/
/* </tr>*/
/* {% for new in listnews %}*/
/* <tr>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.user }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.login }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.send }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.title }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.content }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* */
/* </table>*/
/* <br><br>*/
/* */
/* <form action="{{ path('intranet_newnew')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*     <input type="submit" name="newNew" value="NEW NEW">*/
/*   </form>*/
/* */
/* {% endblock %}*/
/* */
