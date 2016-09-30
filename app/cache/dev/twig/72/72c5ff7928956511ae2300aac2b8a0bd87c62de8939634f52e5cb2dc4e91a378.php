<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_3219a190575318f25393a502c8b8c9e6aacc33308c9c01dce1a1a36cbc7ff158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_8186f6b067fe02b5ca5e7223c8edac040225e98e570afb9f7de2c67245a050f8 = $this->env->getExtension("native_profiler");
        $__internal_8186f6b067fe02b5ca5e7223c8edac040225e98e570afb9f7de2c67245a050f8->enter($__internal_8186f6b067fe02b5ca5e7223c8edac040225e98e570afb9f7de2c67245a050f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8186f6b067fe02b5ca5e7223c8edac040225e98e570afb9f7de2c67245a050f8->leave($__internal_8186f6b067fe02b5ca5e7223c8edac040225e98e570afb9f7de2c67245a050f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e414868c9a6bb62978984dcd5e88d210a02cfd31bee94f8edd1051713bc34175 = $this->env->getExtension("native_profiler");
        $__internal_e414868c9a6bb62978984dcd5e88d210a02cfd31bee94f8edd1051713bc34175->enter($__internal_e414868c9a6bb62978984dcd5e88d210a02cfd31bee94f8edd1051713bc34175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_e414868c9a6bb62978984dcd5e88d210a02cfd31bee94f8edd1051713bc34175->leave($__internal_e414868c9a6bb62978984dcd5e88d210a02cfd31bee94f8edd1051713bc34175_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
