<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_45db5dfbbb8fef91cd9b1bfaebf05beae34bc865394b0f70c29f05190eb589cc extends Twig_Template
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
        $__internal_6c0a0cfaa23dc9173760703f6f6dfe12832fa4d1f627f55fa7d201d6d88351b5 = $this->env->getExtension("native_profiler");
        $__internal_6c0a0cfaa23dc9173760703f6f6dfe12832fa4d1f627f55fa7d201d6d88351b5->enter($__internal_6c0a0cfaa23dc9173760703f6f6dfe12832fa4d1f627f55fa7d201d6d88351b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_6c0a0cfaa23dc9173760703f6f6dfe12832fa4d1f627f55fa7d201d6d88351b5->leave($__internal_6c0a0cfaa23dc9173760703f6f6dfe12832fa4d1f627f55fa7d201d6d88351b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
