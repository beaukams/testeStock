<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0c86a82127501821cac1307df193be394ffd0f87782ab2d8b581c21485a096f0 extends Twig_Template
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
        $__internal_3b297f4ebc40171671610b40d2e20f1d75f27a8a81ec51caed4d1ba8db4c5e15 = $this->env->getExtension("native_profiler");
        $__internal_3b297f4ebc40171671610b40d2e20f1d75f27a8a81ec51caed4d1ba8db4c5e15->enter($__internal_3b297f4ebc40171671610b40d2e20f1d75f27a8a81ec51caed4d1ba8db4c5e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3b297f4ebc40171671610b40d2e20f1d75f27a8a81ec51caed4d1ba8db4c5e15->leave($__internal_3b297f4ebc40171671610b40d2e20f1d75f27a8a81ec51caed4d1ba8db4c5e15_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
