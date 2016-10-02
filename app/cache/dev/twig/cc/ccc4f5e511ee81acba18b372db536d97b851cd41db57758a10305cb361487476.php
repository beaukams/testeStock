<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_00b20574246ef24d175797afb36e3ea2cee3da4fc57a01e80ad4d85e8d7fbd66 extends Twig_Template
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
        $__internal_a06adebc577a0f3505958a6cb55802928f4ce219cb6b10fe3f4bbd3c617f84e9 = $this->env->getExtension("native_profiler");
        $__internal_a06adebc577a0f3505958a6cb55802928f4ce219cb6b10fe3f4bbd3c617f84e9->enter($__internal_a06adebc577a0f3505958a6cb55802928f4ce219cb6b10fe3f4bbd3c617f84e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a06adebc577a0f3505958a6cb55802928f4ce219cb6b10fe3f4bbd3c617f84e9->leave($__internal_a06adebc577a0f3505958a6cb55802928f4ce219cb6b10fe3f4bbd3c617f84e9_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_2cfef2040925cb65f2dc92bfbf2e31d9b694f9d1d7326b69b1c9d0803e8fd9a5 = $this->env->getExtension("native_profiler");
        $__internal_2cfef2040925cb65f2dc92bfbf2e31d9b694f9d1d7326b69b1c9d0803e8fd9a5->enter($__internal_2cfef2040925cb65f2dc92bfbf2e31d9b694f9d1d7326b69b1c9d0803e8fd9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_2cfef2040925cb65f2dc92bfbf2e31d9b694f9d1d7326b69b1c9d0803e8fd9a5->leave($__internal_2cfef2040925cb65f2dc92bfbf2e31d9b694f9d1d7326b69b1c9d0803e8fd9a5_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_76f7ba512ef00530b136e75860ff530ca9bb77ba85f3e887cb2e5799e03d8c1e = $this->env->getExtension("native_profiler");
        $__internal_76f7ba512ef00530b136e75860ff530ca9bb77ba85f3e887cb2e5799e03d8c1e->enter($__internal_76f7ba512ef00530b136e75860ff530ca9bb77ba85f3e887cb2e5799e03d8c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_76f7ba512ef00530b136e75860ff530ca9bb77ba85f3e887cb2e5799e03d8c1e->leave($__internal_76f7ba512ef00530b136e75860ff530ca9bb77ba85f3e887cb2e5799e03d8c1e_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_009be306b97b704414f6407627173aff25bbcb260382b88c4ec8f1b3393e35e0 = $this->env->getExtension("native_profiler");
        $__internal_009be306b97b704414f6407627173aff25bbcb260382b88c4ec8f1b3393e35e0->enter($__internal_009be306b97b704414f6407627173aff25bbcb260382b88c4ec8f1b3393e35e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_009be306b97b704414f6407627173aff25bbcb260382b88c4ec8f1b3393e35e0->leave($__internal_009be306b97b704414f6407627173aff25bbcb260382b88c4ec8f1b3393e35e0_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_52477df0bd977275702598d83d42e254a6abe43755a95f4e35676672371cc8b2 = $this->env->getExtension("native_profiler");
        $__internal_52477df0bd977275702598d83d42e254a6abe43755a95f4e35676672371cc8b2->enter($__internal_52477df0bd977275702598d83d42e254a6abe43755a95f4e35676672371cc8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_52477df0bd977275702598d83d42e254a6abe43755a95f4e35676672371cc8b2->leave($__internal_52477df0bd977275702598d83d42e254a6abe43755a95f4e35676672371cc8b2_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_101b0450817ef8323ec77acfe3b6e2fa242487604c519e30435f540acacfa83f = $this->env->getExtension("native_profiler");
        $__internal_101b0450817ef8323ec77acfe3b6e2fa242487604c519e30435f540acacfa83f->enter($__internal_101b0450817ef8323ec77acfe3b6e2fa242487604c519e30435f540acacfa83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_101b0450817ef8323ec77acfe3b6e2fa242487604c519e30435f540acacfa83f->leave($__internal_101b0450817ef8323ec77acfe3b6e2fa242487604c519e30435f540acacfa83f_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_36fbc3cfd9b95bb172f1adffea9eff5db1298e0c77ee3a386656567bd7325ff8 = $this->env->getExtension("native_profiler");
        $__internal_36fbc3cfd9b95bb172f1adffea9eff5db1298e0c77ee3a386656567bd7325ff8->enter($__internal_36fbc3cfd9b95bb172f1adffea9eff5db1298e0c77ee3a386656567bd7325ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_36fbc3cfd9b95bb172f1adffea9eff5db1298e0c77ee3a386656567bd7325ff8->leave($__internal_36fbc3cfd9b95bb172f1adffea9eff5db1298e0c77ee3a386656567bd7325ff8_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_e70a2203cf1e3c298ca335868a25a2616d1a3ef9bca6f4c80701dcc6c789d8a7 = $this->env->getExtension("native_profiler");
        $__internal_e70a2203cf1e3c298ca335868a25a2616d1a3ef9bca6f4c80701dcc6c789d8a7->enter($__internal_e70a2203cf1e3c298ca335868a25a2616d1a3ef9bca6f4c80701dcc6c789d8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_e70a2203cf1e3c298ca335868a25a2616d1a3ef9bca6f4c80701dcc6c789d8a7->leave($__internal_e70a2203cf1e3c298ca335868a25a2616d1a3ef9bca6f4c80701dcc6c789d8a7_prof);

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
