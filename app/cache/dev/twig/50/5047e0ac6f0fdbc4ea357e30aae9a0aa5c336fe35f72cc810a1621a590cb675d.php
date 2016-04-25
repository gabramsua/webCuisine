<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_db2d00632a82e4f55b4c41647d19ce0a960639094a44c7c1df019ce904afea6a extends Twig_Template
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
        $__internal_021773fc25c4078054e0d3768a537225215e029d32ba4656aa59f4b111c76347 = $this->env->getExtension("native_profiler");
        $__internal_021773fc25c4078054e0d3768a537225215e029d32ba4656aa59f4b111c76347->enter($__internal_021773fc25c4078054e0d3768a537225215e029d32ba4656aa59f4b111c76347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_021773fc25c4078054e0d3768a537225215e029d32ba4656aa59f4b111c76347->leave($__internal_021773fc25c4078054e0d3768a537225215e029d32ba4656aa59f4b111c76347_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
