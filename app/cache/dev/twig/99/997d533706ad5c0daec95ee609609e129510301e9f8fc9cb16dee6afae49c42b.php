<?php

/* GestionStockBundle:Categorie:lister.html.twig */
class __TwigTemplate_b34caca96540ace5a3e0d4dae736d311ad12e7eb35799b2147b048a3ab600a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GestionStockBundle:Categorie:lister.html.twig", 1);
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
        $__internal_65a6524a7d879e415b32ded47ce9cd3066b858c495e7da7132b19c46b900be47 = $this->env->getExtension("native_profiler");
        $__internal_65a6524a7d879e415b32ded47ce9cd3066b858c495e7da7132b19c46b900be47->enter($__internal_65a6524a7d879e415b32ded47ce9cd3066b858c495e7da7132b19c46b900be47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Categorie:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65a6524a7d879e415b32ded47ce9cd3066b858c495e7da7132b19c46b900be47->leave($__internal_65a6524a7d879e415b32ded47ce9cd3066b858c495e7da7132b19c46b900be47_prof);

    }

    // line 3
    public function block_tilte($context, array $blocks = array())
    {
        $__internal_93ac56f94dedba648b27ad5563b1e83b927499a61df46a8b02505260d2918940 = $this->env->getExtension("native_profiler");
        $__internal_93ac56f94dedba648b27ad5563b1e83b927499a61df46a8b02505260d2918940->enter($__internal_93ac56f94dedba648b27ad5563b1e83b927499a61df46a8b02505260d2918940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tilte"));

        // line 4
        echo "\t";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
";
        
        $__internal_93ac56f94dedba648b27ad5563b1e83b927499a61df46a8b02505260d2918940->leave($__internal_93ac56f94dedba648b27ad5563b1e83b927499a61df46a8b02505260d2918940_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_48cd4db9fd6791f0b622d8a530a63f9b8e6c7982e4ec8199873a25b50bb9c2c7 = $this->env->getExtension("native_profiler");
        $__internal_48cd4db9fd6791f0b622d8a530a63f9b8e6c7982e4ec8199873a25b50bb9c2c7->enter($__internal_48cd4db9fd6791f0b622d8a530a63f9b8e6c7982e4ec8199873a25b50bb9c2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t<h1><center>Liste des categories </center></h1>
\t<br/><br/>
\t<div class=\"well\">
\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 15
            echo "\t\t
\t\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "libelle", array()), "html", null, true);
            echo "
\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_stock_categorie_modifier", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_stock_categorie_supprimer", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_stock_categorie_produit", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">Produit</a>
\t\t\t<hr/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t
\t</div>
\t

";
        
        $__internal_48cd4db9fd6791f0b622d8a530a63f9b8e6c7982e4ec8199873a25b50bb9c2c7->leave($__internal_48cd4db9fd6791f0b622d8a530a63f9b8e6c7982e4ec8199873a25b50bb9c2c7_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Categorie:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  88 => 20,  84 => 19,  80 => 18,  75 => 16,  72 => 15,  68 => 14,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {%block tilte%}*/
/* 	{{ parent() }}*/
/* {%endblock%}*/
/* */
/* {% block body %}*/
/* */
/* {{parent()}}*/
/* */
/* 	<h1><center>Liste des categories </center></h1>*/
/* 	<br/><br/>*/
/* 	<div class="well">*/
/* 		{% for categorie in categories %}*/
/* 		*/
/* 					{{categorie.libelle}}*/
/* 					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/* 				<a href="{{ path('gestion_stock_categorie_modifier', { 'id': categorie.id }) }}">Modifier</a>*/
/* 				<a href="{{ path('gestion_stock_categorie_supprimer', { 'id': categorie.id }) }}">Supprimer</a>*/
/* 				<a href="{{ path('gestion_stock_categorie_produit', { 'id': categorie.id }) }}">Produit</a>*/
/* 			<hr/>*/
/* 		{% endfor%}	*/
/* 	</div>*/
/* 	*/
/* */
/* {% endblock %}*/
/* */
