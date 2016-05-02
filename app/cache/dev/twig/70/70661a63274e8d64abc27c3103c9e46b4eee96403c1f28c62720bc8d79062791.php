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
        $__internal_7cd674201ba50dae839c89baad153904f9e536a2bd8107bee0e5086fddc3f5a5 = $this->env->getExtension("native_profiler");
        $__internal_7cd674201ba50dae839c89baad153904f9e536a2bd8107bee0e5086fddc3f5a5->enter($__internal_7cd674201ba50dae839c89baad153904f9e536a2bd8107bee0e5086fddc3f5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:userManagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cd674201ba50dae839c89baad153904f9e536a2bd8107bee0e5086fddc3f5a5->leave($__internal_7cd674201ba50dae839c89baad153904f9e536a2bd8107bee0e5086fddc3f5a5_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_53b1e6a55c15b058ee181da1d6602508c3aa86b0ef40d74afd2df97e7a95c748 = $this->env->getExtension("native_profiler");
        $__internal_53b1e6a55c15b058ee181da1d6602508c3aa86b0ef40d74afd2df97e7a95c748->enter($__internal_53b1e6a55c15b058ee181da1d6602508c3aa86b0ef40d74afd2df97e7a95c748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<table border=1>
<tr >
    <th>name</th>
    <th>surname</th>
    <th>LOGIN</th>
    <th>photo</th>
</tr>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listUsers"]) ? $context["listUsers"] : $this->getContext($context, "listUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["intrauser"]) {
            // line 13
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["intrauser"], "nameU", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["intrauser"], "surnameu", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["intrauser"], "login", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\"><img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["intrauser"], "photo", array()), "html", null, true);
            echo "\"></td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intrauser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>
<br><hr><br>
<form action=\"";
        // line 22
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
      <th>TEST</th
  </tr>

  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listLDAP"]) ? $context["listLDAP"] : $this->getContext($context, "listLDAP")));
        foreach ($context['_seq'] as $context["_key"] => $context["intrauser"]) {
            // line 35
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["intrauser"]);
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 36
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["user"]);
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 37
                    echo "  <tr>
      <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 38
                    echo "</td>
      <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 39
                    echo "</td>
      <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 40
                    echo "</td>
  </tr>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intrauser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  </table>

";
        
        $__internal_53b1e6a55c15b058ee181da1d6602508c3aa86b0ef40d74afd2df97e7a95c748->leave($__internal_53b1e6a55c15b058ee181da1d6602508c3aa86b0ef40d74afd2df97e7a95c748_prof);

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
        return array (  140 => 45,  134 => 44,  128 => 43,  120 => 40,  117 => 39,  114 => 38,  111 => 37,  106 => 36,  101 => 35,  97 => 34,  82 => 22,  78 => 20,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
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
/*     <th>photo</th>*/
/* </tr>*/
/* {% for intrauser in listUsers %}*/
/* <tr>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ intrauser.nameU }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ intrauser.surnameu }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ intrauser.login }}</td>*/
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
/*       <th>TEST</th*/
/*   </tr>*/
/* */
/*   {% for intrauser in listLDAP %}*/
/*     {% for user in intrauser %}*/
/*       {% for field in user %}*/
/*   <tr>*/
/*       <td style="padding-left: 10px;padding-right: 10px;">{# field.sAMAccountName #}</td>*/
/*       <td style="padding-left: 10px;padding-right: 10px;">{# field.displayName #}</td>*/
/*       <td style="padding-left: 10px;padding-right: 10px;">{# field.mail #}</td>*/
/*   </tr>*/
/*       {% endfor %}*/
/*     {% endfor %}*/
/*   {% endfor %}*/
/*   </table>*/
/* */
/* {% endblock %}*/
/* */
