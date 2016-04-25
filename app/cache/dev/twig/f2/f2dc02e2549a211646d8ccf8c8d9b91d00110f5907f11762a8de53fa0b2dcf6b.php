<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_431b83346f729438413c50d0f015f1a0ab40305e87a2d7a2bbe03db6d0d80d02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_3f6feb7f15a7883bda607c4ecb52ad3771295b02adeafaa11bce099ded8dd24d = $this->env->getExtension("native_profiler");
        $__internal_3f6feb7f15a7883bda607c4ecb52ad3771295b02adeafaa11bce099ded8dd24d->enter($__internal_3f6feb7f15a7883bda607c4ecb52ad3771295b02adeafaa11bce099ded8dd24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f6feb7f15a7883bda607c4ecb52ad3771295b02adeafaa11bce099ded8dd24d->leave($__internal_3f6feb7f15a7883bda607c4ecb52ad3771295b02adeafaa11bce099ded8dd24d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe2c88bf199cc9e916f634c168b649b4d45ec8ba218a11f0968c3e4aecb5460a = $this->env->getExtension("native_profiler");
        $__internal_fe2c88bf199cc9e916f634c168b649b4d45ec8ba218a11f0968c3e4aecb5460a->enter($__internal_fe2c88bf199cc9e916f634c168b649b4d45ec8ba218a11f0968c3e4aecb5460a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe2c88bf199cc9e916f634c168b649b4d45ec8ba218a11f0968c3e4aecb5460a->leave($__internal_fe2c88bf199cc9e916f634c168b649b4d45ec8ba218a11f0968c3e4aecb5460a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf69847b94696210ab49f4cf88a43f462be458252328cccdddd6f4b004e3c2ed = $this->env->getExtension("native_profiler");
        $__internal_cf69847b94696210ab49f4cf88a43f462be458252328cccdddd6f4b004e3c2ed->enter($__internal_cf69847b94696210ab49f4cf88a43f462be458252328cccdddd6f4b004e3c2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cf69847b94696210ab49f4cf88a43f462be458252328cccdddd6f4b004e3c2ed->leave($__internal_cf69847b94696210ab49f4cf88a43f462be458252328cccdddd6f4b004e3c2ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fbac5e76cea55d6679b36149ae95c8af41a647b54ede6011bba7b32ee22cb7c1 = $this->env->getExtension("native_profiler");
        $__internal_fbac5e76cea55d6679b36149ae95c8af41a647b54ede6011bba7b32ee22cb7c1->enter($__internal_fbac5e76cea55d6679b36149ae95c8af41a647b54ede6011bba7b32ee22cb7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fbac5e76cea55d6679b36149ae95c8af41a647b54ede6011bba7b32ee22cb7c1->leave($__internal_fbac5e76cea55d6679b36149ae95c8af41a647b54ede6011bba7b32ee22cb7c1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
