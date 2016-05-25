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
        $__internal_ea529d5faefe6c9f124af9a9a7b4753f3f8faa7140fb67420b5d4bcbae3aec9a = $this->env->getExtension("native_profiler");
        $__internal_ea529d5faefe6c9f124af9a9a7b4753f3f8faa7140fb67420b5d4bcbae3aec9a->enter($__internal_ea529d5faefe6c9f124af9a9a7b4753f3f8faa7140fb67420b5d4bcbae3aec9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:tasks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea529d5faefe6c9f124af9a9a7b4753f3f8faa7140fb67420b5d4bcbae3aec9a->leave($__internal_ea529d5faefe6c9f124af9a9a7b4753f3f8faa7140fb67420b5d4bcbae3aec9a_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_35ef8c378c97b7798e9383223b6f23de39f8fdc26e51463795c556f5b6eef4f1 = $this->env->getExtension("native_profiler");
        $__internal_35ef8c378c97b7798e9383223b6f23de39f8fdc26e51463795c556f5b6eef4f1->enter($__internal_35ef8c378c97b7798e9383223b6f23de39f8fdc26e51463795c556f5b6eef4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
 ";
        // line 5
        if (((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")) != "developer")) {
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
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myTasks"]) ? $context["myTasks"] : $this->getContext($context, "myTasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listTasks"]) ? $context["listTasks"] : $this->getContext($context, "listTasks")));
            foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
                // line 21
                if (($this->getAttribute($context["t"], "idTask", array()) == $this->getAttribute($context["new"], "id", array()))) {
                    // line 22
                    echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">
    <form action='";
                    // line 24
                    echo $this->env->getExtension('routing')->getPath("intranet_crudtask");
                    echo "' method='post'>
          <input type=\"submit\" value=\"VER\" >
          <input type=\"hidden\" value=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "id", array()), "html", null, true);
                    echo "\" name=\"id\">
    </form>
    </td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "content", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "whocreate", array()), "html", null, true);
                    echo "</td>
</tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>


";
        
        $__internal_35ef8c378c97b7798e9383223b6f23de39f8fdc26e51463795c556f5b6eef4f1->leave($__internal_35ef8c378c97b7798e9383223b6f23de39f8fdc26e51463795c556f5b6eef4f1_prof);

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
        return array (  111 => 34,  98 => 31,  94 => 30,  90 => 29,  84 => 26,  79 => 24,  75 => 22,  73 => 21,  69 => 20,  65 => 19,  53 => 9,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/*  {% if rol!='developer' %}*/
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
/* */
/* {% for t in myTasks %}*/
/* {% for new in listTasks %}*/
/* {% if t.idTask==new.id %}*/
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
/* </tr>{% endif %}*/
/* {% endfor %}{% endfor %}*/
/* </table>*/
/* */
/* */
/* {% endblock %}*/
/* */
