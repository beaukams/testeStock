<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_560c6dcc1763047a22ee7d356332191cb5b0ed0a20d8d0d7a895b1d526b4692f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6db0d34b86124ccc4d11509d40959498a283876ca438f75a97e36f2577eaade = $this->env->getExtension("native_profiler");
        $__internal_c6db0d34b86124ccc4d11509d40959498a283876ca438f75a97e36f2577eaade->enter($__internal_c6db0d34b86124ccc4d11509d40959498a283876ca438f75a97e36f2577eaade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6db0d34b86124ccc4d11509d40959498a283876ca438f75a97e36f2577eaade->leave($__internal_c6db0d34b86124ccc4d11509d40959498a283876ca438f75a97e36f2577eaade_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
