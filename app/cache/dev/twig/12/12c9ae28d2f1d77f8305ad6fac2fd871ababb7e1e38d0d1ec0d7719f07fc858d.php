<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_b267bb7f606321436c1eb7beab7270438a3bb199feb8e05158c26daac7b1a526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35a5cda271a2d0acdcaadc3e3e076c9ba91faea07438b156e8eaf31af9ebed7b = $this->env->getExtension("native_profiler");
        $__internal_35a5cda271a2d0acdcaadc3e3e076c9ba91faea07438b156e8eaf31af9ebed7b->enter($__internal_35a5cda271a2d0acdcaadc3e3e076c9ba91faea07438b156e8eaf31af9ebed7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:action.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 20
        echo "
<h2>";
        // line 21
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        echo "</h2>

<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        ";
        // line 26
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 29
        echo "    </div>

    <div class=\"span10 col-lg-10\">
        ";
        // line 32
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataUserBundle:Profile:action.html.twig", 32)->display($context);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 35
        echo "    </div>

</div>
";
        
        $__internal_35a5cda271a2d0acdcaadc3e3e076c9ba91faea07438b156e8eaf31af9ebed7b->leave($__internal_35a5cda271a2d0acdcaadc3e3e076c9ba91faea07438b156e8eaf31af9ebed7b_prof);

    }

    // line 12
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        $__internal_460ede8111b8dc621e347d3a480fbcac13895ef57527a03ab28f54ab4fe38ebe = $this->env->getExtension("native_profiler");
        $__internal_460ede8111b8dc621e347d3a480fbcac13895ef57527a03ab28f54ab4fe38ebe->enter($__internal_460ede8111b8dc621e347d3a480fbcac13895ef57527a03ab28f54ab4fe38ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

        // line 13
        echo "    ";
        if ( !array_key_exists("breadcrumb_context", $context)) {
            // line 14
            echo "        ";
            $context["breadcrumb_context"] = "user_index";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["breadcrumb_context"]) ? $context["breadcrumb_context"] : $this->getContext($context, "breadcrumb_context")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
        
        $__internal_460ede8111b8dc621e347d3a480fbcac13895ef57527a03ab28f54ab4fe38ebe->leave($__internal_460ede8111b8dc621e347d3a480fbcac13895ef57527a03ab28f54ab4fe38ebe_prof);

    }

    // line 21
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_2e338441dd0bd61e747821991d78b9d1e2a2e77f6b61680fd99034ea943acb40 = $this->env->getExtension("native_profiler");
        $__internal_2e338441dd0bd61e747821991d78b9d1e2a2e77f6b61680fd99034ea943acb40->enter($__internal_2e338441dd0bd61e747821991d78b9d1e2a2e77f6b61680fd99034ea943acb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
        
        $__internal_2e338441dd0bd61e747821991d78b9d1e2a2e77f6b61680fd99034ea943acb40->leave($__internal_2e338441dd0bd61e747821991d78b9d1e2a2e77f6b61680fd99034ea943acb40_prof);

    }

    // line 26
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        $__internal_ecf4b83b9a8d9be86197f69c23c6b65a97931fc0314766af710089fd08bc0d96 = $this->env->getExtension("native_profiler");
        $__internal_ecf4b83b9a8d9be86197f69c23c6b65a97931fc0314766af710089fd08bc0d96->enter($__internal_ecf4b83b9a8d9be86197f69c23c6b65a97931fc0314766af710089fd08bc0d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_menu"));

        // line 27
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
        ";
        
        $__internal_ecf4b83b9a8d9be86197f69c23c6b65a97931fc0314766af710089fd08bc0d96->leave($__internal_ecf4b83b9a8d9be86197f69c23c6b65a97931fc0314766af710089fd08bc0d96_prof);

    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_a64514351815d0758652ad7f5b238164125a427722b017a5f2799bfdd844dabc = $this->env->getExtension("native_profiler");
        $__internal_a64514351815d0758652ad7f5b238164125a427722b017a5f2799bfdd844dabc->enter($__internal_a64514351815d0758652ad7f5b238164125a427722b017a5f2799bfdd844dabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        echo "";
        
        $__internal_a64514351815d0758652ad7f5b238164125a427722b017a5f2799bfdd844dabc->leave($__internal_a64514351815d0758652ad7f5b238164125a427722b017a5f2799bfdd844dabc_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  112 => 27,  106 => 26,  94 => 21,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  66 => 12,  56 => 35,  54 => 34,  51 => 33,  49 => 32,  44 => 29,  42 => 26,  34 => 21,  31 => 20,  29 => 12,  26 => 11,);
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
/* {% block sonata_page_breadcrumb %}*/
/*     {% if breadcrumb_context is not defined %}*/
/*         {% set breadcrumb_context = 'user_index' %}*/
/*     {% endif %}*/
/*     <div class="row-fluid clearfix">*/
/*         {{ sonata_block_render_event('breadcrumb', { 'context': breadcrumb_context, 'current_uri': app.request.requestUri }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* <h2>{% block sonata_profile_title %}{% trans from 'SonataUserBundle' %}sonata_profile_title{% endtrans %}{% endblock %}</h2>*/
/* */
/* <div class="sonata-user-show row row-fluid">*/
/* */
/*     <div class="span2 col-lg-2" style="padding: 8px 0;">*/
/*         {% block sonata_profile_menu %}*/
/*             {{ sonata_block_render({'type': 'sonata.user.block.menu'}, {'current_uri': app.request.requestUri}) }}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div class="span10 col-lg-10">*/
/*         {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}*/
/* */
/*         {% block sonata_profile_content '' %}*/
/*     </div>*/
/* */
/* </div>*/
/* */
