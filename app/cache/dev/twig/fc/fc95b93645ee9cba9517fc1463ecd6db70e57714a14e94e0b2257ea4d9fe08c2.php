<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_584ba87ed989f38e462a5bc2ecddaa61743dfdf84857299cce68ab8218f04c2c extends Twig_Template
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
        $__internal_b56395c46e33ed8963bb7108e40aab8c52a469722a4ca002a42cbdcd937ad0ac = $this->env->getExtension("native_profiler");
        $__internal_b56395c46e33ed8963bb7108e40aab8c52a469722a4ca002a42cbdcd937ad0ac->enter($__internal_b56395c46e33ed8963bb7108e40aab8c52a469722a4ca002a42cbdcd937ad0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b56395c46e33ed8963bb7108e40aab8c52a469722a4ca002a42cbdcd937ad0ac->leave($__internal_b56395c46e33ed8963bb7108e40aab8c52a469722a4ca002a42cbdcd937ad0ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
