<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4bb9d9d7ffb80971d033869da9e14d0607ec429fe1b03f5222f5b51f7cb168cd extends Twig_Template
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
        $__internal_151181558de92724a362feb88a9e0f863460f45ba10be160a9b5bda5599071ed = $this->env->getExtension("native_profiler");
        $__internal_151181558de92724a362feb88a9e0f863460f45ba10be160a9b5bda5599071ed->enter($__internal_151181558de92724a362feb88a9e0f863460f45ba10be160a9b5bda5599071ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_151181558de92724a362feb88a9e0f863460f45ba10be160a9b5bda5599071ed->leave($__internal_151181558de92724a362feb88a9e0f863460f45ba10be160a9b5bda5599071ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
