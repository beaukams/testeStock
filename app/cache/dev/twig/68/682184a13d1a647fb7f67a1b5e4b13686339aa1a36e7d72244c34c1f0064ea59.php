<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_dfa69f562be694827b0020097cc1232bef577a2cdcba17d252c4d494053daacd extends Twig_Template
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
        $__internal_3424b6058f9e21a27d3c89520d9e4d1a96395c828f6edda63ff7b352fe2fb688 = $this->env->getExtension("native_profiler");
        $__internal_3424b6058f9e21a27d3c89520d9e4d1a96395c828f6edda63ff7b352fe2fb688->enter($__internal_3424b6058f9e21a27d3c89520d9e4d1a96395c828f6edda63ff7b352fe2fb688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_3424b6058f9e21a27d3c89520d9e4d1a96395c828f6edda63ff7b352fe2fb688->leave($__internal_3424b6058f9e21a27d3c89520d9e4d1a96395c828f6edda63ff7b352fe2fb688_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_6d2c3e2a662e23b2ed911ca08c8b566b7943b8f8447de418faaf275ababd78c8 = $this->env->getExtension("native_profiler");
        $__internal_6d2c3e2a662e23b2ed911ca08c8b566b7943b8f8447de418faaf275ababd78c8->enter($__internal_6d2c3e2a662e23b2ed911ca08c8b566b7943b8f8447de418faaf275ababd78c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_6d2c3e2a662e23b2ed911ca08c8b566b7943b8f8447de418faaf275ababd78c8->leave($__internal_6d2c3e2a662e23b2ed911ca08c8b566b7943b8f8447de418faaf275ababd78c8_prof);

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
