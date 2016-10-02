<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_29d1263a0ebde7bab22625f6ff3b53a16d9929df172df08eee4df9bcd23c9e82 extends Twig_Template
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
        $__internal_24f5c45897b0a3993141c47bfb24a9131b731b8f71e544b466df932b559f8988 = $this->env->getExtension("native_profiler");
        $__internal_24f5c45897b0a3993141c47bfb24a9131b731b8f71e544b466df932b559f8988->enter($__internal_24f5c45897b0a3993141c47bfb24a9131b731b8f71e544b466df932b559f8988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f5c45897b0a3993141c47bfb24a9131b731b8f71e544b466df932b559f8988->leave($__internal_24f5c45897b0a3993141c47bfb24a9131b731b8f71e544b466df932b559f8988_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f13e633bdba4c6f76b48f33ac90308bda662a27360cc04c92ab8fca47046539d = $this->env->getExtension("native_profiler");
        $__internal_f13e633bdba4c6f76b48f33ac90308bda662a27360cc04c92ab8fca47046539d->enter($__internal_f13e633bdba4c6f76b48f33ac90308bda662a27360cc04c92ab8fca47046539d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f13e633bdba4c6f76b48f33ac90308bda662a27360cc04c92ab8fca47046539d->leave($__internal_f13e633bdba4c6f76b48f33ac90308bda662a27360cc04c92ab8fca47046539d_prof);

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
