<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3671e5e0cb489584c5a727f771dfda292261ad434c9dc86f7a46a09c4644982c extends Twig_Template
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
        $__internal_d5c8d03c8bf7189cf113319153cc6626db4d50a7a6f16c4eab5708538eba7dff = $this->env->getExtension("native_profiler");
        $__internal_d5c8d03c8bf7189cf113319153cc6626db4d50a7a6f16c4eab5708538eba7dff->enter($__internal_d5c8d03c8bf7189cf113319153cc6626db4d50a7a6f16c4eab5708538eba7dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d5c8d03c8bf7189cf113319153cc6626db4d50a7a6f16c4eab5708538eba7dff->leave($__internal_d5c8d03c8bf7189cf113319153cc6626db4d50a7a6f16c4eab5708538eba7dff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
