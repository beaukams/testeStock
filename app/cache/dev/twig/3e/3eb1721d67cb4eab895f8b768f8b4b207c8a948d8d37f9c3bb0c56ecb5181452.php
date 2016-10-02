<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_3d9ba20fa2962e9845f12c6ec4335cbd5f651fa69005e5d6a46352ffa2f491f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_trans.html.twig", 11);
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
        $__internal_1f60571b4785d532d6bb4b2d41591550bbb4eba19d5accf87cdd40724c923888 = $this->env->getExtension("native_profiler");
        $__internal_1f60571b4785d532d6bb4b2d41591550bbb4eba19d5accf87cdd40724c923888->enter($__internal_1f60571b4785d532d6bb4b2d41591550bbb4eba19d5accf87cdd40724c923888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f60571b4785d532d6bb4b2d41591550bbb4eba19d5accf87cdd40724c923888->leave($__internal_1f60571b4785d532d6bb4b2d41591550bbb4eba19d5accf87cdd40724c923888_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_fb0d77b43efc6844d8f6dbedd6f83729317f0f128674af03143b491cbbbe453b = $this->env->getExtension("native_profiler");
        $__internal_fb0d77b43efc6844d8f6dbedd6f83729317f0f128674af03143b491cbbbe453b->enter($__internal_fb0d77b43efc6844d8f6dbedd6f83729317f0f128674af03143b491cbbbe453b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_fb0d77b43efc6844d8f6dbedd6f83729317f0f128674af03143b491cbbbe453b->leave($__internal_fb0d77b43efc6844d8f6dbedd6f83729317f0f128674af03143b491cbbbe453b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  60 => 21,  58 => 20,  55 => 19,  52 => 18,  49 => 17,  46 => 16,  43 => 15,  40 => 14,  34 => 13,  11 => 11,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field%}*/
/*     {% if field_description.options.catalogue is not defined %}*/
/*         {% set value = value|trans %}*/
/*     {% else %}*/
/*         {% set value = value|trans({}, field_description.options.catalogue) %}*/
/*     {% endif %}*/
/* */
/*     {% if field_description.options.safe %}*/
/*         {{ value|raw }}*/
/*     {% else %}*/
/*         {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
