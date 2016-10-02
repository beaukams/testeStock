<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ce3d467c4a32770d898ec1c5226e62d6c78338891b4cb85922ce1b4c50cfa99b extends Twig_Template
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
        $__internal_37132b6a24bd36240a2d75298f0e7e201360c3d51d0986f70cfaba5d6a932dfa = $this->env->getExtension("native_profiler");
        $__internal_37132b6a24bd36240a2d75298f0e7e201360c3d51d0986f70cfaba5d6a932dfa->enter($__internal_37132b6a24bd36240a2d75298f0e7e201360c3d51d0986f70cfaba5d6a932dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37132b6a24bd36240a2d75298f0e7e201360c3d51d0986f70cfaba5d6a932dfa->leave($__internal_37132b6a24bd36240a2d75298f0e7e201360c3d51d0986f70cfaba5d6a932dfa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d853acb84edf9c0f57fdef7888b81ecc9c2e56e5d3e2e10e231868e4aed5d960 = $this->env->getExtension("native_profiler");
        $__internal_d853acb84edf9c0f57fdef7888b81ecc9c2e56e5d3e2e10e231868e4aed5d960->enter($__internal_d853acb84edf9c0f57fdef7888b81ecc9c2e56e5d3e2e10e231868e4aed5d960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d853acb84edf9c0f57fdef7888b81ecc9c2e56e5d3e2e10e231868e4aed5d960->leave($__internal_d853acb84edf9c0f57fdef7888b81ecc9c2e56e5d3e2e10e231868e4aed5d960_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f9f691700a59901f426c4543bcc070c7a51588e0a9fd90c4e71af59d3d57db92 = $this->env->getExtension("native_profiler");
        $__internal_f9f691700a59901f426c4543bcc070c7a51588e0a9fd90c4e71af59d3d57db92->enter($__internal_f9f691700a59901f426c4543bcc070c7a51588e0a9fd90c4e71af59d3d57db92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f9f691700a59901f426c4543bcc070c7a51588e0a9fd90c4e71af59d3d57db92->leave($__internal_f9f691700a59901f426c4543bcc070c7a51588e0a9fd90c4e71af59d3d57db92_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_091334b74dba4aeac6c0aa866b1b91122acfe8dfd08ef4a60f1988e9777f916f = $this->env->getExtension("native_profiler");
        $__internal_091334b74dba4aeac6c0aa866b1b91122acfe8dfd08ef4a60f1988e9777f916f->enter($__internal_091334b74dba4aeac6c0aa866b1b91122acfe8dfd08ef4a60f1988e9777f916f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_091334b74dba4aeac6c0aa866b1b91122acfe8dfd08ef4a60f1988e9777f916f->leave($__internal_091334b74dba4aeac6c0aa866b1b91122acfe8dfd08ef4a60f1988e9777f916f_prof);

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
