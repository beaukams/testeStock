<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_b1bd550e286a6880d1ff1a9018224b2377f2d876ab4acde55f1310c6de6cc019 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65cd45ad66ed710978f719b734e7cae790d2247daa5919a8784d62f46a80985c = $this->env->getExtension("native_profiler");
        $__internal_65cd45ad66ed710978f719b734e7cae790d2247daa5919a8784d62f46a80985c->enter($__internal_65cd45ad66ed710978f719b734e7cae790d2247daa5919a8784d62f46a80985c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65cd45ad66ed710978f719b734e7cae790d2247daa5919a8784d62f46a80985c->leave($__internal_65cd45ad66ed710978f719b734e7cae790d2247daa5919a8784d62f46a80985c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_86ab9798f67c1c4f703508750b851c05f58158391d28db5c07a1b733792f9f64 = $this->env->getExtension("native_profiler");
        $__internal_86ab9798f67c1c4f703508750b851c05f58158391d28db5c07a1b733792f9f64->enter($__internal_86ab9798f67c1c4f703508750b851c05f58158391d28db5c07a1b733792f9f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_86ab9798f67c1c4f703508750b851c05f58158391d28db5c07a1b733792f9f64->leave($__internal_86ab9798f67c1c4f703508750b851c05f58158391d28db5c07a1b733792f9f64_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
