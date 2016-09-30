<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_1b3f96222e6ee18d291a31d035aad93a6a75558fce89ceaf1a9404eb3acb6158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_9a52bfd09227a31f0ef86b939448f6b9f4b19c38954154d0ce878a40f1a80978 = $this->env->getExtension("native_profiler");
        $__internal_9a52bfd09227a31f0ef86b939448f6b9f4b19c38954154d0ce878a40f1a80978->enter($__internal_9a52bfd09227a31f0ef86b939448f6b9f4b19c38954154d0ce878a40f1a80978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a52bfd09227a31f0ef86b939448f6b9f4b19c38954154d0ce878a40f1a80978->leave($__internal_9a52bfd09227a31f0ef86b939448f6b9f4b19c38954154d0ce878a40f1a80978_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9201c8880a3777b7497a88a5621e78525dc7a9d913870428f7c4e8465279b06a = $this->env->getExtension("native_profiler");
        $__internal_9201c8880a3777b7497a88a5621e78525dc7a9d913870428f7c4e8465279b06a->enter($__internal_9201c8880a3777b7497a88a5621e78525dc7a9d913870428f7c4e8465279b06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_9201c8880a3777b7497a88a5621e78525dc7a9d913870428f7c4e8465279b06a->leave($__internal_9201c8880a3777b7497a88a5621e78525dc7a9d913870428f7c4e8465279b06a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
