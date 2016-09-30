<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_aceea918f77dbb4b6bae20010ffa5b00efc4b47b70f298e4b243eaa70be23ddf extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2be93a56a60a8d4313a375ec4f9ab50110d1d96f56641e7f56ddc0aa2facff99 = $this->env->getExtension("native_profiler");
        $__internal_2be93a56a60a8d4313a375ec4f9ab50110d1d96f56641e7f56ddc0aa2facff99->enter($__internal_2be93a56a60a8d4313a375ec4f9ab50110d1d96f56641e7f56ddc0aa2facff99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be93a56a60a8d4313a375ec4f9ab50110d1d96f56641e7f56ddc0aa2facff99->leave($__internal_2be93a56a60a8d4313a375ec4f9ab50110d1d96f56641e7f56ddc0aa2facff99_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_85b2d41178410d864aba5abc0b2591253fa09df2fb7be1a20431a1a678e5df86 = $this->env->getExtension("native_profiler");
        $__internal_85b2d41178410d864aba5abc0b2591253fa09df2fb7be1a20431a1a678e5df86->enter($__internal_85b2d41178410d864aba5abc0b2591253fa09df2fb7be1a20431a1a678e5df86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_85b2d41178410d864aba5abc0b2591253fa09df2fb7be1a20431a1a678e5df86->leave($__internal_85b2d41178410d864aba5abc0b2591253fa09df2fb7be1a20431a1a678e5df86_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
