<?php

/* intranetBundle:Default:formRequest.html.twig */
class __TwigTemplate_8d6e8861447c5b35ce88e8b004739ac1a8d1bb091c52cc8c726d591f62a7a37f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formRequest.html.twig", 1);
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
        $__internal_a391cd86054023542a185702f53f5c0112178ec7fd89abd602a85dd00f9f580d = $this->env->getExtension("native_profiler");
        $__internal_a391cd86054023542a185702f53f5c0112178ec7fd89abd602a85dd00f9f580d->enter($__internal_a391cd86054023542a185702f53f5c0112178ec7fd89abd602a85dd00f9f580d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formRequest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a391cd86054023542a185702f53f5c0112178ec7fd89abd602a85dd00f9f580d->leave($__internal_a391cd86054023542a185702f53f5c0112178ec7fd89abd602a85dd00f9f580d_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_e1dd2dda06bdf28517cc5a839d7b2b0010a7cb8dee634b86c756ba8689ff134a = $this->env->getExtension("native_profiler");
        $__internal_e1dd2dda06bdf28517cc5a839d7b2b0010a7cb8dee634b86c756ba8689ff134a->enter($__internal_e1dd2dda06bdf28517cc5a839d7b2b0010a7cb8dee634b86c756ba8689ff134a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_e1dd2dda06bdf28517cc5a839d7b2b0010a7cb8dee634b86c756ba8689ff134a->leave($__internal_e1dd2dda06bdf28517cc5a839d7b2b0010a7cb8dee634b86c756ba8689ff134a_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formRequest.html.twig";
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
