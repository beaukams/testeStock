<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_d8856c3d8a9debd465dc554ac79c72375cc21e08c8b37ec68d34e831824cdbc9 extends Twig_Template
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
        $__internal_c6df5f4719d5ee055513f56931c780354fd620057c6e45263343656c31bb14e6 = $this->env->getExtension("native_profiler");
        $__internal_c6df5f4719d5ee055513f56931c780354fd620057c6e45263343656c31bb14e6->enter($__internal_c6df5f4719d5ee055513f56931c780354fd620057c6e45263343656c31bb14e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6df5f4719d5ee055513f56931c780354fd620057c6e45263343656c31bb14e6->leave($__internal_c6df5f4719d5ee055513f56931c780354fd620057c6e45263343656c31bb14e6_prof);

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
