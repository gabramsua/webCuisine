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
        $__internal_a32c39c7f8b505ce1a1a47342c009d00bca6d7d00040ebe82a1dd3b624b219c0 = $this->env->getExtension("native_profiler");
        $__internal_a32c39c7f8b505ce1a1a47342c009d00bca6d7d00040ebe82a1dd3b624b219c0->enter($__internal_a32c39c7f8b505ce1a1a47342c009d00bca6d7d00040ebe82a1dd3b624b219c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formExpenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a32c39c7f8b505ce1a1a47342c009d00bca6d7d00040ebe82a1dd3b624b219c0->leave($__internal_a32c39c7f8b505ce1a1a47342c009d00bca6d7d00040ebe82a1dd3b624b219c0_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1d86fcf60669b963683dd10ae65e97bdd7913887ba9f0f4e58a9cc8c3ccadc4a = $this->env->getExtension("native_profiler");
        $__internal_1d86fcf60669b963683dd10ae65e97bdd7913887ba9f0f4e58a9cc8c3ccadc4a->enter($__internal_1d86fcf60669b963683dd10ae65e97bdd7913887ba9f0f4e58a9cc8c3ccadc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_1d86fcf60669b963683dd10ae65e97bdd7913887ba9f0f4e58a9cc8c3ccadc4a->leave($__internal_1d86fcf60669b963683dd10ae65e97bdd7913887ba9f0f4e58a9cc8c3ccadc4a_prof);

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
