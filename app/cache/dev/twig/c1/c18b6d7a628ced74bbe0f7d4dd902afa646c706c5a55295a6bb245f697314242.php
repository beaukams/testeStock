<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_e84515d21820e4ee545f50b1e6c51d119f05944010c77a23f2008e425dc9b11c extends Twig_Template
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
        $__internal_a6b7267ecea1784578344f6a3ee7a1bb5bf6032551f3d90bba447c73d60505fd = $this->env->getExtension("native_profiler");
        $__internal_a6b7267ecea1784578344f6a3ee7a1bb5bf6032551f3d90bba447c73d60505fd->enter($__internal_a6b7267ecea1784578344f6a3ee7a1bb5bf6032551f3d90bba447c73d60505fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6b7267ecea1784578344f6a3ee7a1bb5bf6032551f3d90bba447c73d60505fd->leave($__internal_a6b7267ecea1784578344f6a3ee7a1bb5bf6032551f3d90bba447c73d60505fd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ade395f9464f3b8f0dd68e7becd9cf01eb6f97a113e41ae3eb5a4c1f56ec3957 = $this->env->getExtension("native_profiler");
        $__internal_ade395f9464f3b8f0dd68e7becd9cf01eb6f97a113e41ae3eb5a4c1f56ec3957->enter($__internal_ade395f9464f3b8f0dd68e7becd9cf01eb6f97a113e41ae3eb5a4c1f56ec3957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_ade395f9464f3b8f0dd68e7becd9cf01eb6f97a113e41ae3eb5a4c1f56ec3957->leave($__internal_ade395f9464f3b8f0dd68e7becd9cf01eb6f97a113e41ae3eb5a4c1f56ec3957_prof);

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
