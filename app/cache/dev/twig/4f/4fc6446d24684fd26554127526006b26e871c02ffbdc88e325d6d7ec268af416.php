<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ce3d467c4a32770d898ec1c5226e62d6c78338891b4cb85922ce1b4c50cfa99b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7690977719d24ed0348eae87803268b2fd3771975f81ef56af178bff18a7408a = $this->env->getExtension("native_profiler");
        $__internal_7690977719d24ed0348eae87803268b2fd3771975f81ef56af178bff18a7408a->enter($__internal_7690977719d24ed0348eae87803268b2fd3771975f81ef56af178bff18a7408a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7690977719d24ed0348eae87803268b2fd3771975f81ef56af178bff18a7408a->leave($__internal_7690977719d24ed0348eae87803268b2fd3771975f81ef56af178bff18a7408a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d0d41b6050759b12241ec9f37e6dfc84106e0b017876d87f1a4422a73b88626 = $this->env->getExtension("native_profiler");
        $__internal_5d0d41b6050759b12241ec9f37e6dfc84106e0b017876d87f1a4422a73b88626->enter($__internal_5d0d41b6050759b12241ec9f37e6dfc84106e0b017876d87f1a4422a73b88626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d0d41b6050759b12241ec9f37e6dfc84106e0b017876d87f1a4422a73b88626->leave($__internal_5d0d41b6050759b12241ec9f37e6dfc84106e0b017876d87f1a4422a73b88626_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6a64d0ebe8000e5f2172220817460ce1e806e4c68b3c8e03478411d41bb04462 = $this->env->getExtension("native_profiler");
        $__internal_6a64d0ebe8000e5f2172220817460ce1e806e4c68b3c8e03478411d41bb04462->enter($__internal_6a64d0ebe8000e5f2172220817460ce1e806e4c68b3c8e03478411d41bb04462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6a64d0ebe8000e5f2172220817460ce1e806e4c68b3c8e03478411d41bb04462->leave($__internal_6a64d0ebe8000e5f2172220817460ce1e806e4c68b3c8e03478411d41bb04462_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b43661d0f647472ddd3b465848b2499cc1b63a6f24bba5e4c5577097370b8ff1 = $this->env->getExtension("native_profiler");
        $__internal_b43661d0f647472ddd3b465848b2499cc1b63a6f24bba5e4c5577097370b8ff1->enter($__internal_b43661d0f647472ddd3b465848b2499cc1b63a6f24bba5e4c5577097370b8ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b43661d0f647472ddd3b465848b2499cc1b63a6f24bba5e4c5577097370b8ff1->leave($__internal_b43661d0f647472ddd3b465848b2499cc1b63a6f24bba5e4c5577097370b8ff1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
