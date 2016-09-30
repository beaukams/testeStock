<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_e850b0c007deeebd53a13bf684f1ab48acaff83fcad902ccb1031d80eadff6be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e0def095ba4a71700ff2af74e7f8e3c40ba32ce4ff1372e881229ce76e5b24c = $this->env->getExtension("native_profiler");
        $__internal_2e0def095ba4a71700ff2af74e7f8e3c40ba32ce4ff1372e881229ce76e5b24c->enter($__internal_2e0def095ba4a71700ff2af74e7f8e3c40ba32ce4ff1372e881229ce76e5b24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e0def095ba4a71700ff2af74e7f8e3c40ba32ce4ff1372e881229ce76e5b24c->leave($__internal_2e0def095ba4a71700ff2af74e7f8e3c40ba32ce4ff1372e881229ce76e5b24c_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_9703f22fde269f69c332e6fcc6a23d794a31254620e58e721301ada5af3614ac = $this->env->getExtension("native_profiler");
        $__internal_9703f22fde269f69c332e6fcc6a23d794a31254620e58e721301ada5af3614ac->enter($__internal_9703f22fde269f69c332e6fcc6a23d794a31254620e58e721301ada5af3614ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_9703f22fde269f69c332e6fcc6a23d794a31254620e58e721301ada5af3614ac->leave($__internal_9703f22fde269f69c332e6fcc6a23d794a31254620e58e721301ada5af3614ac_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_e6fe781fff8ef13c7b7f086e5de74443bfddd671b7169ed5aa60993c26dc0265 = $this->env->getExtension("native_profiler");
        $__internal_e6fe781fff8ef13c7b7f086e5de74443bfddd671b7169ed5aa60993c26dc0265->enter($__internal_e6fe781fff8ef13c7b7f086e5de74443bfddd671b7169ed5aa60993c26dc0265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_e6fe781fff8ef13c7b7f086e5de74443bfddd671b7169ed5aa60993c26dc0265->leave($__internal_e6fe781fff8ef13c7b7f086e5de74443bfddd671b7169ed5aa60993c26dc0265_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_fe0317dc099dae550ae54b868e011c76b25140f599cc2202d5154c0daa6170dd = $this->env->getExtension("native_profiler");
        $__internal_fe0317dc099dae550ae54b868e011c76b25140f599cc2202d5154c0daa6170dd->enter($__internal_fe0317dc099dae550ae54b868e011c76b25140f599cc2202d5154c0daa6170dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_fe0317dc099dae550ae54b868e011c76b25140f599cc2202d5154c0daa6170dd->leave($__internal_fe0317dc099dae550ae54b868e011c76b25140f599cc2202d5154c0daa6170dd_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_f812edb510a11133767536c4e5dec544e7fb2e6f8d6c309fcbad7489b79d7373 = $this->env->getExtension("native_profiler");
        $__internal_f812edb510a11133767536c4e5dec544e7fb2e6f8d6c309fcbad7489b79d7373->enter($__internal_f812edb510a11133767536c4e5dec544e7fb2e6f8d6c309fcbad7489b79d7373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_f812edb510a11133767536c4e5dec544e7fb2e6f8d6c309fcbad7489b79d7373->leave($__internal_f812edb510a11133767536c4e5dec544e7fb2e6f8d6c309fcbad7489b79d7373_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d5c25704dbfacba6d661e04cf068a73340289a9e4775859eb4846a1f0bfc0e6 = $this->env->getExtension("native_profiler");
        $__internal_7d5c25704dbfacba6d661e04cf068a73340289a9e4775859eb4846a1f0bfc0e6->enter($__internal_7d5c25704dbfacba6d661e04cf068a73340289a9e4775859eb4846a1f0bfc0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_7d5c25704dbfacba6d661e04cf068a73340289a9e4775859eb4846a1f0bfc0e6->leave($__internal_7d5c25704dbfacba6d661e04cf068a73340289a9e4775859eb4846a1f0bfc0e6_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_bd3e0d03e6ed791468e74a19080fe11db77cd71dcaa8259125344c8ea3ae6ff0 = $this->env->getExtension("native_profiler");
        $__internal_bd3e0d03e6ed791468e74a19080fe11db77cd71dcaa8259125344c8ea3ae6ff0->enter($__internal_bd3e0d03e6ed791468e74a19080fe11db77cd71dcaa8259125344c8ea3ae6ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_bd3e0d03e6ed791468e74a19080fe11db77cd71dcaa8259125344c8ea3ae6ff0->leave($__internal_bd3e0d03e6ed791468e74a19080fe11db77cd71dcaa8259125344c8ea3ae6ff0_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_69da25544c02349895775b87c7d9f841a87ec14803a7ed0f86d9e4dd76702581 = $this->env->getExtension("native_profiler");
        $__internal_69da25544c02349895775b87c7d9f841a87ec14803a7ed0f86d9e4dd76702581->enter($__internal_69da25544c02349895775b87c7d9f841a87ec14803a7ed0f86d9e4dd76702581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_69da25544c02349895775b87c7d9f841a87ec14803a7ed0f86d9e4dd76702581->leave($__internal_69da25544c02349895775b87c7d9f841a87ec14803a7ed0f86d9e4dd76702581_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
