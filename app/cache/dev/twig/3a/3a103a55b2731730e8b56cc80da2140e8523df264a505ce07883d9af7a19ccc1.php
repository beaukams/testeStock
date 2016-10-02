<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_764c437d5768710064ceceb1ee2b4a96a3ddb388c8b156e47f61e66165b4d992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_288b2f69845dadb1a3f4563ab8e29248f2545eed13f20fcf27cc8f3d72a77a34 = $this->env->getExtension("native_profiler");
        $__internal_288b2f69845dadb1a3f4563ab8e29248f2545eed13f20fcf27cc8f3d72a77a34->enter($__internal_288b2f69845dadb1a3f4563ab8e29248f2545eed13f20fcf27cc8f3d72a77a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_288b2f69845dadb1a3f4563ab8e29248f2545eed13f20fcf27cc8f3d72a77a34->leave($__internal_288b2f69845dadb1a3f4563ab8e29248f2545eed13f20fcf27cc8f3d72a77a34_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
