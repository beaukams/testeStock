<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_b6a830d79e8f78a76c76a223b89ebefc42da0bfeefde25cfbe3ff861e0876ab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a775f4f08ec77cc60de5f62f01b1d7eae4497b486fbbef25ed53b80660bf0da = $this->env->getExtension("native_profiler");
        $__internal_1a775f4f08ec77cc60de5f62f01b1d7eae4497b486fbbef25ed53b80660bf0da->enter($__internal_1a775f4f08ec77cc60de5f62f01b1d7eae4497b486fbbef25ed53b80660bf0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a775f4f08ec77cc60de5f62f01b1d7eae4497b486fbbef25ed53b80660bf0da->leave($__internal_1a775f4f08ec77cc60de5f62f01b1d7eae4497b486fbbef25ed53b80660bf0da_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cc6a9ba36fe825dcb48730899c2ae4cfa3b7fc74da6f84645b6300caa15cc648 = $this->env->getExtension("native_profiler");
        $__internal_cc6a9ba36fe825dcb48730899c2ae4cfa3b7fc74da6f84645b6300caa15cc648->enter($__internal_cc6a9ba36fe825dcb48730899c2ae4cfa3b7fc74da6f84645b6300caa15cc648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_cc6a9ba36fe825dcb48730899c2ae4cfa3b7fc74da6f84645b6300caa15cc648->leave($__internal_cc6a9ba36fe825dcb48730899c2ae4cfa3b7fc74da6f84645b6300caa15cc648_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
