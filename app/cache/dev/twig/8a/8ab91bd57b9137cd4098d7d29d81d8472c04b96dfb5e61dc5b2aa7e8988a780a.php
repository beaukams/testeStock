<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_020ead01d93d150bae4faef0e92b51cf19c19e288d73e9ab6fb01d817e9d9a48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_9ea0baf2542a7487a712649f9bb2766e865fad01d5ffd71ec7788e0ae5c5021a = $this->env->getExtension("native_profiler");
        $__internal_9ea0baf2542a7487a712649f9bb2766e865fad01d5ffd71ec7788e0ae5c5021a->enter($__internal_9ea0baf2542a7487a712649f9bb2766e865fad01d5ffd71ec7788e0ae5c5021a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ea0baf2542a7487a712649f9bb2766e865fad01d5ffd71ec7788e0ae5c5021a->leave($__internal_9ea0baf2542a7487a712649f9bb2766e865fad01d5ffd71ec7788e0ae5c5021a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e445cbfac29f867662410b5b1cf34b85728e1e2ee885b9fd804bb82f6019b7c9 = $this->env->getExtension("native_profiler");
        $__internal_e445cbfac29f867662410b5b1cf34b85728e1e2ee885b9fd804bb82f6019b7c9->enter($__internal_e445cbfac29f867662410b5b1cf34b85728e1e2ee885b9fd804bb82f6019b7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e445cbfac29f867662410b5b1cf34b85728e1e2ee885b9fd804bb82f6019b7c9->leave($__internal_e445cbfac29f867662410b5b1cf34b85728e1e2ee885b9fd804bb82f6019b7c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
