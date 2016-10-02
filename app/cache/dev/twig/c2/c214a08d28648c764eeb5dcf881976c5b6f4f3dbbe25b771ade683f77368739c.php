<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ccefc5a484809aa6da386e8b66eeda22bb9f3b6168e574ac81b00052bf9de14b extends Twig_Template
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
        $__internal_d3d9be4349a673cd2829e2de3046a18d444bfd46e2dc2710e2d32401a8705a49 = $this->env->getExtension("native_profiler");
        $__internal_d3d9be4349a673cd2829e2de3046a18d444bfd46e2dc2710e2d32401a8705a49->enter($__internal_d3d9be4349a673cd2829e2de3046a18d444bfd46e2dc2710e2d32401a8705a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d3d9be4349a673cd2829e2de3046a18d444bfd46e2dc2710e2d32401a8705a49->leave($__internal_d3d9be4349a673cd2829e2de3046a18d444bfd46e2dc2710e2d32401a8705a49_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
