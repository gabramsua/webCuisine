<?php

/* @intranet/Default/formVacations.html.twig */
class __TwigTemplate_d841a9b0ba3289e7e3559f2c5eebaeb23ea16ca21e8d19e24c22aab80a9d4b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/formVacations.html.twig", 1);
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
        $__internal_14b857d5f8995939dd6cae9194ad5763cfd214ea507d6639ecb764064b237b98 = $this->env->getExtension("native_profiler");
        $__internal_14b857d5f8995939dd6cae9194ad5763cfd214ea507d6639ecb764064b237b98->enter($__internal_14b857d5f8995939dd6cae9194ad5763cfd214ea507d6639ecb764064b237b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/formVacations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14b857d5f8995939dd6cae9194ad5763cfd214ea507d6639ecb764064b237b98->leave($__internal_14b857d5f8995939dd6cae9194ad5763cfd214ea507d6639ecb764064b237b98_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2686241fe05aeddbefc218a9b354a19e8fa9f6e74fcedeba59ddd3ccff20bc54 = $this->env->getExtension("native_profiler");
        $__internal_2686241fe05aeddbefc218a9b354a19e8fa9f6e74fcedeba59ddd3ccff20bc54->enter($__internal_2686241fe05aeddbefc218a9b354a19e8fa9f6e74fcedeba59ddd3ccff20bc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_2686241fe05aeddbefc218a9b354a19e8fa9f6e74fcedeba59ddd3ccff20bc54->leave($__internal_2686241fe05aeddbefc218a9b354a19e8fa9f6e74fcedeba59ddd3ccff20bc54_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/formVacations.html.twig";
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
