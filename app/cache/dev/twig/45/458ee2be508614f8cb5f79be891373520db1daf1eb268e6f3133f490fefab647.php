<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_178a1ecdcf097168bcdf03fe6ce69c748ab4a15775c3255b1fca941488158fe4 extends Twig_Template
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
        $__internal_429684a1c3d5238997c9984048b98852a3b3e984783439a9b599bcabf50373cc = $this->env->getExtension("native_profiler");
        $__internal_429684a1c3d5238997c9984048b98852a3b3e984783439a9b599bcabf50373cc->enter($__internal_429684a1c3d5238997c9984048b98852a3b3e984783439a9b599bcabf50373cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_429684a1c3d5238997c9984048b98852a3b3e984783439a9b599bcabf50373cc->leave($__internal_429684a1c3d5238997c9984048b98852a3b3e984783439a9b599bcabf50373cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
