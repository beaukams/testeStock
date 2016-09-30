<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_8929597a2e6dc8ec5dc11c78de55aab3ad5f2401520f2a9f632645cc16e1a5f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9531ba1472926e7f4a9a9d8158ae6d5da93ab03a9295ba994fe250143c078ceb = $this->env->getExtension("native_profiler");
        $__internal_9531ba1472926e7f4a9a9d8158ae6d5da93ab03a9295ba994fe250143c078ceb->enter($__internal_9531ba1472926e7f4a9a9d8158ae6d5da93ab03a9295ba994fe250143c078ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9531ba1472926e7f4a9a9d8158ae6d5da93ab03a9295ba994fe250143c078ceb->leave($__internal_9531ba1472926e7f4a9a9d8158ae6d5da93ab03a9295ba994fe250143c078ceb_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e3b8c9a50e5df5d074326cb18596c34f13a4d031eff639377b597eab0f89c334 = $this->env->getExtension("native_profiler");
        $__internal_e3b8c9a50e5df5d074326cb18596c34f13a4d031eff639377b597eab0f89c334->enter($__internal_e3b8c9a50e5df5d074326cb18596c34f13a4d031eff639377b597eab0f89c334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_e3b8c9a50e5df5d074326cb18596c34f13a4d031eff639377b597eab0f89c334->leave($__internal_e3b8c9a50e5df5d074326cb18596c34f13a4d031eff639377b597eab0f89c334_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
