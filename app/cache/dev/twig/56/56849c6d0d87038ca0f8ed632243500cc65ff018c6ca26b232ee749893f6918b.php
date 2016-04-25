<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_5849bfb3d8443e0af42cd1dcf65f7e7b56989f1cb83f7ad99d8d9f986f2f8f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f46a848183e7e6b9b87f2b24cab9f61319cb1e0f252dbffe00da4b13bfff856e = $this->env->getExtension("native_profiler");
        $__internal_f46a848183e7e6b9b87f2b24cab9f61319cb1e0f252dbffe00da4b13bfff856e->enter($__internal_f46a848183e7e6b9b87f2b24cab9f61319cb1e0f252dbffe00da4b13bfff856e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f46a848183e7e6b9b87f2b24cab9f61319cb1e0f252dbffe00da4b13bfff856e->leave($__internal_f46a848183e7e6b9b87f2b24cab9f61319cb1e0f252dbffe00da4b13bfff856e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b50340c17aee3f1f4577665fcc9f2c7e450bb606ade61b0447ab4746ad708447 = $this->env->getExtension("native_profiler");
        $__internal_b50340c17aee3f1f4577665fcc9f2c7e450bb606ade61b0447ab4746ad708447->enter($__internal_b50340c17aee3f1f4577665fcc9f2c7e450bb606ade61b0447ab4746ad708447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b50340c17aee3f1f4577665fcc9f2c7e450bb606ade61b0447ab4746ad708447->leave($__internal_b50340c17aee3f1f4577665fcc9f2c7e450bb606ade61b0447ab4746ad708447_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a882741a1e2a7fef31352ab48ba3f399b2808398558fc55be4eeb09274312e40 = $this->env->getExtension("native_profiler");
        $__internal_a882741a1e2a7fef31352ab48ba3f399b2808398558fc55be4eeb09274312e40->enter($__internal_a882741a1e2a7fef31352ab48ba3f399b2808398558fc55be4eeb09274312e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a882741a1e2a7fef31352ab48ba3f399b2808398558fc55be4eeb09274312e40->leave($__internal_a882741a1e2a7fef31352ab48ba3f399b2808398558fc55be4eeb09274312e40_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52abf375ab15f3387900a11a499f516d98e546326c7543b96878e6e92744d7c1 = $this->env->getExtension("native_profiler");
        $__internal_52abf375ab15f3387900a11a499f516d98e546326c7543b96878e6e92744d7c1->enter($__internal_52abf375ab15f3387900a11a499f516d98e546326c7543b96878e6e92744d7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_52abf375ab15f3387900a11a499f516d98e546326c7543b96878e6e92744d7c1->leave($__internal_52abf375ab15f3387900a11a499f516d98e546326c7543b96878e6e92744d7c1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
