<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_37f1cf455ec40f9631a2b1a56c103e5d7de626e5baff2e0a6766b0f1ae4cd3e9 extends Twig_Template
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
        $__internal_fcdb8da233caa0c2184267c65c6ccae545e09596ce04ba8fdb55fb8d4c47aa25 = $this->env->getExtension("native_profiler");
        $__internal_fcdb8da233caa0c2184267c65c6ccae545e09596ce04ba8fdb55fb8d4c47aa25->enter($__internal_fcdb8da233caa0c2184267c65c6ccae545e09596ce04ba8fdb55fb8d4c47aa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcdb8da233caa0c2184267c65c6ccae545e09596ce04ba8fdb55fb8d4c47aa25->leave($__internal_fcdb8da233caa0c2184267c65c6ccae545e09596ce04ba8fdb55fb8d4c47aa25_prof);

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
