<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_4e48d2f4b066a9fd9588237e16ac8715fd1def087e06c5edb793ed5710703cb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_046393ea82ca47487f2d76d5032920109ba2272e7a63d5e9757488e814361efe = $this->env->getExtension("native_profiler");
        $__internal_046393ea82ca47487f2d76d5032920109ba2272e7a63d5e9757488e814361efe->enter($__internal_046393ea82ca47487f2d76d5032920109ba2272e7a63d5e9757488e814361efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_046393ea82ca47487f2d76d5032920109ba2272e7a63d5e9757488e814361efe->leave($__internal_046393ea82ca47487f2d76d5032920109ba2272e7a63d5e9757488e814361efe_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
