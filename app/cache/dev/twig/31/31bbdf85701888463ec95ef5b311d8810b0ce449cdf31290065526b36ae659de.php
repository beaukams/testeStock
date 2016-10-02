<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_1496b642ae386b388ba55e8acf81755df86063b1e6c00e40937077bd6000ec12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44bdb4111eee4d50489bb40f09bec33921a9e893d51ae0142d3a000cafea575d = $this->env->getExtension("native_profiler");
        $__internal_44bdb4111eee4d50489bb40f09bec33921a9e893d51ae0142d3a000cafea575d->enter($__internal_44bdb4111eee4d50489bb40f09bec33921a9e893d51ae0142d3a000cafea575d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44bdb4111eee4d50489bb40f09bec33921a9e893d51ae0142d3a000cafea575d->leave($__internal_44bdb4111eee4d50489bb40f09bec33921a9e893d51ae0142d3a000cafea575d_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b19a566a96b21126c57827a3ca3df096b0a73d1d61dcc2a28094c72d3a99778a = $this->env->getExtension("native_profiler");
        $__internal_b19a566a96b21126c57827a3ca3df096b0a73d1d61dcc2a28094c72d3a99778a->enter($__internal_b19a566a96b21126c57827a3ca3df096b0a73d1d61dcc2a28094c72d3a99778a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_b19a566a96b21126c57827a3ca3df096b0a73d1d61dcc2a28094c72d3a99778a->leave($__internal_b19a566a96b21126c57827a3ca3df096b0a73d1d61dcc2a28094c72d3a99778a_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_0a999b26099608f9ff9e5303e821e4299ee8f563c459486c887669be6c55e771 = $this->env->getExtension("native_profiler");
        $__internal_0a999b26099608f9ff9e5303e821e4299ee8f563c459486c887669be6c55e771->enter($__internal_0a999b26099608f9ff9e5303e821e4299ee8f563c459486c887669be6c55e771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_0a999b26099608f9ff9e5303e821e4299ee8f563c459486c887669be6c55e771->leave($__internal_0a999b26099608f9ff9e5303e821e4299ee8f563c459486c887669be6c55e771_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_b6b05715aedfc1fb93d69b15a44edaefb46db0118a619d61b0505d26ac27845e = $this->env->getExtension("native_profiler");
        $__internal_b6b05715aedfc1fb93d69b15a44edaefb46db0118a619d61b0505d26ac27845e->enter($__internal_b6b05715aedfc1fb93d69b15a44edaefb46db0118a619d61b0505d26ac27845e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_b6b05715aedfc1fb93d69b15a44edaefb46db0118a619d61b0505d26ac27845e->leave($__internal_b6b05715aedfc1fb93d69b15a44edaefb46db0118a619d61b0505d26ac27845e_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_2e48a7ae6727cbf67ae29c5dc8b02637c0aef136dc3eef33d1bac89f7e523d63 = $this->env->getExtension("native_profiler");
        $__internal_2e48a7ae6727cbf67ae29c5dc8b02637c0aef136dc3eef33d1bac89f7e523d63->enter($__internal_2e48a7ae6727cbf67ae29c5dc8b02637c0aef136dc3eef33d1bac89f7e523d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_2e48a7ae6727cbf67ae29c5dc8b02637c0aef136dc3eef33d1bac89f7e523d63->leave($__internal_2e48a7ae6727cbf67ae29c5dc8b02637c0aef136dc3eef33d1bac89f7e523d63_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  86 => 24,  76 => 22,  70 => 21,  62 => 24,  59 => 21,  53 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}*/
/* */
/* {% block form %}*/
/*     {% block form_acl_roles %}*/
/*         {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/*     {% block form_acl_users %}*/
/*         {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
