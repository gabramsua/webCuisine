<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_dccd4c5dee34becc78a8542c68b425927399fe32ccdb1a3b2312b79b96389f71 extends Twig_Template
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
        $__internal_7c4ccc97ab490e378e40f48a637499448128c8697a8db624b9bbc768123bb119 = $this->env->getExtension("native_profiler");
        $__internal_7c4ccc97ab490e378e40f48a637499448128c8697a8db624b9bbc768123bb119->enter($__internal_7c4ccc97ab490e378e40f48a637499448128c8697a8db624b9bbc768123bb119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7c4ccc97ab490e378e40f48a637499448128c8697a8db624b9bbc768123bb119->leave($__internal_7c4ccc97ab490e378e40f48a637499448128c8697a8db624b9bbc768123bb119_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
