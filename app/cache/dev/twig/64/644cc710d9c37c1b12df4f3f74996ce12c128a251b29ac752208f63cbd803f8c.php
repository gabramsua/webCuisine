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
        $__internal_cd08e88d46e389ca8a09981a342b07c16bf37b1298f097e481ce9a3c4ff303fc = $this->env->getExtension("native_profiler");
        $__internal_cd08e88d46e389ca8a09981a342b07c16bf37b1298f097e481ce9a3c4ff303fc->enter($__internal_cd08e88d46e389ca8a09981a342b07c16bf37b1298f097e481ce9a3c4ff303fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formExpenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd08e88d46e389ca8a09981a342b07c16bf37b1298f097e481ce9a3c4ff303fc->leave($__internal_cd08e88d46e389ca8a09981a342b07c16bf37b1298f097e481ce9a3c4ff303fc_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1775185f4d5734057d26383f25eead0fcc811c5314749b48c4b1ab953723ed57 = $this->env->getExtension("native_profiler");
        $__internal_1775185f4d5734057d26383f25eead0fcc811c5314749b48c4b1ab953723ed57->enter($__internal_1775185f4d5734057d26383f25eead0fcc811c5314749b48c4b1ab953723ed57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>EXPENSES</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_f");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>Company:</label><input type=\"text\" name=\"company\"><br>
        <label>Importe:</label><input type=\"number\" step=\"any\" name=\"amount\"> €<br>
        <label>Earlier than: </label><input type='date' id=\"earlier\" name=\"earlier\"><BR>
        <input type=\"textarea\" name=\"concept\"> <BR>
                                     <input type=\"submit\" value=\"Modify\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"expenses\">
   </form>


";
        
        $__internal_1775185f4d5734057d26383f25eead0fcc811c5314749b48c4b1ab953723ed57->leave($__internal_1775185f4d5734057d26383f25eead0fcc811c5314749b48c4b1ab953723ed57_prof);

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
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>EXPENSES</h3><br>*/
/*  <form action="{{ path('intranet_f') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>Company:</label><input type="text" name="company"><br>*/
/*         <label>Importe:</label><input type="number" step="any" name="amount"> €<br>*/
/*         <label>Earlier than: </label><input type='date' id="earlier" name="earlier"><BR>*/
/*         <input type="textarea" name="concept"> <BR>*/
/*                                      <input type="submit" value="Modify">*/
/*                                      <input type="hidden" name="typeF" value="expenses">*/
/*    </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
