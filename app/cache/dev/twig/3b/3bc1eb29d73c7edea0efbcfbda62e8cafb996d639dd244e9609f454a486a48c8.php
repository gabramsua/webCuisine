<?php

/* intranetBundle:Default:formHours.html.twig */
class __TwigTemplate_0e12c499555f0d310c0a59b2107ae6ff07ecb664053a23fe3763a3b4ebb549be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formHours.html.twig", 1);
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
        $__internal_cc9a1134e578f2b55734d458375c332427ded4a7b5590f390d69ffadd63d44b2 = $this->env->getExtension("native_profiler");
        $__internal_cc9a1134e578f2b55734d458375c332427ded4a7b5590f390d69ffadd63d44b2->enter($__internal_cc9a1134e578f2b55734d458375c332427ded4a7b5590f390d69ffadd63d44b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formHours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc9a1134e578f2b55734d458375c332427ded4a7b5590f390d69ffadd63d44b2->leave($__internal_cc9a1134e578f2b55734d458375c332427ded4a7b5590f390d69ffadd63d44b2_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2b3703c8531bea42f2a6398558bdd6b737bc91973c285e9c71abf92a63a40bff = $this->env->getExtension("native_profiler");
        $__internal_2b3703c8531bea42f2a6398558bdd6b737bc91973c285e9c71abf92a63a40bff->enter($__internal_2b3703c8531bea42f2a6398558bdd6b737bc91973c285e9c71abf92a63a40bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>HOURS</h3><br>
 <form action=\"vHours.php\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>Number of hours: </label><input type='number' name=\"numhours\" id=\"numhours\" min=\"1\" max=\"50\"><i>min:1, max:20</i><BR>
        <label>Between: </label><input type='date' id=\"betw\"name=\"betw\" min=\"<?php echo date(\"Y-m-d\");?>\" value=\"<?php echo date(\"Y-m-d\");?>\"><i>default: TODAY</i><BR>
        <label>and: </label><input type='date' id=\"and\"name=\"and\" max=\"<?php echo date(\"Y-m-d\", strtotime(\"+3 month\")); ?>\" value=\"<?php echo date(\"Y-m-d\", strtotime(\"+1 week\")); ?>\">
        <i>default: 1 WEEK, max 3 months</i><BR>
                                     <input type=\"submit\" value=\"Modify\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"hours\">
                                     <input type=\"hidden\" name=\"actualDate\" value=\"<?php echo date(\"Y-m-d H:i:s\");?>\">
   </form>


";
        
        $__internal_2b3703c8531bea42f2a6398558bdd6b737bc91973c285e9c71abf92a63a40bff->leave($__internal_2b3703c8531bea42f2a6398558bdd6b737bc91973c285e9c71abf92a63a40bff_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formHours.html.twig";
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
/* <h3>HOURS</h3><br>*/
/*  <form action="vHours.php" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>Number of hours: </label><input type='number' name="numhours" id="numhours" min="1" max="50"><i>min:1, max:20</i><BR>*/
/*         <label>Between: </label><input type='date' id="betw"name="betw" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>"><i>default: TODAY</i><BR>*/
/*         <label>and: </label><input type='date' id="and"name="and" max="<?php echo date("Y-m-d", strtotime("+3 month")); ?>" value="<?php echo date("Y-m-d", strtotime("+1 week")); ?>">*/
/*         <i>default: 1 WEEK, max 3 months</i><BR>*/
/*                                      <input type="submit" value="Modify">*/
/*                                      <input type="hidden" name="typeF" value="hours">*/
/*                                      <input type="hidden" name="actualDate" value="<?php echo date("Y-m-d H:i:s");?>">*/
/*    </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
