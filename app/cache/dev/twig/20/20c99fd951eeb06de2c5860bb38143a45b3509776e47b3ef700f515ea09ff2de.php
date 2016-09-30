<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_7e53ace9fffc8154a31daa4335c706f85f39f3c99a132f8e0bad2f373473297b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6850910a11ec4ebf4ba1b5578f0b7b454b733ffc27864e189638b161c60f0b09 = $this->env->getExtension("native_profiler");
        $__internal_6850910a11ec4ebf4ba1b5578f0b7b454b733ffc27864e189638b161c60f0b09->enter($__internal_6850910a11ec4ebf4ba1b5578f0b7b454b733ffc27864e189638b161c60f0b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6850910a11ec4ebf4ba1b5578f0b7b454b733ffc27864e189638b161c60f0b09->leave($__internal_6850910a11ec4ebf4ba1b5578f0b7b454b733ffc27864e189638b161c60f0b09_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
