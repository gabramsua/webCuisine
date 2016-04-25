<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_564609eef009a393d67afaba9e95ad12ce0163f1d8f02a982d5764f9a087a52b extends Twig_Template
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
        $__internal_902f6a6099d016d31dddc4db1b983437a4497b8b0d965f171b3eb8ea67adf175 = $this->env->getExtension("native_profiler");
        $__internal_902f6a6099d016d31dddc4db1b983437a4497b8b0d965f171b3eb8ea67adf175->enter($__internal_902f6a6099d016d31dddc4db1b983437a4497b8b0d965f171b3eb8ea67adf175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_902f6a6099d016d31dddc4db1b983437a4497b8b0d965f171b3eb8ea67adf175->leave($__internal_902f6a6099d016d31dddc4db1b983437a4497b8b0d965f171b3eb8ea67adf175_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
