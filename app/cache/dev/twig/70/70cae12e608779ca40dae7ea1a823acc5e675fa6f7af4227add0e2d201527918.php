<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_72d9cdad471279c771540fbc427bb349686a56c3f1f6265319a2f75c2e76290b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d16c1bec5718c0aa413d905cc2a545b7fe7767f64157e78e28aa4183654d1201 = $this->env->getExtension("native_profiler");
        $__internal_d16c1bec5718c0aa413d905cc2a545b7fe7767f64157e78e28aa4183654d1201->enter($__internal_d16c1bec5718c0aa413d905cc2a545b7fe7767f64157e78e28aa4183654d1201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_d16c1bec5718c0aa413d905cc2a545b7fe7767f64157e78e28aa4183654d1201->leave($__internal_d16c1bec5718c0aa413d905cc2a545b7fe7767f64157e78e28aa4183654d1201_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_dcae338bb8b19c869c43b8d8683da7c90786efe5499ec92e6c5c750d63d3523d = $this->env->getExtension("native_profiler");
        $__internal_dcae338bb8b19c869c43b8d8683da7c90786efe5499ec92e6c5c750d63d3523d->enter($__internal_dcae338bb8b19c869c43b8d8683da7c90786efe5499ec92e6c5c750d63d3523d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_dcae338bb8b19c869c43b8d8683da7c90786efe5499ec92e6c5c750d63d3523d->leave($__internal_dcae338bb8b19c869c43b8d8683da7c90786efe5499ec92e6c5c750d63d3523d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
