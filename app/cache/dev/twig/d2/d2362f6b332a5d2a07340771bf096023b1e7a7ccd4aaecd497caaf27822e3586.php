<?php

/* intranetBundle:Default:createNewChannel.html.twig */
class __TwigTemplate_6986639f081a7b7bc926d20a0f8eea5293435d9634228b7b01b99e17e6a0f7ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:createNewChannel.html.twig", 1);
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
        $__internal_728deed3426b19542fbb4b8f38c5d19548520457ae01b8b3d253735ad7623b48 = $this->env->getExtension("native_profiler");
        $__internal_728deed3426b19542fbb4b8f38c5d19548520457ae01b8b3d253735ad7623b48->enter($__internal_728deed3426b19542fbb4b8f38c5d19548520457ae01b8b3d253735ad7623b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:createNewChannel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_728deed3426b19542fbb4b8f38c5d19548520457ae01b8b3d253735ad7623b48->leave($__internal_728deed3426b19542fbb4b8f38c5d19548520457ae01b8b3d253735ad7623b48_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_e0717bad2039243a048cb5eb82e430beabbe86b2f7497f642d154fb96c3f07e2 = $this->env->getExtension("native_profiler");
        $__internal_e0717bad2039243a048cb5eb82e430beabbe86b2f7497f642d154fb96c3f07e2->enter($__internal_e0717bad2039243a048cb5eb82e430beabbe86b2f7497f642d154fb96c3f07e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>CREATE A NEW New</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_insertChannel");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>NAME:</label><input type=\"text\" name=\"name\" style=\"margin-left: 40px;\"><br>
        <i>Due to the big number of elements in the News Feed, it is decided not to link them at the hour of create a channel.<br>
           Otherwise, it is possible to do it editing the news. <br><br>

           <u>But IT IS POSSIBLE to link the channels to the users.</u>
        </i>
        <hr>

        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 15
            echo "            <input type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
            echo "<br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
                                    <input type=\"submit\" value=\"CREATE CHANNEL\">
   </form>

";
        
        $__internal_e0717bad2039243a048cb5eb82e430beabbe86b2f7497f642d154fb96c3f07e2->leave($__internal_e0717bad2039243a048cb5eb82e430beabbe86b2f7497f642d154fb96c3f07e2_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:createNewChannel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  59 => 15,  55 => 14,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>CREATE A NEW New</h3><br>*/
/*  <form action="{{path('intranet_insertChannel')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>NAME:</label><input type="text" name="name" style="margin-left: 40px;"><br>*/
/*         <i>Due to the big number of elements in the News Feed, it is decided not to link them at the hour of create a channel.<br>*/
/*            Otherwise, it is possible to do it editing the news. <br><br>*/
/* */
/*            <u>But IT IS POSSIBLE to link the channels to the users.</u>*/
/*         </i>*/
/*         <hr>*/
/* */
/*         {% for u in users %}*/
/*             <input type="checkbox" value="{{u.login}}" name="{{u.login}}"> {{u.login}}<br>*/
/*         {% endfor %}*/
/* */
/*                                     <input type="submit" value="CREATE CHANNEL">*/
/*    </form>*/
/* */
/* {% endblock %}*/
/* */
