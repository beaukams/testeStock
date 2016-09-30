<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f80c2298e63ec3a0402bdc87fa5bf13019e1370cd5a2672c8778850c20f9e78c extends Twig_Template
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
        $__internal_e4ded977477de67de1da9f2ebbb37ad822ccf8b4fcdcd4ccfcb99b4d9fa69c80 = $this->env->getExtension("native_profiler");
        $__internal_e4ded977477de67de1da9f2ebbb37ad822ccf8b4fcdcd4ccfcb99b4d9fa69c80->enter($__internal_e4ded977477de67de1da9f2ebbb37ad822ccf8b4fcdcd4ccfcb99b4d9fa69c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_e4ded977477de67de1da9f2ebbb37ad822ccf8b4fcdcd4ccfcb99b4d9fa69c80->leave($__internal_e4ded977477de67de1da9f2ebbb37ad822ccf8b4fcdcd4ccfcb99b4d9fa69c80_prof);

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
