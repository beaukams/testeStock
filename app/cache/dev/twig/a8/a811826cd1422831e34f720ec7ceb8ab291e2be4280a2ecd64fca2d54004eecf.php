<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e64df92341af3a4a9a72a7f563924050ab1ee79b23d5470cdeb895bdb6e7aacc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28e3d1dfa604eb38bd4ac78129a321c03c2f5cb30ed7e34af9cba4b1b9c3cf18 = $this->env->getExtension("native_profiler");
        $__internal_28e3d1dfa604eb38bd4ac78129a321c03c2f5cb30ed7e34af9cba4b1b9c3cf18->enter($__internal_28e3d1dfa604eb38bd4ac78129a321c03c2f5cb30ed7e34af9cba4b1b9c3cf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_28e3d1dfa604eb38bd4ac78129a321c03c2f5cb30ed7e34af9cba4b1b9c3cf18->leave($__internal_28e3d1dfa604eb38bd4ac78129a321c03c2f5cb30ed7e34af9cba4b1b9c3cf18_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_af002edfc031a70e6b7a2be9aae2f6e1a96a941a5e6095955bed9d6e32a89462 = $this->env->getExtension("native_profiler");
        $__internal_af002edfc031a70e6b7a2be9aae2f6e1a96a941a5e6095955bed9d6e32a89462->enter($__internal_af002edfc031a70e6b7a2be9aae2f6e1a96a941a5e6095955bed9d6e32a89462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_af002edfc031a70e6b7a2be9aae2f6e1a96a941a5e6095955bed9d6e32a89462->leave($__internal_af002edfc031a70e6b7a2be9aae2f6e1a96a941a5e6095955bed9d6e32a89462_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
