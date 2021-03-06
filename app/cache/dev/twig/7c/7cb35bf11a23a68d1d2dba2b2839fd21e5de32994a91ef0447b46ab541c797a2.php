<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_be617bf82ed7be25b99be7bfaf1f6de439d63b24b37d89185c3852b0d32cc880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc0ce2e30eb815545e29ec67f599b5c49b91a229921f444a227e49ad6e6a38a7 = $this->env->getExtension("native_profiler");
        $__internal_dc0ce2e30eb815545e29ec67f599b5c49b91a229921f444a227e49ad6e6a38a7->enter($__internal_dc0ce2e30eb815545e29ec67f599b5c49b91a229921f444a227e49ad6e6a38a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc0ce2e30eb815545e29ec67f599b5c49b91a229921f444a227e49ad6e6a38a7->leave($__internal_dc0ce2e30eb815545e29ec67f599b5c49b91a229921f444a227e49ad6e6a38a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce4a212b3ff609d5d8725fe68f8d023ada9c5e07cda9bc9ac72e961d1c8ab17e = $this->env->getExtension("native_profiler");
        $__internal_ce4a212b3ff609d5d8725fe68f8d023ada9c5e07cda9bc9ac72e961d1c8ab17e->enter($__internal_ce4a212b3ff609d5d8725fe68f8d023ada9c5e07cda9bc9ac72e961d1c8ab17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ce4a212b3ff609d5d8725fe68f8d023ada9c5e07cda9bc9ac72e961d1c8ab17e->leave($__internal_ce4a212b3ff609d5d8725fe68f8d023ada9c5e07cda9bc9ac72e961d1c8ab17e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5dba6358b8e1fec6788cbee326caa443a53821ad19ac4f1bb0e7a8aacf9e3f1 = $this->env->getExtension("native_profiler");
        $__internal_b5dba6358b8e1fec6788cbee326caa443a53821ad19ac4f1bb0e7a8aacf9e3f1->enter($__internal_b5dba6358b8e1fec6788cbee326caa443a53821ad19ac4f1bb0e7a8aacf9e3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b5dba6358b8e1fec6788cbee326caa443a53821ad19ac4f1bb0e7a8aacf9e3f1->leave($__internal_b5dba6358b8e1fec6788cbee326caa443a53821ad19ac4f1bb0e7a8aacf9e3f1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
