<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_4f4f77bf93e8da9aa932728bc98a8014b3bb3612a83ebcbcbc1671ebe63f8e5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0515e158cc77dd2937e8091992c3b4c76fe5401c56a6843e51b14c1e93933612 = $this->env->getExtension("native_profiler");
        $__internal_0515e158cc77dd2937e8091992c3b4c76fe5401c56a6843e51b14c1e93933612->enter($__internal_0515e158cc77dd2937e8091992c3b4c76fe5401c56a6843e51b14c1e93933612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_0515e158cc77dd2937e8091992c3b4c76fe5401c56a6843e51b14c1e93933612->leave($__internal_0515e158cc77dd2937e8091992c3b4c76fe5401c56a6843e51b14c1e93933612_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_f7b2305856022836da0606f1ba12ba416a6b25cfcc0db77f2b9fa218bef2788d = $this->env->getExtension("native_profiler");
        $__internal_f7b2305856022836da0606f1ba12ba416a6b25cfcc0db77f2b9fa218bef2788d->enter($__internal_f7b2305856022836da0606f1ba12ba416a6b25cfcc0db77f2b9fa218bef2788d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_f7b2305856022836da0606f1ba12ba416a6b25cfcc0db77f2b9fa218bef2788d->leave($__internal_f7b2305856022836da0606f1ba12ba416a6b25cfcc0db77f2b9fa218bef2788d_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_1b0d912ee5f435673c485c19589b6ef93c53a4b1c233cfd40b7e24101bec7540 = $this->env->getExtension("native_profiler");
        $__internal_1b0d912ee5f435673c485c19589b6ef93c53a4b1c233cfd40b7e24101bec7540->enter($__internal_1b0d912ee5f435673c485c19589b6ef93c53a4b1c233cfd40b7e24101bec7540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_1b0d912ee5f435673c485c19589b6ef93c53a4b1c233cfd40b7e24101bec7540->leave($__internal_1b0d912ee5f435673c485c19589b6ef93c53a4b1c233cfd40b7e24101bec7540_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_f8e2ef62016cc9624c276f5edb567dab0f435c4c5bf69e37075fe7541b2c323d = $this->env->getExtension("native_profiler");
        $__internal_f8e2ef62016cc9624c276f5edb567dab0f435c4c5bf69e37075fe7541b2c323d->enter($__internal_f8e2ef62016cc9624c276f5edb567dab0f435c4c5bf69e37075fe7541b2c323d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_f8e2ef62016cc9624c276f5edb567dab0f435c4c5bf69e37075fe7541b2c323d->leave($__internal_f8e2ef62016cc9624c276f5edb567dab0f435c4c5bf69e37075fe7541b2c323d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
