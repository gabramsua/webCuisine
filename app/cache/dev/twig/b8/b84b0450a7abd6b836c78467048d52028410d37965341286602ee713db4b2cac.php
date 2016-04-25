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
        $__internal_6c70294e2ebdc647f4d5479f182e6cd8db98345f400152c1fce1752211106dfd = $this->env->getExtension("native_profiler");
        $__internal_6c70294e2ebdc647f4d5479f182e6cd8db98345f400152c1fce1752211106dfd->enter($__internal_6c70294e2ebdc647f4d5479f182e6cd8db98345f400152c1fce1752211106dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:tasks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c70294e2ebdc647f4d5479f182e6cd8db98345f400152c1fce1752211106dfd->leave($__internal_6c70294e2ebdc647f4d5479f182e6cd8db98345f400152c1fce1752211106dfd_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_b3856293d32d73a797bbe303bf3d62ec81aa352ecb90ba319ba9b071bb6fa387 = $this->env->getExtension("native_profiler");
        $__internal_b3856293d32d73a797bbe303bf3d62ec81aa352ecb90ba319ba9b071bb6fa387->enter($__internal_b3856293d32d73a797bbe303bf3d62ec81aa352ecb90ba319ba9b071bb6fa387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_b3856293d32d73a797bbe303bf3d62ec81aa352ecb90ba319ba9b071bb6fa387->leave($__internal_b3856293d32d73a797bbe303bf3d62ec81aa352ecb90ba319ba9b071bb6fa387_prof);

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
