<?php

/* intranetBundle:Default:editTask.html.twig */
class __TwigTemplate_abb13cc24babbf6262c845a5d2a57782be2f172cc7fb605f5b36d19d39cb4e3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:editTask.html.twig", 1);
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
        $__internal_10d439fbe21b2190bdab28a0d5b30c4515c00dde3f93190169672c6b0c3e2780 = $this->env->getExtension("native_profiler");
        $__internal_10d439fbe21b2190bdab28a0d5b30c4515c00dde3f93190169672c6b0c3e2780->enter($__internal_10d439fbe21b2190bdab28a0d5b30c4515c00dde3f93190169672c6b0c3e2780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:editTask.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10d439fbe21b2190bdab28a0d5b30c4515c00dde3f93190169672c6b0c3e2780->leave($__internal_10d439fbe21b2190bdab28a0d5b30c4515c00dde3f93190169672c6b0c3e2780_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_0c858780fbcdb1d2d3d4853fe59e1ce2b328105fb441ed4945a32bf785a7cadb = $this->env->getExtension("native_profiler");
        $__internal_0c858780fbcdb1d2d3d4853fe59e1ce2b328105fb441ed4945a32bf785a7cadb->enter($__internal_0c858780fbcdb1d2d3d4853fe59e1ce2b328105fb441ed4945a32bf785a7cadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_edittask");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">

      <label>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Title", array(), "messages");
        echo "</label><input type='text' id=\"title\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "title", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Content", array(), "messages");
        echo "</label><input type='text' id=\"content\" name=\"content\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "content", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Who Create", array(), "messages");
        echo "</label><input type='text' name=\"whocreate\" id=\"whocreate\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "whocreate", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Users", array(), "messages");
        echo "</label><br>
              ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 12
            echo "              <input type='text' name=\"channel\" id=\"myName\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
            echo "\"readonly><BR>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                                   <input type=\"submit\" name=\"update\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Modify", array(), "messages");
        echo "\">
                                   <input type=\"submit\" name=\"delete\" value=\"";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("DELETE", array(), "messages");
        echo "\">
                                   <input type=\"hidden\" name=\"id\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array()), "html", null, true);
        echo "\">
 </form>


";
        
        $__internal_0c858780fbcdb1d2d3d4853fe59e1ce2b328105fb441ed4945a32bf785a7cadb->leave($__internal_0c858780fbcdb1d2d3d4853fe59e1ce2b328105fb441ed4945a32bf785a7cadb_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:editTask.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 16,  88 => 15,  83 => 14,  74 => 12,  70 => 11,  66 => 10,  60 => 9,  54 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* <form action="{{ path('intranet_edittask') }}" method="post" style="border: 1px solid;width: 500px;">*/
/* */
/*       <label>{% trans %}Title{% endtrans %}</label><input type='text' id="title" name="title" value="{{task.title}}"><BR>*/
/*       <label>{% trans %}Content{% endtrans %}</label><input type='text' id="content" name="content" value="{{task.content}}"><BR>*/
/*       <label>{% trans %}Who Create{% endtrans %}</label><input type='text' name="whocreate" id="whocreate" value="{{task.whocreate}}"><BR>*/
/*       <label>{% trans %}Users{% endtrans %}</label><br>*/
/*               {% for u in users %}*/
/*               <input type='text' name="channel" id="myName" value="{{ u.login }}"readonly><BR>*/
/*               {% endfor %}*/
/*                                    <input type="submit" name="update" value="{% trans %}Modify{% endtrans %}">*/
/*                                    <input type="submit" name="delete" value="{% trans %}DELETE{% endtrans %}">*/
/*                                    <input type="hidden" name="id" value="{{task.id}}">*/
/*  </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
