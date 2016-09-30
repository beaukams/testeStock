<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_1262056e8d5c3f691f294e02909f55671ea3057ae9835a5ddf8e1d30b07487fe extends Twig_Template
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
        $__internal_bc4f55020540bff52d39059259c7444b0cd1c8ff62af7d6fe4aa6b25b0bd2544 = $this->env->getExtension("native_profiler");
        $__internal_bc4f55020540bff52d39059259c7444b0cd1c8ff62af7d6fe4aa6b25b0bd2544->enter($__internal_bc4f55020540bff52d39059259c7444b0cd1c8ff62af7d6fe4aa6b25b0bd2544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc4f55020540bff52d39059259c7444b0cd1c8ff62af7d6fe4aa6b25b0bd2544->leave($__internal_bc4f55020540bff52d39059259c7444b0cd1c8ff62af7d6fe4aa6b25b0bd2544_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f1da63008cb09173b3dffee2d1770e1aa903483f12a0d8ee4dee354258cfd9c = $this->env->getExtension("native_profiler");
        $__internal_3f1da63008cb09173b3dffee2d1770e1aa903483f12a0d8ee4dee354258cfd9c->enter($__internal_3f1da63008cb09173b3dffee2d1770e1aa903483f12a0d8ee4dee354258cfd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3f1da63008cb09173b3dffee2d1770e1aa903483f12a0d8ee4dee354258cfd9c->leave($__internal_3f1da63008cb09173b3dffee2d1770e1aa903483f12a0d8ee4dee354258cfd9c_prof);

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
