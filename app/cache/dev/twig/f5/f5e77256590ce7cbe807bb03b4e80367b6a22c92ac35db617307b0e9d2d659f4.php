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
        $__internal_e7d31dac29e7591f20753be755ab36679d4c2566a1dd7415dbf06a6ca240ed60 = $this->env->getExtension("native_profiler");
        $__internal_e7d31dac29e7591f20753be755ab36679d4c2566a1dd7415dbf06a6ca240ed60->enter($__internal_e7d31dac29e7591f20753be755ab36679d4c2566a1dd7415dbf06a6ca240ed60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d31dac29e7591f20753be755ab36679d4c2566a1dd7415dbf06a6ca240ed60->leave($__internal_e7d31dac29e7591f20753be755ab36679d4c2566a1dd7415dbf06a6ca240ed60_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_075eb1af4e086e85edaa5911c398058f621474e290ea695c8a9f08f4c7462a20 = $this->env->getExtension("native_profiler");
        $__internal_075eb1af4e086e85edaa5911c398058f621474e290ea695c8a9f08f4c7462a20->enter($__internal_075eb1af4e086e85edaa5911c398058f621474e290ea695c8a9f08f4c7462a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_075eb1af4e086e85edaa5911c398058f621474e290ea695c8a9f08f4c7462a20->leave($__internal_075eb1af4e086e85edaa5911c398058f621474e290ea695c8a9f08f4c7462a20_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e89e411d11b000a7ffeb04ec68a116aa175202e7618ce697bacb554504f2cca0 = $this->env->getExtension("native_profiler");
        $__internal_e89e411d11b000a7ffeb04ec68a116aa175202e7618ce697bacb554504f2cca0->enter($__internal_e89e411d11b000a7ffeb04ec68a116aa175202e7618ce697bacb554504f2cca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e89e411d11b000a7ffeb04ec68a116aa175202e7618ce697bacb554504f2cca0->leave($__internal_e89e411d11b000a7ffeb04ec68a116aa175202e7618ce697bacb554504f2cca0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_317e1ff4295f2c0b8b83683a09ce50ab56ffa17809cdd1d5a8dacfc3978dbe97 = $this->env->getExtension("native_profiler");
        $__internal_317e1ff4295f2c0b8b83683a09ce50ab56ffa17809cdd1d5a8dacfc3978dbe97->enter($__internal_317e1ff4295f2c0b8b83683a09ce50ab56ffa17809cdd1d5a8dacfc3978dbe97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_317e1ff4295f2c0b8b83683a09ce50ab56ffa17809cdd1d5a8dacfc3978dbe97->leave($__internal_317e1ff4295f2c0b8b83683a09ce50ab56ffa17809cdd1d5a8dacfc3978dbe97_prof);

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
