<?php

/* @intranet/Default/index.html.twig */
class __TwigTemplate_17122299f83fc707d3af18fda44bbcde71d1c6c8c4a7c45e49fbf31cfe8e0d01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout2.html.twig", "@intranet/Default/index.html.twig", 1);
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
        $__internal_b6489017f50c2d0db601cd4717770e03167476332b22f06e606d870d96733e1f = $this->env->getExtension("native_profiler");
        $__internal_b6489017f50c2d0db601cd4717770e03167476332b22f06e606d870d96733e1f->enter($__internal_b6489017f50c2d0db601cd4717770e03167476332b22f06e606d870d96733e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6489017f50c2d0db601cd4717770e03167476332b22f06e606d870d96733e1f->leave($__internal_b6489017f50c2d0db601cd4717770e03167476332b22f06e606d870d96733e1f_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_352f772052adbc744f5124be675b038b50fdd19365d402a6d504d63717190685 = $this->env->getExtension("native_profiler");
        $__internal_352f772052adbc744f5124be675b038b50fdd19365d402a6d504d63717190685->enter($__internal_352f772052adbc744f5124be675b038b50fdd19365d402a6d504d63717190685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_352f772052adbc744f5124be675b038b50fdd19365d402a6d504d63717190685->leave($__internal_352f772052adbc744f5124be675b038b50fdd19365d402a6d504d63717190685_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/index.html.twig";
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
/* {% endblock %}*/
/* */
