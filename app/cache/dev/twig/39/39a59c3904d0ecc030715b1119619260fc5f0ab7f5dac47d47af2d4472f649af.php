<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_b310f7ac041203ee33d8f4f1c984ee2af1c8805aab9a38b7da0297979e45629d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_9c0dff4cba94a063b43149e7c6d346e62b8522b19a8df77c7c517aef614adb69 = $this->env->getExtension("native_profiler");
        $__internal_9c0dff4cba94a063b43149e7c6d346e62b8522b19a8df77c7c517aef614adb69->enter($__internal_9c0dff4cba94a063b43149e7c6d346e62b8522b19a8df77c7c517aef614adb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c0dff4cba94a063b43149e7c6d346e62b8522b19a8df77c7c517aef614adb69->leave($__internal_9c0dff4cba94a063b43149e7c6d346e62b8522b19a8df77c7c517aef614adb69_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8bee3332a05c1596217e15c4a4a2136662ec158d7f4c8faba9c5d396cdb8114 = $this->env->getExtension("native_profiler");
        $__internal_d8bee3332a05c1596217e15c4a4a2136662ec158d7f4c8faba9c5d396cdb8114->enter($__internal_d8bee3332a05c1596217e15c4a4a2136662ec158d7f4c8faba9c5d396cdb8114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d8bee3332a05c1596217e15c4a4a2136662ec158d7f4c8faba9c5d396cdb8114->leave($__internal_d8bee3332a05c1596217e15c4a4a2136662ec158d7f4c8faba9c5d396cdb8114_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
