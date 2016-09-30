<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_4446a69b0d61e0dd5cff7b432983ea6f22827f3eb60c1c8cdc00f03dbd934444 extends Twig_Template
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
        $__internal_dd82ac9c19e60d729c9febfc9edf9b25f711a1ff9d40c3d7958b5dbf80b1495f = $this->env->getExtension("native_profiler");
        $__internal_dd82ac9c19e60d729c9febfc9edf9b25f711a1ff9d40c3d7958b5dbf80b1495f->enter($__internal_dd82ac9c19e60d729c9febfc9edf9b25f711a1ff9d40c3d7958b5dbf80b1495f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd82ac9c19e60d729c9febfc9edf9b25f711a1ff9d40c3d7958b5dbf80b1495f->leave($__internal_dd82ac9c19e60d729c9febfc9edf9b25f711a1ff9d40c3d7958b5dbf80b1495f_prof);

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
