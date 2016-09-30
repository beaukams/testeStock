<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_13e1529bec92c71b2d319b44e3bbefd8cad106dc3d6e03386035391cd3124887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3388bae2ee74484d87b39fc5de6783081d5f6f2c5b92b4608166b81940b48ef7 = $this->env->getExtension("native_profiler");
        $__internal_3388bae2ee74484d87b39fc5de6783081d5f6f2c5b92b4608166b81940b48ef7->enter($__internal_3388bae2ee74484d87b39fc5de6783081d5f6f2c5b92b4608166b81940b48ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3388bae2ee74484d87b39fc5de6783081d5f6f2c5b92b4608166b81940b48ef7->leave($__internal_3388bae2ee74484d87b39fc5de6783081d5f6f2c5b92b4608166b81940b48ef7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
