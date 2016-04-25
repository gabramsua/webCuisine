<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9ef903a51bc0520848d5db578ec22b0be499899ef8b39060056e98ec8ae4fe7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d538ffbb261915336d01a81ad4166ee718538de9b6bade28ace7b2e5d060ac81 = $this->env->getExtension("native_profiler");
        $__internal_d538ffbb261915336d01a81ad4166ee718538de9b6bade28ace7b2e5d060ac81->enter($__internal_d538ffbb261915336d01a81ad4166ee718538de9b6bade28ace7b2e5d060ac81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d538ffbb261915336d01a81ad4166ee718538de9b6bade28ace7b2e5d060ac81->leave($__internal_d538ffbb261915336d01a81ad4166ee718538de9b6bade28ace7b2e5d060ac81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
