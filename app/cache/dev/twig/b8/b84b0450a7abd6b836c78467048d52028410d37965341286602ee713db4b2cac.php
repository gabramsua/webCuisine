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
        $__internal_3635537d15672f62048c58cf2f62803e7bdad57827bd0bd02d04d9aa3edc13c1 = $this->env->getExtension("native_profiler");
        $__internal_3635537d15672f62048c58cf2f62803e7bdad57827bd0bd02d04d9aa3edc13c1->enter($__internal_3635537d15672f62048c58cf2f62803e7bdad57827bd0bd02d04d9aa3edc13c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:tasks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3635537d15672f62048c58cf2f62803e7bdad57827bd0bd02d04d9aa3edc13c1->leave($__internal_3635537d15672f62048c58cf2f62803e7bdad57827bd0bd02d04d9aa3edc13c1_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_63d128b5786cebe8f395197e23b4b039be668fe42327bfe2497a7b45b759fbb6 = $this->env->getExtension("native_profiler");
        $__internal_63d128b5786cebe8f395197e23b4b039be668fe42327bfe2497a7b45b759fbb6->enter($__internal_63d128b5786cebe8f395197e23b4b039be668fe42327bfe2497a7b45b759fbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
 ";
        // line 5
        if (((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")) == "developer")) {
            // line 6
            echo " <form action=\"";
            echo $this->env->getExtension('routing')->getPath("intranet_newtask");
            echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
     <input type=\"submit\" name=\"newTask\" value=\"NEW TASK\">
   </form>
 ";
        }
        // line 9
        echo "<br><br>

<table border=1>
<tr>
    <th>id</th>
    <th style=\"padding-left: 10px;padding-right: 10px;\">TITLE</th>
    <th style=\"padding-left: 10px;padding-right: 10px;\">DESCRIPTION</th>
    <th style=\"padding-left: 10px;padding-right: 10px;\">WHO CREATE</th>
</tr>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listTasks"]) ? $context["listTasks"] : $this->getContext($context, "listTasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 19
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">
    <form action='";
            // line 21
            echo $this->env->getExtension('routing')->getPath("intranet_crudtask");
            echo "' method='post'>
          <input type=\"submit\" value=\"VER\" >
          <input type=\"hidden\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "id", array()), "html", null, true);
            echo "\" name=\"id\">
    </form>
    </td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "content", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "whocreate", array()), "html", null, true);
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</table>


";
        
        $__internal_63d128b5786cebe8f395197e23b4b039be668fe42327bfe2497a7b45b759fbb6->leave($__internal_63d128b5786cebe8f395197e23b4b039be668fe42327bfe2497a7b45b759fbb6_prof);

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
        return array (  100 => 31,  91 => 28,  87 => 27,  83 => 26,  77 => 23,  72 => 21,  68 => 19,  64 => 18,  53 => 9,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/*  {% if rol=='developer' %}*/
/*  <form action="{{ path('intranet_newtask') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*      <input type="submit" name="newTask" value="NEW TASK">*/
/*    </form>*/
/*  {% endif %}<br><br>*/
/* */
/* <table border=1>*/
/* <tr>*/
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
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.whocreate }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* </table>*/
/* */
/* */
/* {% endblock %}*/
/* */
