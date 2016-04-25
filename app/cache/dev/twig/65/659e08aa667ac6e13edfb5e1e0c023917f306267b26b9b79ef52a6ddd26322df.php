<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0a47400e81f013521d673c3c4ebe54326dbdfc2d085cc90699ffdacd0c55ecd8 extends Twig_Template
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
        $__internal_fc3d116eb85dc4dbb5a47df917b00b760c57eb7b816f9aa2040b0e9073873769 = $this->env->getExtension("native_profiler");
        $__internal_fc3d116eb85dc4dbb5a47df917b00b760c57eb7b816f9aa2040b0e9073873769->enter($__internal_fc3d116eb85dc4dbb5a47df917b00b760c57eb7b816f9aa2040b0e9073873769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_fc3d116eb85dc4dbb5a47df917b00b760c57eb7b816f9aa2040b0e9073873769->leave($__internal_fc3d116eb85dc4dbb5a47df917b00b760c57eb7b816f9aa2040b0e9073873769_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
