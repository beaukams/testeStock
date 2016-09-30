<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_dd6f90c0eaadbab7d12d6b203b6e6704677fc81797514adb7e37767ef0be5a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7283846f5dee2cac7a76756a30eb35a20a11d3fba5c9d79e13f7dc7ec51bab6e = $this->env->getExtension("native_profiler");
        $__internal_7283846f5dee2cac7a76756a30eb35a20a11d3fba5c9d79e13f7dc7ec51bab6e->enter($__internal_7283846f5dee2cac7a76756a30eb35a20a11d3fba5c9d79e13f7dc7ec51bab6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7283846f5dee2cac7a76756a30eb35a20a11d3fba5c9d79e13f7dc7ec51bab6e->leave($__internal_7283846f5dee2cac7a76756a30eb35a20a11d3fba5c9d79e13f7dc7ec51bab6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7039d5641d174b26c89ec12576e41c974b786c54ea93c035c1d03c8f1c79f6b = $this->env->getExtension("native_profiler");
        $__internal_a7039d5641d174b26c89ec12576e41c974b786c54ea93c035c1d03c8f1c79f6b->enter($__internal_a7039d5641d174b26c89ec12576e41c974b786c54ea93c035c1d03c8f1c79f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a7039d5641d174b26c89ec12576e41c974b786c54ea93c035c1d03c8f1c79f6b->leave($__internal_a7039d5641d174b26c89ec12576e41c974b786c54ea93c035c1d03c8f1c79f6b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
