<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ab1c8a480bb1052fb78b8cbb577671d134a78f454ce87448ebbb592a4106e276 extends Twig_Template
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
        $__internal_1fc22e04b6e80dfdf7771708a6a1c03b4b00f7718647620e1eb99713ba10111f = $this->env->getExtension("native_profiler");
        $__internal_1fc22e04b6e80dfdf7771708a6a1c03b4b00f7718647620e1eb99713ba10111f->enter($__internal_1fc22e04b6e80dfdf7771708a6a1c03b4b00f7718647620e1eb99713ba10111f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fc22e04b6e80dfdf7771708a6a1c03b4b00f7718647620e1eb99713ba10111f->leave($__internal_1fc22e04b6e80dfdf7771708a6a1c03b4b00f7718647620e1eb99713ba10111f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d59044be37d68ba6060db05d232742659be67d8fd19fc729e69a55e24d47ce4 = $this->env->getExtension("native_profiler");
        $__internal_5d59044be37d68ba6060db05d232742659be67d8fd19fc729e69a55e24d47ce4->enter($__internal_5d59044be37d68ba6060db05d232742659be67d8fd19fc729e69a55e24d47ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d59044be37d68ba6060db05d232742659be67d8fd19fc729e69a55e24d47ce4->leave($__internal_5d59044be37d68ba6060db05d232742659be67d8fd19fc729e69a55e24d47ce4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ae3af9345dbc085bddfd2cf8f688753e165607b639b424be4b2bd86d5f743fd = $this->env->getExtension("native_profiler");
        $__internal_9ae3af9345dbc085bddfd2cf8f688753e165607b639b424be4b2bd86d5f743fd->enter($__internal_9ae3af9345dbc085bddfd2cf8f688753e165607b639b424be4b2bd86d5f743fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ae3af9345dbc085bddfd2cf8f688753e165607b639b424be4b2bd86d5f743fd->leave($__internal_9ae3af9345dbc085bddfd2cf8f688753e165607b639b424be4b2bd86d5f743fd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e419bb005f371f470622aec7dae6b39db174b9bd14ec459b017e6f286829471e = $this->env->getExtension("native_profiler");
        $__internal_e419bb005f371f470622aec7dae6b39db174b9bd14ec459b017e6f286829471e->enter($__internal_e419bb005f371f470622aec7dae6b39db174b9bd14ec459b017e6f286829471e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e419bb005f371f470622aec7dae6b39db174b9bd14ec459b017e6f286829471e->leave($__internal_e419bb005f371f470622aec7dae6b39db174b9bd14ec459b017e6f286829471e_prof);

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
