<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_981b67b319d42a248ccbba2b965bd33b550efd46a1598c040f8431abd4c60513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_40e4d9e9a4f92f858d73642d5af9aa0a5ff60319e80b57ac64aed533ebcd13be = $this->env->getExtension("native_profiler");
        $__internal_40e4d9e9a4f92f858d73642d5af9aa0a5ff60319e80b57ac64aed533ebcd13be->enter($__internal_40e4d9e9a4f92f858d73642d5af9aa0a5ff60319e80b57ac64aed533ebcd13be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40e4d9e9a4f92f858d73642d5af9aa0a5ff60319e80b57ac64aed533ebcd13be->leave($__internal_40e4d9e9a4f92f858d73642d5af9aa0a5ff60319e80b57ac64aed533ebcd13be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0462329c3e39951dfbaa0965e925535dd3c131fef09a8e857ff8ee9e6379262 = $this->env->getExtension("native_profiler");
        $__internal_b0462329c3e39951dfbaa0965e925535dd3c131fef09a8e857ff8ee9e6379262->enter($__internal_b0462329c3e39951dfbaa0965e925535dd3c131fef09a8e857ff8ee9e6379262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b0462329c3e39951dfbaa0965e925535dd3c131fef09a8e857ff8ee9e6379262->leave($__internal_b0462329c3e39951dfbaa0965e925535dd3c131fef09a8e857ff8ee9e6379262_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddd26ff830deebe3f8c3f9e69513b6c75ba27ee7963f5114e8645e1e7537317a = $this->env->getExtension("native_profiler");
        $__internal_ddd26ff830deebe3f8c3f9e69513b6c75ba27ee7963f5114e8645e1e7537317a->enter($__internal_ddd26ff830deebe3f8c3f9e69513b6c75ba27ee7963f5114e8645e1e7537317a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ddd26ff830deebe3f8c3f9e69513b6c75ba27ee7963f5114e8645e1e7537317a->leave($__internal_ddd26ff830deebe3f8c3f9e69513b6c75ba27ee7963f5114e8645e1e7537317a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
