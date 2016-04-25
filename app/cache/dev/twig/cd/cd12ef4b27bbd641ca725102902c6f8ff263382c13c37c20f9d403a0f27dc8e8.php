<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_896e35eb2f17b0c29f4ab15705a32e2af9d4aa5c462a1b87ff4bd6df26113e66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e19377079baf948c2cf4eb67ea528a5f10186a9c7055c413a3d5d5a8d689b2a3 = $this->env->getExtension("native_profiler");
        $__internal_e19377079baf948c2cf4eb67ea528a5f10186a9c7055c413a3d5d5a8d689b2a3->enter($__internal_e19377079baf948c2cf4eb67ea528a5f10186a9c7055c413a3d5d5a8d689b2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e19377079baf948c2cf4eb67ea528a5f10186a9c7055c413a3d5d5a8d689b2a3->leave($__internal_e19377079baf948c2cf4eb67ea528a5f10186a9c7055c413a3d5d5a8d689b2a3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_42b76925be7aeff4ecc406b9750dad67211c1885acd63aac82fbc8e1658c98cd = $this->env->getExtension("native_profiler");
        $__internal_42b76925be7aeff4ecc406b9750dad67211c1885acd63aac82fbc8e1658c98cd->enter($__internal_42b76925be7aeff4ecc406b9750dad67211c1885acd63aac82fbc8e1658c98cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_42b76925be7aeff4ecc406b9750dad67211c1885acd63aac82fbc8e1658c98cd->leave($__internal_42b76925be7aeff4ecc406b9750dad67211c1885acd63aac82fbc8e1658c98cd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
