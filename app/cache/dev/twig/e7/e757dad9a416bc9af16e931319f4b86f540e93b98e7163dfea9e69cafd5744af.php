<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_3a1ece09a1e6520cdfad7707d1b949439dfc3df74b6135eb4f7cc2d2c2a92a09 extends Twig_Template
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
        $__internal_caa080a32f9695ee7ad014af206ce61e233dadfe85c7c3fd44739c3f29853736 = $this->env->getExtension("native_profiler");
        $__internal_caa080a32f9695ee7ad014af206ce61e233dadfe85c7c3fd44739c3f29853736->enter($__internal_caa080a32f9695ee7ad014af206ce61e233dadfe85c7c3fd44739c3f29853736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caa080a32f9695ee7ad014af206ce61e233dadfe85c7c3fd44739c3f29853736->leave($__internal_caa080a32f9695ee7ad014af206ce61e233dadfe85c7c3fd44739c3f29853736_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_235ae3ebb0b6b307478ef5e2763df1ac50f8aa5027224917af5e9b515ec4cee8 = $this->env->getExtension("native_profiler");
        $__internal_235ae3ebb0b6b307478ef5e2763df1ac50f8aa5027224917af5e9b515ec4cee8->enter($__internal_235ae3ebb0b6b307478ef5e2763df1ac50f8aa5027224917af5e9b515ec4cee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_235ae3ebb0b6b307478ef5e2763df1ac50f8aa5027224917af5e9b515ec4cee8->leave($__internal_235ae3ebb0b6b307478ef5e2763df1ac50f8aa5027224917af5e9b515ec4cee8_prof);

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
