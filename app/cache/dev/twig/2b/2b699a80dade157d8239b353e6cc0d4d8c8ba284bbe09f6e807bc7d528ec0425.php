<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_9eb83ac139f13b39f6c8edd0c987b56bdfe30c1a1073fa5a03417cf09da65f7c extends Twig_Template
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
        $__internal_2e44c362f671c68c68ca1a5d14ac0a74b97533416643c79137837084842135a5 = $this->env->getExtension("native_profiler");
        $__internal_2e44c362f671c68c68ca1a5d14ac0a74b97533416643c79137837084842135a5->enter($__internal_2e44c362f671c68c68ca1a5d14ac0a74b97533416643c79137837084842135a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2e44c362f671c68c68ca1a5d14ac0a74b97533416643c79137837084842135a5->leave($__internal_2e44c362f671c68c68ca1a5d14ac0a74b97533416643c79137837084842135a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
