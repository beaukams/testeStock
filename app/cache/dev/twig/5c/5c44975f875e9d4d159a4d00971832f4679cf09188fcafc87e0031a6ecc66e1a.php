<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_158b9aff85bfeb589702f7e80346c7f40e07597045e8967f43d98b63fef44bc2 extends Twig_Template
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
        $__internal_ff77a68c16bd21cdb9f909375daa4e36dea6a489e8320f53e02eb03054ef2557 = $this->env->getExtension("native_profiler");
        $__internal_ff77a68c16bd21cdb9f909375daa4e36dea6a489e8320f53e02eb03054ef2557->enter($__internal_ff77a68c16bd21cdb9f909375daa4e36dea6a489e8320f53e02eb03054ef2557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff77a68c16bd21cdb9f909375daa4e36dea6a489e8320f53e02eb03054ef2557->leave($__internal_ff77a68c16bd21cdb9f909375daa4e36dea6a489e8320f53e02eb03054ef2557_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2890c971b558bc0829c12bdfe6872790bbd8b1131b7b0d3f544596ba46e2f08e = $this->env->getExtension("native_profiler");
        $__internal_2890c971b558bc0829c12bdfe6872790bbd8b1131b7b0d3f544596ba46e2f08e->enter($__internal_2890c971b558bc0829c12bdfe6872790bbd8b1131b7b0d3f544596ba46e2f08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2890c971b558bc0829c12bdfe6872790bbd8b1131b7b0d3f544596ba46e2f08e->leave($__internal_2890c971b558bc0829c12bdfe6872790bbd8b1131b7b0d3f544596ba46e2f08e_prof);

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
