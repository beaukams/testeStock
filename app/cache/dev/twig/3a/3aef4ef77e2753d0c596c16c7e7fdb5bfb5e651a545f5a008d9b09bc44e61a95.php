<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c5ab617a330b30f61fe4b799f363dcea2775b293682ca8e3e600f5e41c2eafb5 extends Twig_Template
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
        $__internal_4607a3a9301d8975f454a02bf22584c27d6e0ded8393f8235b52ff50a43e7d33 = $this->env->getExtension("native_profiler");
        $__internal_4607a3a9301d8975f454a02bf22584c27d6e0ded8393f8235b52ff50a43e7d33->enter($__internal_4607a3a9301d8975f454a02bf22584c27d6e0ded8393f8235b52ff50a43e7d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4607a3a9301d8975f454a02bf22584c27d6e0ded8393f8235b52ff50a43e7d33->leave($__internal_4607a3a9301d8975f454a02bf22584c27d6e0ded8393f8235b52ff50a43e7d33_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
