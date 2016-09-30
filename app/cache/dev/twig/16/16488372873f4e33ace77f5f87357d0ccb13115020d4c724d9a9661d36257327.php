<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_33defde0c646967096d825e5aa7eccf62375b91a58701a475f1916c8760fb17e extends Twig_Template
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
        $__internal_f01f4c43a6921ae2e53270c99186743f0afc841bf9ae1c3224d6b95804973f5b = $this->env->getExtension("native_profiler");
        $__internal_f01f4c43a6921ae2e53270c99186743f0afc841bf9ae1c3224d6b95804973f5b->enter($__internal_f01f4c43a6921ae2e53270c99186743f0afc841bf9ae1c3224d6b95804973f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f01f4c43a6921ae2e53270c99186743f0afc841bf9ae1c3224d6b95804973f5b->leave($__internal_f01f4c43a6921ae2e53270c99186743f0afc841bf9ae1c3224d6b95804973f5b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2db7863c5507e57742fc8265368d38ef1e6010c08431a6af65e3314828381280 = $this->env->getExtension("native_profiler");
        $__internal_2db7863c5507e57742fc8265368d38ef1e6010c08431a6af65e3314828381280->enter($__internal_2db7863c5507e57742fc8265368d38ef1e6010c08431a6af65e3314828381280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2db7863c5507e57742fc8265368d38ef1e6010c08431a6af65e3314828381280->leave($__internal_2db7863c5507e57742fc8265368d38ef1e6010c08431a6af65e3314828381280_prof);

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
