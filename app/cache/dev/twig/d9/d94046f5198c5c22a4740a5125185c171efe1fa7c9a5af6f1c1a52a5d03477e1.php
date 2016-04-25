<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c13b930224568a23f337b9581b4134d7802612b5770c34a9b709437fa58e8c6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_97048bfc4b0ef39c88b7b72d2d4e8705b09e50e15f52001d766270cc0f889507 = $this->env->getExtension("native_profiler");
        $__internal_97048bfc4b0ef39c88b7b72d2d4e8705b09e50e15f52001d766270cc0f889507->enter($__internal_97048bfc4b0ef39c88b7b72d2d4e8705b09e50e15f52001d766270cc0f889507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97048bfc4b0ef39c88b7b72d2d4e8705b09e50e15f52001d766270cc0f889507->leave($__internal_97048bfc4b0ef39c88b7b72d2d4e8705b09e50e15f52001d766270cc0f889507_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a92ac226055d18e2bf5a703d623d21abfd579e6b5cbb011685bce7a97fe8010a = $this->env->getExtension("native_profiler");
        $__internal_a92ac226055d18e2bf5a703d623d21abfd579e6b5cbb011685bce7a97fe8010a->enter($__internal_a92ac226055d18e2bf5a703d623d21abfd579e6b5cbb011685bce7a97fe8010a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a92ac226055d18e2bf5a703d623d21abfd579e6b5cbb011685bce7a97fe8010a->leave($__internal_a92ac226055d18e2bf5a703d623d21abfd579e6b5cbb011685bce7a97fe8010a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2d4c53bd33b2ffd3fff37b72a1bd36984e596733ba993fcea1826b06dd34624 = $this->env->getExtension("native_profiler");
        $__internal_d2d4c53bd33b2ffd3fff37b72a1bd36984e596733ba993fcea1826b06dd34624->enter($__internal_d2d4c53bd33b2ffd3fff37b72a1bd36984e596733ba993fcea1826b06dd34624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d2d4c53bd33b2ffd3fff37b72a1bd36984e596733ba993fcea1826b06dd34624->leave($__internal_d2d4c53bd33b2ffd3fff37b72a1bd36984e596733ba993fcea1826b06dd34624_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
