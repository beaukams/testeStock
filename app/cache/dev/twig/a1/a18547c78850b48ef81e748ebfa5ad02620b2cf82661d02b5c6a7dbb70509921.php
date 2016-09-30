<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_2d897cfbe6991ce00ab9986c8569be43847fe09567816cece10762b97e46214a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04c0c2409f23ab5851e8273c9c1237d8acf6eae3cbe3e3b3f974b251a2a4077f = $this->env->getExtension("native_profiler");
        $__internal_04c0c2409f23ab5851e8273c9c1237d8acf6eae3cbe3e3b3f974b251a2a4077f->enter($__internal_04c0c2409f23ab5851e8273c9c1237d8acf6eae3cbe3e3b3f974b251a2a4077f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04c0c2409f23ab5851e8273c9c1237d8acf6eae3cbe3e3b3f974b251a2a4077f->leave($__internal_04c0c2409f23ab5851e8273c9c1237d8acf6eae3cbe3e3b3f974b251a2a4077f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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
/* {# DEPRECATED #}*/
/* {# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}*/
/* */
/* {% extends 'SonataAdminBundle:Button:create_button.html.twig' %}*/
/* */
