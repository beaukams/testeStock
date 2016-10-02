<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e3d2ea9c446fa0d10374efbe932664768c386c73e730e0d06a61a9dbc03816e3 extends Twig_Template
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
        $__internal_3da37166f7f8982e1ddf04bb02ff41dc0470b30664859c46b2c94d994ef9b7ad = $this->env->getExtension("native_profiler");
        $__internal_3da37166f7f8982e1ddf04bb02ff41dc0470b30664859c46b2c94d994ef9b7ad->enter($__internal_3da37166f7f8982e1ddf04bb02ff41dc0470b30664859c46b2c94d994ef9b7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3da37166f7f8982e1ddf04bb02ff41dc0470b30664859c46b2c94d994ef9b7ad->leave($__internal_3da37166f7f8982e1ddf04bb02ff41dc0470b30664859c46b2c94d994ef9b7ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
