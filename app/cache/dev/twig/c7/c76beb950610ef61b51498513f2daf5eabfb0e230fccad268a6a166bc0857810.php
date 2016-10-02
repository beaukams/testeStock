<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b22c6fc563165fea48030647a518e567f27de477ef1af43c8aa864a4eea28238 extends Twig_Template
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
        $__internal_144ba3cc540dae26979eb414869a94681a56e488bd9dcfb670d66ac1764c20ce = $this->env->getExtension("native_profiler");
        $__internal_144ba3cc540dae26979eb414869a94681a56e488bd9dcfb670d66ac1764c20ce->enter($__internal_144ba3cc540dae26979eb414869a94681a56e488bd9dcfb670d66ac1764c20ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_144ba3cc540dae26979eb414869a94681a56e488bd9dcfb670d66ac1764c20ce->leave($__internal_144ba3cc540dae26979eb414869a94681a56e488bd9dcfb670d66ac1764c20ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
