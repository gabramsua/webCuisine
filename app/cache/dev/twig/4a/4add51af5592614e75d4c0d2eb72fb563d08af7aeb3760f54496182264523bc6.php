<?php

/* intranetBundle:Error:error_news.html.twig */
class __TwigTemplate_3e0fc596da2033d492f503150589a67f8c3864802a3d2103890e7c28901d2793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Error:error_news.html.twig", 1);
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
        $__internal_d481bd608ce9607e27d07779ce3f2790438d480fd7ebdd8bae7f4d814e191d1c = $this->env->getExtension("native_profiler");
        $__internal_d481bd608ce9607e27d07779ce3f2790438d480fd7ebdd8bae7f4d814e191d1c->enter($__internal_d481bd608ce9607e27d07779ce3f2790438d480fd7ebdd8bae7f4d814e191d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Error:error_news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d481bd608ce9607e27d07779ce3f2790438d480fd7ebdd8bae7f4d814e191d1c->leave($__internal_d481bd608ce9607e27d07779ce3f2790438d480fd7ebdd8bae7f4d814e191d1c_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_fd66ece75ec8183e3b46ce57899b42e5be1dbff2f53ccb435e693e366256c47c = $this->env->getExtension("native_profiler");
        $__internal_fd66ece75ec8183e3b46ce57899b42e5be1dbff2f53ccb435e693e366256c47c->enter($__internal_fd66ece75ec8183e3b46ce57899b42e5be1dbff2f53ccb435e693e366256c47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<i>";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("message_2", array(), "messages");
        echo "</i><hr>

<h1>NO HAY NOTICIAS QUE MOSTRAR</h1>

<br><br>

<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("intranet_newnew");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
    <input type=\"submit\" name=\"newNew\" value=\"NEW NEW\">
  </form>

";
        
        $__internal_fd66ece75ec8183e3b46ce57899b42e5be1dbff2f53ccb435e693e366256c47c->leave($__internal_fd66ece75ec8183e3b46ce57899b42e5be1dbff2f53ccb435e693e366256c47c_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Error:error_news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* <i>{% trans %}message_2{% endtrans %}</i><hr>*/
/* */
/* <h1>NO HAY NOTICIAS QUE MOSTRAR</h1>*/
/* */
/* <br><br>*/
/* */
/* <form action="{{ path('intranet_newnew')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*     <input type="submit" name="newNew" value="NEW NEW">*/
/*   </form>*/
/* */
/* {% endblock %}*/
/* */
