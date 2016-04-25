<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a447e19bca3e7d5da7e60a899bbbe1811eda95350e412392800aa30a9fe642a3 extends Twig_Template
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
        $__internal_46adf6898ff294cf137bae6b33c3b65eb982e7fc1d85eb74f9ea5bd785120b79 = $this->env->getExtension("native_profiler");
        $__internal_46adf6898ff294cf137bae6b33c3b65eb982e7fc1d85eb74f9ea5bd785120b79->enter($__internal_46adf6898ff294cf137bae6b33c3b65eb982e7fc1d85eb74f9ea5bd785120b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_46adf6898ff294cf137bae6b33c3b65eb982e7fc1d85eb74f9ea5bd785120b79->leave($__internal_46adf6898ff294cf137bae6b33c3b65eb982e7fc1d85eb74f9ea5bd785120b79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
