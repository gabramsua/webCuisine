<?php

/* ::menu.html.twig */
class __TwigTemplate_d6d713f26b57dff2b511328a8cd9c45a1314eee6e8267bc884aa0fac247688eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_888ee52e80d9e2b97c2fac63ff5b6b07fc50050ab030c3327f0c5a755e44d375 = $this->env->getExtension("native_profiler");
        $__internal_888ee52e80d9e2b97c2fac63ff5b6b07fc50050ab030c3327f0c5a755e44d375->enter($__internal_888ee52e80d9e2b97c2fac63ff5b6b07fc50050ab030c3327f0c5a755e44d375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('menu', $context, $blocks);
        
        $__internal_888ee52e80d9e2b97c2fac63ff5b6b07fc50050ab030c3327f0c5a755e44d375->leave($__internal_888ee52e80d9e2b97c2fac63ff5b6b07fc50050ab030c3327f0c5a755e44d375_prof);

    }

    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f8477896649e7b0b01ed839c0657626769ed52a8958e8ebfc26f4df2fb2dfbd = $this->env->getExtension("native_profiler");
        $__internal_0f8477896649e7b0b01ed839c0657626769ed52a8958e8ebfc26f4df2fb2dfbd->enter($__internal_0f8477896649e7b0b01ed839c0657626769ed52a8958e8ebfc26f4df2fb2dfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "
  <nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("intranet_homepage");
        echo "\">WebCuisine</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
        <li class=\"dropdown\">
          <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("Forms", array(), "messages");
        echo "<span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("intranet_formHours");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Overtime Hours", array(), "messages");
        echo "</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("intranet_formVacations");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Vacation", array(), "messages");
        echo "</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("intranet_formExpenses");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Expenses", array(), "messages");
        echo "</a></li>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("intranet_formRequest");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Request Business Trip", array(), "messages");
        echo "</a></li>
          </ul>
        </li>
        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("intranet_bookRoom");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Book a room", array(), "messages");
        echo "</a></li>
      ";
        // line 27
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "internship")) {
            // line 28
            echo "              <li><a href='";
            echo $this->env->getExtension('routing')->getPath("intranet_tasks");
            echo "'>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Task", array(), "messages");
            echo "-<i> internships</i></a></li>\"
      ";
        }
        // line 30
        echo "      ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "admin")) {
            // line 31
            echo "              <li><a href='";
            echo $this->env->getExtension('routing')->getPath("intranet_userManagement");
            echo "'>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("User Management", array(), "messages");
            echo "-<i> admins</i></a></li>
      ";
        }
        // line 33
        echo "      ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "buo")) {
            // line 34
            echo "              <li><a href='";
            echo $this->env->getExtension('routing')->getPath("intranet_news");
            echo "'";
            echo $this->env->getExtension('translator')->getTranslator()->trans(">News Feed", array(), "messages");
            echo "-<i> BÜOs</i></a></li>
      ";
        }
        // line 36
        echo "      ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "buo")) {
            // line 37
            echo "          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 38
            echo $this->env->getExtension('translator')->getTranslator()->trans("Form Management", array(), "messages");
            echo "-<i> BÜOs</i><span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href='";
            // line 40
            echo $this->env->getExtension('routing')->getPath("intranet_incomingForms");
            echo "'>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Incoming Forms", array(), "messages");
            echo "</a></li>
              <li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("intranet_oldForms");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Old Forms", array(), "messages");
            echo "</a></li>
            </ul>
          </li>";
        }
        // line 44
        echo "      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
      <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("intranet_testBD");
        echo "\"><b>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("BBDD", array(), "messages");
        echo "</b></a></li>
        <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("intranet_translation");
        echo "\"><b>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Lang", array(), "messages");
        echo "</b></a></li>
        <li><a href=\"#\"><b>";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("Hello", array(), "messages");
        echo " <?php echo \$_SESSION[\"usuario\"]; ?></b></a></li>
        <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("intranet_settings");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Settings", array(), "messages");
        echo "</a></li>
        <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("intranet_logout");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Log out</a></li>
      </ul>
    </div>
  </div>
  </nav>
  ";
        
        $__internal_0f8477896649e7b0b01ed839c0657626769ed52a8958e8ebfc26f4df2fb2dfbd->leave($__internal_0f8477896649e7b0b01ed839c0657626769ed52a8958e8ebfc26f4df2fb2dfbd_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  177 => 50,  171 => 49,  167 => 48,  161 => 47,  155 => 46,  151 => 44,  143 => 41,  137 => 40,  132 => 38,  129 => 37,  126 => 36,  118 => 34,  115 => 33,  107 => 31,  104 => 30,  96 => 28,  94 => 27,  88 => 26,  80 => 23,  74 => 22,  68 => 21,  62 => 20,  57 => 18,  49 => 13,  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {# {% extends '::base.html.twig' %} #}*/
/* */
/* {% block menu %}*/
/* */
/*   <nav class="navbar navbar-inverse">*/
/*   <div class="container-fluid">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="{{ path('intranet_homepage')}}">WebCuisine</a>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse" id="myNavbar">*/
/*       <ul class="nav navbar-nav">*/
/*         <li class="dropdown">*/
/*           <a class="dropdown-toggle" data-toggle="dropdown">{% trans %}Forms {% endtrans %}<span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             <li><a href="{{ path('intranet_formHours')}}">{% trans %}Overtime Hours{% endtrans %}</a></li>*/
/*             <li><a href="{{ path('intranet_formVacations')}}">{% trans %}Vacation{% endtrans %}</a></li>*/
/*             <li><a href="{{ path('intranet_formExpenses')}}">{% trans %}Expenses{% endtrans %}</a></li>*/
/*             <li><a href="{{ path('intranet_formRequest')}}">{% trans %}Request Business Trip{% endtrans %}</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li><a href="{{ path('intranet_bookRoom')}}">{% trans %}Book a room{% endtrans %}</a></li>*/
/*       {% if user.rol=="internship"%}*/
/*               <li><a href='{{ path('intranet_tasks')}}'>{% trans %}Task {% endtrans %}-<i> internships</i></a></li>"*/
/*       {% endif %}*/
/*       {% if user.rol=="admin"%}*/
/*               <li><a href='{{ path('intranet_userManagement')}}'>{% trans %}User Management {% endtrans %}-<i> admins</i></a></li>*/
/*       {% endif %}*/
/*       {% if user.rol=="buo"%}*/
/*               <li><a href='{{ path('intranet_news')}}'{% trans %}>News Feed {% endtrans %}-<i> BÜOs</i></a></li>*/
/*       {% endif %}*/
/*       {% if user.rol=="buo"%}*/
/*           <li class="dropdown">*/
/*             <a class="dropdown-toggle" data-toggle="dropdown">{% trans %}Form Management {% endtrans %}-<i> BÜOs</i><span class="caret"></span></a>*/
/*             <ul class="dropdown-menu">*/
/*               <li><a href='{{ path('intranet_incomingForms')}}'>{% trans %}Incoming Forms{% endtrans %}</a></li>*/
/*               <li><a href="{{ path('intranet_oldForms')}}">{% trans %}Old Forms{% endtrans %}</a></li>*/
/*             </ul>*/
/*           </li>{% endif %}*/
/*       </ul>*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*       <li><a href="{{ path('intranet_testBD')}}"><b>{% trans %}BBDD{% endtrans %}</b></a></li>*/
/*         <li><a href="{{ path('intranet_translation')}}"><b>{% trans %}Lang{% endtrans %}</b></a></li>*/
/*         <li><a href="#"><b>{% trans %}Hello{% endtrans %} <?php echo $_SESSION["usuario"]; ?></b></a></li>*/
/*         <li><a href="{{ path('intranet_settings')}}"><span class="glyphicon glyphicon-user"></span> {% trans %}Settings{% endtrans %}</a></li>*/
/*         <li><a href="{{ path('intranet_logout')}}"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   </nav>*/
/*   {% endblock %}*/
/* */
