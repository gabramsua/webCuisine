<?php

/* @intranet/Default/userManagement.html.twig */
class __TwigTemplate_6d9f67d86f79d43577b950763f01e0375a39939befb6449b056f17f91f5de0c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/userManagement.html.twig", 1);
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
        $__internal_23a0403cae996d440b78ea75227c64d46026ecd56e8aa11d5faed50cb1da1eb1 = $this->env->getExtension("native_profiler");
        $__internal_23a0403cae996d440b78ea75227c64d46026ecd56e8aa11d5faed50cb1da1eb1->enter($__internal_23a0403cae996d440b78ea75227c64d46026ecd56e8aa11d5faed50cb1da1eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/userManagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a0403cae996d440b78ea75227c64d46026ecd56e8aa11d5faed50cb1da1eb1->leave($__internal_23a0403cae996d440b78ea75227c64d46026ecd56e8aa11d5faed50cb1da1eb1_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ef6455361a04376a7c5ae6e00ad4797d33c0f88998dee58c80fbcdf77cb15092 = $this->env->getExtension("native_profiler");
        $__internal_ef6455361a04376a7c5ae6e00ad4797d33c0f88998dee58c80fbcdf77cb15092->enter($__internal_ef6455361a04376a7c5ae6e00ad4797d33c0f88998dee58c80fbcdf77cb15092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
    <th>name</th>
    <th>surname</th>
    <th>LOGIN</th>
    <th>tel</th>
    <th>photo</th>
</tr>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listUsers"]) ? $context["listUsers"] : $this->getContext($context, "listUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 25
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "name", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "surname", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "login", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "tel", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\"><img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "photo", array()), "html", null, true);
            echo "\"></td>
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
        
        $__internal_ef6455361a04376a7c5ae6e00ad4797d33c0f88998dee58c80fbcdf77cb15092->leave($__internal_ef6455361a04376a7c5ae6e00ad4797d33c0f88998dee58c80fbcdf77cb15092_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/userManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  85 => 30,  81 => 29,  77 => 28,  73 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
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
/*     <th>name</th>*/
/*     <th>surname</th>*/
/*     <th>LOGIN</th>*/
/*     <th>tel</th>*/
/*     <th>photo</th>*/
/* </tr>*/
/* {% for new in listUsers %}*/
/* <tr>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.name }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.surname }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.login }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.tel }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;"><img src="{{ new.photo }}"></td>*/
/* </tr>*/
/* {% endfor %}*/
/* */
/* </table>*/
/* */
/* {% endblock %}*/
/* */
