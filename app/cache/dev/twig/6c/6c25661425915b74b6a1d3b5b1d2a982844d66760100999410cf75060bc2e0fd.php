<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_0636e74d8f3ebd3cf4682891f97141ce96bc608d55ad594bf6b0196e24a61ff7 extends Twig_Template
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
        $__internal_71e88976d5fdf078e88445b68555df3e3e0c4853ce4cd568f4a62d5a1fe02ee8 = $this->env->getExtension("native_profiler");
        $__internal_71e88976d5fdf078e88445b68555df3e3e0c4853ce4cd568f4a62d5a1fe02ee8->enter($__internal_71e88976d5fdf078e88445b68555df3e3e0c4853ce4cd568f4a62d5a1fe02ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e88976d5fdf078e88445b68555df3e3e0c4853ce4cd568f4a62d5a1fe02ee8->leave($__internal_71e88976d5fdf078e88445b68555df3e3e0c4853ce4cd568f4a62d5a1fe02ee8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8844b02409ab07134bd453ae14bda757b7f032dedb389d8a5c7cdb1f1260c65a = $this->env->getExtension("native_profiler");
        $__internal_8844b02409ab07134bd453ae14bda757b7f032dedb389d8a5c7cdb1f1260c65a->enter($__internal_8844b02409ab07134bd453ae14bda757b7f032dedb389d8a5c7cdb1f1260c65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_8844b02409ab07134bd453ae14bda757b7f032dedb389d8a5c7cdb1f1260c65a->leave($__internal_8844b02409ab07134bd453ae14bda757b7f032dedb389d8a5c7cdb1f1260c65a_prof);

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
