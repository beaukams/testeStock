<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ddf73520061401d8c8b5614bd4f95c147285615f98178e9208881d0dc789cf7b extends Twig_Template
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
        $__internal_2413e0dce578c1a2e4f913076884c1dff91a670f93c7e0670616990533bf189d = $this->env->getExtension("native_profiler");
        $__internal_2413e0dce578c1a2e4f913076884c1dff91a670f93c7e0670616990533bf189d->enter($__internal_2413e0dce578c1a2e4f913076884c1dff91a670f93c7e0670616990533bf189d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2413e0dce578c1a2e4f913076884c1dff91a670f93c7e0670616990533bf189d->leave($__internal_2413e0dce578c1a2e4f913076884c1dff91a670f93c7e0670616990533bf189d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ef587fa3cc8c097959639c4a261d25f659e2f31eca5ec25cf6192688c35dd50 = $this->env->getExtension("native_profiler");
        $__internal_8ef587fa3cc8c097959639c4a261d25f659e2f31eca5ec25cf6192688c35dd50->enter($__internal_8ef587fa3cc8c097959639c4a261d25f659e2f31eca5ec25cf6192688c35dd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8ef587fa3cc8c097959639c4a261d25f659e2f31eca5ec25cf6192688c35dd50->leave($__internal_8ef587fa3cc8c097959639c4a261d25f659e2f31eca5ec25cf6192688c35dd50_prof);

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
