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
        $__internal_e424ad854bae801040837d1ad48e735cb0443daeb62c8605e394652b7a1a521a = $this->env->getExtension("native_profiler");
        $__internal_e424ad854bae801040837d1ad48e735cb0443daeb62c8605e394652b7a1a521a->enter($__internal_e424ad854bae801040837d1ad48e735cb0443daeb62c8605e394652b7a1a521a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:incomingForms.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e424ad854bae801040837d1ad48e735cb0443daeb62c8605e394652b7a1a521a->leave($__internal_e424ad854bae801040837d1ad48e735cb0443daeb62c8605e394652b7a1a521a_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_6bea4add5873e0ff2f87b0c9c0c7eaf161468a0105cb3c636b6040e930ffe00f = $this->env->getExtension("native_profiler");
        $__internal_6bea4add5873e0ff2f87b0c9c0c7eaf161468a0105cb3c636b6040e930ffe00f->enter($__internal_6bea4add5873e0ff2f87b0c9c0c7eaf161468a0105cb3c636b6040e930ffe00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<b>TABLA FORMULARIOS HORAS</b>
<table border=1>
<tr >
    <th>Type</th>
    <th>USER</th>
    <th>LOGIN</th>
    <th>DATE</th>
    <th>READ</th>
</tr>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsH"]) ? $context["listIncomingFormsH"] : $this->getContext($context, "listIncomingFormsH")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationHours"]) ? $context["relationHours"] : $this->getContext($context, "relationHours")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 15
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 16
                    echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "type", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "numHours", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 21
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
        // line 24
        echo "</table>

<hr>

<b>TABLA FORMULARIOS VACATIONS</b>
<table border=1>
<tr>
   <th>USER</th>
   <th>LOGIN</th>
   <th>DATE</th>
   <th>READ</th>
   <th>FROM</th>
   <th>TO</th>
</tr>
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsV"]) ? $context["listIncomingFormsV"] : $this->getContext($context, "listIncomingFormsV")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationVacations"]) ? $context["relationVacations"] : $this->getContext($context, "relationVacations")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 40
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 41
                    echo "<tr>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date1", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 47
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
        // line 50
        echo "
</table>

<hr>

<b>TABLA FORMULARIOS EXPENSES</b>
<table border=1>
<tr>
   <th>USER</th>
   <th>LOGIN</th>
   <th>DATE</th>
   <th>READ</th>
   <th>COMPANY</th>
   <th>CONCEPT</th>
   <th>AMOUNT</th>
</tr>
";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsE"]) ? $context["listIncomingFormsE"] : $this->getContext($context, "listIncomingFormsE")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationExpenses"]) ? $context["relationExpenses"] : $this->getContext($context, "relationExpenses")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 68
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 69
                    echo "<tr>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "company", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "concept", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 76
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
        // line 79
        echo "
</table>

<hr>

<b>TABLA FORMULARIOS TRIPS</b>
<table border=1>
<tr>
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
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsT"]) ? $context["listIncomingFormsT"] : $this->getContext($context, "listIncomingFormsT")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationTrips"]) ? $context["relationTrips"] : $this->getContext($context, "relationTrips")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 98
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 99
                    echo "<tr>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 101
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date1", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date2", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "place", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 107
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
        // line 110
        echo "
</table>


";
        
        $__internal_6bea4add5873e0ff2f87b0c9c0c7eaf161468a0105cb3c636b6040e930ffe00f->leave($__internal_6bea4add5873e0ff2f87b0c9c0c7eaf161468a0105cb3c636b6040e930ffe00f_prof);

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
        return array (  296 => 110,  283 => 107,  279 => 106,  275 => 105,  271 => 104,  267 => 103,  263 => 102,  259 => 101,  255 => 100,  252 => 99,  250 => 98,  246 => 97,  242 => 96,  223 => 79,  210 => 76,  206 => 75,  202 => 74,  198 => 73,  194 => 72,  190 => 71,  186 => 70,  183 => 69,  181 => 68,  177 => 67,  173 => 66,  155 => 50,  142 => 47,  138 => 46,  134 => 45,  130 => 44,  126 => 43,  122 => 42,  119 => 41,  117 => 40,  113 => 39,  109 => 38,  93 => 24,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  61 => 16,  59 => 15,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <b>TABLA FORMULARIOS HORAS</b>*/
/* <table border=1>*/
/* <tr >*/
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
