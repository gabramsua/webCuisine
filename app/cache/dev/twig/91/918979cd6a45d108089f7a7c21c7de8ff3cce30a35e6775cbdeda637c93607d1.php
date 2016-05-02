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
        $__internal_3bce8d979462ed1cb1bb7ae89e2a0750084dabd784a8c80f9072dcd536dcac0d = $this->env->getExtension("native_profiler");
        $__internal_3bce8d979462ed1cb1bb7ae89e2a0750084dabd784a8c80f9072dcd536dcac0d->enter($__internal_3bce8d979462ed1cb1bb7ae89e2a0750084dabd784a8c80f9072dcd536dcac0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('menu', $context, $blocks);
        
        $__internal_3bce8d979462ed1cb1bb7ae89e2a0750084dabd784a8c80f9072dcd536dcac0d->leave($__internal_3bce8d979462ed1cb1bb7ae89e2a0750084dabd784a8c80f9072dcd536dcac0d_prof);

    }

    public function block_menu($context, array $blocks = array())
    {
        $__internal_cbf6934c27e48ff2d61800bc9f829d6c171eb893eeb873a38a120e4fa6983619 = $this->env->getExtension("native_profiler");
        $__internal_cbf6934c27e48ff2d61800bc9f829d6c171eb893eeb873a38a120e4fa6983619->enter($__internal_cbf6934c27e48ff2d61800bc9f829d6c171eb893eeb873a38a120e4fa6983619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        <!-- BOOKING ROOM PART
            <li><a href=\"";
        // line 27
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Book a room", array(), "messages");
        echo "</a></li>
        -->
      ";
        // line 29
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "internship")) {
            // line 30
            echo "              <li><a href='";
            echo $this->env->getExtension('routing')->getPath("intranet_tasks");
            echo "'>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Task", array(), "messages");
            echo "-<i> internships</i></a></li>\"
      ";
        }
        // line 32
        echo "      ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "admin")) {
            // line 33
            echo "              <li><a href='";
            echo $this->env->getExtension('routing')->getPath("intranet_userManagement");
            echo "'>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("User Management", array(), "messages");
            echo "-<i> admins</i></a></li>
      ";
        }
        // line 35
        echo "      ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "buo")) {
            // line 36
            echo "              <li><a href='";
            echo $this->env->getExtension('routing')->getPath("intranet_news");
            echo "'";
            echo $this->env->getExtension('translator')->getTranslator()->trans(">News Feed", array(), "messages");
            echo "-<i> BÜOs</i></a></li>
      ";
        }
        // line 38
        echo "      ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "buo")) {
            // line 39
            echo "          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 40
            echo $this->env->getExtension('translator')->getTranslator()->trans("Form Management", array(), "messages");
            echo "-<i> BÜOs</i><span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href='";
            // line 42
            echo $this->env->getExtension('routing')->getPath("intranet_incomingForms");
            echo "'>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Incoming Forms", array(), "messages");
            echo "</a></li>
              <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("intranet_oldForms");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Old Forms", array(), "messages");
            echo "</a></li>
            </ul>
          </li>";
        }
        // line 46
        echo "      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
      <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("intranet_testBD");
        echo "\"><b>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("BBDD", array(), "messages");
        echo "</b></a></li>
        <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("intranet_translation");
        echo "\"><b>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Lang", array(), "messages");
        echo "</b></a></li>
        <li><a href=\"#\"><b>";
        // line 50
        echo $this->env->getExtension('translator')->getTranslator()->trans("Hello", array(), "messages");
        echo " <?php echo \$_SESSION[\"usuario\"]; ?></b></a></li>
        <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("intranet_settings");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Settings", array(), "messages");
        echo "</a></li>
        <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("intranet_logout");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Log out</a></li>
      </ul>
    </div>
  </div>
  </nav>
  ";
        
        $__internal_cbf6934c27e48ff2d61800bc9f829d6c171eb893eeb873a38a120e4fa6983619->leave($__internal_cbf6934c27e48ff2d61800bc9f829d6c171eb893eeb873a38a120e4fa6983619_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  178 => 52,  172 => 51,  168 => 50,  162 => 49,  156 => 48,  152 => 46,  144 => 43,  138 => 42,  133 => 40,  130 => 39,  127 => 38,  119 => 36,  116 => 35,  108 => 33,  105 => 32,  97 => 30,  95 => 29,  89 => 27,  80 => 23,  74 => 22,  68 => 21,  62 => 20,  57 => 18,  49 => 13,  38 => 4,  26 => 3,  23 => 2,);
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
/*         <!-- BOOKING ROOM PART*/
/*             <li><a href="{# path('intranet_bookRoom')#}">{% trans %}Book a room{% endtrans %}</a></li>*/
/*         -->*/
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
