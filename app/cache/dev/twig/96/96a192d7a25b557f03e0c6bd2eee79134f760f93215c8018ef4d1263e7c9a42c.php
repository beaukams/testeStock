<?php

/* GestionStockBundle:Categorie:categorieProduit.html.twig */
class __TwigTemplate_e9ce051d3fb50962faf135ec30131ce7114ab9419872248c4b0fba220ad16541 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GestionStockBundle:Categorie:categorieProduit.html.twig", 1);
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
        $__internal_1761c0ec4103eb28dfaa6c92de5b7e2a419f4090ce1f6006f7f713da68432b75 = $this->env->getExtension("native_profiler");
        $__internal_1761c0ec4103eb28dfaa6c92de5b7e2a419f4090ce1f6006f7f713da68432b75->enter($__internal_1761c0ec4103eb28dfaa6c92de5b7e2a419f4090ce1f6006f7f713da68432b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Categorie:categorieProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1761c0ec4103eb28dfaa6c92de5b7e2a419f4090ce1f6006f7f713da68432b75->leave($__internal_1761c0ec4103eb28dfaa6c92de5b7e2a419f4090ce1f6006f7f713da68432b75_prof);

    }

    // line 2
    public function block_tilte($context, array $blocks = array())
    {
        $__internal_6675c04fd189b76124230551ec47f9f4381d624bd3665ee1d13e596ec7b76938 = $this->env->getExtension("native_profiler");
        $__internal_6675c04fd189b76124230551ec47f9f4381d624bd3665ee1d13e596ec7b76938->enter($__internal_6675c04fd189b76124230551ec47f9f4381d624bd3665ee1d13e596ec7b76938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tilte"));

        // line 3
        echo "\t";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
";
        
        $__internal_6675c04fd189b76124230551ec47f9f4381d624bd3665ee1d13e596ec7b76938->leave($__internal_6675c04fd189b76124230551ec47f9f4381d624bd3665ee1d13e596ec7b76938_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd3d0fa5a4f51d7557f56ef1336c9330c07c36c5e98d8ea605f6a901fbd5c639 = $this->env->getExtension("native_profiler");
        $__internal_bd3d0fa5a4f51d7557f56ef1336c9330c07c36c5e98d8ea605f6a901fbd5c639->enter($__internal_bd3d0fa5a4f51d7557f56ef1336c9330c07c36c5e98d8ea605f6a901fbd5c639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorieName"]) ? $context["categorieName"] : $this->getContext($context, "categorieName")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 11
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "libelle", array()), "html", null, true);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t
";
        
        $__internal_bd3d0fa5a4f51d7557f56ef1336c9330c07c36c5e98d8ea605f6a901fbd5c639->leave($__internal_bd3d0fa5a4f51d7557f56ef1336c9330c07c36c5e98d8ea605f6a901fbd5c639_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Categorie:categorieProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  69 => 11,  65 => 10,  60 => 8,  57 => 7,  51 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {%block tilte%}*/
/* 	{{ parent() }}*/
/* {%endblock%}*/
/* */
/* {% block body %}*/
/* */
/* {{parent()}}*/
/* */
/* 	{% for tag in categorieName %}*/
/* 		{{  tag.libelle}}*/
/* 	{%endfor%}*/
/* 	*/
/* {% endblock %}*/
/* */
