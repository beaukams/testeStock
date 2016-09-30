<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_a412f54053c6fe81ce223d8f50028185632921e0b3bf06d79e9aada9baa27ded extends Twig_Template
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
        $__internal_f20cb00790382f26a4975fe486a1d35210e5f79b9de4e654b7bdce178d23b25f = $this->env->getExtension("native_profiler");
        $__internal_f20cb00790382f26a4975fe486a1d35210e5f79b9de4e654b7bdce178d23b25f->enter($__internal_f20cb00790382f26a4975fe486a1d35210e5f79b9de4e654b7bdce178d23b25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f20cb00790382f26a4975fe486a1d35210e5f79b9de4e654b7bdce178d23b25f->leave($__internal_f20cb00790382f26a4975fe486a1d35210e5f79b9de4e654b7bdce178d23b25f_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c1686133fe404c7d4bf98fcdbe45724393f53a3e47ba7e0df74cdd958430aed3 = $this->env->getExtension("native_profiler");
        $__internal_c1686133fe404c7d4bf98fcdbe45724393f53a3e47ba7e0df74cdd958430aed3->enter($__internal_c1686133fe404c7d4bf98fcdbe45724393f53a3e47ba7e0df74cdd958430aed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_c1686133fe404c7d4bf98fcdbe45724393f53a3e47ba7e0df74cdd958430aed3->leave($__internal_c1686133fe404c7d4bf98fcdbe45724393f53a3e47ba7e0df74cdd958430aed3_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_6b848aabe6ee29c3e5d3e58d3ab074fab0519d0da7b1f18723e5543aa52b4d57 = $this->env->getExtension("native_profiler");
        $__internal_6b848aabe6ee29c3e5d3e58d3ab074fab0519d0da7b1f18723e5543aa52b4d57->enter($__internal_6b848aabe6ee29c3e5d3e58d3ab074fab0519d0da7b1f18723e5543aa52b4d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_6b848aabe6ee29c3e5d3e58d3ab074fab0519d0da7b1f18723e5543aa52b4d57->leave($__internal_6b848aabe6ee29c3e5d3e58d3ab074fab0519d0da7b1f18723e5543aa52b4d57_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_a3322de9e2f24bc06f49b76f63c890663d8a0f42ab94aafa36c547ccefa8b5bd = $this->env->getExtension("native_profiler");
        $__internal_a3322de9e2f24bc06f49b76f63c890663d8a0f42ab94aafa36c547ccefa8b5bd->enter($__internal_a3322de9e2f24bc06f49b76f63c890663d8a0f42ab94aafa36c547ccefa8b5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_a3322de9e2f24bc06f49b76f63c890663d8a0f42ab94aafa36c547ccefa8b5bd->leave($__internal_a3322de9e2f24bc06f49b76f63c890663d8a0f42ab94aafa36c547ccefa8b5bd_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_a7e72789c7adad91d4b9ba25589dbb806ba4b929efb61b8b33ea991fed2d3301 = $this->env->getExtension("native_profiler");
        $__internal_a7e72789c7adad91d4b9ba25589dbb806ba4b929efb61b8b33ea991fed2d3301->enter($__internal_a7e72789c7adad91d4b9ba25589dbb806ba4b929efb61b8b33ea991fed2d3301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_a7e72789c7adad91d4b9ba25589dbb806ba4b929efb61b8b33ea991fed2d3301->leave($__internal_a7e72789c7adad91d4b9ba25589dbb806ba4b929efb61b8b33ea991fed2d3301_prof);

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
