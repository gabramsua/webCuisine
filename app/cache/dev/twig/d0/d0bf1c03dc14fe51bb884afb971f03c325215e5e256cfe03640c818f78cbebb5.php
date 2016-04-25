<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_20d549f5dd67252a66f91a128fccd88adae3239ead7c11b1203c5bd6c4063176 extends Twig_Template
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
        $__internal_7e2e12f891295c702c2a71570573cd85ddb29abbb79bb2120ef4a4e90f516d7f = $this->env->getExtension("native_profiler");
        $__internal_7e2e12f891295c702c2a71570573cd85ddb29abbb79bb2120ef4a4e90f516d7f->enter($__internal_7e2e12f891295c702c2a71570573cd85ddb29abbb79bb2120ef4a4e90f516d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7e2e12f891295c702c2a71570573cd85ddb29abbb79bb2120ef4a4e90f516d7f->leave($__internal_7e2e12f891295c702c2a71570573cd85ddb29abbb79bb2120ef4a4e90f516d7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
