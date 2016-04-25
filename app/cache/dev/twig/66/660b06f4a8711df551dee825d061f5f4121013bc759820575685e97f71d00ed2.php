<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_369af48b4f109e924387c599889c7d55782275cab4593f4294b604d9a7d5eace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90385fa25db082aae63367c6c1b7f03b0d33d0b7ba563c240261361de53951b9 = $this->env->getExtension("native_profiler");
        $__internal_90385fa25db082aae63367c6c1b7f03b0d33d0b7ba563c240261361de53951b9->enter($__internal_90385fa25db082aae63367c6c1b7f03b0d33d0b7ba563c240261361de53951b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90385fa25db082aae63367c6c1b7f03b0d33d0b7ba563c240261361de53951b9->leave($__internal_90385fa25db082aae63367c6c1b7f03b0d33d0b7ba563c240261361de53951b9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_77d260358f60b46f583f9245c51e877410379d2b8c5580da5af0443550ffc045 = $this->env->getExtension("native_profiler");
        $__internal_77d260358f60b46f583f9245c51e877410379d2b8c5580da5af0443550ffc045->enter($__internal_77d260358f60b46f583f9245c51e877410379d2b8c5580da5af0443550ffc045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_77d260358f60b46f583f9245c51e877410379d2b8c5580da5af0443550ffc045->leave($__internal_77d260358f60b46f583f9245c51e877410379d2b8c5580da5af0443550ffc045_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cab019094d81ea131d762567628522bb8630e7f4f47f013248b2f65bd47ec250 = $this->env->getExtension("native_profiler");
        $__internal_cab019094d81ea131d762567628522bb8630e7f4f47f013248b2f65bd47ec250->enter($__internal_cab019094d81ea131d762567628522bb8630e7f4f47f013248b2f65bd47ec250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cab019094d81ea131d762567628522bb8630e7f4f47f013248b2f65bd47ec250->leave($__internal_cab019094d81ea131d762567628522bb8630e7f4f47f013248b2f65bd47ec250_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07c0a4769cc6c1f86d3c21a23db1784e55742bb2385d56ac5bcf8f815d2c2fc4 = $this->env->getExtension("native_profiler");
        $__internal_07c0a4769cc6c1f86d3c21a23db1784e55742bb2385d56ac5bcf8f815d2c2fc4->enter($__internal_07c0a4769cc6c1f86d3c21a23db1784e55742bb2385d56ac5bcf8f815d2c2fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_07c0a4769cc6c1f86d3c21a23db1784e55742bb2385d56ac5bcf8f815d2c2fc4->leave($__internal_07c0a4769cc6c1f86d3c21a23db1784e55742bb2385d56ac5bcf8f815d2c2fc4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
