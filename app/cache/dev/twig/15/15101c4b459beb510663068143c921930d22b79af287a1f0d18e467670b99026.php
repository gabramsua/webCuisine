<?php

/* intranetBundle:Default:index.html.twig */
class __TwigTemplate_0935fc538b2f5b5d556cb4ae0f533cd3547e4d309d70a830571df206ca96ea2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout2.html.twig", "intranetBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "intranetBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54276a83d74ee548a8961de83dd23e4d1ee629ab485657362c22255cc134f0ce = $this->env->getExtension("native_profiler");
        $__internal_54276a83d74ee548a8961de83dd23e4d1ee629ab485657362c22255cc134f0ce->enter($__internal_54276a83d74ee548a8961de83dd23e4d1ee629ab485657362c22255cc134f0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54276a83d74ee548a8961de83dd23e4d1ee629ab485657362c22255cc134f0ce->leave($__internal_54276a83d74ee548a8961de83dd23e4d1ee629ab485657362c22255cc134f0ce_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_cc5c50555efeb3588d997ba3b0b97ecb70d92548898aba219f2a1ad6eb059051 = $this->env->getExtension("native_profiler");
        $__internal_cc5c50555efeb3588d997ba3b0b97ecb70d92548898aba219f2a1ad6eb059051->enter($__internal_cc5c50555efeb3588d997ba3b0b97ecb70d92548898aba219f2a1ad6eb059051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<!--<h1>Inicio</h1>-->
<h3> Copyright (c) 2016 Copyright Holder All Rights Reserved.<br>Login de LDAP   </h3>
<hr>
<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("intranet_login");
        echo "\" method=\"post\">
  <label>Introduzca su login de LDAP:</label>
<input type=\"text\" name=\"login\" style=\"margin-left: 50px;\"> <br>
  <label>Por favor introduzca la contrasena: </label>
<input type=\"password\" name=\"pass\" style=\"margin-left: 10px;\"><br>
<input type=\"submit\" value=\"Click to login\">
</form>




";
        
        $__internal_cc5c50555efeb3588d997ba3b0b97ecb70d92548898aba219f2a1ad6eb059051->leave($__internal_cc5c50555efeb3588d997ba3b0b97ecb70d92548898aba219f2a1ad6eb059051_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout2.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <!--<h1>Inicio</h1>-->*/
/* <h3> Copyright (c) 2016 Copyright Holder All Rights Reserved.<br>Login de LDAP   </h3>*/
/* <hr>*/
/* <form action="{{ path('intranet_login')}}" method="post">*/
/*   <label>Introduzca su login de LDAP:</label>*/
/* <input type="text" name="login" style="margin-left: 50px;"> <br>*/
/*   <label>Por favor introduzca la contrasena: </label>*/
/* <input type="password" name="pass" style="margin-left: 10px;"><br>*/
/* <input type="submit" value="Click to login">*/
/* </form>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
