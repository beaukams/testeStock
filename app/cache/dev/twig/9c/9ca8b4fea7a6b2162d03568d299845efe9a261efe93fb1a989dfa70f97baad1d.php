<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_9985b746a162a89487ff10645d5bfa362de18c080a6f09bcde03eba287c0c35f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55086b97ec8eb9a0135bc0322e5813cd9687f49feb118624f97800c1f3993775 = $this->env->getExtension("native_profiler");
        $__internal_55086b97ec8eb9a0135bc0322e5813cd9687f49feb118624f97800c1f3993775->enter($__internal_55086b97ec8eb9a0135bc0322e5813cd9687f49feb118624f97800c1f3993775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55086b97ec8eb9a0135bc0322e5813cd9687f49feb118624f97800c1f3993775->leave($__internal_55086b97ec8eb9a0135bc0322e5813cd9687f49feb118624f97800c1f3993775_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
