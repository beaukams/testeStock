<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_bc0498509e94c083234c38f60d94a917b6f6e8a5bf4f64fa61d68d72bf45f954 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6a3ee0dacc774173a76602249bd15cd5d55422e3e39756e2ea81bb1e74985cf = $this->env->getExtension("native_profiler");
        $__internal_c6a3ee0dacc774173a76602249bd15cd5d55422e3e39756e2ea81bb1e74985cf->enter($__internal_c6a3ee0dacc774173a76602249bd15cd5d55422e3e39756e2ea81bb1e74985cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6a3ee0dacc774173a76602249bd15cd5d55422e3e39756e2ea81bb1e74985cf->leave($__internal_c6a3ee0dacc774173a76602249bd15cd5d55422e3e39756e2ea81bb1e74985cf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
