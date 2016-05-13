<?php

/* intranetBundle:Default:createNewTask.html.twig */
class __TwigTemplate_23e2223813dc2b20df780d8b5012a1b5562e3958ab879e57a6e2adfa43c7d53d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:createNewTask.html.twig", 1);
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
        $__internal_21c25ab8a261fb3d12fac21175476b9834050906c52cda1876753324f5294453 = $this->env->getExtension("native_profiler");
        $__internal_21c25ab8a261fb3d12fac21175476b9834050906c52cda1876753324f5294453->enter($__internal_21c25ab8a261fb3d12fac21175476b9834050906c52cda1876753324f5294453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:createNewTask.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21c25ab8a261fb3d12fac21175476b9834050906c52cda1876753324f5294453->leave($__internal_21c25ab8a261fb3d12fac21175476b9834050906c52cda1876753324f5294453_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_9cbf5a8282b5f6ca5606902250a064e3b9494406e714d5a70f0942d8bbb86b81 = $this->env->getExtension("native_profiler");
        $__internal_9cbf5a8282b5f6ca5606902250a064e3b9494406e714d5a70f0942d8bbb86b81->enter($__internal_9cbf5a8282b5f6ca5606902250a064e3b9494406e714d5a70f0942d8bbb86b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>CREATE A NEW TASK</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_insertTask");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>TITLE:</label><input type=\"text\" name=\"title\" style=\"margin-left: 40px;\"><br>
        <label>CONTENT:</label><input type=\"textarea\" name=\"content\" style=\"margin-left: 15px;\"> <br>
        <label>USERS:</label>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 10
            echo "    <input type=\"checkbox\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
<!--        <i>Aquí habrá que meter los usuarios</i>
-->
<br>
                                     <input type=\"submit\" value=\"CREATE\">
                                     <input type=\"hidden\" name=\"WHO CREATE\">
   </form>



";
        
        $__internal_9cbf5a8282b5f6ca5606902250a064e3b9494406e714d5a70f0942d8bbb86b81->leave($__internal_9cbf5a8282b5f6ca5606902250a064e3b9494406e714d5a70f0942d8bbb86b81_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:createNewTask.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  54 => 10,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>CREATE A NEW TASK</h3><br>*/
/*  <form action="{{path('intranet_insertTask')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>TITLE:</label><input type="text" name="title" style="margin-left: 40px;"><br>*/
/*         <label>CONTENT:</label><input type="textarea" name="content" style="margin-left: 15px;"> <br>*/
/*         <label>USERS:</label>*/
/* {% for u in users %}*/
/*     <input type="checkbox" name="{{ u.login }}" value="{{ u.login }}">{{ u.login }}*/
/* {% endfor %}*/
/* */
/* <!--        <i>Aquí habrá que meter los usuarios</i>*/
/* -->*/
/* <br>*/
/*                                      <input type="submit" value="CREATE">*/
/*                                      <input type="hidden" name="WHO CREATE">*/
/*    </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
