<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7cd6bee6a65ddf5d9e18784e0c095167e7387f94c6e78e90cd17b2e37cb32a48 extends Twig_Template
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
        $__internal_778f74f6af481c3bd4f0c9311280632ab0bde2fbfb1bb928ff0dcc5e53d57dcc = $this->env->getExtension("native_profiler");
        $__internal_778f74f6af481c3bd4f0c9311280632ab0bde2fbfb1bb928ff0dcc5e53d57dcc->enter($__internal_778f74f6af481c3bd4f0c9311280632ab0bde2fbfb1bb928ff0dcc5e53d57dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_778f74f6af481c3bd4f0c9311280632ab0bde2fbfb1bb928ff0dcc5e53d57dcc->leave($__internal_778f74f6af481c3bd4f0c9311280632ab0bde2fbfb1bb928ff0dcc5e53d57dcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
