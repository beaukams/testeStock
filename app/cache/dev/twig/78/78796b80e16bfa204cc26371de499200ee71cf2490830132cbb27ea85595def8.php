<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_9046d47f7b1d9ccc1796862df7124287607e6a5738edd5aaaa0152a06f099ec7 extends Twig_Template
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
        $__internal_5abc98e3adc560530ca6be7fdeead66532ba05487a4f7d66e2694e37a92d214c = $this->env->getExtension("native_profiler");
        $__internal_5abc98e3adc560530ca6be7fdeead66532ba05487a4f7d66e2694e37a92d214c->enter($__internal_5abc98e3adc560530ca6be7fdeead66532ba05487a4f7d66e2694e37a92d214c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5abc98e3adc560530ca6be7fdeead66532ba05487a4f7d66e2694e37a92d214c->leave($__internal_5abc98e3adc560530ca6be7fdeead66532ba05487a4f7d66e2694e37a92d214c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50324eab5ef4359848c345245d398811d1c75d2beec32626062d1a3c87c5f5cc = $this->env->getExtension("native_profiler");
        $__internal_50324eab5ef4359848c345245d398811d1c75d2beec32626062d1a3c87c5f5cc->enter($__internal_50324eab5ef4359848c345245d398811d1c75d2beec32626062d1a3c87c5f5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_50324eab5ef4359848c345245d398811d1c75d2beec32626062d1a3c87c5f5cc->leave($__internal_50324eab5ef4359848c345245d398811d1c75d2beec32626062d1a3c87c5f5cc_prof);

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
