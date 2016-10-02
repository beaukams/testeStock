<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_682389fcb8c11702eba0218edeee54bf10238850adff8b7e9a7d765a0be0d12d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4dcabda0628041c90c504141d4c9e17861809acba1ac93a8e830d130b4c0bda = $this->env->getExtension("native_profiler");
        $__internal_d4dcabda0628041c90c504141d4c9e17861809acba1ac93a8e830d130b4c0bda->enter($__internal_d4dcabda0628041c90c504141d4c9e17861809acba1ac93a8e830d130b4c0bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4dcabda0628041c90c504141d4c9e17861809acba1ac93a8e830d130b4c0bda->leave($__internal_d4dcabda0628041c90c504141d4c9e17861809acba1ac93a8e830d130b4c0bda_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
