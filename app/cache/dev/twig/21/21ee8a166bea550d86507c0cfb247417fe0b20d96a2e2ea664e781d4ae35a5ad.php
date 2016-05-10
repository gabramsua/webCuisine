<?php

/* intranetBundle:Default:editNew.html.twig */
class __TwigTemplate_c90c0804c1f9100230f2747fcc9745b0234692da06f58f291c351bdc09c7a13a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:editNew.html.twig", 1);
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
        $__internal_adc0f11488942bd22a32cb5b1288c7a2cf825e03cfea5c137d2861fb2b58d933 = $this->env->getExtension("native_profiler");
        $__internal_adc0f11488942bd22a32cb5b1288c7a2cf825e03cfea5c137d2861fb2b58d933->enter($__internal_adc0f11488942bd22a32cb5b1288c7a2cf825e03cfea5c137d2861fb2b58d933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:editNew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adc0f11488942bd22a32cb5b1288c7a2cf825e03cfea5c137d2861fb2b58d933->leave($__internal_adc0f11488942bd22a32cb5b1288c7a2cf825e03cfea5c137d2861fb2b58d933_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_121e493c64f91aaa34aa535ffc6dd6f69f8e9c8a02c2d4608e5498a31298b7d2 = $this->env->getExtension("native_profiler");
        $__internal_121e493c64f91aaa34aa535ffc6dd6f69f8e9c8a02c2d4608e5498a31298b7d2->enter($__internal_121e493c64f91aaa34aa535ffc6dd6f69f8e9c8a02c2d4608e5498a31298b7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_editnew");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
      <label>";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Channel", array(), "messages");
        echo "</label><input type='text' name=\"channel\" id=\"myName\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "name", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Date", array(), "messages");
        echo "</label><input type='date' id=\"date\" name=\"date\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "date", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Time", array(), "messages");
        echo "</label><input type='text' id=\"time \"name=\"time\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "time", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Title", array(), "messages");
        echo "</label><input type='text' id=\"title\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "title", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Content", array(), "messages");
        echo "</label><input type='text' id=\"content\" name=\"content\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "content", array()), "html", null, true);
        echo "\"><BR>
                                   <input type=\"submit\" name=\"update\" value=\"";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Modify", array(), "messages");
        echo "\">
                                   <input type=\"submit\" name=\"delete\" value=\"";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("DELETE", array(), "messages");
        echo "\">
                                   <input type=\"hidden\" name=\"id\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "id", array()), "html", null, true);
        echo "\">
 </form>

";
        
        $__internal_121e493c64f91aaa34aa535ffc6dd6f69f8e9c8a02c2d4608e5498a31298b7d2->leave($__internal_121e493c64f91aaa34aa535ffc6dd6f69f8e9c8a02c2d4608e5498a31298b7d2_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:editNew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  81 => 12,  77 => 11,  71 => 10,  65 => 9,  59 => 8,  53 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* <form action="{{ path('intranet_editnew') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*       <label>{% trans %}Channel{% endtrans %}</label><input type='text' name="channel" id="myName" value="{{channel.name}}"><BR>*/
/*       <label>{% trans %}Date{% endtrans %}</label><input type='date' id="date" name="date" value="{{new.date}}"><BR>*/
/*       <label>{% trans %}Time{% endtrans %}</label><input type='text' id="time "name="time" value="{{new.time}}"><BR>*/
/*       <label>{% trans %}Title{% endtrans %}</label><input type='text' id="title" name="title" value="{{new.title}}"><BR>*/
/*       <label>{% trans %}Content{% endtrans %}</label><input type='text' id="content" name="content" value="{{new.content}}"><BR>*/
/*                                    <input type="submit" name="update" value="{% trans %}Modify{% endtrans %}">*/
/*                                    <input type="submit" name="delete" value="{% trans %}DELETE{% endtrans %}">*/
/*                                    <input type="hidden" name="id" value="{{new.id}}">*/
/*  </form>*/
/* */
/* {% endblock %}*/
/* */
