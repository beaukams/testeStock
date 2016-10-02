<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_e4826a721ebfbf427ec966ce5581ca66b4f80028f4e1b6e5b95c7a189e0455d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_95c63bbf280b7fc9323fd012cbf0d204ac12fa763a7baef2638275af97e8722a = $this->env->getExtension("native_profiler");
        $__internal_95c63bbf280b7fc9323fd012cbf0d204ac12fa763a7baef2638275af97e8722a->enter($__internal_95c63bbf280b7fc9323fd012cbf0d204ac12fa763a7baef2638275af97e8722a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95c63bbf280b7fc9323fd012cbf0d204ac12fa763a7baef2638275af97e8722a->leave($__internal_95c63bbf280b7fc9323fd012cbf0d204ac12fa763a7baef2638275af97e8722a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51a97e1f80a167a29fd89558d30e8494f0bedfb2dec9fc1b60a086903ab01ff2 = $this->env->getExtension("native_profiler");
        $__internal_51a97e1f80a167a29fd89558d30e8494f0bedfb2dec9fc1b60a086903ab01ff2->enter($__internal_51a97e1f80a167a29fd89558d30e8494f0bedfb2dec9fc1b60a086903ab01ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_51a97e1f80a167a29fd89558d30e8494f0bedfb2dec9fc1b60a086903ab01ff2->leave($__internal_51a97e1f80a167a29fd89558d30e8494f0bedfb2dec9fc1b60a086903ab01ff2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
