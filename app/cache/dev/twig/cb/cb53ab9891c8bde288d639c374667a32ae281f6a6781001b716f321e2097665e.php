<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_08451f6c563cf312393a6010b161552ce73227daeec817157022e75b1b9de86b extends Twig_Template
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
        $__internal_455b054393de512b8a1b9704467ac3e2512f08cd92c7564c97d9cdc393e250ef = $this->env->getExtension("native_profiler");
        $__internal_455b054393de512b8a1b9704467ac3e2512f08cd92c7564c97d9cdc393e250ef->enter($__internal_455b054393de512b8a1b9704467ac3e2512f08cd92c7564c97d9cdc393e250ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_455b054393de512b8a1b9704467ac3e2512f08cd92c7564c97d9cdc393e250ef->leave($__internal_455b054393de512b8a1b9704467ac3e2512f08cd92c7564c97d9cdc393e250ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
