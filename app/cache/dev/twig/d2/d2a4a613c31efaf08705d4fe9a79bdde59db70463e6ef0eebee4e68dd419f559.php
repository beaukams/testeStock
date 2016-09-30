<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_4bda399d44ef29325ee7ccfe1ed1bf03a9c3ba23904229af9498f997fe21d3c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41d91a2a9302030300e0aa471278c76925a4ad10ae141bacd4b0e2345da728a8 = $this->env->getExtension("native_profiler");
        $__internal_41d91a2a9302030300e0aa471278c76925a4ad10ae141bacd4b0e2345da728a8->enter($__internal_41d91a2a9302030300e0aa471278c76925a4ad10ae141bacd4b0e2345da728a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41d91a2a9302030300e0aa471278c76925a4ad10ae141bacd4b0e2345da728a8->leave($__internal_41d91a2a9302030300e0aa471278c76925a4ad10ae141bacd4b0e2345da728a8_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_ba0da830e1533f07a694f66c242fb78a4dd1842232607e9894b11998c5cdf875 = $this->env->getExtension("native_profiler");
        $__internal_ba0da830e1533f07a694f66c242fb78a4dd1842232607e9894b11998c5cdf875->enter($__internal_ba0da830e1533f07a694f66c242fb78a4dd1842232607e9894b11998c5cdf875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_ba0da830e1533f07a694f66c242fb78a4dd1842232607e9894b11998c5cdf875->leave($__internal_ba0da830e1533f07a694f66c242fb78a4dd1842232607e9894b11998c5cdf875_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_df4fee80e1df3fb95f9726924d9d03b29d7fdcaa4529f52dc4385265d0c3c002 = $this->env->getExtension("native_profiler");
        $__internal_df4fee80e1df3fb95f9726924d9d03b29d7fdcaa4529f52dc4385265d0c3c002->enter($__internal_df4fee80e1df3fb95f9726924d9d03b29d7fdcaa4529f52dc4385265d0c3c002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_df4fee80e1df3fb95f9726924d9d03b29d7fdcaa4529f52dc4385265d0c3c002->leave($__internal_df4fee80e1df3fb95f9726924d9d03b29d7fdcaa4529f52dc4385265d0c3c002_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
/* {% block show_title %}*/
/*     {{ admin.trans(name) }}*/
/* {% endblock %}*/
/* */
/* {% block show_field %}*/
/*     <tr class="sonata-ba-view-container history-audit-compare">*/
/*         {% if elements[field_name] is defined %}*/
/*             {{ elements[field_name]|render_view_element_compare(object, object_compare) }}*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endblock %}*/
/* */
