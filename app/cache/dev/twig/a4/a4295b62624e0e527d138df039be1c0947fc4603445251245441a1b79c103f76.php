<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_fd622bf31c399990cdcf57f3993aad0558fee2549084f5f1f31e7f66c73b09f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_fe92c61df5659423dd5c46153b5cc553816b238251c07673cfc2610c0c1bdee0 = $this->env->getExtension("native_profiler");
        $__internal_fe92c61df5659423dd5c46153b5cc553816b238251c07673cfc2610c0c1bdee0->enter($__internal_fe92c61df5659423dd5c46153b5cc553816b238251c07673cfc2610c0c1bdee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe92c61df5659423dd5c46153b5cc553816b238251c07673cfc2610c0c1bdee0->leave($__internal_fe92c61df5659423dd5c46153b5cc553816b238251c07673cfc2610c0c1bdee0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b53d1a9b3b2aca26d76331314c94a6190dc058809eb6cde20be8a148b476e28 = $this->env->getExtension("native_profiler");
        $__internal_9b53d1a9b3b2aca26d76331314c94a6190dc058809eb6cde20be8a148b476e28->enter($__internal_9b53d1a9b3b2aca26d76331314c94a6190dc058809eb6cde20be8a148b476e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_9b53d1a9b3b2aca26d76331314c94a6190dc058809eb6cde20be8a148b476e28->leave($__internal_9b53d1a9b3b2aca26d76331314c94a6190dc058809eb6cde20be8a148b476e28_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
