<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_3f36f946930c9e736e9c8d7ea5983055aed251aff53e1f123a1072c100de6d51 extends Twig_Template
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
        $__internal_94afe81d62817cf5ffb4c68caaba037940bea72e5572c7e9e6cdde7c6d3042f7 = $this->env->getExtension("native_profiler");
        $__internal_94afe81d62817cf5ffb4c68caaba037940bea72e5572c7e9e6cdde7c6d3042f7->enter($__internal_94afe81d62817cf5ffb4c68caaba037940bea72e5572c7e9e6cdde7c6d3042f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94afe81d62817cf5ffb4c68caaba037940bea72e5572c7e9e6cdde7c6d3042f7->leave($__internal_94afe81d62817cf5ffb4c68caaba037940bea72e5572c7e9e6cdde7c6d3042f7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_14991620130bd544da94e0d4ff6dc3798808250f374cecec3c5f2c84f7390643 = $this->env->getExtension("native_profiler");
        $__internal_14991620130bd544da94e0d4ff6dc3798808250f374cecec3c5f2c84f7390643->enter($__internal_14991620130bd544da94e0d4ff6dc3798808250f374cecec3c5f2c84f7390643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_14991620130bd544da94e0d4ff6dc3798808250f374cecec3c5f2c84f7390643->leave($__internal_14991620130bd544da94e0d4ff6dc3798808250f374cecec3c5f2c84f7390643_prof);

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
