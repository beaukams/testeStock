<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_758aa6d05189a11fab81de42567316ad0ca423fc27279bff74b001620aeb3748 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfc8adc861a77f00206604ea1c30c36e075989ea3ea19d543fa9430463d0a213 = $this->env->getExtension("native_profiler");
        $__internal_cfc8adc861a77f00206604ea1c30c36e075989ea3ea19d543fa9430463d0a213->enter($__internal_cfc8adc861a77f00206604ea1c30c36e075989ea3ea19d543fa9430463d0a213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfc8adc861a77f00206604ea1c30c36e075989ea3ea19d543fa9430463d0a213->leave($__internal_cfc8adc861a77f00206604ea1c30c36e075989ea3ea19d543fa9430463d0a213_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_20585535ed2386140eb9102dd2b82527c703929732622e3730ce7d9d27108191 = $this->env->getExtension("native_profiler");
        $__internal_20585535ed2386140eb9102dd2b82527c703929732622e3730ce7d9d27108191->enter($__internal_20585535ed2386140eb9102dd2b82527c703929732622e3730ce7d9d27108191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_20585535ed2386140eb9102dd2b82527c703929732622e3730ce7d9d27108191->leave($__internal_20585535ed2386140eb9102dd2b82527c703929732622e3730ce7d9d27108191_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
