<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_51b9d98d13f504078cc211888603af5fab58aa1f1c02d9a49f46280a4ce8a2bf extends Twig_Template
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
        $__internal_8c23baed08fcd5ddc0f872eaf6c02238e2cc4d64436150c76f76241d50a39971 = $this->env->getExtension("native_profiler");
        $__internal_8c23baed08fcd5ddc0f872eaf6c02238e2cc4d64436150c76f76241d50a39971->enter($__internal_8c23baed08fcd5ddc0f872eaf6c02238e2cc4d64436150c76f76241d50a39971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8c23baed08fcd5ddc0f872eaf6c02238e2cc4d64436150c76f76241d50a39971->leave($__internal_8c23baed08fcd5ddc0f872eaf6c02238e2cc4d64436150c76f76241d50a39971_prof);

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
