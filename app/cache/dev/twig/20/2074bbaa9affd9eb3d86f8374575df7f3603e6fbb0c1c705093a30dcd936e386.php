<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_05d9e95d677b43e2f10180b256064c539a4025fde7673b662044ca76de16a684 extends Twig_Template
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
        $__internal_3d2ee66b33b0d9b71c4821d7674447741beb359847e39c30a79d34f733ea36af = $this->env->getExtension("native_profiler");
        $__internal_3d2ee66b33b0d9b71c4821d7674447741beb359847e39c30a79d34f733ea36af->enter($__internal_3d2ee66b33b0d9b71c4821d7674447741beb359847e39c30a79d34f733ea36af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d2ee66b33b0d9b71c4821d7674447741beb359847e39c30a79d34f733ea36af->leave($__internal_3d2ee66b33b0d9b71c4821d7674447741beb359847e39c30a79d34f733ea36af_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cdc31b2825c14ce0c5d4613cfcb89e253f7c47a9187d8ba32beb27f73d03b70f = $this->env->getExtension("native_profiler");
        $__internal_cdc31b2825c14ce0c5d4613cfcb89e253f7c47a9187d8ba32beb27f73d03b70f->enter($__internal_cdc31b2825c14ce0c5d4613cfcb89e253f7c47a9187d8ba32beb27f73d03b70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_cdc31b2825c14ce0c5d4613cfcb89e253f7c47a9187d8ba32beb27f73d03b70f->leave($__internal_cdc31b2825c14ce0c5d4613cfcb89e253f7c47a9187d8ba32beb27f73d03b70f_prof);

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
