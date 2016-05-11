<?php

/* intranetBundle:Default:createNewTask.html.twig */
class __TwigTemplate_23e2223813dc2b20df780d8b5012a1b5562e3958ab879e57a6e2adfa43c7d53d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:createNewTask.html.twig", 1);
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
        $__internal_27d5da8919f4e6becda485fb9a31ed311ecf4c6b7803c4a154613916dbaa182b = $this->env->getExtension("native_profiler");
        $__internal_27d5da8919f4e6becda485fb9a31ed311ecf4c6b7803c4a154613916dbaa182b->enter($__internal_27d5da8919f4e6becda485fb9a31ed311ecf4c6b7803c4a154613916dbaa182b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:createNewTask.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27d5da8919f4e6becda485fb9a31ed311ecf4c6b7803c4a154613916dbaa182b->leave($__internal_27d5da8919f4e6becda485fb9a31ed311ecf4c6b7803c4a154613916dbaa182b_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_8fa426b98426fd000c679476a90aa90120705670dc3b77bea993897386e633a1 = $this->env->getExtension("native_profiler");
        $__internal_8fa426b98426fd000c679476a90aa90120705670dc3b77bea993897386e633a1->enter($__internal_8fa426b98426fd000c679476a90aa90120705670dc3b77bea993897386e633a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>CREATE A NEW New</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_inserttask");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>TITLE:</label><input type=\"text\" name=\"title\" style=\"margin-left: 40px;\"><br>
        <label>CONTENT:</label><input type=\"textarea\" name=\"content\" style=\"margin-left: 15px;\"> <br>
        <label>USERS:</label><input type=\"text\" name=\"login\">
        <i>Aquí habrá que meter los usuarios</i><br>
                                     <input type=\"submit\" value=\"CREATE\">
                                     <input type=\"hidden\" name=\"WHO CREATE\">
   </form>



";
        
        $__internal_8fa426b98426fd000c679476a90aa90120705670dc3b77bea993897386e633a1->leave($__internal_8fa426b98426fd000c679476a90aa90120705670dc3b77bea993897386e633a1_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:createNewTask.html.twig";
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
/* <h3>CREATE A NEW New</h3><br>*/
/*  <form action="{{path('intranet_inserttask')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>TITLE:</label><input type="text" name="title" style="margin-left: 40px;"><br>*/
/*         <label>CONTENT:</label><input type="textarea" name="content" style="margin-left: 15px;"> <br>*/
/*         <label>USERS:</label><input type="text" name="login">*/
/*         <i>Aquí habrá que meter los usuarios</i><br>*/
/*                                      <input type="submit" value="CREATE">*/
/*                                      <input type="hidden" name="WHO CREATE">*/
/*    </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
