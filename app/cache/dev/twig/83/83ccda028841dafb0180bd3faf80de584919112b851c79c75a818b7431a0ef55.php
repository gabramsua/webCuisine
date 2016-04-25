<?php

/* intranetBundle:Default:formVacations.html.twig */
class __TwigTemplate_c6f8173d84d7b3c7f0a54448e0ef0a2c90c8a1b127ae18ad96d9167c48f1d97d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formVacations.html.twig", 1);
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
        $__internal_7fb055c877e2658b3e7814711a74a732b44216e766a1e8d3e943b620ba4796bf = $this->env->getExtension("native_profiler");
        $__internal_7fb055c877e2658b3e7814711a74a732b44216e766a1e8d3e943b620ba4796bf->enter($__internal_7fb055c877e2658b3e7814711a74a732b44216e766a1e8d3e943b620ba4796bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formVacations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fb055c877e2658b3e7814711a74a732b44216e766a1e8d3e943b620ba4796bf->leave($__internal_7fb055c877e2658b3e7814711a74a732b44216e766a1e8d3e943b620ba4796bf_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_51d10bb726f2e1b7dc14bb4308f893c596af1a15248fa179598b5e0f6f18712f = $this->env->getExtension("native_profiler");
        $__internal_51d10bb726f2e1b7dc14bb4308f893c596af1a15248fa179598b5e0f6f18712f->enter($__internal_51d10bb726f2e1b7dc14bb4308f893c596af1a15248fa179598b5e0f6f18712f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>VACATIONS</h3><br>
 <form action=\"vVacation.php\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
       <label>From: </label><input type='date' id=\"from\"name=\"from\" min=\"<?php echo date(\"Y-m-d\");?>\" value=\"<?php echo date(\"Y-m-d\");?>\"><i>default: TODAY</i><BR>
       <label>to: </label><input type='date' id=\"to\"name=\"to\" max=\"<?php echo date(\"Y-m-d\", strtotime(\"+6 month\")); ?>\" value=\"<?php echo date(\"Y-m-d\", strtotime(\"+1 week\")); ?>\">
       <i>default: 1 WEEK, max 3 months</i><BR>
                                    <input type=\"submit\" value=\"Modify\">
                                    <input type=\"hidden\" name=\"typeF\" value=\"vacation\">
                                    <input type=\"hidden\" name=\"actualDate\" value=\"<?php echo date(\"Y-m-d H:i:s\");?>\">
  </form>




";
        
        $__internal_51d10bb726f2e1b7dc14bb4308f893c596af1a15248fa179598b5e0f6f18712f->leave($__internal_51d10bb726f2e1b7dc14bb4308f893c596af1a15248fa179598b5e0f6f18712f_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formVacations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>VACATIONS</h3><br>*/
/*  <form action="vVacation.php" method="post" style="border: 1px solid;width: 500px;">*/
/*        <label>From: </label><input type='date' id="from"name="from" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>"><i>default: TODAY</i><BR>*/
/*        <label>to: </label><input type='date' id="to"name="to" max="<?php echo date("Y-m-d", strtotime("+6 month")); ?>" value="<?php echo date("Y-m-d", strtotime("+1 week")); ?>">*/
/*        <i>default: 1 WEEK, max 3 months</i><BR>*/
/*                                     <input type="submit" value="Modify">*/
/*                                     <input type="hidden" name="typeF" value="vacation">*/
/*                                     <input type="hidden" name="actualDate" value="<?php echo date("Y-m-d H:i:s");?>">*/
/*   </form>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
