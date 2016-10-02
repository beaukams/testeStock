<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_b560b8aa81a044a76d4f7dfc4628c31f57d0be32dc4eae4960adbe80a508d64e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eee8739e7db4496eb446da6f6c53407c31d9e25a39f5c9c9e4cc6a953e6d5557 = $this->env->getExtension("native_profiler");
        $__internal_eee8739e7db4496eb446da6f6c53407c31d9e25a39f5c9c9e4cc6a953e6d5557->enter($__internal_eee8739e7db4496eb446da6f6c53407c31d9e25a39f5c9c9e4cc6a953e6d5557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eee8739e7db4496eb446da6f6c53407c31d9e25a39f5c9c9e4cc6a953e6d5557->leave($__internal_eee8739e7db4496eb446da6f6c53407c31d9e25a39f5c9c9e4cc6a953e6d5557_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
