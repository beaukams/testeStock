<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_a6a6453e53d4d24464acdad6af2fa3fcf1802176eeffe93998566d0fa2fca839 extends Twig_Template
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
        $__internal_0a1d66c69d3d9d26e8dc12a75bb0c6553fe17bb5df14306dbf30e1b4cbb03a80 = $this->env->getExtension("native_profiler");
        $__internal_0a1d66c69d3d9d26e8dc12a75bb0c6553fe17bb5df14306dbf30e1b4cbb03a80->enter($__internal_0a1d66c69d3d9d26e8dc12a75bb0c6553fe17bb5df14306dbf30e1b4cbb03a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a1d66c69d3d9d26e8dc12a75bb0c6553fe17bb5df14306dbf30e1b4cbb03a80->leave($__internal_0a1d66c69d3d9d26e8dc12a75bb0c6553fe17bb5df14306dbf30e1b4cbb03a80_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e0aa3f60c8bc6e75d6853512b1f18d079091e4efdce90e12c6a006ba990b3809 = $this->env->getExtension("native_profiler");
        $__internal_e0aa3f60c8bc6e75d6853512b1f18d079091e4efdce90e12c6a006ba990b3809->enter($__internal_e0aa3f60c8bc6e75d6853512b1f18d079091e4efdce90e12c6a006ba990b3809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_e0aa3f60c8bc6e75d6853512b1f18d079091e4efdce90e12c6a006ba990b3809->leave($__internal_e0aa3f60c8bc6e75d6853512b1f18d079091e4efdce90e12c6a006ba990b3809_prof);

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
