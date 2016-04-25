<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_08ad588af793a015e3ddeac954cf5897901ed1a7a805f3d94f7b62ff559e696e extends Twig_Template
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
        $__internal_1aa28d04449cbc3fbf5495fca85072f7332fb72963001a29be89895e1bda2ed3 = $this->env->getExtension("native_profiler");
        $__internal_1aa28d04449cbc3fbf5495fca85072f7332fb72963001a29be89895e1bda2ed3->enter($__internal_1aa28d04449cbc3fbf5495fca85072f7332fb72963001a29be89895e1bda2ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1aa28d04449cbc3fbf5495fca85072f7332fb72963001a29be89895e1bda2ed3->leave($__internal_1aa28d04449cbc3fbf5495fca85072f7332fb72963001a29be89895e1bda2ed3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
