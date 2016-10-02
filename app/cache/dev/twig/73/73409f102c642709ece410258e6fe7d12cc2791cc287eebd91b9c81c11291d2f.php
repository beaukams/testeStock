<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_6bfcb62a2ebcfcf9ba7e3d2a8b47b990c24b53364e97c2740dd080260473f8bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_1eb46bb167a2b8b1f34a003586a34150754ae476d43f15685c21a6dd48f92f8f = $this->env->getExtension("native_profiler");
        $__internal_1eb46bb167a2b8b1f34a003586a34150754ae476d43f15685c21a6dd48f92f8f->enter($__internal_1eb46bb167a2b8b1f34a003586a34150754ae476d43f15685c21a6dd48f92f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eb46bb167a2b8b1f34a003586a34150754ae476d43f15685c21a6dd48f92f8f->leave($__internal_1eb46bb167a2b8b1f34a003586a34150754ae476d43f15685c21a6dd48f92f8f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cf5e99fe99465ccdf73758e64803ab29b6521d9cf5261947c49d5c7dc25a85f2 = $this->env->getExtension("native_profiler");
        $__internal_cf5e99fe99465ccdf73758e64803ab29b6521d9cf5261947c49d5c7dc25a85f2->enter($__internal_cf5e99fe99465ccdf73758e64803ab29b6521d9cf5261947c49d5c7dc25a85f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_cf5e99fe99465ccdf73758e64803ab29b6521d9cf5261947c49d5c7dc25a85f2->leave($__internal_cf5e99fe99465ccdf73758e64803ab29b6521d9cf5261947c49d5c7dc25a85f2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
