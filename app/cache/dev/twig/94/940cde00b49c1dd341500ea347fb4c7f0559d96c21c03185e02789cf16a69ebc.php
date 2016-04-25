<?php

/* @intranet/Default/tasks.html.twig */
class __TwigTemplate_c1d5de8b764674b05149a208709b7c7c3fd4913dbbe01605ba086f5ef9c7fe1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/tasks.html.twig", 1);
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
        $__internal_e1dc2987b9bd5c68213614b505ad37e2e28fb6e42abf003bc278c58bd9c36c14 = $this->env->getExtension("native_profiler");
        $__internal_e1dc2987b9bd5c68213614b505ad37e2e28fb6e42abf003bc278c58bd9c36c14->enter($__internal_e1dc2987b9bd5c68213614b505ad37e2e28fb6e42abf003bc278c58bd9c36c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/tasks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1dc2987b9bd5c68213614b505ad37e2e28fb6e42abf003bc278c58bd9c36c14->leave($__internal_e1dc2987b9bd5c68213614b505ad37e2e28fb6e42abf003bc278c58bd9c36c14_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_70b9f2b5ef0fcb5e72fd409cef5a01441e0301d730e19d156340c9292d7c1081 = $this->env->getExtension("native_profiler");
        $__internal_70b9f2b5ef0fcb5e72fd409cef5a01441e0301d730e19d156340c9292d7c1081->enter($__internal_70b9f2b5ef0fcb5e72fd409cef5a01441e0301d730e19d156340c9292d7c1081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
 <!-- <form action=\"vHours.php\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>Number of hours: </label><input type='number' name=\"numhours\" id=\"numhours\" min=\"1\" max=\"50\"><i>min:1, max:20</i><BR>
        <label>Between: </label><input type='date' id=\"betw\"name=\"betw\" min=\"<?php echo date(\"Y-m-d\");?>\" value=\"<?php echo date(\"Y-m-d\");?>\"><i>default: TODAY</i><BR>
        <label>and: </label><input type='date' id=\"and\"name=\"and\" max=\"<?php echo date(\"Y-m-d\", strtotime(\"+3 month\")); ?>\" value=\"<?php echo date(\"Y-m-d\", strtotime(\"+1 week\")); ?>\">
        <i>default: 1 WEEK, max 3 months</i><BR>
                                     <input type=\"submit\" value=\"Modify\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"hours\">
                                     <input type=\"hidden\" name=\"actualDate\" value=\"<?php echo date(\"Y-m-d H:i:s\");?>\">
   </form>
-->

<table border=1>
<tr >
    <th>TITLE</th>
    <th>DESCRIPTION</th>
    <th>USERS</th>
</tr>
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listTasks"]) ? $context["listTasks"] : $this->getContext($context, "listTasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 23
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "description", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">
    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["new"], "users", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 28
                echo "    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
                echo ",
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
</table>

";
        
        $__internal_70b9f2b5ef0fcb5e72fd409cef5a01441e0301d730e19d156340c9292d7c1081->leave($__internal_70b9f2b5ef0fcb5e72fd409cef5a01441e0301d730e19d156340c9292d7c1081_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  89 => 30,  80 => 28,  76 => 27,  71 => 25,  67 => 24,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/*  <!-- <form action="vHours.php" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>Number of hours: </label><input type='number' name="numhours" id="numhours" min="1" max="50"><i>min:1, max:20</i><BR>*/
/*         <label>Between: </label><input type='date' id="betw"name="betw" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>"><i>default: TODAY</i><BR>*/
/*         <label>and: </label><input type='date' id="and"name="and" max="<?php echo date("Y-m-d", strtotime("+3 month")); ?>" value="<?php echo date("Y-m-d", strtotime("+1 week")); ?>">*/
/*         <i>default: 1 WEEK, max 3 months</i><BR>*/
/*                                      <input type="submit" value="Modify">*/
/*                                      <input type="hidden" name="typeF" value="hours">*/
/*                                      <input type="hidden" name="actualDate" value="<?php echo date("Y-m-d H:i:s");?>">*/
/*    </form>*/
/* -->*/
/* */
/* <table border=1>*/
/* <tr >*/
/*     <th>TITLE</th>*/
/*     <th>DESCRIPTION</th>*/
/*     <th>USERS</th>*/
/* </tr>*/
/* {% for new in listTasks %}*/
/* <tr>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.title }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.description }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">*/
/*     {% for user in new.users %}*/
/*     {{ user.name }},*/
/*     {% endfor %}*/
/*     </td>*/
/* </tr>*/
/* {% endfor %}*/
/* */
/* </table>*/
/* */
/* {% endblock %}*/
/* */
