<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_517126e7d10157a05caa0d7528920ffe25b5713c89e63aa5651ed35a98b1ca0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52c1a8bfe3a5f3614c6bef92c73a1732b19db92992e5ac2a77e90bac94cc2f77 = $this->env->getExtension("native_profiler");
        $__internal_52c1a8bfe3a5f3614c6bef92c73a1732b19db92992e5ac2a77e90bac94cc2f77->enter($__internal_52c1a8bfe3a5f3614c6bef92c73a1732b19db92992e5ac2a77e90bac94cc2f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52c1a8bfe3a5f3614c6bef92c73a1732b19db92992e5ac2a77e90bac94cc2f77->leave($__internal_52c1a8bfe3a5f3614c6bef92c73a1732b19db92992e5ac2a77e90bac94cc2f77_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8de5a6aa7d7fa96e9580d8f0ac41089eea75118017c2347b582878af9b168744 = $this->env->getExtension("native_profiler");
        $__internal_8de5a6aa7d7fa96e9580d8f0ac41089eea75118017c2347b582878af9b168744->enter($__internal_8de5a6aa7d7fa96e9580d8f0ac41089eea75118017c2347b582878af9b168744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8de5a6aa7d7fa96e9580d8f0ac41089eea75118017c2347b582878af9b168744->leave($__internal_8de5a6aa7d7fa96e9580d8f0ac41089eea75118017c2347b582878af9b168744_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_af7da1d10fabf17d0d5b01d51c1e386c0cb4536719fb99bc7f01ea2d74bbe986 = $this->env->getExtension("native_profiler");
        $__internal_af7da1d10fabf17d0d5b01d51c1e386c0cb4536719fb99bc7f01ea2d74bbe986->enter($__internal_af7da1d10fabf17d0d5b01d51c1e386c0cb4536719fb99bc7f01ea2d74bbe986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_af7da1d10fabf17d0d5b01d51c1e386c0cb4536719fb99bc7f01ea2d74bbe986->leave($__internal_af7da1d10fabf17d0d5b01d51c1e386c0cb4536719fb99bc7f01ea2d74bbe986_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_624e01a1117d8a26e80a0b84aa0e5107487ca3f22571cf0497723f7ebaf2a7ef = $this->env->getExtension("native_profiler");
        $__internal_624e01a1117d8a26e80a0b84aa0e5107487ca3f22571cf0497723f7ebaf2a7ef->enter($__internal_624e01a1117d8a26e80a0b84aa0e5107487ca3f22571cf0497723f7ebaf2a7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_624e01a1117d8a26e80a0b84aa0e5107487ca3f22571cf0497723f7ebaf2a7ef->leave($__internal_624e01a1117d8a26e80a0b84aa0e5107487ca3f22571cf0497723f7ebaf2a7ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
