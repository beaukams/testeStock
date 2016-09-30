<?php

/* SonataAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_d56ffeb55e3a857ca7273190098c4d5af1a0ac1b42b9b8a6d8828be0579bc2ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9474504a16e1f3c32af8062d39d29a9f2dbf4f2142fe1b083b35d078827efae2 = $this->env->getExtension("native_profiler");
        $__internal_9474504a16e1f3c32af8062d39d29a9f2dbf4f2142fe1b083b35d078827efae2->enter($__internal_9474504a16e1f3c32af8062d39d29a9f2dbf4f2142fe1b083b35d078827efae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9474504a16e1f3c32af8062d39d29a9f2dbf4f2142fe1b083b35d078827efae2->leave($__internal_9474504a16e1f3c32af8062d39d29a9f2dbf4f2142fe1b083b35d078827efae2_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_2236497b278ee0512934d0951a79fdd8234c837ba60f9ef9117bf83eeec5e832 = $this->env->getExtension("native_profiler");
        $__internal_2236497b278ee0512934d0951a79fdd8234c837ba60f9ef9117bf83eeec5e832->enter($__internal_2236497b278ee0512934d0951a79fdd8234c837ba60f9ef9117bf83eeec5e832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_2236497b278ee0512934d0951a79fdd8234c837ba60f9ef9117bf83eeec5e832->leave($__internal_2236497b278ee0512934d0951a79fdd8234c837ba60f9ef9117bf83eeec5e832_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_b1edff527aeb69e06a13f21dac700915b98fb5049b957fcc11463103c7452966 = $this->env->getExtension("native_profiler");
        $__internal_b1edff527aeb69e06a13f21dac700915b98fb5049b957fcc11463103c7452966->enter($__internal_b1edff527aeb69e06a13f21dac700915b98fb5049b957fcc11463103c7452966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_b1edff527aeb69e06a13f21dac700915b98fb5049b957fcc11463103c7452966->leave($__internal_b1edff527aeb69e06a13f21dac700915b98fb5049b957fcc11463103c7452966_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  79 => 28,  75 => 26,  73 => 25,  67 => 23,  61 => 22,  53 => 19,  50 => 18,  44 => 16,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% block num_results %}*/
/*     {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}*/
/*         {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}*/
/*     {% endif %}*/
/*     {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}*/
/*     &nbsp;-&nbsp;*/
/* {% endblock %}*/
/* */
/* {% block num_pages %}*/
/*     {{ admin.datagrid.pager.page }}*/
/*     /*/
/*     {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}*/
/*         ?*/
/*     {% else %}*/
/*         {{ admin.datagrid.pager.lastpage }}*/
/*     {% endif %}*/
/*     &nbsp;-&nbsp;*/
/* {% endblock %}*/
/* */
