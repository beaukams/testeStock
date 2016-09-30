<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_ec8e63ebcce96565dd97cc85432a2fa25cdb3038656754c192da9b439f760f26 extends Twig_Template
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
        $__internal_e6788fc1b35a70f0e43a9e94cf7da9e51da914a0084e79523d7d7522ca5610a1 = $this->env->getExtension("native_profiler");
        $__internal_e6788fc1b35a70f0e43a9e94cf7da9e51da914a0084e79523d7d7522ca5610a1->enter($__internal_e6788fc1b35a70f0e43a9e94cf7da9e51da914a0084e79523d7d7522ca5610a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6788fc1b35a70f0e43a9e94cf7da9e51da914a0084e79523d7d7522ca5610a1->leave($__internal_e6788fc1b35a70f0e43a9e94cf7da9e51da914a0084e79523d7d7522ca5610a1_prof);

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
