<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_238edd85bd07e421b4fc290c2ae49927de6755beaebaa71ed1a7f124b02edc71 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97b4cc40510aa9aee74dd8dd4d6eb81f5639f2b91dde42dfced6aeb0837e493f = $this->env->getExtension("native_profiler");
        $__internal_97b4cc40510aa9aee74dd8dd4d6eb81f5639f2b91dde42dfced6aeb0837e493f->enter($__internal_97b4cc40510aa9aee74dd8dd4d6eb81f5639f2b91dde42dfced6aeb0837e493f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97b4cc40510aa9aee74dd8dd4d6eb81f5639f2b91dde42dfced6aeb0837e493f->leave($__internal_97b4cc40510aa9aee74dd8dd4d6eb81f5639f2b91dde42dfced6aeb0837e493f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_82e45c3164469f832cf7f18f0e8940ae6e323e3cfc1c0a90aaedd2c0121dce13 = $this->env->getExtension("native_profiler");
        $__internal_82e45c3164469f832cf7f18f0e8940ae6e323e3cfc1c0a90aaedd2c0121dce13->enter($__internal_82e45c3164469f832cf7f18f0e8940ae6e323e3cfc1c0a90aaedd2c0121dce13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_82e45c3164469f832cf7f18f0e8940ae6e323e3cfc1c0a90aaedd2c0121dce13->leave($__internal_82e45c3164469f832cf7f18f0e8940ae6e323e3cfc1c0a90aaedd2c0121dce13_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
