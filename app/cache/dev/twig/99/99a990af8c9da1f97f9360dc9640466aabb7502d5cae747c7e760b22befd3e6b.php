<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_694a638ac47ca04b8dbf37cc4115c97f8df944c5555abaa277805909bb5f7f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_642ab9fec08746b14706d1d65cf84ca7cea9a0bfef18e8087e8023d747eab7dc = $this->env->getExtension("native_profiler");
        $__internal_642ab9fec08746b14706d1d65cf84ca7cea9a0bfef18e8087e8023d747eab7dc->enter($__internal_642ab9fec08746b14706d1d65cf84ca7cea9a0bfef18e8087e8023d747eab7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_642ab9fec08746b14706d1d65cf84ca7cea9a0bfef18e8087e8023d747eab7dc->leave($__internal_642ab9fec08746b14706d1d65cf84ca7cea9a0bfef18e8087e8023d747eab7dc_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
