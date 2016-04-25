<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ef0a1e62dc27180fdbcb5f8e5d9a9da1da9c6d6213eeb21af4ac1e87af2d8496 extends Twig_Template
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
        $__internal_5a4379d5ccc4899d80635c5cea3f369cfa4013e33fb77c111e9b43ed2707e1ef = $this->env->getExtension("native_profiler");
        $__internal_5a4379d5ccc4899d80635c5cea3f369cfa4013e33fb77c111e9b43ed2707e1ef->enter($__internal_5a4379d5ccc4899d80635c5cea3f369cfa4013e33fb77c111e9b43ed2707e1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5a4379d5ccc4899d80635c5cea3f369cfa4013e33fb77c111e9b43ed2707e1ef->leave($__internal_5a4379d5ccc4899d80635c5cea3f369cfa4013e33fb77c111e9b43ed2707e1ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
