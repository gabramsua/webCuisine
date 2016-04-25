<?php

/* @intranet/Default/formRequest.html.twig */
class __TwigTemplate_cdef4cce2d568e15693eee4069a28fe5332eddce33fead02be606adff644d245 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/formRequest.html.twig", 1);
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
        $__internal_9f20d204a4763cfbba4c9a679b1cc8351f4f3aa36920dbe6fee05b577586795c = $this->env->getExtension("native_profiler");
        $__internal_9f20d204a4763cfbba4c9a679b1cc8351f4f3aa36920dbe6fee05b577586795c->enter($__internal_9f20d204a4763cfbba4c9a679b1cc8351f4f3aa36920dbe6fee05b577586795c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/formRequest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f20d204a4763cfbba4c9a679b1cc8351f4f3aa36920dbe6fee05b577586795c->leave($__internal_9f20d204a4763cfbba4c9a679b1cc8351f4f3aa36920dbe6fee05b577586795c_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_7d41008aef695985f2cef8923736a1ae5ddd9c32ab2b987077d32fe5222027e6 = $this->env->getExtension("native_profiler");
        $__internal_7d41008aef695985f2cef8923736a1ae5ddd9c32ab2b987077d32fe5222027e6->enter($__internal_7d41008aef695985f2cef8923736a1ae5ddd9c32ab2b987077d32fe5222027e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>REQUEST BUSINESS TRIP</h3><br>
 <form action=\"vBusiness.php\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
         <label>From: </label><input type='date' id=\"from\"name=\"from\" min=\"<?php echo date(\"Y-m-d\");?>\" value=\"<?php echo date(\"Y-m-d\");?>\"><i>default: TODAY</i><BR>
         <label>to: </label><input type='date' id=\"to\"name=\"to\" max=\"<?php echo date(\"Y-m-d\", strtotime(\"+6 month\")); ?>\" value=\"<?php echo date(\"Y-m-d\", strtotime(\"+1 week\")); ?>\">
         <i>default: 1 WEEK, max 3 months</i><BR>
         <label>Where:</label><input type=\"text\" name=\"where\"><br>
         <label>Congress<i>if any</i>:</label><input type=\"text\" name=\"congress\"><br>
         <label>Reason:</label><input type=\"textarea\" name=\"reason\"><br>
                                      <input type=\"submit\" value=\"Modify\">
                                      <input type=\"hidden\" name=\"typeF\" value=\"businessRequest\">
                                      <input type=\"hidden\" name=\"actualDate\" value=\"<?php echo date(\"Y-m-d H:i:s\");?>\">
    </form>



";
        
        $__internal_7d41008aef695985f2cef8923736a1ae5ddd9c32ab2b987077d32fe5222027e6->leave($__internal_7d41008aef695985f2cef8923736a1ae5ddd9c32ab2b987077d32fe5222027e6_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/formRequest.html.twig";
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
/* <h3>REQUEST BUSINESS TRIP</h3><br>*/
/*  <form action="vBusiness.php" method="post" style="border: 1px solid;width: 500px;">*/
/*          <label>From: </label><input type='date' id="from"name="from" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>"><i>default: TODAY</i><BR>*/
/*          <label>to: </label><input type='date' id="to"name="to" max="<?php echo date("Y-m-d", strtotime("+6 month")); ?>" value="<?php echo date("Y-m-d", strtotime("+1 week")); ?>">*/
/*          <i>default: 1 WEEK, max 3 months</i><BR>*/
/*          <label>Where:</label><input type="text" name="where"><br>*/
/*          <label>Congress<i>if any</i>:</label><input type="text" name="congress"><br>*/
/*          <label>Reason:</label><input type="textarea" name="reason"><br>*/
/*                                       <input type="submit" value="Modify">*/
/*                                       <input type="hidden" name="typeF" value="businessRequest">*/
/*                                       <input type="hidden" name="actualDate" value="<?php echo date("Y-m-d H:i:s");?>">*/
/*     </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
