<?php

/* SonataUserBundle:Admin/Field:impersonating.html.twig */
class __TwigTemplate_acc42134dcdefee91ca1ae82542111e234ee26688193ce4337a11a3d231f6ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "SonataUserBundle:Admin/Field:impersonating.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0d8d988b75601d3f0b3aca84b7aa68252045eff2ddb028903f09d42061221da = $this->env->getExtension("native_profiler");
        $__internal_c0d8d988b75601d3f0b3aca84b7aa68252045eff2ddb028903f09d42061221da->enter($__internal_c0d8d988b75601d3f0b3aca84b7aa68252045eff2ddb028903f09d42061221da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Field:impersonating.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0d8d988b75601d3f0b3aca84b7aa68252045eff2ddb028903f09d42061221da->leave($__internal_c0d8d988b75601d3f0b3aca84b7aa68252045eff2ddb028903f09d42061221da_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_48bd4d1f019bdaa9586d782cc965a1bbb127aa121b08d90a60e93775f9d26ae4 = $this->env->getExtension("native_profiler");
        $__internal_48bd4d1f019bdaa9586d782cc965a1bbb127aa121b08d90a60e93775f9d26ae4->enter($__internal_48bd4d1f019bdaa9586d782cc965a1bbb127aa121b08d90a60e93775f9d26ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "username", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))) && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "parameters", array()), array("_switch_user" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "username", array())))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("switch_user", array(), "SonataUserBundle"), "html", null, true);
            echo "\">
            <i class=\"glyphicon glyphicon-user\"></i><i class=\"glyphicon glyphicon-log-in\"></i>
        </a>
    ";
        } else {
            // line 20
            echo "        -
    ";
        }
        
        $__internal_48bd4d1f019bdaa9586d782cc965a1bbb127aa121b08d90a60e93775f9d26ae4->leave($__internal_48bd4d1f019bdaa9586d782cc965a1bbb127aa121b08d90a60e93775f9d26ae4_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Field:impersonating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% if app.user and object.username != app.user.username and sonata_user.impersonating %}*/
/*         <a href="{{ url(sonata_user.impersonating.route, sonata_user.impersonating.parameters | merge({'_switch_user': object.username})) }}" title="{{ 'switch_user'|trans({}, 'SonataUserBundle')}}">*/
/*             <i class="glyphicon glyphicon-user"></i><i class="glyphicon glyphicon-log-in"></i>*/
/*         </a>*/
/*     {% else %}*/
/*         -*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
