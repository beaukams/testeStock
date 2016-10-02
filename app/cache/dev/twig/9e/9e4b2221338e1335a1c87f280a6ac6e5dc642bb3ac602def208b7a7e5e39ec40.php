<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_175d36bdac4ea9a25ec9873d2b5fea0591b79f069ccbdb5bb5aa8cb666a1d49a extends Twig_Template
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
        $__internal_6d386a0cd49b86d512143a438ae9b851c61fd97249a277ee8741e2761bac8353 = $this->env->getExtension("native_profiler");
        $__internal_6d386a0cd49b86d512143a438ae9b851c61fd97249a277ee8741e2761bac8353->enter($__internal_6d386a0cd49b86d512143a438ae9b851c61fd97249a277ee8741e2761bac8353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6d386a0cd49b86d512143a438ae9b851c61fd97249a277ee8741e2761bac8353->leave($__internal_6d386a0cd49b86d512143a438ae9b851c61fd97249a277ee8741e2761bac8353_prof);

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
