<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_83ef2629de1dd0320a9c73e8b0efb02e83daa976496289f18b905a30a3957c63 extends Twig_Template
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
        $__internal_b88efcd6ec3493e254a7ac155086f9b7747345141bf175447644d2e66ea5c974 = $this->env->getExtension("native_profiler");
        $__internal_b88efcd6ec3493e254a7ac155086f9b7747345141bf175447644d2e66ea5c974->enter($__internal_b88efcd6ec3493e254a7ac155086f9b7747345141bf175447644d2e66ea5c974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b88efcd6ec3493e254a7ac155086f9b7747345141bf175447644d2e66ea5c974->leave($__internal_b88efcd6ec3493e254a7ac155086f9b7747345141bf175447644d2e66ea5c974_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8c06d8cba45a5bb5ec1877da26524a6f335f66fa551f33a63c93fe4f34096810 = $this->env->getExtension("native_profiler");
        $__internal_8c06d8cba45a5bb5ec1877da26524a6f335f66fa551f33a63c93fe4f34096810->enter($__internal_8c06d8cba45a5bb5ec1877da26524a6f335f66fa551f33a63c93fe4f34096810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_8c06d8cba45a5bb5ec1877da26524a6f335f66fa551f33a63c93fe4f34096810->leave($__internal_8c06d8cba45a5bb5ec1877da26524a6f335f66fa551f33a63c93fe4f34096810_prof);

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
