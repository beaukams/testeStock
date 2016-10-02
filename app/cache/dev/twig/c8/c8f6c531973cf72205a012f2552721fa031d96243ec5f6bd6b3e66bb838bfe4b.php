<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_a64527528d339b4d56a1aea4a180e6c75b7e04ea20ff34a6529995765ac53e3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d1c4b183232a809e76a8f3a26e7e0862c0d2e458e3b3a3aa0bdd21254a6f53e = $this->env->getExtension("native_profiler");
        $__internal_8d1c4b183232a809e76a8f3a26e7e0862c0d2e458e3b3a3aa0bdd21254a6f53e->enter($__internal_8d1c4b183232a809e76a8f3a26e7e0862c0d2e458e3b3a3aa0bdd21254a6f53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d1c4b183232a809e76a8f3a26e7e0862c0d2e458e3b3a3aa0bdd21254a6f53e->leave($__internal_8d1c4b183232a809e76a8f3a26e7e0862c0d2e458e3b3a3aa0bdd21254a6f53e_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_36366f2ea926f5b6cd17248a58693f25794e7589f6e629399651dc9fc4ed39ad = $this->env->getExtension("native_profiler");
        $__internal_36366f2ea926f5b6cd17248a58693f25794e7589f6e629399651dc9fc4ed39ad->enter($__internal_36366f2ea926f5b6cd17248a58693f25794e7589f6e629399651dc9fc4ed39ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_36366f2ea926f5b6cd17248a58693f25794e7589f6e629399651dc9fc4ed39ad->leave($__internal_36366f2ea926f5b6cd17248a58693f25794e7589f6e629399651dc9fc4ed39ad_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_1824aea99ab6e0a5c0fdcbebf8f87ad09d59115fa4241e27efbe2bb19dcfc2df = $this->env->getExtension("native_profiler");
        $__internal_1824aea99ab6e0a5c0fdcbebf8f87ad09d59115fa4241e27efbe2bb19dcfc2df->enter($__internal_1824aea99ab6e0a5c0fdcbebf8f87ad09d59115fa4241e27efbe2bb19dcfc2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_1824aea99ab6e0a5c0fdcbebf8f87ad09d59115fa4241e27efbe2bb19dcfc2df->leave($__internal_1824aea99ab6e0a5c0fdcbebf8f87ad09d59115fa4241e27efbe2bb19dcfc2df_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_08af024965ee5f6b6ee3d04bc83b51d7c613368e353d08c951e5f97bd5fa9df0 = $this->env->getExtension("native_profiler");
        $__internal_08af024965ee5f6b6ee3d04bc83b51d7c613368e353d08c951e5f97bd5fa9df0->enter($__internal_08af024965ee5f6b6ee3d04bc83b51d7c613368e353d08c951e5f97bd5fa9df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_08af024965ee5f6b6ee3d04bc83b51d7c613368e353d08c951e5f97bd5fa9df0->leave($__internal_08af024965ee5f6b6ee3d04bc83b51d7c613368e353d08c951e5f97bd5fa9df0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
