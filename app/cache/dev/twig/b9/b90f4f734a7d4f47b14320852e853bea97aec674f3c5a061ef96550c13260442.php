<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9fde4f166d9d6be30358296d9faada7f4a8496c9fdb36303b29f9acb54ffcbf6 extends Twig_Template
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
        $__internal_0276ff227856099ff66970d0b6f22eb04cdb23a42909e0623734fe430992618f = $this->env->getExtension("native_profiler");
        $__internal_0276ff227856099ff66970d0b6f22eb04cdb23a42909e0623734fe430992618f->enter($__internal_0276ff227856099ff66970d0b6f22eb04cdb23a42909e0623734fe430992618f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0276ff227856099ff66970d0b6f22eb04cdb23a42909e0623734fe430992618f->leave($__internal_0276ff227856099ff66970d0b6f22eb04cdb23a42909e0623734fe430992618f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
