<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_867380de43db17ad65547b8cfa7fb07bc6d2f061d2d82cabdc64cd85b86e55eb extends Twig_Template
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
        $__internal_bc711824927e70d5a7d32abe096a642cfb126d87618326cb3e021dea2e561d2f = $this->env->getExtension("native_profiler");
        $__internal_bc711824927e70d5a7d32abe096a642cfb126d87618326cb3e021dea2e561d2f->enter($__internal_bc711824927e70d5a7d32abe096a642cfb126d87618326cb3e021dea2e561d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bc711824927e70d5a7d32abe096a642cfb126d87618326cb3e021dea2e561d2f->leave($__internal_bc711824927e70d5a7d32abe096a642cfb126d87618326cb3e021dea2e561d2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
