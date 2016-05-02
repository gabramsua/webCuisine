<?php

/* intranetBundle:Default:incomingForms.html.twig */
class __TwigTemplate_99f21423eaf9ad66d6337840685889daeaa8ea189840a057fb7e7c833f159126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:incomingForms.html.twig", 1);
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
        $__internal_ea9745050d196301ca15db87d85417d6ede7a5cf5c2021878dca101c249565c5 = $this->env->getExtension("native_profiler");
        $__internal_ea9745050d196301ca15db87d85417d6ede7a5cf5c2021878dca101c249565c5->enter($__internal_ea9745050d196301ca15db87d85417d6ede7a5cf5c2021878dca101c249565c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:incomingForms.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea9745050d196301ca15db87d85417d6ede7a5cf5c2021878dca101c249565c5->leave($__internal_ea9745050d196301ca15db87d85417d6ede7a5cf5c2021878dca101c249565c5_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2df831e4d709a7ecd895e8969d0bfc085349a25a0c0257329d8a5204d43bf7b2 = $this->env->getExtension("native_profiler");
        $__internal_2df831e4d709a7ecd895e8969d0bfc085349a25a0c0257329d8a5204d43bf7b2->enter($__internal_2df831e4d709a7ecd895e8969d0bfc085349a25a0c0257329d8a5204d43bf7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
    <th>Type</th>
    <th>USER</th>
    <th>LOGIN</th>
    <th>DATE</th>
</tr>
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingForms"]) ? $context["listIncomingForms"] : $this->getContext($context, "listIncomingForms")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 24
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "type", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "user", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "login", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "send", array()), "html", null, true);
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
</table>


";
        
        $__internal_2df831e4d709a7ecd895e8969d0bfc085349a25a0c0257329d8a5204d43bf7b2->leave($__internal_2df831e4d709a7ecd895e8969d0bfc085349a25a0c0257329d8a5204d43bf7b2_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:incomingForms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
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
/*     <th>Type</th>*/
/*     <th>USER</th>*/
/*     <th>LOGIN</th>*/
/*     <th>DATE</th>*/
/* </tr>*/
/* {% for new in listIncomingForms %}*/
/* <tr>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.type }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.user }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.login }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.send }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* */
/* </table>*/
/* */
/* */
/* {% endblock %}*/
/* */
