<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1a5a5cee0d3f6bc843c829e4cdb3a44dca266ea95f6c878f7fb1c012c8f974b0 extends Twig_Template
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
        $__internal_9b84c24549ee42f42f1c02ec7dbd699b0b890df90f7d072dd908c429af7e3806 = $this->env->getExtension("native_profiler");
        $__internal_9b84c24549ee42f42f1c02ec7dbd699b0b890df90f7d072dd908c429af7e3806->enter($__internal_9b84c24549ee42f42f1c02ec7dbd699b0b890df90f7d072dd908c429af7e3806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9b84c24549ee42f42f1c02ec7dbd699b0b890df90f7d072dd908c429af7e3806->leave($__internal_9b84c24549ee42f42f1c02ec7dbd699b0b890df90f7d072dd908c429af7e3806_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
