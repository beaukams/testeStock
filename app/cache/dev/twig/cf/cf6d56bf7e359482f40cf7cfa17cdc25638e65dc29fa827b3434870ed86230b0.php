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
        $__internal_a23d829d3d9b9bcfec135d67a5a9f130ca54296dd85077e41f0a72af44b26b6e = $this->env->getExtension("native_profiler");
        $__internal_a23d829d3d9b9bcfec135d67a5a9f130ca54296dd85077e41f0a72af44b26b6e->enter($__internal_a23d829d3d9b9bcfec135d67a5a9f130ca54296dd85077e41f0a72af44b26b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a23d829d3d9b9bcfec135d67a5a9f130ca54296dd85077e41f0a72af44b26b6e->leave($__internal_a23d829d3d9b9bcfec135d67a5a9f130ca54296dd85077e41f0a72af44b26b6e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fbee1c5aa40ef3ba1bc34bb33de820a370506ce90ec04d45ed400aacc4982ee8 = $this->env->getExtension("native_profiler");
        $__internal_fbee1c5aa40ef3ba1bc34bb33de820a370506ce90ec04d45ed400aacc4982ee8->enter($__internal_fbee1c5aa40ef3ba1bc34bb33de820a370506ce90ec04d45ed400aacc4982ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fbee1c5aa40ef3ba1bc34bb33de820a370506ce90ec04d45ed400aacc4982ee8->leave($__internal_fbee1c5aa40ef3ba1bc34bb33de820a370506ce90ec04d45ed400aacc4982ee8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_64abb3f3f1041f4340b15140ce1b1cbda03b69fb569df8cfead4c8d111147c61 = $this->env->getExtension("native_profiler");
        $__internal_64abb3f3f1041f4340b15140ce1b1cbda03b69fb569df8cfead4c8d111147c61->enter($__internal_64abb3f3f1041f4340b15140ce1b1cbda03b69fb569df8cfead4c8d111147c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_64abb3f3f1041f4340b15140ce1b1cbda03b69fb569df8cfead4c8d111147c61->leave($__internal_64abb3f3f1041f4340b15140ce1b1cbda03b69fb569df8cfead4c8d111147c61_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3be42acaff45de355d789cf424e87e20a5848037d4f1eec89ebb8380f582ba38 = $this->env->getExtension("native_profiler");
        $__internal_3be42acaff45de355d789cf424e87e20a5848037d4f1eec89ebb8380f582ba38->enter($__internal_3be42acaff45de355d789cf424e87e20a5848037d4f1eec89ebb8380f582ba38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3be42acaff45de355d789cf424e87e20a5848037d4f1eec89ebb8380f582ba38->leave($__internal_3be42acaff45de355d789cf424e87e20a5848037d4f1eec89ebb8380f582ba38_prof);

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
