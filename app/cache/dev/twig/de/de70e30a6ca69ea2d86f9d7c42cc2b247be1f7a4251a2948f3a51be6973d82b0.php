<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_5fcd71bf554e0c158c5c5ec76390390cbec0a62205047b02e603ed19fd0aa1fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d28d6543bd5b4a483348be9723ac050c13857f39d27d69a5aa12182093f13414 = $this->env->getExtension("native_profiler");
        $__internal_d28d6543bd5b4a483348be9723ac050c13857f39d27d69a5aa12182093f13414->enter($__internal_d28d6543bd5b4a483348be9723ac050c13857f39d27d69a5aa12182093f13414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d28d6543bd5b4a483348be9723ac050c13857f39d27d69a5aa12182093f13414->leave($__internal_d28d6543bd5b4a483348be9723ac050c13857f39d27d69a5aa12182093f13414_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b13e483971ba9c7f7165bac5625f04f842741056de1a656f10d9b9a8704985e3 = $this->env->getExtension("native_profiler");
        $__internal_b13e483971ba9c7f7165bac5625f04f842741056de1a656f10d9b9a8704985e3->enter($__internal_b13e483971ba9c7f7165bac5625f04f842741056de1a656f10d9b9a8704985e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b13e483971ba9c7f7165bac5625f04f842741056de1a656f10d9b9a8704985e3->leave($__internal_b13e483971ba9c7f7165bac5625f04f842741056de1a656f10d9b9a8704985e3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
