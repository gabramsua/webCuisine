<?php

/* ::menu.html.twig */
class __TwigTemplate_d6d713f26b57dff2b511328a8cd9c45a1314eee6e8267bc884aa0fac247688eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::menu.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d31fdfbe22fa01e853c6039cc75e6f80bcaeb969ecbef42d847f527531a60a6 = $this->env->getExtension("native_profiler");
        $__internal_1d31fdfbe22fa01e853c6039cc75e6f80bcaeb969ecbef42d847f527531a60a6->enter($__internal_1d31fdfbe22fa01e853c6039cc75e6f80bcaeb969ecbef42d847f527531a60a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d31fdfbe22fa01e853c6039cc75e6f80bcaeb969ecbef42d847f527531a60a6->leave($__internal_1d31fdfbe22fa01e853c6039cc75e6f80bcaeb969ecbef42d847f527531a60a6_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9a733fd074b2f17c5b1d88259865f67ce110bccbb1fe22535907b450126dbb9 = $this->env->getExtension("native_profiler");
        $__internal_c9a733fd074b2f17c5b1d88259865f67ce110bccbb1fe22535907b450126dbb9->enter($__internal_c9a733fd074b2f17c5b1d88259865f67ce110bccbb1fe22535907b450126dbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "  <nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("intranet_homepage");
        echo "\">WebCuisine</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
        <li class=\"dropdown\">
          <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("Forms", array(), "messages");
        echo "<span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("intranet_formHours");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Overtime Hours", array(), "messages");
        echo "</a></li>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("intranet_formVacations");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Vacation", array(), "messages");
        echo "</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("intranet_formExpenses");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Expenses", array(), "messages");
        echo "</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("intranet_formRequest");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Request Business Trip", array(), "messages");
        echo "</a></li>
          </ul>
        </li>
        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("intranet_bookRoom");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Book a room", array(), "messages");
        echo "</a></li>
      ";
        // line 27
        echo "              <li><a href='";
        echo $this->env->getExtension('routing')->getPath("intranet_tasks");
        echo "'>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Task", array(), "messages");
        echo "-<i> internships</i></a></li>\"
      ";
        // line 29
        echo "      ";
        // line 30
        echo "              <li><a href='";
        echo $this->env->getExtension('routing')->getPath("intranet_userManagement");
        echo "'>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("User Management", array(), "messages");
        echo "-<i> admins</i></a></li>
      ";
        // line 32
        echo "      ";
        // line 33
        echo "              <li><a href='";
        echo $this->env->getExtension('routing')->getPath("intranet_news");
        echo "'";
        echo $this->env->getExtension('translator')->getTranslator()->trans(">News Feed", array(), "messages");
        echo "-<i> BÜOs</i></a></li>
      ";
        // line 35
        echo "      ";
        // line 36
        echo "          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 37
        echo $this->env->getExtension('translator')->getTranslator()->trans("Form Management", array(), "messages");
        echo "-<i> BÜOs</i><span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href='";
        // line 39
        echo $this->env->getExtension('routing')->getPath("intranet_incomingForms");
        echo "'>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Incoming Forms", array(), "messages");
        echo "</a></li>
              <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("intranet_oldForms");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Old Forms", array(), "messages");
        echo "</a></li>
            </ul>
          </li>";
        // line 43
        echo "      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("intranet_translation");
        echo "\"><b>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Lang", array(), "messages");
        echo "</b></a></li>
        <li><a href=\"#\"><b>";
        // line 46
        echo $this->env->getExtension('translator')->getTranslator()->trans("Hello", array(), "messages");
        echo " <?php echo \$_SESSION[\"usuario\"]; ?></b></a></li>
        <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("intranet_settings");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Settings", array(), "messages");
        echo "</a></li>
        <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("intranet_logout");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
        ´<!--<li>Username: ";
        // line 49
        echo "</li>-->
      </ul>
    </div>
  </div>
  </nav>
  ";
        
        $__internal_c9a733fd074b2f17c5b1d88259865f67ce110bccbb1fe22535907b450126dbb9->leave($__internal_c9a733fd074b2f17c5b1d88259865f67ce110bccbb1fe22535907b450126dbb9_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 49,  163 => 48,  157 => 47,  153 => 46,  147 => 45,  143 => 43,  136 => 40,  130 => 39,  125 => 37,  122 => 36,  120 => 35,  113 => 33,  111 => 32,  104 => 30,  102 => 29,  95 => 27,  89 => 25,  81 => 22,  75 => 21,  69 => 20,  63 => 19,  58 => 17,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/*   {% block menu %}*/
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
/*       {# if user.rol=="internship"#}*/
/*               <li><a href='{{ path('intranet_tasks')}}'>{% trans %}Task {% endtrans %}-<i> internships</i></a></li>"*/
/*       {# endif #}*/
/*       {# if user.rol=="admin"#}*/
/*               <li><a href='{{ path('intranet_userManagement')}}'>{% trans %}User Management {% endtrans %}-<i> admins</i></a></li>*/
/*       {# endif #}*/
/*       {# if user.rol=="buo"#}*/
/*               <li><a href='{{ path('intranet_news')}}'{% trans %}>News Feed {% endtrans %}-<i> BÜOs</i></a></li>*/
/*       {# endif #}*/
/*       {# if user.rol=="buo"#}*/
/*           <li class="dropdown">*/
/*             <a class="dropdown-toggle" data-toggle="dropdown">{% trans %}Form Management {% endtrans %}-<i> BÜOs</i><span class="caret"></span></a>*/
/*             <ul class="dropdown-menu">*/
/*               <li><a href='{{ path('intranet_incomingForms')}}'>{% trans %}Incoming Forms{% endtrans %}</a></li>*/
/*               <li><a href="{{ path('intranet_oldForms')}}">{% trans %}Old Forms{% endtrans %}</a></li>*/
/*             </ul>*/
/*           </li>{# endif #}*/
/*       </ul>*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li><a href="{{ path('intranet_translation')}}"><b>{% trans %}Lang{% endtrans %}</b></a></li>*/
/*         <li><a href="#"><b>{% trans %}Hello{% endtrans %} <?php echo $_SESSION["usuario"]; ?></b></a></li>*/
/*         <li><a href="{{ path('intranet_settings')}}"><span class="glyphicon glyphicon-user"></span> {% trans %}Settings{% endtrans %}</a></li>*/
/*         <li><a href="{{ path('intranet_logout')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/
/*         ´<!--<li>Username: {# app.user.name #}</li>-->*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   </nav>*/
/*   {% endblock %}*/
/* */
