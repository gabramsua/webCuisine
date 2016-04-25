<?php

/* @intranet/Default/formExpenses.html.twig */
class __TwigTemplate_afc9a58611bcfdbb54b9f160e35fabcfe3f5e7675450a8a6507f5809fa4a64fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/formExpenses.html.twig", 1);
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
        $__internal_1044374a36af8d501d2512d211fb987a7c8c4e17c18d8ebac38184f0c3735cf4 = $this->env->getExtension("native_profiler");
        $__internal_1044374a36af8d501d2512d211fb987a7c8c4e17c18d8ebac38184f0c3735cf4->enter($__internal_1044374a36af8d501d2512d211fb987a7c8c4e17c18d8ebac38184f0c3735cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/formExpenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1044374a36af8d501d2512d211fb987a7c8c4e17c18d8ebac38184f0c3735cf4->leave($__internal_1044374a36af8d501d2512d211fb987a7c8c4e17c18d8ebac38184f0c3735cf4_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2bcd55fbd92cbfc278beda88fefde4e8b19963ca6f3db7c8d31728a78b6b5dad = $this->env->getExtension("native_profiler");
        $__internal_2bcd55fbd92cbfc278beda88fefde4e8b19963ca6f3db7c8d31728a78b6b5dad->enter($__internal_2bcd55fbd92cbfc278beda88fefde4e8b19963ca6f3db7c8d31728a78b6b5dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>EXPENSES</h3><br>
 <form action=\"vExpenses.php\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>Company:</label><input type=\"text\" name=\"company\"><br>
        <label>Importe:</label><input type=\"number\" step=\"any\" name=\"import\"> â‚¬<br>
        <label>Earlier than: </label><input type='date' id=\"earlier\"name=\"earlier\" min=\"<?php echo date(\"Y-m-d\");?>\" value=\"<?php echo date(\"Y-m-d\");?>\"><i>default: TODAY</i><BR>
        <input type=\"textarea\" name=\"concept\"> <BR>
                                     <input type=\"submit\" value=\"Modify\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"expenses\">
                                     <input type=\"hidden\" name=\"actualDate\" value=\"<?php echo date(\"Y-m-d H:i:s\");?>\">
   </form>



";
        
        $__internal_2bcd55fbd92cbfc278beda88fefde4e8b19963ca6f3db7c8d31728a78b6b5dad->leave($__internal_2bcd55fbd92cbfc278beda88fefde4e8b19963ca6f3db7c8d31728a78b6b5dad_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/formExpenses.html.twig";
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
/* <h3>EXPENSES</h3><br>*/
/*  <form action="vExpenses.php" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>Company:</label><input type="text" name="company"><br>*/
/*         <label>Importe:</label><input type="number" step="any" name="import"> â‚¬<br>*/
/*         <label>Earlier than: </label><input type='date' id="earlier"name="earlier" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>"><i>default: TODAY</i><BR>*/
/*         <input type="textarea" name="concept"> <BR>*/
/*                                      <input type="submit" value="Modify">*/
/*                                      <input type="hidden" name="typeF" value="expenses">*/
/*                                      <input type="hidden" name="actualDate" value="<?php echo date("Y-m-d H:i:s");?>">*/
/*    </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
