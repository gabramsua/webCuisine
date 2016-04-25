<?php

/* intranetBundle:Default:formExpenses.html.twig */
class __TwigTemplate_d9476c5408e02ff7e06824d8ba3b09b38b69e69371aeafc8482c0c724d6535da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formExpenses.html.twig", 1);
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
        $__internal_341675c99a15aaa61fa90b29bdc961245e12aed2191d3de72a1e87b7df58944e = $this->env->getExtension("native_profiler");
        $__internal_341675c99a15aaa61fa90b29bdc961245e12aed2191d3de72a1e87b7df58944e->enter($__internal_341675c99a15aaa61fa90b29bdc961245e12aed2191d3de72a1e87b7df58944e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formExpenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_341675c99a15aaa61fa90b29bdc961245e12aed2191d3de72a1e87b7df58944e->leave($__internal_341675c99a15aaa61fa90b29bdc961245e12aed2191d3de72a1e87b7df58944e_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_41ae7228817b3fedd3bc05c9662957e39dd17de347e88194e972deb7bf571011 = $this->env->getExtension("native_profiler");
        $__internal_41ae7228817b3fedd3bc05c9662957e39dd17de347e88194e972deb7bf571011->enter($__internal_41ae7228817b3fedd3bc05c9662957e39dd17de347e88194e972deb7bf571011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_41ae7228817b3fedd3bc05c9662957e39dd17de347e88194e972deb7bf571011->leave($__internal_41ae7228817b3fedd3bc05c9662957e39dd17de347e88194e972deb7bf571011_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formExpenses.html.twig";
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
