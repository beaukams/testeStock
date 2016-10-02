<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_464f8351a4f5da9636b77689f5873846556ac5d7674613c2ed7c00eab5fa5b30 extends Twig_Template
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
        $__internal_695ba2a2015dde1e1588c46696b9fad94313d15e8a637ceb1c7aded6b92d5891 = $this->env->getExtension("native_profiler");
        $__internal_695ba2a2015dde1e1588c46696b9fad94313d15e8a637ceb1c7aded6b92d5891->enter($__internal_695ba2a2015dde1e1588c46696b9fad94313d15e8a637ceb1c7aded6b92d5891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_695ba2a2015dde1e1588c46696b9fad94313d15e8a637ceb1c7aded6b92d5891->leave($__internal_695ba2a2015dde1e1588c46696b9fad94313d15e8a637ceb1c7aded6b92d5891_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5bc3631359ff9b6d7dba610096accc5ef016a7618d6e1afcf8812986afc47409 = $this->env->getExtension("native_profiler");
        $__internal_5bc3631359ff9b6d7dba610096accc5ef016a7618d6e1afcf8812986afc47409->enter($__internal_5bc3631359ff9b6d7dba610096accc5ef016a7618d6e1afcf8812986afc47409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5bc3631359ff9b6d7dba610096accc5ef016a7618d6e1afcf8812986afc47409->leave($__internal_5bc3631359ff9b6d7dba610096accc5ef016a7618d6e1afcf8812986afc47409_prof);

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
