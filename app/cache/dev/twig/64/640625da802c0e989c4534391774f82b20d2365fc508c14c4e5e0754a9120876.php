<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_406f6329e5212e89ef410bb337bd216e7dc196c67277aac3d1ac5a12412bb6c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0c87ffdb5dfbd865837b57c3a93c4cd8a989b23372686fce7ce99da2be5fad6 = $this->env->getExtension("native_profiler");
        $__internal_c0c87ffdb5dfbd865837b57c3a93c4cd8a989b23372686fce7ce99da2be5fad6->enter($__internal_c0c87ffdb5dfbd865837b57c3a93c4cd8a989b23372686fce7ce99da2be5fad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_c0c87ffdb5dfbd865837b57c3a93c4cd8a989b23372686fce7ce99da2be5fad6->leave($__internal_c0c87ffdb5dfbd865837b57c3a93c4cd8a989b23372686fce7ce99da2be5fad6_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_4fe980ececba28851b03d9fc11c9c62ee1aa23c1b56b2e423b4b6ab052a62523 = $this->env->getExtension("native_profiler");
        $__internal_4fe980ececba28851b03d9fc11c9c62ee1aa23c1b56b2e423b4b6ab052a62523->enter($__internal_4fe980ececba28851b03d9fc11c9c62ee1aa23c1b56b2e423b4b6ab052a62523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_4fe980ececba28851b03d9fc11c9c62ee1aa23c1b56b2e423b4b6ab052a62523->leave($__internal_4fe980ececba28851b03d9fc11c9c62ee1aa23c1b56b2e423b4b6ab052a62523_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
