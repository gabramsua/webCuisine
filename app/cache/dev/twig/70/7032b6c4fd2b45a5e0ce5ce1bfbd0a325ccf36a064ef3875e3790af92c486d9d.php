<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_91da191a53ddb8217d7c4d8fff0518f8a3801260d119bda1434ca947b6933fd3 extends Twig_Template
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
        $__internal_81c16792dff3410269f8a779cfc877d833a722fd98ef051bf80e916215d8d56d = $this->env->getExtension("native_profiler");
        $__internal_81c16792dff3410269f8a779cfc877d833a722fd98ef051bf80e916215d8d56d->enter($__internal_81c16792dff3410269f8a779cfc877d833a722fd98ef051bf80e916215d8d56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_81c16792dff3410269f8a779cfc877d833a722fd98ef051bf80e916215d8d56d->leave($__internal_81c16792dff3410269f8a779cfc877d833a722fd98ef051bf80e916215d8d56d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
