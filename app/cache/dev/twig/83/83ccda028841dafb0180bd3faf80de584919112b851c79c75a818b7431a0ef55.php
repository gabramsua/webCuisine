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
        $__internal_d2a4e7b0769a2079aed0b54be949182fd31718a4654836705369017f55d54cad = $this->env->getExtension("native_profiler");
        $__internal_d2a4e7b0769a2079aed0b54be949182fd31718a4654836705369017f55d54cad->enter($__internal_d2a4e7b0769a2079aed0b54be949182fd31718a4654836705369017f55d54cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formVacations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2a4e7b0769a2079aed0b54be949182fd31718a4654836705369017f55d54cad->leave($__internal_d2a4e7b0769a2079aed0b54be949182fd31718a4654836705369017f55d54cad_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ea8480b9d405ccc77c84c170f0b70731da95a99358d51af64b249314f0ffa403 = $this->env->getExtension("native_profiler");
        $__internal_ea8480b9d405ccc77c84c170f0b70731da95a99358d51af64b249314f0ffa403->enter($__internal_ea8480b9d405ccc77c84c170f0b70731da95a99358d51af64b249314f0ffa403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_ea8480b9d405ccc77c84c170f0b70731da95a99358d51af64b249314f0ffa403->leave($__internal_ea8480b9d405ccc77c84c170f0b70731da95a99358d51af64b249314f0ffa403_prof);

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
