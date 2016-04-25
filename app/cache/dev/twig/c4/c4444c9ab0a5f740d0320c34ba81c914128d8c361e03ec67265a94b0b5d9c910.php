<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_27f7a1939b7c9f07e1a4f23a821f0a03a91f2823800c6205606b6af81df22f9d extends Twig_Template
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
        $__internal_134f1a8eaaff48eb8b0f368a2df75ba2b2a0a2d533ac0b99fff90da90926f20e = $this->env->getExtension("native_profiler");
        $__internal_134f1a8eaaff48eb8b0f368a2df75ba2b2a0a2d533ac0b99fff90da90926f20e->enter($__internal_134f1a8eaaff48eb8b0f368a2df75ba2b2a0a2d533ac0b99fff90da90926f20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_134f1a8eaaff48eb8b0f368a2df75ba2b2a0a2d533ac0b99fff90da90926f20e->leave($__internal_134f1a8eaaff48eb8b0f368a2df75ba2b2a0a2d533ac0b99fff90da90926f20e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
