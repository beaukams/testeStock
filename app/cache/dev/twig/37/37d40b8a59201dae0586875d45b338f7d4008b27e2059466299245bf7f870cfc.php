<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_55b124d9ea6274b004dc8709b13e1e63262d8d5e7351b2ce2e4e9087e1906153 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10e36cc5b1a88cf7b152bac96d174571a7910407d6a603df6363802806ba932d = $this->env->getExtension("native_profiler");
        $__internal_10e36cc5b1a88cf7b152bac96d174571a7910407d6a603df6363802806ba932d->enter($__internal_10e36cc5b1a88cf7b152bac96d174571a7910407d6a603df6363802806ba932d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10e36cc5b1a88cf7b152bac96d174571a7910407d6a603df6363802806ba932d->leave($__internal_10e36cc5b1a88cf7b152bac96d174571a7910407d6a603df6363802806ba932d_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_717538a945e906bd5cfa86332208a0d0fb62a29c0bdac72111efab149fe7cefe = $this->env->getExtension("native_profiler");
        $__internal_717538a945e906bd5cfa86332208a0d0fb62a29c0bdac72111efab149fe7cefe->enter($__internal_717538a945e906bd5cfa86332208a0d0fb62a29c0bdac72111efab149fe7cefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_717538a945e906bd5cfa86332208a0d0fb62a29c0bdac72111efab149fe7cefe->leave($__internal_717538a945e906bd5cfa86332208a0d0fb62a29c0bdac72111efab149fe7cefe_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */
