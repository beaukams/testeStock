<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_bfa74c80d4c3f8e4cbd9db8adecf5889131f0cb8e9e6e0a200a3cfdc99c5348a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92a5f0d20a8343811def2925f60508e8f5358f618d3bf0d142e9a039098f6bd0 = $this->env->getExtension("native_profiler");
        $__internal_92a5f0d20a8343811def2925f60508e8f5358f618d3bf0d142e9a039098f6bd0->enter($__internal_92a5f0d20a8343811def2925f60508e8f5358f618d3bf0d142e9a039098f6bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92a5f0d20a8343811def2925f60508e8f5358f618d3bf0d142e9a039098f6bd0->leave($__internal_92a5f0d20a8343811def2925f60508e8f5358f618d3bf0d142e9a039098f6bd0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
