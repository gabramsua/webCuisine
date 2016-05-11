<?php

/* intranetBundle:Default:myhistoricalforms.html.twig */
class __TwigTemplate_9414f3df1f9d58ba73d6f6470a024b035fdbdc6edd7492e77b598646911b1130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:myhistoricalforms.html.twig", 1);
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
        $__internal_729dea77fe3423a4ae8728ccb05c3336319ac85bc6c520aa0f97864ad8d6247c = $this->env->getExtension("native_profiler");
        $__internal_729dea77fe3423a4ae8728ccb05c3336319ac85bc6c520aa0f97864ad8d6247c->enter($__internal_729dea77fe3423a4ae8728ccb05c3336319ac85bc6c520aa0f97864ad8d6247c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:myhistoricalforms.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_729dea77fe3423a4ae8728ccb05c3336319ac85bc6c520aa0f97864ad8d6247c->leave($__internal_729dea77fe3423a4ae8728ccb05c3336319ac85bc6c520aa0f97864ad8d6247c_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_70b926cc1a432c981d2bed85468b71341bbba6dfb4143e45d5e920797f901fa3 = $this->env->getExtension("native_profiler");
        $__internal_70b926cc1a432c981d2bed85468b71341bbba6dfb4143e45d5e920797f901fa3->enter($__internal_70b926cc1a432c981d2bed85468b71341bbba6dfb4143e45d5e920797f901fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<b>TABLA FORMULARIOS HORAS</b><br>
<i>to esta web viene heredada de incomingForms.html.twig</i>
<table border=1>
<tr >
<th></th>
    <th>ID</th>
    <th>FROM</th>
    <th>TO</th>
</tr>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myHours"]) ? $context["myHours"] : $this->getContext($context, "myHours")));
        foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 15
                echo "<tr>
  \t<td><form action='#' method='post'> <input type=\"submit\" value=\"VER\" ></form></td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date1", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date2", array()), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</table>
<br>

";
        // line 27
        echo "
<br>
<b>TABLA FORMULARIOS Vacaciones</b><br>
<table border=1>
<tr >
<th></th>
    <th>SEND</th>
    <th>FROM</th>
    <th>TO</th>
</tr>
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myVacations"]) ? $context["myVacations"] : $this->getContext($context, "myVacations")));
        foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 39
                echo "<tr>
  \t<td><form action='#' method='post'> <input type=\"submit\" value=\"VER\" ></form></td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "send", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date1", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date2", array()), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</table><br>

";
        // line 50
        echo "
<br>
<b>TABLA FORMULARIOS EXPENSES</b><br>
<table border=1>
<tr >
<th></th>
    <th>SEND</th>
    <th>Company</th>
    <th>Date</th>
    <th>Concept</th>
    <th>Amount</th>
</tr>
";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myExpenses"]) ? $context["myExpenses"] : $this->getContext($context, "myExpenses")));
        foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 64
                echo "<tr>
  \t<td><form action='#' method='post'> <input type=\"submit\" value=\"VER\" ></form></td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "send", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "company", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date1", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "concept", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "amount", array()), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "</table><br>

";
        // line 77
        echo "
<br>
<b>TABLA FORMULARIOS TRIP</b><br>
<table border=1>
<tr >
<th></th>
    <th>SEND</th>
    <th>Place</th>
    <th>Name Congress</th>
    <th>Reasons</th>
    <th>From</th>
    <th>To</th>
</tr>
";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myTrips"]) ? $context["myTrips"] : $this->getContext($context, "myTrips")));
        foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 92
                echo "<tr>
  \t<td><form action='#' method='post'> <input type=\"submit\" value=\"VER\" ></form></td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "send", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "place", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "nameCongress", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "reasons", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date1", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date2", array()), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "</table>

";
        
        $__internal_70b926cc1a432c981d2bed85468b71341bbba6dfb4143e45d5e920797f901fa3->leave($__internal_70b926cc1a432c981d2bed85468b71341bbba6dfb4143e45d5e920797f901fa3_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:myhistoricalforms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 103,  244 => 99,  240 => 98,  236 => 97,  232 => 96,  228 => 95,  224 => 94,  220 => 92,  216 => 91,  212 => 90,  197 => 77,  193 => 74,  180 => 70,  176 => 69,  172 => 68,  168 => 67,  164 => 66,  160 => 64,  156 => 63,  152 => 62,  138 => 50,  134 => 47,  121 => 43,  117 => 42,  113 => 41,  109 => 39,  105 => 38,  101 => 37,  89 => 27,  84 => 23,  71 => 19,  67 => 18,  63 => 17,  59 => 15,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <b>TABLA FORMULARIOS HORAS</b><br>*/
/* <i>to esta web viene heredada de incomingForms.html.twig</i>*/
/* <table border=1>*/
/* <tr >*/
/* <th></th>*/
/*     <th>ID</th>*/
/*     <th>FROM</th>*/
/*     <th>TO</th>*/
/* </tr>*/
/* {% for forms in myHours %}*/
/* {% for f in forms %}*/
/* <tr>*/
/*   	<td><form action='#' method='post'> <input type="submit" value="VER" ></form></td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.id }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date1 }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date2 }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* {% endfor %}*/
/* </table>*/
/* <br>*/
/* */
/* {##############################################################################}*/
/* */
/* <br>*/
/* <b>TABLA FORMULARIOS Vacaciones</b><br>*/
/* <table border=1>*/
/* <tr >*/
/* <th></th>*/
/*     <th>SEND</th>*/
/*     <th>FROM</th>*/
/*     <th>TO</th>*/
/* </tr>*/
/* {% for forms in myVacations %}*/
/* {% for f in forms %}*/
/* <tr>*/
/*   	<td><form action='#' method='post'> <input type="submit" value="VER" ></form></td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.send }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date1 }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date2 }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* {% endfor %}*/
/* </table><br>*/
/* */
/* {##############################################################################}*/
/* */
/* <br>*/
/* <b>TABLA FORMULARIOS EXPENSES</b><br>*/
/* <table border=1>*/
/* <tr >*/
/* <th></th>*/
/*     <th>SEND</th>*/
/*     <th>Company</th>*/
/*     <th>Date</th>*/
/*     <th>Concept</th>*/
/*     <th>Amount</th>*/
/* </tr>*/
/* {% for forms in myExpenses %}*/
/* {% for f in forms %}*/
/* <tr>*/
/*   	<td><form action='#' method='post'> <input type="submit" value="VER" ></form></td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.send }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.company }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date1 }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.concept }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.amount }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* {% endfor %}*/
/* </table><br>*/
/* */
/* {##############################################################################}*/
/* */
/* <br>*/
/* <b>TABLA FORMULARIOS TRIP</b><br>*/
/* <table border=1>*/
/* <tr >*/
/* <th></th>*/
/*     <th>SEND</th>*/
/*     <th>Place</th>*/
/*     <th>Name Congress</th>*/
/*     <th>Reasons</th>*/
/*     <th>From</th>*/
/*     <th>To</th>*/
/* </tr>*/
/* {% for forms in myTrips %}*/
/* {% for f in forms %}*/
/* <tr>*/
/*   	<td><form action='#' method='post'> <input type="submit" value="VER" ></form></td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.send }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.place }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.nameCongress }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.reasons }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date1 }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date2 }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* {% endfor %}*/
/* </table>*/
/* */
/* {% endblock %}*/
/* */
