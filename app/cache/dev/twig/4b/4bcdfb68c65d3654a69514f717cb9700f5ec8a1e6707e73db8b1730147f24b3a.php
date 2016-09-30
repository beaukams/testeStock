<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0c9e589d7e7f945b0e8ab3a43aeee476f299745f85fa698e3c2d1055ff66064f extends Twig_Template
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
        $__internal_899187522b25c253b5b9f257f1d97222c82d377e5201d9c537cfed9cc460466d = $this->env->getExtension("native_profiler");
        $__internal_899187522b25c253b5b9f257f1d97222c82d377e5201d9c537cfed9cc460466d->enter($__internal_899187522b25c253b5b9f257f1d97222c82d377e5201d9c537cfed9cc460466d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_899187522b25c253b5b9f257f1d97222c82d377e5201d9c537cfed9cc460466d->leave($__internal_899187522b25c253b5b9f257f1d97222c82d377e5201d9c537cfed9cc460466d_prof);

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
