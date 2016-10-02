<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_8aaf749b1bea0376f561ebee44d1bccf263aef094439c986ced7bb70d3f77031 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_656cbc4e66d92857a43b26157c5b7099c8a8e47a4ad4c119d503fe3feec569b6 = $this->env->getExtension("native_profiler");
        $__internal_656cbc4e66d92857a43b26157c5b7099c8a8e47a4ad4c119d503fe3feec569b6->enter($__internal_656cbc4e66d92857a43b26157c5b7099c8a8e47a4ad4c119d503fe3feec569b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_656cbc4e66d92857a43b26157c5b7099c8a8e47a4ad4c119d503fe3feec569b6->leave($__internal_656cbc4e66d92857a43b26157c5b7099c8a8e47a4ad4c119d503fe3feec569b6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_29179fc594a3124243cef9490bcb00e82b3f5e6a0863bf7af717bce9754021bc = $this->env->getExtension("native_profiler");
        $__internal_29179fc594a3124243cef9490bcb00e82b3f5e6a0863bf7af717bce9754021bc->enter($__internal_29179fc594a3124243cef9490bcb00e82b3f5e6a0863bf7af717bce9754021bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_29179fc594a3124243cef9490bcb00e82b3f5e6a0863bf7af717bce9754021bc->leave($__internal_29179fc594a3124243cef9490bcb00e82b3f5e6a0863bf7af717bce9754021bc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <a class="btn btn-primary" href="{{ admin.generateUrl('list') }}">*/
/*         <i class="fa fa-check"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
