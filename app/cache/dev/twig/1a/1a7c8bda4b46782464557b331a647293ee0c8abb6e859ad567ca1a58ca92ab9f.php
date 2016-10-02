<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3cb930fa056301099962abc79a574a4ce5a1be2509200571dabdbe720ef408f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "FOSUserBundle:Security:login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecfbb4f94f106e6bec890d876b9341791370b7749175555cffb87667665043ea = $this->env->getExtension("native_profiler");
        $__internal_ecfbb4f94f106e6bec890d876b9341791370b7749175555cffb87667665043ea->enter($__internal_ecfbb4f94f106e6bec890d876b9341791370b7749175555cffb87667665043ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecfbb4f94f106e6bec890d876b9341791370b7749175555cffb87667665043ea->leave($__internal_ecfbb4f94f106e6bec890d876b9341791370b7749175555cffb87667665043ea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
/* {% extends "SonataUserBundle:Security:base_login.html.twig" %}*/
