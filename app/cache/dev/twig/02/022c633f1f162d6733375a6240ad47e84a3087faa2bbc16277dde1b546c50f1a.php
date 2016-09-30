<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_0e60a1e171ad4b2fd37be53fd262dd6b602afce37dde27055121a6d08de1ebf5 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e42648d07c901e96874df6b0a49f71f09236c4dd0c5a78a9964e15edc1fac755 = $this->env->getExtension("native_profiler");
        $__internal_e42648d07c901e96874df6b0a49f71f09236c4dd0c5a78a9964e15edc1fac755->enter($__internal_e42648d07c901e96874df6b0a49f71f09236c4dd0c5a78a9964e15edc1fac755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e42648d07c901e96874df6b0a49f71f09236c4dd0c5a78a9964e15edc1fac755->leave($__internal_e42648d07c901e96874df6b0a49f71f09236c4dd0c5a78a9964e15edc1fac755_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_36f5dd9b87778589da812cb9f43b74a36d6d9b1e627acc69c51cbced1bb7af14 = $this->env->getExtension("native_profiler");
        $__internal_36f5dd9b87778589da812cb9f43b74a36d6d9b1e627acc69c51cbced1bb7af14->enter($__internal_36f5dd9b87778589da812cb9f43b74a36d6d9b1e627acc69c51cbced1bb7af14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_36f5dd9b87778589da812cb9f43b74a36d6d9b1e627acc69c51cbced1bb7af14->leave($__internal_36f5dd9b87778589da812cb9f43b74a36d6d9b1e627acc69c51cbced1bb7af14_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
