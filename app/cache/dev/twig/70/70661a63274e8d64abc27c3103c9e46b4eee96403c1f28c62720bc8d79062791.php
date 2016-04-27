<?php

/* intranetBundle:Default:userManagement.html.twig */
class __TwigTemplate_adff42e1b948d85bf6ff91ae25bb95075c4b62214361199f92ff31893663eb39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:userManagement.html.twig", 1);
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
        $__internal_ddf5ffa609ff05cf4adb8050b4879b462c08fdd3c36dd8f2b48dc8de683334ad = $this->env->getExtension("native_profiler");
        $__internal_ddf5ffa609ff05cf4adb8050b4879b462c08fdd3c36dd8f2b48dc8de683334ad->enter($__internal_ddf5ffa609ff05cf4adb8050b4879b462c08fdd3c36dd8f2b48dc8de683334ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:userManagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddf5ffa609ff05cf4adb8050b4879b462c08fdd3c36dd8f2b48dc8de683334ad->leave($__internal_ddf5ffa609ff05cf4adb8050b4879b462c08fdd3c36dd8f2b48dc8de683334ad_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_4daa0c92a7f1fa17914d9a33f8f67c1aa7404265b481ba38d3ca20a9a244f378 = $this->env->getExtension("native_profiler");
        $__internal_4daa0c92a7f1fa17914d9a33f8f67c1aa7404265b481ba38d3ca20a9a244f378->enter($__internal_4daa0c92a7f1fa17914d9a33f8f67c1aa7404265b481ba38d3ca20a9a244f378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<table border=1>
<tr >
    <th>name</th>
    <th>surname</th>
    <th>LOGIN</th>
    <th>tel</th>
    <th>photo</th>
</tr>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listUsers"]) ? $context["listUsers"] : $this->getContext($context, "listUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["intrauser"]) {
            // line 14
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["intrauser"], "name", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["intrauser"], "surname", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["intrauser"], "login", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["intrauser"], "tel", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\"><img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["intrauser"], "photo", array()), "html", null, true);
            echo "\"></td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intrauser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</table>
<br><hr><br>
<form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("intranet_newuser");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
    <input type=\"submit\" name=\"newUser\" value=\"NEW USER\">
  </form>
  <br><hr><br>
  <table border=1>
  <tr >
      <th>Common Name</th>
      <th>Display Name</th>
      <th>Mail</th>
  </tr>
  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listLDAP"]) ? $context["listLDAP"] : $this->getContext($context, "listLDAP")));
        foreach ($context['_seq'] as $context["_key"] => $context["intrauser"]) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["intrauser"]);
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["user"]);
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 35
                    echo "  <tr>
      <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "cn", array()), "html", null, true);
                    echo "</td>
      <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "displayName", array()), "html", null, true);
                    echo "</td>
      <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "mail", array()), "html", null, true);
                    echo "</td>
  </tr>
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intrauser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "  </table>
";
        
        $__internal_4daa0c92a7f1fa17914d9a33f8f67c1aa7404265b481ba38d3ca20a9a244f378->leave($__internal_4daa0c92a7f1fa17914d9a33f8f67c1aa7404265b481ba38d3ca20a9a244f378_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:userManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 41,  121 => 38,  117 => 37,  113 => 36,  110 => 35,  100 => 34,  87 => 24,  83 => 22,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* <table border=1>*/
/* <tr >*/
/*     <th>name</th>*/
/*     <th>surname</th>*/
/*     <th>LOGIN</th>*/
/*     <th>tel</th>*/
/*     <th>photo</th>*/
/* </tr>*/
/* {% for intrauser in listUsers %}*/
/* <tr>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ intrauser.name }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ intrauser.surname }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ intrauser.login }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ intrauser.tel }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;"><img src="{{ intrauser.photo }}"></td>*/
/* </tr>*/
/* {% endfor %}*/
/* </table>*/
/* <br><hr><br>*/
/* <form action="{{ path('intranet_newuser')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*     <input type="submit" name="newUser" value="NEW USER">*/
/*   </form>*/
/*   <br><hr><br>*/
/*   <table border=1>*/
/*   <tr >*/
/*       <th>Common Name</th>*/
/*       <th>Display Name</th>*/
/*       <th>Mail</th>*/
/*   </tr>*/
/*   {% for intrauser in listLDAP %}{% for user in intrauser %}{% for field in user %}*/
/*   <tr>*/
/*       <td style="padding-left: 10px;padding-right: 10px;">{{ field.cn }}</td>*/
/*       <td style="padding-left: 10px;padding-right: 10px;">{{ field.displayName }}</td>*/
/*       <td style="padding-left: 10px;padding-right: 10px;">{{ field.mail }}</td>*/
/*   </tr>*/
/*   {% endfor %}{% endfor %}{% endfor %}*/
/*   </table>*/
/* {% endblock %}*/
/* */
