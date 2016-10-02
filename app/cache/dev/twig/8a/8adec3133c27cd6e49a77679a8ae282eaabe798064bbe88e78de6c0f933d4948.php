<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_a29730c72124bd6f4778cf24a41bf1bf399a78de1c6aa00ed874e4ea6a6bceb1 extends Twig_Template
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
        $__internal_85cf06bde03daeea42773365a371c6a3fa2ef90e260cc376094afdbce44c5673 = $this->env->getExtension("native_profiler");
        $__internal_85cf06bde03daeea42773365a371c6a3fa2ef90e260cc376094afdbce44c5673->enter($__internal_85cf06bde03daeea42773365a371c6a3fa2ef90e260cc376094afdbce44c5673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85cf06bde03daeea42773365a371c6a3fa2ef90e260cc376094afdbce44c5673->leave($__internal_85cf06bde03daeea42773365a371c6a3fa2ef90e260cc376094afdbce44c5673_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_bafd38277d0b27bc83ffb6175a78c172cce9254d6fc778766635da31c12d6558 = $this->env->getExtension("native_profiler");
        $__internal_bafd38277d0b27bc83ffb6175a78c172cce9254d6fc778766635da31c12d6558->enter($__internal_bafd38277d0b27bc83ffb6175a78c172cce9254d6fc778766635da31c12d6558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_bafd38277d0b27bc83ffb6175a78c172cce9254d6fc778766635da31c12d6558->leave($__internal_bafd38277d0b27bc83ffb6175a78c172cce9254d6fc778766635da31c12d6558_prof);

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
