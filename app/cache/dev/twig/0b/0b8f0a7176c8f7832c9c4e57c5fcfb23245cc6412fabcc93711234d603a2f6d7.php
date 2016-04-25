<?php

/* intranetBundle:Default:w1.html.twig */
class __TwigTemplate_badd3e3b65db89cb56a3b9a2d8cfb60c3962c8e044c58f00d88a2eb73d95f457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout2.html.twig", "intranetBundle:Default:w1.html.twig", 1);
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
        $__internal_71a8de44f50fda74fbf534cbb7c0ab7c512f00e7862d139afe5260264b6011f9 = $this->env->getExtension("native_profiler");
        $__internal_71a8de44f50fda74fbf534cbb7c0ab7c512f00e7862d139afe5260264b6011f9->enter($__internal_71a8de44f50fda74fbf534cbb7c0ab7c512f00e7862d139afe5260264b6011f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:w1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71a8de44f50fda74fbf534cbb7c0ab7c512f00e7862d139afe5260264b6011f9->leave($__internal_71a8de44f50fda74fbf534cbb7c0ab7c512f00e7862d139afe5260264b6011f9_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_cf510beb79cdf5f87dc4e1d848b44863b48926c64cc0adf93eedd852ad2c83e3 = $this->env->getExtension("native_profiler");
        $__internal_cf510beb79cdf5f87dc4e1d848b44863b48926c64cc0adf93eedd852ad2c83e3->enter($__internal_cf510beb79cdf5f87dc4e1d848b44863b48926c64cc0adf93eedd852ad2c83e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<!--<h1>Inicio</h1>-->
<h3> Copyright (c) 2016 Copyright Holder All Rights Reserved.<br>Login de LDAP   </h3>
<hr>
<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("intranet_homepage");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"login\" style=\"margin-left: 50px;\"> <br>
    <input type=\"submit\" value=\"Click to login\">
</form>
";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["idioma"]) ? $context["idioma"] : $this->getContext($context, "idioma")), "html", null, true);
        echo "
";
        
        $__internal_cf510beb79cdf5f87dc4e1d848b44863b48926c64cc0adf93eedd852ad2c83e3->leave($__internal_cf510beb79cdf5f87dc4e1d848b44863b48926c64cc0adf93eedd852ad2c83e3_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:w1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout2.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <!--<h1>Inicio</h1>-->*/
/* <h3> Copyright (c) 2016 Copyright Holder All Rights Reserved.<br>Login de LDAP   </h3>*/
/* <hr>*/
/* <form action="{{ path('intranet_homepage')}}" method="post">*/
/*     <input type="hidden" name="login" style="margin-left: 50px;"> <br>*/
/*     <input type="submit" value="Click to login">*/
/* </form>*/
/* {{ idioma }}*/
/* {% endblock %}*/
/* */
