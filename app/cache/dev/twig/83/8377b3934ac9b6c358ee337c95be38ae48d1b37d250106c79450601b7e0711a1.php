<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f9162f126fe6703b2424dfbc299dd3dbb5702dec9b4c8153d37d0de0a18d3001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_2b5a0a6f36a5e83024d640695d79887e0b67a5403daba22f264bf50edd6b5b09 = $this->env->getExtension("native_profiler");
        $__internal_2b5a0a6f36a5e83024d640695d79887e0b67a5403daba22f264bf50edd6b5b09->enter($__internal_2b5a0a6f36a5e83024d640695d79887e0b67a5403daba22f264bf50edd6b5b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b5a0a6f36a5e83024d640695d79887e0b67a5403daba22f264bf50edd6b5b09->leave($__internal_2b5a0a6f36a5e83024d640695d79887e0b67a5403daba22f264bf50edd6b5b09_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0757dcb643444e5bf13a34b6f878138b3e511a91b951651fd68a0c68cd419ed0 = $this->env->getExtension("native_profiler");
        $__internal_0757dcb643444e5bf13a34b6f878138b3e511a91b951651fd68a0c68cd419ed0->enter($__internal_0757dcb643444e5bf13a34b6f878138b3e511a91b951651fd68a0c68cd419ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_0757dcb643444e5bf13a34b6f878138b3e511a91b951651fd68a0c68cd419ed0->leave($__internal_0757dcb643444e5bf13a34b6f878138b3e511a91b951651fd68a0c68cd419ed0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
