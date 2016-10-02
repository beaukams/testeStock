<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_2b71e200f281b6886a19e9a3fa1f29f886f2bc41266a6f5bd6ab71c3b5660af5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_dee611cc1b46b3bcb7d201dd934921cbbb90abbd8454e16cb0ff6124713c4d6a = $this->env->getExtension("native_profiler");
        $__internal_dee611cc1b46b3bcb7d201dd934921cbbb90abbd8454e16cb0ff6124713c4d6a->enter($__internal_dee611cc1b46b3bcb7d201dd934921cbbb90abbd8454e16cb0ff6124713c4d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dee611cc1b46b3bcb7d201dd934921cbbb90abbd8454e16cb0ff6124713c4d6a->leave($__internal_dee611cc1b46b3bcb7d201dd934921cbbb90abbd8454e16cb0ff6124713c4d6a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_662c8943b9c6c6ea5a2c13519010185abe539e629d814cbea81bca3f696cb485 = $this->env->getExtension("native_profiler");
        $__internal_662c8943b9c6c6ea5a2c13519010185abe539e629d814cbea81bca3f696cb485->enter($__internal_662c8943b9c6c6ea5a2c13519010185abe539e629d814cbea81bca3f696cb485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_662c8943b9c6c6ea5a2c13519010185abe539e629d814cbea81bca3f696cb485->leave($__internal_662c8943b9c6c6ea5a2c13519010185abe539e629d814cbea81bca3f696cb485_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
