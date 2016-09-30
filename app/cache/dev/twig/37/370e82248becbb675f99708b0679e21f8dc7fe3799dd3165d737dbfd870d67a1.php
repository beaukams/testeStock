<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_498c4bcc9b6744e3f0161ae73efec4acd8da4e3a1e258f931be80ab10e05ca2e extends Twig_Template
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
        $__internal_fd7c5be5e159e47035bdbde625803c1fe8e520b67e2107a73b2523a89fe71562 = $this->env->getExtension("native_profiler");
        $__internal_fd7c5be5e159e47035bdbde625803c1fe8e520b67e2107a73b2523a89fe71562->enter($__internal_fd7c5be5e159e47035bdbde625803c1fe8e520b67e2107a73b2523a89fe71562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_fd7c5be5e159e47035bdbde625803c1fe8e520b67e2107a73b2523a89fe71562->leave($__internal_fd7c5be5e159e47035bdbde625803c1fe8e520b67e2107a73b2523a89fe71562_prof);

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
