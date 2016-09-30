<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ab1c8a480bb1052fb78b8cbb577671d134a78f454ce87448ebbb592a4106e276 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_30678287fbae40f7b468ac3722d52503fcf38468f4d72e164b727f6ae369dfe6 = $this->env->getExtension("native_profiler");
        $__internal_30678287fbae40f7b468ac3722d52503fcf38468f4d72e164b727f6ae369dfe6->enter($__internal_30678287fbae40f7b468ac3722d52503fcf38468f4d72e164b727f6ae369dfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30678287fbae40f7b468ac3722d52503fcf38468f4d72e164b727f6ae369dfe6->leave($__internal_30678287fbae40f7b468ac3722d52503fcf38468f4d72e164b727f6ae369dfe6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_782b4e5d01e34e6210efc02ca272f00e5485de8d689b040676edf3877092de9a = $this->env->getExtension("native_profiler");
        $__internal_782b4e5d01e34e6210efc02ca272f00e5485de8d689b040676edf3877092de9a->enter($__internal_782b4e5d01e34e6210efc02ca272f00e5485de8d689b040676edf3877092de9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_782b4e5d01e34e6210efc02ca272f00e5485de8d689b040676edf3877092de9a->leave($__internal_782b4e5d01e34e6210efc02ca272f00e5485de8d689b040676edf3877092de9a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6486fa6e6da52f59a446a2d0d38eb31a41786383665f16bb7603c8e4c6767b4c = $this->env->getExtension("native_profiler");
        $__internal_6486fa6e6da52f59a446a2d0d38eb31a41786383665f16bb7603c8e4c6767b4c->enter($__internal_6486fa6e6da52f59a446a2d0d38eb31a41786383665f16bb7603c8e4c6767b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6486fa6e6da52f59a446a2d0d38eb31a41786383665f16bb7603c8e4c6767b4c->leave($__internal_6486fa6e6da52f59a446a2d0d38eb31a41786383665f16bb7603c8e4c6767b4c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ecba1479462a2a452237cb5b8308271e3c090a4888e67c76866a71ce4fd0684f = $this->env->getExtension("native_profiler");
        $__internal_ecba1479462a2a452237cb5b8308271e3c090a4888e67c76866a71ce4fd0684f->enter($__internal_ecba1479462a2a452237cb5b8308271e3c090a4888e67c76866a71ce4fd0684f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ecba1479462a2a452237cb5b8308271e3c090a4888e67c76866a71ce4fd0684f->leave($__internal_ecba1479462a2a452237cb5b8308271e3c090a4888e67c76866a71ce4fd0684f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
