<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_4a23ee5d0490103dba039e7072e2744969ad655dac63aa97cefc96bc78ff0e73 extends Twig_Template
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
        $__internal_91407f80601e45579ebf912806e3d9092c0c48eba31a27a1a3b94f517e612a45 = $this->env->getExtension("native_profiler");
        $__internal_91407f80601e45579ebf912806e3d9092c0c48eba31a27a1a3b94f517e612a45->enter($__internal_91407f80601e45579ebf912806e3d9092c0c48eba31a27a1a3b94f517e612a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91407f80601e45579ebf912806e3d9092c0c48eba31a27a1a3b94f517e612a45->leave($__internal_91407f80601e45579ebf912806e3d9092c0c48eba31a27a1a3b94f517e612a45_prof);

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
