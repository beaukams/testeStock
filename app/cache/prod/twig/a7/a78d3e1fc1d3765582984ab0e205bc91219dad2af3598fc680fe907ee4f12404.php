<?php

/* GestionStockBundle:Categorie:lister.html.twig */
class __TwigTemplate_55c3ce0f2aa31964009f3070d36aa433928e2437496f074b4a612f4ecc3e1d0a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_tilte($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
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
        return array (  82 => 22,  73 => 20,  69 => 19,  65 => 18,  60 => 16,  57 => 15,  53 => 14,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
