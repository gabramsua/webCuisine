<?php

/* intranetBundle:Default:editChannel.html.twig */
class __TwigTemplate_94c1ca0f6b2228ca64ae7190a498e4f0cdf1243df9784bd830806e469a84ca99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:editChannel.html.twig", 1);
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
        $__internal_35c2ad6b9b8c5912286bc0a7f88fc6a7f3d34e59cbe7f4074fac8bd034fa21ab = $this->env->getExtension("native_profiler");
        $__internal_35c2ad6b9b8c5912286bc0a7f88fc6a7f3d34e59cbe7f4074fac8bd034fa21ab->enter($__internal_35c2ad6b9b8c5912286bc0a7f88fc6a7f3d34e59cbe7f4074fac8bd034fa21ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:editChannel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35c2ad6b9b8c5912286bc0a7f88fc6a7f3d34e59cbe7f4074fac8bd034fa21ab->leave($__internal_35c2ad6b9b8c5912286bc0a7f88fc6a7f3d34e59cbe7f4074fac8bd034fa21ab_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_82f078760ec947eaf874efbe543247fa90f535ba7388728dd913b7262b89b1ff = $this->env->getExtension("native_profiler");
        $__internal_82f078760ec947eaf874efbe543247fa90f535ba7388728dd913b7262b89b1ff->enter($__internal_82f078760ec947eaf874efbe543247fa90f535ba7388728dd913b7262b89b1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_editchannel");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">

      <label>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        echo "</label><input type='text' id=\"nameChannel\" name=\"nameChannel\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "name", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Users", array(), "messages");
        echo "</label><br>
              ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allUsers"]) ? $context["allUsers"] : $this->getContext($context, "allUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 10
            echo "              ";
            $context["flag"] = 0;
            // line 11
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usersWithChannel"]) ? $context["usersWithChannel"] : $this->getContext($context, "usersWithChannel")));
            foreach ($context['_seq'] as $context["_key"] => $context["us"]) {
                // line 12
                echo "                    ";
                if (($this->getAttribute($context["u"], "login", array()) == $this->getAttribute($context["us"], "login", array()))) {
                    // line 13
                    echo "                      <input type='checkbox' name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "login", array()), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "login", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "login", array()), "html", null, true);
                    echo "\" checked>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "login", array()), "html", null, true);
                    echo "<BR>
                      ";
                    // line 14
                    $context["flag"] = 1;
                    // line 15
                    echo "                    ";
                }
                // line 16
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['us'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                ";
            if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == 0)) {
                // line 18
                echo "                    <input type='checkbox' name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                echo "<br>
                ";
            }
            // line 20
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                                   <input type=\"submit\" name=\"update\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Modify", array(), "messages");
        echo "\">
                                   <input type=\"submit\" name=\"delete\" value=\"";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("DELETE", array(), "messages");
        echo "\">
                                   <input type=\"hidden\" name=\"id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "id", array()), "html", null, true);
        echo "\">
 </form>
";
        
        $__internal_82f078760ec947eaf874efbe543247fa90f535ba7388728dd913b7262b89b1ff->leave($__internal_82f078760ec947eaf874efbe543247fa90f535ba7388728dd913b7262b89b1ff_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:editChannel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 23,  121 => 22,  116 => 21,  110 => 20,  98 => 18,  95 => 17,  89 => 16,  86 => 15,  84 => 14,  73 => 13,  70 => 12,  65 => 11,  62 => 10,  58 => 9,  54 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* <form action="{{ path('intranet_editchannel') }}" method="post" style="border: 1px solid;width: 500px;">*/
/* */
/*       <label>{% trans %}Name{% endtrans %}</label><input type='text' id="nameChannel" name="nameChannel" value="{{channel.name}}"><BR>*/
/*       <label>{% trans %}Users{% endtrans %}</label><br>*/
/*               {% for u in allUsers %}*/
/*               {% set flag=0 %}*/
/*                 {% for us in usersWithChannel %}*/
/*                     {% if u.login==us.login %}*/
/*                       <input type='checkbox' name="{{ us.login }}" id="{{ us.login }}" value="{{ us.login }}" checked>{{ us.login }}<BR>*/
/*                       {% set flag=1 %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 {% if flag==0 %}*/
/*                     <input type='checkbox' name="{{ u.login }}" id="{{ u.login }}" value="{{ u.login }}" >{{ u.login }}<br>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*                                    <input type="submit" name="update" value="{% trans %}Modify{% endtrans %}">*/
/*                                    <input type="submit" name="delete" value="{% trans %}DELETE{% endtrans %}">*/
/*                                    <input type="hidden" name="id" value="{{channel.id}}">*/
/*  </form>*/
/* {% endblock %}*/
/* */
