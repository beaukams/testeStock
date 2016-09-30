<?php

/* GestionStockBundle:Categorie:ajouter.html.twig */
class __TwigTemplate_a82f21caaf15eb9b8d99d871c11f4c189899c2874b9b68f1e8049722092ea1ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "GestionStockBundle:Categorie:ajouter.html.twig", 2);
        $this->blocks = array(
            'tilte' => array($this, 'block_tilte'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5b826137919d7f70ff0e5d80e682f83e39331702126206a9620e66c577881be = $this->env->getExtension("native_profiler");
        $__internal_b5b826137919d7f70ff0e5d80e682f83e39331702126206a9620e66c577881be->enter($__internal_b5b826137919d7f70ff0e5d80e682f83e39331702126206a9620e66c577881be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Categorie:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5b826137919d7f70ff0e5d80e682f83e39331702126206a9620e66c577881be->leave($__internal_b5b826137919d7f70ff0e5d80e682f83e39331702126206a9620e66c577881be_prof);

    }

    // line 3
    public function block_tilte($context, array $blocks = array())
    {
        $__internal_d1e8ee412e637a5ba19c8b795670d3222352fdcb6f6a8dd677b4ff08adad437a = $this->env->getExtension("native_profiler");
        $__internal_d1e8ee412e637a5ba19c8b795670d3222352fdcb6f6a8dd677b4ff08adad437a->enter($__internal_d1e8ee412e637a5ba19c8b795670d3222352fdcb6f6a8dd677b4ff08adad437a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tilte"));

        // line 4
        echo "\t";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
";
        
        $__internal_d1e8ee412e637a5ba19c8b795670d3222352fdcb6f6a8dd677b4ff08adad437a->leave($__internal_d1e8ee412e637a5ba19c8b795670d3222352fdcb6f6a8dd677b4ff08adad437a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd533425d9219aa34f94c54a8f010fdec0e6a0ce7cb4ee049baa2a31c30504bb = $this->env->getExtension("native_profiler");
        $__internal_dd533425d9219aa34f94c54a8f010fdec0e6a0ce7cb4ee049baa2a31c30504bb->enter($__internal_dd533425d9219aa34f94c54a8f010fdec0e6a0ce7cb4ee049baa2a31c30504bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t<h1>Ajouter d'une categorie </h1>

\t<form action=\"\" method=\"post\" ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t</form>
\t<p><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("gestion_stock_categorie_lister");
        echo "\">Retour à la liste des categorie</a></p>

";
        
        $__internal_dd533425d9219aa34f94c54a8f010fdec0e6a0ce7cb4ee049baa2a31c30504bb->leave($__internal_dd533425d9219aa34f94c54a8f010fdec0e6a0ce7cb4ee049baa2a31c30504bb_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Categorie:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  71 => 14,  67 => 13,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* {%block tilte%}*/
/* 	{{ parent() }}*/
/* {%endblock%}*/
/* */
/* {% block body %}*/
/* */
/* {{parent()}}*/
/* */
/* 	<h1>Ajouter d'une categorie </h1>*/
/* */
/* 	<form action="" method="post" {{ form_enctype(form) }}>*/
/* 	    {{ form_widget(form) }}*/
/* 	</form>*/
/* 	<p><a href="{{ path('gestion_stock_categorie_lister') }}">Retour à la liste des categorie</a></p>*/
/* */
/* {% endblock %}*/
/* */
/* */
