<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_075d593c38159eeae45f871f6e2c5b9203311e4db722d6518402bc4cb38794be extends Twig_Template
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
        $__internal_5f58ffda6a44fd8fc7c913f5a757239628e336d05dcbb187946b352241becd0e = $this->env->getExtension("native_profiler");
        $__internal_5f58ffda6a44fd8fc7c913f5a757239628e336d05dcbb187946b352241becd0e->enter($__internal_5f58ffda6a44fd8fc7c913f5a757239628e336d05dcbb187946b352241becd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5f58ffda6a44fd8fc7c913f5a757239628e336d05dcbb187946b352241becd0e->leave($__internal_5f58ffda6a44fd8fc7c913f5a757239628e336d05dcbb187946b352241becd0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
