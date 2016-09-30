<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_c6176e0feeb71dff25a06ed432ff0660a86505332508ff0b0c0202f13204a5c5 extends Twig_Template
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
        $__internal_6155cdd463e4675cd075f53c19561ea692b80ccee053b51d0f1f0e5b2ad20025 = $this->env->getExtension("native_profiler");
        $__internal_6155cdd463e4675cd075f53c19561ea692b80ccee053b51d0f1f0e5b2ad20025->enter($__internal_6155cdd463e4675cd075f53c19561ea692b80ccee053b51d0f1f0e5b2ad20025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6155cdd463e4675cd075f53c19561ea692b80ccee053b51d0f1f0e5b2ad20025->leave($__internal_6155cdd463e4675cd075f53c19561ea692b80ccee053b51d0f1f0e5b2ad20025_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c13d3c72f330b21883b2667d1d5b2293d194ea65f301fd66e8830d6b8e305cfa = $this->env->getExtension("native_profiler");
        $__internal_c13d3c72f330b21883b2667d1d5b2293d194ea65f301fd66e8830d6b8e305cfa->enter($__internal_c13d3c72f330b21883b2667d1d5b2293d194ea65f301fd66e8830d6b8e305cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_c13d3c72f330b21883b2667d1d5b2293d194ea65f301fd66e8830d6b8e305cfa->leave($__internal_c13d3c72f330b21883b2667d1d5b2293d194ea65f301fd66e8830d6b8e305cfa_prof);

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
