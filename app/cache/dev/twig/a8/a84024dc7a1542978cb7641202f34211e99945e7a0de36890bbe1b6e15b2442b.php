<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_08c63591a0dd5d453206fef16029ef83c4f63a7297dfc89d2c516d74b203540b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_614329b57d13b0aa2888daa4906fba3f3066b5ef75d96e88d2abc32199a99a96 = $this->env->getExtension("native_profiler");
        $__internal_614329b57d13b0aa2888daa4906fba3f3066b5ef75d96e88d2abc32199a99a96->enter($__internal_614329b57d13b0aa2888daa4906fba3f3066b5ef75d96e88d2abc32199a99a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_614329b57d13b0aa2888daa4906fba3f3066b5ef75d96e88d2abc32199a99a96->leave($__internal_614329b57d13b0aa2888daa4906fba3f3066b5ef75d96e88d2abc32199a99a96_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7fbd5de938f05db9b68bd729f1c2c94076821cd211e60b92479bffdda783a281 = $this->env->getExtension("native_profiler");
        $__internal_7fbd5de938f05db9b68bd729f1c2c94076821cd211e60b92479bffdda783a281->enter($__internal_7fbd5de938f05db9b68bd729f1c2c94076821cd211e60b92479bffdda783a281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_7fbd5de938f05db9b68bd729f1c2c94076821cd211e60b92479bffdda783a281->leave($__internal_7fbd5de938f05db9b68bd729f1c2c94076821cd211e60b92479bffdda783a281_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
