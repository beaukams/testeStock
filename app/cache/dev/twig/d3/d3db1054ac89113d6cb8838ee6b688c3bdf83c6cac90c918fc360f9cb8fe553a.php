<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_c8a68ef01512497ece3804508598fd561af5ca6e6a6dda26843c2fbe744a1fd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdc9de4bc1ac5e13f941493059e29006b75b31d12a9912be57d4b564e49c3ba1 = $this->env->getExtension("native_profiler");
        $__internal_bdc9de4bc1ac5e13f941493059e29006b75b31d12a9912be57d4b564e49c3ba1->enter($__internal_bdc9de4bc1ac5e13f941493059e29006b75b31d12a9912be57d4b564e49c3ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdc9de4bc1ac5e13f941493059e29006b75b31d12a9912be57d4b564e49c3ba1->leave($__internal_bdc9de4bc1ac5e13f941493059e29006b75b31d12a9912be57d4b564e49c3ba1_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_8a518585cb83a2c3c20beec18031797d22e601cae3a9ebd5d44580bff8315ac6 = $this->env->getExtension("native_profiler");
        $__internal_8a518585cb83a2c3c20beec18031797d22e601cae3a9ebd5d44580bff8315ac6->enter($__internal_8a518585cb83a2c3c20beec18031797d22e601cae3a9ebd5d44580bff8315ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_8a518585cb83a2c3c20beec18031797d22e601cae3a9ebd5d44580bff8315ac6->leave($__internal_8a518585cb83a2c3c20beec18031797d22e601cae3a9ebd5d44580bff8315ac6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
