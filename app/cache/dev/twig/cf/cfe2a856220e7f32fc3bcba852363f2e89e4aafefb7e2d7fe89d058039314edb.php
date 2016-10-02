<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_64114662440ba77576bdb88454161d5b7995c1ca1a4bde77bd71c679115e45c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_d8d03d98a89de859a13b65b5b535da80f08ff48f694219bbdba829e0c40ffeff = $this->env->getExtension("native_profiler");
        $__internal_d8d03d98a89de859a13b65b5b535da80f08ff48f694219bbdba829e0c40ffeff->enter($__internal_d8d03d98a89de859a13b65b5b535da80f08ff48f694219bbdba829e0c40ffeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8d03d98a89de859a13b65b5b535da80f08ff48f694219bbdba829e0c40ffeff->leave($__internal_d8d03d98a89de859a13b65b5b535da80f08ff48f694219bbdba829e0c40ffeff_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_799f7800e31af9dfc5ea551fd2e75668164feec4055fd8a40d4544c1d06d0f41 = $this->env->getExtension("native_profiler");
        $__internal_799f7800e31af9dfc5ea551fd2e75668164feec4055fd8a40d4544c1d06d0f41->enter($__internal_799f7800e31af9dfc5ea551fd2e75668164feec4055fd8a40d4544c1d06d0f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_799f7800e31af9dfc5ea551fd2e75668164feec4055fd8a40d4544c1d06d0f41->leave($__internal_799f7800e31af9dfc5ea551fd2e75668164feec4055fd8a40d4544c1d06d0f41_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
