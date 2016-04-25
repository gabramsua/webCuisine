<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_fa392b078aabdd2c638a158d600f6c7f22f41eb23fe4be96fd6e4da31e0eea97 extends Twig_Template
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
        $__internal_7ba9419215b3baf3623e266ba7a6c5fefaff3f5d92c341e99346a120bcdeb824 = $this->env->getExtension("native_profiler");
        $__internal_7ba9419215b3baf3623e266ba7a6c5fefaff3f5d92c341e99346a120bcdeb824->enter($__internal_7ba9419215b3baf3623e266ba7a6c5fefaff3f5d92c341e99346a120bcdeb824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_7ba9419215b3baf3623e266ba7a6c5fefaff3f5d92c341e99346a120bcdeb824->leave($__internal_7ba9419215b3baf3623e266ba7a6c5fefaff3f5d92c341e99346a120bcdeb824_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
