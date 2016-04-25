<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7f4e0cc6ef98877928ac278486e041c6f91bdcc6b05e089e332281281998293d extends Twig_Template
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
        $__internal_b57716abda126147df458abc723cb38749dabbe42de8a733d4924bf431d060b5 = $this->env->getExtension("native_profiler");
        $__internal_b57716abda126147df458abc723cb38749dabbe42de8a733d4924bf431d060b5->enter($__internal_b57716abda126147df458abc723cb38749dabbe42de8a733d4924bf431d060b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b57716abda126147df458abc723cb38749dabbe42de8a733d4924bf431d060b5->leave($__internal_b57716abda126147df458abc723cb38749dabbe42de8a733d4924bf431d060b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
