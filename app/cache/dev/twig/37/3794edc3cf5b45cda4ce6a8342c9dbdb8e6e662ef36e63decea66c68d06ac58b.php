<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_b0c7231b2d8d9f62c061748a7920500977251a338ba97a178e7547eef65f15d0 extends Twig_Template
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
        $__internal_4be29bba51b5af8ef69933db0269a64f29b929128257bbc66ad09fc6b8d31505 = $this->env->getExtension("native_profiler");
        $__internal_4be29bba51b5af8ef69933db0269a64f29b929128257bbc66ad09fc6b8d31505->enter($__internal_4be29bba51b5af8ef69933db0269a64f29b929128257bbc66ad09fc6b8d31505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4be29bba51b5af8ef69933db0269a64f29b929128257bbc66ad09fc6b8d31505->leave($__internal_4be29bba51b5af8ef69933db0269a64f29b929128257bbc66ad09fc6b8d31505_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5feb1a342e2374b0633edac275232352fe158311d38086ba596f6f2cbc5ca29 = $this->env->getExtension("native_profiler");
        $__internal_d5feb1a342e2374b0633edac275232352fe158311d38086ba596f6f2cbc5ca29->enter($__internal_d5feb1a342e2374b0633edac275232352fe158311d38086ba596f6f2cbc5ca29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d5feb1a342e2374b0633edac275232352fe158311d38086ba596f6f2cbc5ca29->leave($__internal_d5feb1a342e2374b0633edac275232352fe158311d38086ba596f6f2cbc5ca29_prof);

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
