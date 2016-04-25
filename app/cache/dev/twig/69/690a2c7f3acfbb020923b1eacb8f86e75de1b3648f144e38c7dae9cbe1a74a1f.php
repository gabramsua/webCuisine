<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_250729828389bec9c3653e26950bc3db454fd474f90a92deb286744ec997df7f extends Twig_Template
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
        $__internal_f5f0b13289ea32be4cdd78b98b0b344d9912106fb113100577f3e1f42db12513 = $this->env->getExtension("native_profiler");
        $__internal_f5f0b13289ea32be4cdd78b98b0b344d9912106fb113100577f3e1f42db12513->enter($__internal_f5f0b13289ea32be4cdd78b98b0b344d9912106fb113100577f3e1f42db12513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f5f0b13289ea32be4cdd78b98b0b344d9912106fb113100577f3e1f42db12513->leave($__internal_f5f0b13289ea32be4cdd78b98b0b344d9912106fb113100577f3e1f42db12513_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
