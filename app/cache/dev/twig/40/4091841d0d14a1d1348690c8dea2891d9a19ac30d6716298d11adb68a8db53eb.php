<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_8b6470d1acf4630d1df4545635a013aa7fb498d8bafa5e6d474c61edbb504e26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_690d9622026077ccaeb448abdf6a5f664df13f18b2c1cdc413c94ad68c38b41e = $this->env->getExtension("native_profiler");
        $__internal_690d9622026077ccaeb448abdf6a5f664df13f18b2c1cdc413c94ad68c38b41e->enter($__internal_690d9622026077ccaeb448abdf6a5f664df13f18b2c1cdc413c94ad68c38b41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_690d9622026077ccaeb448abdf6a5f664df13f18b2c1cdc413c94ad68c38b41e->leave($__internal_690d9622026077ccaeb448abdf6a5f664df13f18b2c1cdc413c94ad68c38b41e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
