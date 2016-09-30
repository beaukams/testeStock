<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_9f9a69452b259a88a3d1361945827d1c2336d1cf8ba3dd5cd1480d10e8bbaa35 extends Twig_Template
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
        $__internal_59c3036266f198f196257179c32d3f464fa7af1031e323b62ea86e7749cefcb4 = $this->env->getExtension("native_profiler");
        $__internal_59c3036266f198f196257179c32d3f464fa7af1031e323b62ea86e7749cefcb4->enter($__internal_59c3036266f198f196257179c32d3f464fa7af1031e323b62ea86e7749cefcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59c3036266f198f196257179c32d3f464fa7af1031e323b62ea86e7749cefcb4->leave($__internal_59c3036266f198f196257179c32d3f464fa7af1031e323b62ea86e7749cefcb4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7f16e3f8c8a89bf1f138dbeb498cb507e45d5ede9476c1031e949a58842ee65e = $this->env->getExtension("native_profiler");
        $__internal_7f16e3f8c8a89bf1f138dbeb498cb507e45d5ede9476c1031e949a58842ee65e->enter($__internal_7f16e3f8c8a89bf1f138dbeb498cb507e45d5ede9476c1031e949a58842ee65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_7f16e3f8c8a89bf1f138dbeb498cb507e45d5ede9476c1031e949a58842ee65e->leave($__internal_7f16e3f8c8a89bf1f138dbeb498cb507e45d5ede9476c1031e949a58842ee65e_prof);

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
