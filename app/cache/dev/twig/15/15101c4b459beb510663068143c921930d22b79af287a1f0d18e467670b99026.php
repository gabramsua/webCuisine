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
        $__internal_9e55b8489e5f4ac55e5ee8080d47c4c6378ac0ebdd541b74d08e2fa2a1a1a07e = $this->env->getExtension("native_profiler");
        $__internal_9e55b8489e5f4ac55e5ee8080d47c4c6378ac0ebdd541b74d08e2fa2a1a1a07e->enter($__internal_9e55b8489e5f4ac55e5ee8080d47c4c6378ac0ebdd541b74d08e2fa2a1a1a07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e55b8489e5f4ac55e5ee8080d47c4c6378ac0ebdd541b74d08e2fa2a1a1a07e->leave($__internal_9e55b8489e5f4ac55e5ee8080d47c4c6378ac0ebdd541b74d08e2fa2a1a1a07e_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_9d94f73b85bdac8e6cb4e4447013b7dcad7fa689d1451bfa5650e0b527b2318d = $this->env->getExtension("native_profiler");
        $__internal_9d94f73b85bdac8e6cb4e4447013b7dcad7fa689d1451bfa5650e0b527b2318d->enter($__internal_9d94f73b85bdac8e6cb4e4447013b7dcad7fa689d1451bfa5650e0b527b2318d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_9d94f73b85bdac8e6cb4e4447013b7dcad7fa689d1451bfa5650e0b527b2318d->leave($__internal_9d94f73b85bdac8e6cb4e4447013b7dcad7fa689d1451bfa5650e0b527b2318d_prof);

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
