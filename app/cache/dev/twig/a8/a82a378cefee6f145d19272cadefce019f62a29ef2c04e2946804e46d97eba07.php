<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8876f75b0a69930eae7992d7e6c05df467aa19ca417e8fd39e96cdd5cfd12b54 extends Twig_Template
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
        $__internal_0c50c044715ce91f4db4f9a07eea37f9eb191f1d6cca7f4545f50d40b63cddaf = $this->env->getExtension("native_profiler");
        $__internal_0c50c044715ce91f4db4f9a07eea37f9eb191f1d6cca7f4545f50d40b63cddaf->enter($__internal_0c50c044715ce91f4db4f9a07eea37f9eb191f1d6cca7f4545f50d40b63cddaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c50c044715ce91f4db4f9a07eea37f9eb191f1d6cca7f4545f50d40b63cddaf->leave($__internal_0c50c044715ce91f4db4f9a07eea37f9eb191f1d6cca7f4545f50d40b63cddaf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a05b5ca1ced105542787703663f65c97088054b96e95c9f0496fdc221769697b = $this->env->getExtension("native_profiler");
        $__internal_a05b5ca1ced105542787703663f65c97088054b96e95c9f0496fdc221769697b->enter($__internal_a05b5ca1ced105542787703663f65c97088054b96e95c9f0496fdc221769697b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a05b5ca1ced105542787703663f65c97088054b96e95c9f0496fdc221769697b->leave($__internal_a05b5ca1ced105542787703663f65c97088054b96e95c9f0496fdc221769697b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_89a337a0780a7643de05c27a34e2d54afff712fa94038f7595911200b55508d4 = $this->env->getExtension("native_profiler");
        $__internal_89a337a0780a7643de05c27a34e2d54afff712fa94038f7595911200b55508d4->enter($__internal_89a337a0780a7643de05c27a34e2d54afff712fa94038f7595911200b55508d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_89a337a0780a7643de05c27a34e2d54afff712fa94038f7595911200b55508d4->leave($__internal_89a337a0780a7643de05c27a34e2d54afff712fa94038f7595911200b55508d4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_96bd61fec9d338900b38cd2867f9731e4c1fb701392f2a5c93d146fc65e8e4c5 = $this->env->getExtension("native_profiler");
        $__internal_96bd61fec9d338900b38cd2867f9731e4c1fb701392f2a5c93d146fc65e8e4c5->enter($__internal_96bd61fec9d338900b38cd2867f9731e4c1fb701392f2a5c93d146fc65e8e4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_96bd61fec9d338900b38cd2867f9731e4c1fb701392f2a5c93d146fc65e8e4c5->leave($__internal_96bd61fec9d338900b38cd2867f9731e4c1fb701392f2a5c93d146fc65e8e4c5_prof);

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
