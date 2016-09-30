<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_bad84bc90cf42be273e934697f4600db4bd31c1dc63f7a5ecefdf8df991ea24d extends Twig_Template
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
        $__internal_6720571e6cc6e277003fceafc16742480ec4c7d7d66477d698fcc6a1e7a25ebb = $this->env->getExtension("native_profiler");
        $__internal_6720571e6cc6e277003fceafc16742480ec4c7d7d66477d698fcc6a1e7a25ebb->enter($__internal_6720571e6cc6e277003fceafc16742480ec4c7d7d66477d698fcc6a1e7a25ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6720571e6cc6e277003fceafc16742480ec4c7d7d66477d698fcc6a1e7a25ebb->leave($__internal_6720571e6cc6e277003fceafc16742480ec4c7d7d66477d698fcc6a1e7a25ebb_prof);

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
