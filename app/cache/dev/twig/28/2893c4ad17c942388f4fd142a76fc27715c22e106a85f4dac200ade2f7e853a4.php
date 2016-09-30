<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c0ae03a1dbf556e88eb1f81c957913c453353f2e3506e8884c12fa3fedbce7b8 extends Twig_Template
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
        $__internal_5bb8d2e336818edf75b61c8225a9b558ab0262c85cad82e57e720757a64639ae = $this->env->getExtension("native_profiler");
        $__internal_5bb8d2e336818edf75b61c8225a9b558ab0262c85cad82e57e720757a64639ae->enter($__internal_5bb8d2e336818edf75b61c8225a9b558ab0262c85cad82e57e720757a64639ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bb8d2e336818edf75b61c8225a9b558ab0262c85cad82e57e720757a64639ae->leave($__internal_5bb8d2e336818edf75b61c8225a9b558ab0262c85cad82e57e720757a64639ae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9975dadad1363784a96900cd2ee7f89e411b32f7143e46b7a7cce6a70295054 = $this->env->getExtension("native_profiler");
        $__internal_b9975dadad1363784a96900cd2ee7f89e411b32f7143e46b7a7cce6a70295054->enter($__internal_b9975dadad1363784a96900cd2ee7f89e411b32f7143e46b7a7cce6a70295054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_b9975dadad1363784a96900cd2ee7f89e411b32f7143e46b7a7cce6a70295054->leave($__internal_b9975dadad1363784a96900cd2ee7f89e411b32f7143e46b7a7cce6a70295054_prof);

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
