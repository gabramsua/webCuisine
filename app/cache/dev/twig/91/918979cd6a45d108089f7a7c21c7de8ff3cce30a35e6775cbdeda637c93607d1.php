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
        $__internal_d29d8a53c39ba502a7e6e03ee2edb99a461477591862f2031b24467a9a4d73d0 = $this->env->getExtension("native_profiler");
        $__internal_d29d8a53c39ba502a7e6e03ee2edb99a461477591862f2031b24467a9a4d73d0->enter($__internal_d29d8a53c39ba502a7e6e03ee2edb99a461477591862f2031b24467a9a4d73d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('menu', $context, $blocks);
        
        $__internal_d29d8a53c39ba502a7e6e03ee2edb99a461477591862f2031b24467a9a4d73d0->leave($__internal_d29d8a53c39ba502a7e6e03ee2edb99a461477591862f2031b24467a9a4d73d0_prof);

    }

    public function block_menu($context, array $blocks = array())
    {
        $__internal_ebcccbeb18cfa5be88801be92b8e8ac454dfb5014fd2105430801a133177b5c6 = $this->env->getExtension("native_profiler");
        $__internal_ebcccbeb18cfa5be88801be92b8e8ac454dfb5014fd2105430801a133177b5c6->enter($__internal_ebcccbeb18cfa5be88801be92b8e8ac454dfb5014fd2105430801a133177b5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 5
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
            // line 14
            echo $this->env->getExtension('routing')->getPath("intranet_homepage");
            echo "\">WebCuisine</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
        <li class=\"dropdown\">
          <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 19
            echo $this->env->getExtension('translator')->getTranslator()->trans("Forms", array(), "messages");
            echo "<span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("intranet_formHours");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Overtime Hours", array(), "messages");
            echo "</a></li>
            <li><a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("intranet_formVacations");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Vacation", array(), "messages");
            echo "</a></li>
            <li><a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("intranet_formExpenses");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Expenses", array(), "messages");
            echo "</a></li>
            <li><a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("intranet_formRequest");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Request Business Trip", array(), "messages");
            echo "</a></li>
          </ul>
        </li>
        <li><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("intranet_bookRoom");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Book a room", array(), "messages");
            echo "</a></li>
      ";
            // line 28
            if (($this->getAttribute($context["me"], "rol", array()) == "internship")) {
                // line 29
                echo "              <li><a href='";
                echo $this->env->getExtension('routing')->getPath("intranet_tasks");
                echo "'>";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Task", array(), "messages");
                echo "-<i> internships</i></a></li>\"
      ";
            }
            // line 31
            echo "      ";
            if (($this->getAttribute($context["me"], "rol", array()) == "admin")) {
                // line 32
                echo "              <li><a href='";
                echo $this->env->getExtension('routing')->getPath("intranet_userManagement");
                echo "'>";
                echo $this->env->getExtension('translator')->getTranslator()->trans("User Management", array(), "messages");
                echo "-<i> admins</i></a></li>
      ";
            }
            // line 34
            echo "      ";
            if (($this->getAttribute($context["me"], "rol", array()) == "buo")) {
                // line 35
                echo "              <li><a href='";
                echo $this->env->getExtension('routing')->getPath("intranet_news");
                echo "'";
                echo $this->env->getExtension('translator')->getTranslator()->trans(">News Feed", array(), "messages");
                echo "-<i> BÜOs</i></a></li>
      ";
            }
            // line 37
            echo "      ";
            if (($this->getAttribute($context["me"], "rol", array()) == "buo")) {
                // line 38
                echo "          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 39
                echo $this->env->getExtension('translator')->getTranslator()->trans("Form Management", array(), "messages");
                echo "-<i> BÜOs</i><span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href='";
                // line 41
                echo $this->env->getExtension('routing')->getPath("intranet_incomingForms");
                echo "'>";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Incoming Forms", array(), "messages");
                echo "</a></li>
              <li><a href=\"";
                // line 42
                echo $this->env->getExtension('routing')->getPath("intranet_oldForms");
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Old Forms", array(), "messages");
                echo "</a></li>
            </ul>
          </li>";
            }
            // line 45
            echo "      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
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
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "  ";
        
        $__internal_ebcccbeb18cfa5be88801be92b8e8ac454dfb5014fd2105430801a133177b5c6->leave($__internal_ebcccbeb18cfa5be88801be92b8e8ac454dfb5014fd2105430801a133177b5c6_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  187 => 56,  175 => 50,  169 => 49,  165 => 48,  159 => 47,  155 => 45,  147 => 42,  141 => 41,  136 => 39,  133 => 38,  130 => 37,  122 => 35,  119 => 34,  111 => 32,  108 => 31,  100 => 29,  98 => 28,  92 => 27,  84 => 24,  78 => 23,  72 => 22,  66 => 21,  61 => 19,  53 => 14,  42 => 5,  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {# {% extends '::base.html.twig' %} #}*/
/* */
/* {% block menu %}*/
/* {% for me in user %}*/
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
/*       {% if me.rol=="internship"%}*/
/*               <li><a href='{{ path('intranet_tasks')}}'>{% trans %}Task {% endtrans %}-<i> internships</i></a></li>"*/
/*       {% endif %}*/
/*       {% if me.rol=="admin"%}*/
/*               <li><a href='{{ path('intranet_userManagement')}}'>{% trans %}User Management {% endtrans %}-<i> admins</i></a></li>*/
/*       {% endif %}*/
/*       {% if me.rol=="buo"%}*/
/*               <li><a href='{{ path('intranet_news')}}'{% trans %}>News Feed {% endtrans %}-<i> BÜOs</i></a></li>*/
/*       {% endif %}*/
/*       {% if me.rol=="buo"%}*/
/*           <li class="dropdown">*/
/*             <a class="dropdown-toggle" data-toggle="dropdown">{% trans %}Form Management {% endtrans %}-<i> BÜOs</i><span class="caret"></span></a>*/
/*             <ul class="dropdown-menu">*/
/*               <li><a href='{{ path('intranet_incomingForms')}}'>{% trans %}Incoming Forms{% endtrans %}</a></li>*/
/*               <li><a href="{{ path('intranet_oldForms')}}">{% trans %}Old Forms{% endtrans %}</a></li>*/
/*             </ul>*/
/*           </li>{% endif %}*/
/*       </ul>*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li><a href="{{ path('intranet_translation')}}"><b>{% trans %}Lang{% endtrans %}</b></a></li>*/
/*         <li><a href="#"><b>{% trans %}Hello{% endtrans %} <?php echo $_SESSION["usuario"]; ?></b></a></li>*/
/*         <li><a href="{{ path('intranet_settings')}}"><span class="glyphicon glyphicon-user"></span> {% trans %}Settings{% endtrans %}</a></li>*/
/*         <li><a href="{{ path('intranet_logout')}}"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   </nav>*/
/*   {% endfor %}*/
/*   {% endblock %}*/
/* */
