<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_ba55cb34bf4080c4962d605227010670d820d2c6959f123ed0975e73d111780b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_426649916568802af7450515f3933edfa69d1c1d22d5f3cfb7e29d7d44758743 = $this->env->getExtension("native_profiler");
        $__internal_426649916568802af7450515f3933edfa69d1c1d22d5f3cfb7e29d7d44758743->enter($__internal_426649916568802af7450515f3933edfa69d1c1d22d5f3cfb7e29d7d44758743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_426649916568802af7450515f3933edfa69d1c1d22d5f3cfb7e29d7d44758743->leave($__internal_426649916568802af7450515f3933edfa69d1c1d22d5f3cfb7e29d7d44758743_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cea4172bfe780c5c99e8ec716d2636baeaf5b441198a70b9f7aeabf3898bd9e2 = $this->env->getExtension("native_profiler");
        $__internal_cea4172bfe780c5c99e8ec716d2636baeaf5b441198a70b9f7aeabf3898bd9e2->enter($__internal_cea4172bfe780c5c99e8ec716d2636baeaf5b441198a70b9f7aeabf3898bd9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cea4172bfe780c5c99e8ec716d2636baeaf5b441198a70b9f7aeabf3898bd9e2->leave($__internal_cea4172bfe780c5c99e8ec716d2636baeaf5b441198a70b9f7aeabf3898bd9e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
