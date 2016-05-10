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
        $__internal_bd0e9236e183cd6f76576b351ab4534fc002f8d9b4013808905346ee3562a010 = $this->env->getExtension("native_profiler");
        $__internal_bd0e9236e183cd6f76576b351ab4534fc002f8d9b4013808905346ee3562a010->enter($__internal_bd0e9236e183cd6f76576b351ab4534fc002f8d9b4013808905346ee3562a010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:incomingForms.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd0e9236e183cd6f76576b351ab4534fc002f8d9b4013808905346ee3562a010->leave($__internal_bd0e9236e183cd6f76576b351ab4534fc002f8d9b4013808905346ee3562a010_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ea7e82d1f5bdb30f3c2b72555c2523a65ebed51c97b8595f5c2d57ac89dabc8d = $this->env->getExtension("native_profiler");
        $__internal_ea7e82d1f5bdb30f3c2b72555c2523a65ebed51c97b8595f5c2d57ac89dabc8d->enter($__internal_ea7e82d1f5bdb30f3c2b72555c2523a65ebed51c97b8595f5c2d57ac89dabc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<b>TABLA FORMULARIOS HORAS</b>
<table border=1>
<tr >
<th></th>
    <th>Type</th>
    <th>USER</th>
    <th>LOGIN</th>
    <th>DATE</th>
    <th>READ</th>
</tr>
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsH"]) ? $context["listIncomingFormsH"] : $this->getContext($context, "listIncomingFormsH")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationHours"]) ? $context["relationHours"] : $this->getContext($context, "relationHours")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 16
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 17
                    echo "<tr>
  \t<td><form action='#' method='post'> <input type=\"submit\" value=\"VER\" ></form></td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "type", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "numHours", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>
</tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</table>

<hr>

<b>TABLA FORMULARIOS VACATIONS</b>
<table border=1>
<tr>
<th></th>
   <th>USER</th>
   <th>LOGIN</th>
   <th>DATE</th>
   <th>READ</th>
   <th>FROM</th>
   <th>TO</th>
</tr>
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsV"]) ? $context["listIncomingFormsV"] : $this->getContext($context, "listIncomingFormsV")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationVacations"]) ? $context["relationVacations"] : $this->getContext($context, "relationVacations")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 43
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 44
                    echo "<tr>
  \t<td><form action='#' method='post'> <input type=\"submit\" value=\"VER\" ></form></td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date1", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date2", array()), "html", null, true);
                    echo "</td>
</tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
</table>

<hr>

<b>TABLA FORMULARIOS EXPENSES</b>
<table border=1>
<tr>
<th></th>
   <th>USER</th>
   <th>LOGIN</th>
   <th>DATE</th>
   <th>READ</th>
   <th>COMPANY</th>
   <th>CONCEPT</th>
   <th>AMOUNT</th>
</tr>
";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsE"]) ? $context["listIncomingFormsE"] : $this->getContext($context, "listIncomingFormsE")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationExpenses"]) ? $context["relationExpenses"] : $this->getContext($context, "relationExpenses")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 73
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 74
                    echo "<tr>
  \t<td><form action='#' method='post'> <input type=\"submit\" value=\"VER\" ></form></td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "company", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "concept", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "amount", array()), "html", null, true);
                    echo " €</td>
</tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "
</table>

<hr>

<b>TABLA FORMULARIOS TRIPS</b>
<table border=1>
<tr>
<th></th>
   <th>USER</th>
   <th>LOGIN</th>
   <th>DATE</th>
   <th>READ</th>
   <th>FROM</th>
   <th>TO</th>
   <th>PLACE</th>
   <th>REASON</th>
</tr>
";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsT"]) ? $context["listIncomingFormsT"] : $this->getContext($context, "listIncomingFormsT")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationTrips"]) ? $context["relationTrips"] : $this->getContext($context, "relationTrips")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 105
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 106
                    echo "<tr>
  \t<td><form action='#' method='post'> <input type=\"submit\" value=\"VER\" ></form></td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 108
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date1", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date2", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 114
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "place", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 115
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "reasons", array()), "html", null, true);
                    echo "</td>
</tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
</table>


";
        
        $__internal_ea7e82d1f5bdb30f3c2b72555c2523a65ebed51c97b8595f5c2d57ac89dabc8d->leave($__internal_ea7e82d1f5bdb30f3c2b72555c2523a65ebed51c97b8595f5c2d57ac89dabc8d_prof);

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
        return array (  304 => 118,  291 => 115,  287 => 114,  283 => 113,  279 => 112,  275 => 111,  271 => 110,  267 => 109,  263 => 108,  259 => 106,  257 => 105,  253 => 104,  249 => 103,  229 => 85,  216 => 82,  212 => 81,  208 => 80,  204 => 79,  200 => 78,  196 => 77,  192 => 76,  188 => 74,  186 => 73,  182 => 72,  178 => 71,  159 => 54,  146 => 51,  142 => 50,  138 => 49,  134 => 48,  130 => 47,  126 => 46,  122 => 44,  120 => 43,  116 => 42,  112 => 41,  95 => 26,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 17,  60 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <b>TABLA FORMULARIOS HORAS</b>*/
/* <table border=1>*/
/* <tr >*/
/* <th></th>*/
/*     <th>Type</th>*/
/*     <th>USER</th>*/
/*     <th>LOGIN</th>*/
/*     <th>DATE</th>*/
/*     <th>READ</th>*/
/* </tr>*/
/* {% for form in listIncomingFormsH %}*/
/* {% for u in relationHours %}*/
/* {% if u.idForm==form.id %}*/
/* <tr>*/
/*   	<td><form action='#' method='post'> <input type="submit" value="VER" ></form></td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ form.type }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ form.numHours }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/* </tr>{% endif %}*/
/* {% endfor %}{% endfor %}*/
/* </table>*/
/* */
/* <hr>*/
/* */
/* <b>TABLA FORMULARIOS VACATIONS</b>*/
/* <table border=1>*/
/* <tr>*/
/* <th></th>*/
/*    <th>USER</th>*/
/*    <th>LOGIN</th>*/
/*    <th>DATE</th>*/
/*    <th>READ</th>*/
/*    <th>FROM</th>*/
/*    <th>TO</th>*/
/* </tr>*/
/* {% for form in listIncomingFormsV %}*/
/* {% for u in relationVacations %}*/
/* {% if u.idForm==form.id %}*/
/* <tr>*/
/*   	<td><form action='#' method='post'> <input type="submit" value="VER" ></form></td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.date1 }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.date2 }}</td>*/
/* </tr>{% endif %}*/
/* {% endfor %}{% endfor %}*/
/* */
/* </table>*/
/* */
/* <hr>*/
/* */
/* <b>TABLA FORMULARIOS EXPENSES</b>*/
/* <table border=1>*/
/* <tr>*/
/* <th></th>*/
/*    <th>USER</th>*/
/*    <th>LOGIN</th>*/
/*    <th>DATE</th>*/
/*    <th>READ</th>*/
/*    <th>COMPANY</th>*/
/*    <th>CONCEPT</th>*/
/*    <th>AMOUNT</th>*/
/* </tr>*/
/* {% for form in listIncomingFormsE %}*/
/* {% for u in relationExpenses %}*/
/* {% if u.idForm==form.id %}*/
/* <tr>*/
/*   	<td><form action='#' method='post'> <input type="submit" value="VER" ></form></td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.company }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.concept }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.amount }} €</td>*/
/* </tr>{% endif %}*/
/* {% endfor %}{% endfor %}*/
/* */
/* </table>*/
/* */
/* <hr>*/
/* */
/* <b>TABLA FORMULARIOS TRIPS</b>*/
/* <table border=1>*/
/* <tr>*/
/* <th></th>*/
/*    <th>USER</th>*/
/*    <th>LOGIN</th>*/
/*    <th>DATE</th>*/
/*    <th>READ</th>*/
/*    <th>FROM</th>*/
/*    <th>TO</th>*/
/*    <th>PLACE</th>*/
/*    <th>REASON</th>*/
/* </tr>*/
/* {% for form in listIncomingFormsT %}*/
/* {% for u in relationTrips %}*/
/* {% if u.idForm==form.id %}*/
/* <tr>*/
/*   	<td><form action='#' method='post'> <input type="submit" value="VER" ></form></td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.date1 }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.date2 }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.place }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.reasons }}</td>*/
/* </tr>{% endif %}*/
/* {% endfor %}{% endfor %}*/
/* */
/* </table>*/
/* */
/* */
/* {% endblock %}*/
/* */
