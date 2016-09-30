<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_cd87238e2d1b2147ff254d2bbb03a5f80145196b7054c840dbff7b5636212237 extends Twig_Template
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
        $__internal_6eecfb41f82fbb7cc13586c3718094e834528416a03747c22adf78c52aaee85f = $this->env->getExtension("native_profiler");
        $__internal_6eecfb41f82fbb7cc13586c3718094e834528416a03747c22adf78c52aaee85f->enter($__internal_6eecfb41f82fbb7cc13586c3718094e834528416a03747c22adf78c52aaee85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eecfb41f82fbb7cc13586c3718094e834528416a03747c22adf78c52aaee85f->leave($__internal_6eecfb41f82fbb7cc13586c3718094e834528416a03747c22adf78c52aaee85f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6897a08ae620382fa829f65eca66f0eda2f389585fb5d69cb75584e6a03d468e = $this->env->getExtension("native_profiler");
        $__internal_6897a08ae620382fa829f65eca66f0eda2f389585fb5d69cb75584e6a03d468e->enter($__internal_6897a08ae620382fa829f65eca66f0eda2f389585fb5d69cb75584e6a03d468e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_6897a08ae620382fa829f65eca66f0eda2f389585fb5d69cb75584e6a03d468e->leave($__internal_6897a08ae620382fa829f65eca66f0eda2f389585fb5d69cb75584e6a03d468e_prof);

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
