<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_36f51be45f6c89db68c421897ac1b42f315f243e85cf15bf1b4fa70fa1f896f8 extends Twig_Template
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
        $__internal_4c3628b217dd1e2586c762a40437ad82513a25e6a3582bf4fcd395036ee4c810 = $this->env->getExtension("native_profiler");
        $__internal_4c3628b217dd1e2586c762a40437ad82513a25e6a3582bf4fcd395036ee4c810->enter($__internal_4c3628b217dd1e2586c762a40437ad82513a25e6a3582bf4fcd395036ee4c810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_4c3628b217dd1e2586c762a40437ad82513a25e6a3582bf4fcd395036ee4c810->leave($__internal_4c3628b217dd1e2586c762a40437ad82513a25e6a3582bf4fcd395036ee4c810_prof);

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
