<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_3f4b44bc33b80aa71052e2d89867898f5baf6b6c9b7deb3ffe6cc7672875f756 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a60bffce89a557cacefcea65414a05f77f3472c80356b44512434b26038857c3 = $this->env->getExtension("native_profiler");
        $__internal_a60bffce89a557cacefcea65414a05f77f3472c80356b44512434b26038857c3->enter($__internal_a60bffce89a557cacefcea65414a05f77f3472c80356b44512434b26038857c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a60bffce89a557cacefcea65414a05f77f3472c80356b44512434b26038857c3->leave($__internal_a60bffce89a557cacefcea65414a05f77f3472c80356b44512434b26038857c3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */
