<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_bc90f42aa4c15d42430845d6b79ecfe1ebc3c92301ebac4a36872514d42d8297 extends Twig_Template
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
        $__internal_079d3c25619fb32875c16624bc4dddc950c42c3a25d981f7eb9dd14b8792ae90 = $this->env->getExtension("native_profiler");
        $__internal_079d3c25619fb32875c16624bc4dddc950c42c3a25d981f7eb9dd14b8792ae90->enter($__internal_079d3c25619fb32875c16624bc4dddc950c42c3a25d981f7eb9dd14b8792ae90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_079d3c25619fb32875c16624bc4dddc950c42c3a25d981f7eb9dd14b8792ae90->leave($__internal_079d3c25619fb32875c16624bc4dddc950c42c3a25d981f7eb9dd14b8792ae90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49b27a3f6c81432d665cb36f5e4e6dc86b7a3cfbf564cde6903f228848d1394c = $this->env->getExtension("native_profiler");
        $__internal_49b27a3f6c81432d665cb36f5e4e6dc86b7a3cfbf564cde6903f228848d1394c->enter($__internal_49b27a3f6c81432d665cb36f5e4e6dc86b7a3cfbf564cde6903f228848d1394c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_49b27a3f6c81432d665cb36f5e4e6dc86b7a3cfbf564cde6903f228848d1394c->leave($__internal_49b27a3f6c81432d665cb36f5e4e6dc86b7a3cfbf564cde6903f228848d1394c_prof);

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
