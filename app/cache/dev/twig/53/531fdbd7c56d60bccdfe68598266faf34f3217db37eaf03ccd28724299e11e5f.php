<?php

/* @intranet/Default/formHours.html.twig */
class __TwigTemplate_5af07b88c0d76ee27fd501e7b861761e01b0b5186dea9a2c3b6e7f987fc4c4b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/formHours.html.twig", 1);
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
        $__internal_31ab8108ed28abb817d810aea754d106e20868755f50337d38e4259ac9bd2cb8 = $this->env->getExtension("native_profiler");
        $__internal_31ab8108ed28abb817d810aea754d106e20868755f50337d38e4259ac9bd2cb8->enter($__internal_31ab8108ed28abb817d810aea754d106e20868755f50337d38e4259ac9bd2cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/formHours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31ab8108ed28abb817d810aea754d106e20868755f50337d38e4259ac9bd2cb8->leave($__internal_31ab8108ed28abb817d810aea754d106e20868755f50337d38e4259ac9bd2cb8_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_09e1f311bee48088e0ce59d53e286fd4b06f792bd5e76867414930dfe7004596 = $this->env->getExtension("native_profiler");
        $__internal_09e1f311bee48088e0ce59d53e286fd4b06f792bd5e76867414930dfe7004596->enter($__internal_09e1f311bee48088e0ce59d53e286fd4b06f792bd5e76867414930dfe7004596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_09e1f311bee48088e0ce59d53e286fd4b06f792bd5e76867414930dfe7004596->leave($__internal_09e1f311bee48088e0ce59d53e286fd4b06f792bd5e76867414930dfe7004596_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/formHours.html.twig";
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
