<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_a73ad25269fdd30c14836321c45594ae3dfad446137afab4f1319fb5bb08610e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09b17f7ba079c9a095cce4ef49eb3879d9ab69bc6b9afcd8d160456ad3838a7b = $this->env->getExtension("native_profiler");
        $__internal_09b17f7ba079c9a095cce4ef49eb3879d9ab69bc6b9afcd8d160456ad3838a7b->enter($__internal_09b17f7ba079c9a095cce4ef49eb3879d9ab69bc6b9afcd8d160456ad3838a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09b17f7ba079c9a095cce4ef49eb3879d9ab69bc6b9afcd8d160456ad3838a7b->leave($__internal_09b17f7ba079c9a095cce4ef49eb3879d9ab69bc6b9afcd8d160456ad3838a7b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
