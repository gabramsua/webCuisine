<?php

/* intranetBundle:Default:formVacations.html.twig */
class __TwigTemplate_c6f8173d84d7b3c7f0a54448e0ef0a2c90c8a1b127ae18ad96d9167c48f1d97d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formVacations.html.twig", 1);
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
        $__internal_f770d836f4068511015dc4de0ccde27f824148054aa9d7ba759a7594b2e058ac = $this->env->getExtension("native_profiler");
        $__internal_f770d836f4068511015dc4de0ccde27f824148054aa9d7ba759a7594b2e058ac->enter($__internal_f770d836f4068511015dc4de0ccde27f824148054aa9d7ba759a7594b2e058ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formVacations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f770d836f4068511015dc4de0ccde27f824148054aa9d7ba759a7594b2e058ac->leave($__internal_f770d836f4068511015dc4de0ccde27f824148054aa9d7ba759a7594b2e058ac_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_d5a070248adeba308c33abf28051cddd700a6f5e055aff299eac2ee3a8c6ef0b = $this->env->getExtension("native_profiler");
        $__internal_d5a070248adeba308c33abf28051cddd700a6f5e055aff299eac2ee3a8c6ef0b->enter($__internal_d5a070248adeba308c33abf28051cddd700a6f5e055aff299eac2ee3a8c6ef0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>VACATIONS</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_f");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
       <label>From:</label><input type='date' id=\"from\" name=\"from\"><BR>
       <label>to: </label><input type='date' id=\"to\" name=\"to\" >
       <BR>
                                    <input type=\"submit\" value=\"Modify\">
                                    <input type=\"hidden\" name=\"typeF\" value=\"vacation\">
  </form>




";
        
        $__internal_d5a070248adeba308c33abf28051cddd700a6f5e055aff299eac2ee3a8c6ef0b->leave($__internal_d5a070248adeba308c33abf28051cddd700a6f5e055aff299eac2ee3a8c6ef0b_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formVacations.html.twig";
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
/* <h3>VACATIONS</h3><br>*/
/*  <form action="{{ path('intranet_f') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*        <label>From:</label><input type='date' id="from" name="from"><BR>*/
/*        <label>to: </label><input type='date' id="to" name="to" >*/
/*        <BR>*/
/*                                     <input type="submit" value="Modify">*/
/*                                     <input type="hidden" name="typeF" value="vacation">*/
/*   </form>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
