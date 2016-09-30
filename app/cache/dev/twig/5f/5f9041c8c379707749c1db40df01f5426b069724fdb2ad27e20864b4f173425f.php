<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_e84e927f59ac1e704b37ca688041b152e14ac39ae2b30de57970771648fbfb80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_13a1a71254db04ee4048abae8ae410b7258c692191f5e6b33cd750aef52dc3f1 = $this->env->getExtension("native_profiler");
        $__internal_13a1a71254db04ee4048abae8ae410b7258c692191f5e6b33cd750aef52dc3f1->enter($__internal_13a1a71254db04ee4048abae8ae410b7258c692191f5e6b33cd750aef52dc3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a1a71254db04ee4048abae8ae410b7258c692191f5e6b33cd750aef52dc3f1->leave($__internal_13a1a71254db04ee4048abae8ae410b7258c692191f5e6b33cd750aef52dc3f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dfc7fb72f7a4d0b28c68ffbbe9de4aae64354fae008eebcde63cf4ef309818df = $this->env->getExtension("native_profiler");
        $__internal_dfc7fb72f7a4d0b28c68ffbbe9de4aae64354fae008eebcde63cf4ef309818df->enter($__internal_dfc7fb72f7a4d0b28c68ffbbe9de4aae64354fae008eebcde63cf4ef309818df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_dfc7fb72f7a4d0b28c68ffbbe9de4aae64354fae008eebcde63cf4ef309818df->leave($__internal_dfc7fb72f7a4d0b28c68ffbbe9de4aae64354fae008eebcde63cf4ef309818df_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
