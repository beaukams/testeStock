<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_ddedc173f16c84a83c98c7cc7d0308857991d19136060cc7101cfd8f90de61cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71a899f47a9b36608dae8e7ded2936a283558fbd662fd265363c0a4ed2673935 = $this->env->getExtension("native_profiler");
        $__internal_71a899f47a9b36608dae8e7ded2936a283558fbd662fd265363c0a4ed2673935->enter($__internal_71a899f47a9b36608dae8e7ded2936a283558fbd662fd265363c0a4ed2673935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71a899f47a9b36608dae8e7ded2936a283558fbd662fd265363c0a4ed2673935->leave($__internal_71a899f47a9b36608dae8e7ded2936a283558fbd662fd265363c0a4ed2673935_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fbddf73ab5abca9f39fde66beab83ad530a32108bc948ae43047eb895c183fcb = $this->env->getExtension("native_profiler");
        $__internal_fbddf73ab5abca9f39fde66beab83ad530a32108bc948ae43047eb895c183fcb->enter($__internal_fbddf73ab5abca9f39fde66beab83ad530a32108bc948ae43047eb895c183fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_fbddf73ab5abca9f39fde66beab83ad530a32108bc948ae43047eb895c183fcb->leave($__internal_fbddf73ab5abca9f39fde66beab83ad530a32108bc948ae43047eb895c183fcb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */