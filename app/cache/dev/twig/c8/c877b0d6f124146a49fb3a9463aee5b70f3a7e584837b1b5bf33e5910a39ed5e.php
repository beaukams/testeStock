<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1d0406cfbbe75a73de4da8c4c4ad52545656b8513581d732409b56b1061e9f74 extends Twig_Template
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
        $__internal_6494102fe63300254449a53de315f39c02a47e8c13602d9e595aace913eb30ec = $this->env->getExtension("native_profiler");
        $__internal_6494102fe63300254449a53de315f39c02a47e8c13602d9e595aace913eb30ec->enter($__internal_6494102fe63300254449a53de315f39c02a47e8c13602d9e595aace913eb30ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6494102fe63300254449a53de315f39c02a47e8c13602d9e595aace913eb30ec->leave($__internal_6494102fe63300254449a53de315f39c02a47e8c13602d9e595aace913eb30ec_prof);

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
