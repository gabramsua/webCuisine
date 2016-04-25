<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_137d387cb9d20f553c8a58bc5b1888f074193ed2f56c3aa792ad72af61e9ab23 extends Twig_Template
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
        $__internal_0caee842eb3a78a0c7940b673bb1883a52032faf5bf64ac76fa82eae6aed1b10 = $this->env->getExtension("native_profiler");
        $__internal_0caee842eb3a78a0c7940b673bb1883a52032faf5bf64ac76fa82eae6aed1b10->enter($__internal_0caee842eb3a78a0c7940b673bb1883a52032faf5bf64ac76fa82eae6aed1b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0caee842eb3a78a0c7940b673bb1883a52032faf5bf64ac76fa82eae6aed1b10->leave($__internal_0caee842eb3a78a0c7940b673bb1883a52032faf5bf64ac76fa82eae6aed1b10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
