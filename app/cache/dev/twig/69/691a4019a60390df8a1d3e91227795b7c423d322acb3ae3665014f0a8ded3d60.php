<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ad7c165229a5b9975e29113eb90f93a955df0156ad3625cc7c91bc9574feca10 extends Twig_Template
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
        $__internal_891cb5e811495ca83ed01243e4be122d9f0ff1bed1db0501c879665e961fff9a = $this->env->getExtension("native_profiler");
        $__internal_891cb5e811495ca83ed01243e4be122d9f0ff1bed1db0501c879665e961fff9a->enter($__internal_891cb5e811495ca83ed01243e4be122d9f0ff1bed1db0501c879665e961fff9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_891cb5e811495ca83ed01243e4be122d9f0ff1bed1db0501c879665e961fff9a->leave($__internal_891cb5e811495ca83ed01243e4be122d9f0ff1bed1db0501c879665e961fff9a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
