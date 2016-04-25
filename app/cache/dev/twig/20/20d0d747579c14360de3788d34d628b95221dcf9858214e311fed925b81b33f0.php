<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d156be55200f8818b851099337403b6193fa0ed58fe7f1567d1ab84be28e37b7 extends Twig_Template
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
        $__internal_15692f0268750a823edd66b0700211b00330fde22138ad234eaa0cfd4815e570 = $this->env->getExtension("native_profiler");
        $__internal_15692f0268750a823edd66b0700211b00330fde22138ad234eaa0cfd4815e570->enter($__internal_15692f0268750a823edd66b0700211b00330fde22138ad234eaa0cfd4815e570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_15692f0268750a823edd66b0700211b00330fde22138ad234eaa0cfd4815e570->leave($__internal_15692f0268750a823edd66b0700211b00330fde22138ad234eaa0cfd4815e570_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
