<?php

/* intranetBundle:Default:tasks.html.twig */
class __TwigTemplate_7337c8e60edc634db457eebc990f28e48d625ed485a316e1a98d83ed92828793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:tasks.html.twig", 1);
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
        $__internal_e945398c66a1e367f714421b996d9e365b5a3cdcf11dbf891488e883796926ca = $this->env->getExtension("native_profiler");
        $__internal_e945398c66a1e367f714421b996d9e365b5a3cdcf11dbf891488e883796926ca->enter($__internal_e945398c66a1e367f714421b996d9e365b5a3cdcf11dbf891488e883796926ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:tasks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e945398c66a1e367f714421b996d9e365b5a3cdcf11dbf891488e883796926ca->leave($__internal_e945398c66a1e367f714421b996d9e365b5a3cdcf11dbf891488e883796926ca_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_66d59d8978b3e6ac84e07beb98568057616622c2a97386f88e6734a48ed5f903 = $this->env->getExtension("native_profiler");
        $__internal_66d59d8978b3e6ac84e07beb98568057616622c2a97386f88e6734a48ed5f903->enter($__internal_66d59d8978b3e6ac84e07beb98568057616622c2a97386f88e6734a48ed5f903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "

<table border=1>
<tr >
    <th>id</th>
    <th style=\"padding-left: 10px;padding-right: 10px;\">TITLE</th>
    <th style=\"padding-left: 10px;padding-right: 10px;\">DESCRIPTION</th>
    <th style=\"padding-left: 10px;padding-right: 10px;\">WHO CREATE</th>
</tr>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listTasks"]) ? $context["listTasks"] : $this->getContext($context, "listTasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 14
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">
    <form action='";
            // line 16
            echo $this->env->getExtension('routing')->getPath("intranet_crudtask");
            echo "' method='post'>
          <input type=\"submit\" value=\"VER\" >
          <input type=\"hidden\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "id", array()), "html", null, true);
            echo "\" name=\"id\">
    </form>
    </td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "content", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "whocreate", array()), "html", null, true);
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</table>
<br><br>

<form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("intranet_newtask");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
    <input type=\"submit\" name=\"newTask\" value=\"NEW TASK\">
  </form>


";
        
        $__internal_66d59d8978b3e6ac84e07beb98568057616622c2a97386f88e6734a48ed5f903->leave($__internal_66d59d8978b3e6ac84e07beb98568057616622c2a97386f88e6734a48ed5f903_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  87 => 26,  78 => 23,  74 => 22,  70 => 21,  64 => 18,  59 => 16,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* */
/* <table border=1>*/
/* <tr >*/
/*     <th>id</th>*/
/*     <th style="padding-left: 10px;padding-right: 10px;">TITLE</th>*/
/*     <th style="padding-left: 10px;padding-right: 10px;">DESCRIPTION</th>*/
/*     <th style="padding-left: 10px;padding-right: 10px;">WHO CREATE</th>*/
/* </tr>*/
/* {% for new in listTasks %}*/
/* <tr>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">*/
/*     <form action='{{ path('intranet_crudtask') }}' method='post'>*/
/*           <input type="submit" value="VER" >*/
/*           <input type="hidden" value="{{ new.id }}" name="id">*/
/*     </form>*/
/*     </td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.title }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.content }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{new.whocreate}}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* </table>*/
/* <br><br>*/
/* */
/* <form action="{{ path('intranet_newtask')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*     <input type="submit" name="newTask" value="NEW TASK">*/
/*   </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
