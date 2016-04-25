<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b26c01ab80f3674654e7699dde20be3b64f3ec6d22d196159878e66cf2328171 extends Twig_Template
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
        $__internal_236def02978d76d89bb7c1fa30049c32f48497421abc87183f963d67bdb94d4a = $this->env->getExtension("native_profiler");
        $__internal_236def02978d76d89bb7c1fa30049c32f48497421abc87183f963d67bdb94d4a->enter($__internal_236def02978d76d89bb7c1fa30049c32f48497421abc87183f963d67bdb94d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_236def02978d76d89bb7c1fa30049c32f48497421abc87183f963d67bdb94d4a->leave($__internal_236def02978d76d89bb7c1fa30049c32f48497421abc87183f963d67bdb94d4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
