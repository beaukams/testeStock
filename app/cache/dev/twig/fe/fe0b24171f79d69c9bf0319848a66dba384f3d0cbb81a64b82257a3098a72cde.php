<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_85d547e2d62dbd5de38cbe5c004b2ee951049169d4c21966e4dab53e27649c5d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b94f45412c678277b04ea6f1361e4b99769308054b7046a11e9d0aebe3c7bab = $this->env->getExtension("native_profiler");
        $__internal_2b94f45412c678277b04ea6f1361e4b99769308054b7046a11e9d0aebe3c7bab->enter($__internal_2b94f45412c678277b04ea6f1361e4b99769308054b7046a11e9d0aebe3c7bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b94f45412c678277b04ea6f1361e4b99769308054b7046a11e9d0aebe3c7bab->leave($__internal_2b94f45412c678277b04ea6f1361e4b99769308054b7046a11e9d0aebe3c7bab_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a4d1ee5a57bd3226da297b60e9b18a3e7cd292ed0316cbcc652e899023d20910 = $this->env->getExtension("native_profiler");
        $__internal_a4d1ee5a57bd3226da297b60e9b18a3e7cd292ed0316cbcc652e899023d20910->enter($__internal_a4d1ee5a57bd3226da297b60e9b18a3e7cd292ed0316cbcc652e899023d20910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_a4d1ee5a57bd3226da297b60e9b18a3e7cd292ed0316cbcc652e899023d20910->leave($__internal_a4d1ee5a57bd3226da297b60e9b18a3e7cd292ed0316cbcc652e899023d20910_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
