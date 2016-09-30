<?php

/* GestionStockBundle:Categorie:lister.html.twig */
class __TwigTemplate_c31bc2868df852d92e4437565273c16c802de50375134346603ed5fe7b4fd003 extends Twig_Template
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
        $__internal_6cb654bc61f25594f1cdf4b8da31707c9ea98d42772c9dbd8d9366792a7a9f2e = $this->env->getExtension("native_profiler");
        $__internal_6cb654bc61f25594f1cdf4b8da31707c9ea98d42772c9dbd8d9366792a7a9f2e->enter($__internal_6cb654bc61f25594f1cdf4b8da31707c9ea98d42772c9dbd8d9366792a7a9f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Categorie:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cb654bc61f25594f1cdf4b8da31707c9ea98d42772c9dbd8d9366792a7a9f2e->leave($__internal_6cb654bc61f25594f1cdf4b8da31707c9ea98d42772c9dbd8d9366792a7a9f2e_prof);

    }

    // line 3
    public function block_tilte($context, array $blocks = array())
    {
        $__internal_9c448fb1f910e12f116e2e5b1a92ce61416668886d3a8d432f70a9e49bbeeb56 = $this->env->getExtension("native_profiler");
        $__internal_9c448fb1f910e12f116e2e5b1a92ce61416668886d3a8d432f70a9e49bbeeb56->enter($__internal_9c448fb1f910e12f116e2e5b1a92ce61416668886d3a8d432f70a9e49bbeeb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tilte"));

        // line 4
        echo "\t";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
";
        
        $__internal_9c448fb1f910e12f116e2e5b1a92ce61416668886d3a8d432f70a9e49bbeeb56->leave($__internal_9c448fb1f910e12f116e2e5b1a92ce61416668886d3a8d432f70a9e49bbeeb56_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba89d9c846c4858aa237bbf3db8e96ab0aa6a5d40dd689be26ba4b5621589459 = $this->env->getExtension("native_profiler");
        $__internal_ba89d9c846c4858aa237bbf3db8e96ab0aa6a5d40dd689be26ba4b5621589459->enter($__internal_ba89d9c846c4858aa237bbf3db8e96ab0aa6a5d40dd689be26ba4b5621589459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ba89d9c846c4858aa237bbf3db8e96ab0aa6a5d40dd689be26ba4b5621589459->leave($__internal_ba89d9c846c4858aa237bbf3db8e96ab0aa6a5d40dd689be26ba4b5621589459_prof);

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
