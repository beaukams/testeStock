<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_cbf396217929add7136c03fb0802f0f6e1d63db925084dea4ef410fbc0284e34 extends Twig_Template
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
        $__internal_09755594aafad61c55d444a5accdf93234aa970cdd66998058fe68ccabaf3563 = $this->env->getExtension("native_profiler");
        $__internal_09755594aafad61c55d444a5accdf93234aa970cdd66998058fe68ccabaf3563->enter($__internal_09755594aafad61c55d444a5accdf93234aa970cdd66998058fe68ccabaf3563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_09755594aafad61c55d444a5accdf93234aa970cdd66998058fe68ccabaf3563->leave($__internal_09755594aafad61c55d444a5accdf93234aa970cdd66998058fe68ccabaf3563_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
