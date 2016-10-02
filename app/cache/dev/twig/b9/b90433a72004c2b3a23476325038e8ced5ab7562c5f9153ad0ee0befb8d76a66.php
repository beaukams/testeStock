<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_d3848f71fa557a37161ef68c8260dd868e97f295cb2962924f698b9797695138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1185f26af03e942dbf1b50e3648c10eb9fe8ab845087bf0051638411e27fd38 = $this->env->getExtension("native_profiler");
        $__internal_d1185f26af03e942dbf1b50e3648c10eb9fe8ab845087bf0051638411e27fd38->enter($__internal_d1185f26af03e942dbf1b50e3648c10eb9fe8ab845087bf0051638411e27fd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_d1185f26af03e942dbf1b50e3648c10eb9fe8ab845087bf0051638411e27fd38->leave($__internal_d1185f26af03e942dbf1b50e3648c10eb9fe8ab845087bf0051638411e27fd38_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e98129182a163720b3566e736bee58bd43a289099107a4f1d190d7d77d6e0eed = $this->env->getExtension("native_profiler");
        $__internal_e98129182a163720b3566e736bee58bd43a289099107a4f1d190d7d77d6e0eed->enter($__internal_e98129182a163720b3566e736bee58bd43a289099107a4f1d190d7d77d6e0eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_e98129182a163720b3566e736bee58bd43a289099107a4f1d190d7d77d6e0eed->leave($__internal_e98129182a163720b3566e736bee58bd43a289099107a4f1d190d7d77d6e0eed_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_2745257f80cc9d6c4ed83dcda0bf5aa7ef779f1c357319275c30cc8712cae26e = $this->env->getExtension("native_profiler");
        $__internal_2745257f80cc9d6c4ed83dcda0bf5aa7ef779f1c357319275c30cc8712cae26e->enter($__internal_2745257f80cc9d6c4ed83dcda0bf5aa7ef779f1c357319275c30cc8712cae26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_2745257f80cc9d6c4ed83dcda0bf5aa7ef779f1c357319275c30cc8712cae26e->leave($__internal_2745257f80cc9d6c4ed83dcda0bf5aa7ef779f1c357319275c30cc8712cae26e_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_e473cfc84edf954a8c70e913ee5349a286c651a49c40a319e91d17c9042fbb71 = $this->env->getExtension("native_profiler");
        $__internal_e473cfc84edf954a8c70e913ee5349a286c651a49c40a319e91d17c9042fbb71->enter($__internal_e473cfc84edf954a8c70e913ee5349a286c651a49c40a319e91d17c9042fbb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_e473cfc84edf954a8c70e913ee5349a286c651a49c40a319e91d17c9042fbb71->leave($__internal_e473cfc84edf954a8c70e913ee5349a286c651a49c40a319e91d17c9042fbb71_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
/* <div>*/
/*     <div class="sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/*         {% block label %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endblock %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */