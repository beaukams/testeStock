<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_772c1bd8017aa5c35b7b8c4f51e999c0ab6817ac157c59b6d0d401dfe052de1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e13ecddab58ec88db4f4bdb0974eb252a668a50be43a24b4a69efec15e98e2f = $this->env->getExtension("native_profiler");
        $__internal_9e13ecddab58ec88db4f4bdb0974eb252a668a50be43a24b4a69efec15e98e2f->enter($__internal_9e13ecddab58ec88db4f4bdb0974eb252a668a50be43a24b4a69efec15e98e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e13ecddab58ec88db4f4bdb0974eb252a668a50be43a24b4a69efec15e98e2f->leave($__internal_9e13ecddab58ec88db4f4bdb0974eb252a668a50be43a24b4a69efec15e98e2f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
