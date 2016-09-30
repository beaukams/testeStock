<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_cbf45d2df132fe022d2032956e07240a7bca0f93b097b719f51eb90c434f6512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66fbf38c5a5e19f523b44389b55758f918a9b7d488bb54af99bbd4502a168f97 = $this->env->getExtension("native_profiler");
        $__internal_66fbf38c5a5e19f523b44389b55758f918a9b7d488bb54af99bbd4502a168f97->enter($__internal_66fbf38c5a5e19f523b44389b55758f918a9b7d488bb54af99bbd4502a168f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66fbf38c5a5e19f523b44389b55758f918a9b7d488bb54af99bbd4502a168f97->leave($__internal_66fbf38c5a5e19f523b44389b55758f918a9b7d488bb54af99bbd4502a168f97_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_fe960d4cc6762f53ed0b86db3c67317e7a6665923d781f78191c5c847b44c98e = $this->env->getExtension("native_profiler");
        $__internal_fe960d4cc6762f53ed0b86db3c67317e7a6665923d781f78191c5c847b44c98e->enter($__internal_fe960d4cc6762f53ed0b86db3c67317e7a6665923d781f78191c5c847b44c98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_fe960d4cc6762f53ed0b86db3c67317e7a6665923d781f78191c5c847b44c98e->leave($__internal_fe960d4cc6762f53ed0b86db3c67317e7a6665923d781f78191c5c847b44c98e_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_cc1a95b33687d5414c7599c014fc19a7b731979d8b11ca65e7309ff36fedbb9e = $this->env->getExtension("native_profiler");
        $__internal_cc1a95b33687d5414c7599c014fc19a7b731979d8b11ca65e7309ff36fedbb9e->enter($__internal_cc1a95b33687d5414c7599c014fc19a7b731979d8b11ca65e7309ff36fedbb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_cc1a95b33687d5414c7599c014fc19a7b731979d8b11ca65e7309ff36fedbb9e->leave($__internal_cc1a95b33687d5414c7599c014fc19a7b731979d8b11ca65e7309ff36fedbb9e_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_20765344684570ba7c2cb3fbc236a7cdc0c36a96cf88bdb7b1d55bcdeaded599 = $this->env->getExtension("native_profiler");
        $__internal_20765344684570ba7c2cb3fbc236a7cdc0c36a96cf88bdb7b1d55bcdeaded599->enter($__internal_20765344684570ba7c2cb3fbc236a7cdc0c36a96cf88bdb7b1d55bcdeaded599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_20765344684570ba7c2cb3fbc236a7cdc0c36a96cf88bdb7b1d55bcdeaded599->leave($__internal_20765344684570ba7c2cb3fbc236a7cdc0c36a96cf88bdb7b1d55bcdeaded599_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
