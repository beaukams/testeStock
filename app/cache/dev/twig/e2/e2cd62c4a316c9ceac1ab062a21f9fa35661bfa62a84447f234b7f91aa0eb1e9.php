<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_43ab0f1acf5109afc3f436e7653f41840790cffabc7cf1fcdb71de76545b7a0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_1a0d6277d0c408802e889100c5dd822ee32e0b72c2c32ae2964f2a556f081dd5 = $this->env->getExtension("native_profiler");
        $__internal_1a0d6277d0c408802e889100c5dd822ee32e0b72c2c32ae2964f2a556f081dd5->enter($__internal_1a0d6277d0c408802e889100c5dd822ee32e0b72c2c32ae2964f2a556f081dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a0d6277d0c408802e889100c5dd822ee32e0b72c2c32ae2964f2a556f081dd5->leave($__internal_1a0d6277d0c408802e889100c5dd822ee32e0b72c2c32ae2964f2a556f081dd5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db001e810a8ad184322ccf7b4051748e117fe7663372c8d6062a8672b52ad414 = $this->env->getExtension("native_profiler");
        $__internal_db001e810a8ad184322ccf7b4051748e117fe7663372c8d6062a8672b52ad414->enter($__internal_db001e810a8ad184322ccf7b4051748e117fe7663372c8d6062a8672b52ad414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_db001e810a8ad184322ccf7b4051748e117fe7663372c8d6062a8672b52ad414->leave($__internal_db001e810a8ad184322ccf7b4051748e117fe7663372c8d6062a8672b52ad414_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
