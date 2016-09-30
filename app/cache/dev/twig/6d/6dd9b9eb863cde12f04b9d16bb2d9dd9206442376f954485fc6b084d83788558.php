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
        $__internal_3b82dd1191cc20cfce962e28112549c37a49a6801d7ed19e1746ca06cf8cb6fe = $this->env->getExtension("native_profiler");
        $__internal_3b82dd1191cc20cfce962e28112549c37a49a6801d7ed19e1746ca06cf8cb6fe->enter($__internal_3b82dd1191cc20cfce962e28112549c37a49a6801d7ed19e1746ca06cf8cb6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Categorie:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b82dd1191cc20cfce962e28112549c37a49a6801d7ed19e1746ca06cf8cb6fe->leave($__internal_3b82dd1191cc20cfce962e28112549c37a49a6801d7ed19e1746ca06cf8cb6fe_prof);

    }

    // line 3
    public function block_tilte($context, array $blocks = array())
    {
        $__internal_1a4f3ca223d9bc6ccfe2d83c9208ff5500efc5052c47a52877fa19cedcd2afd3 = $this->env->getExtension("native_profiler");
        $__internal_1a4f3ca223d9bc6ccfe2d83c9208ff5500efc5052c47a52877fa19cedcd2afd3->enter($__internal_1a4f3ca223d9bc6ccfe2d83c9208ff5500efc5052c47a52877fa19cedcd2afd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tilte"));

        // line 4
        echo "\t";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
";
        
        $__internal_1a4f3ca223d9bc6ccfe2d83c9208ff5500efc5052c47a52877fa19cedcd2afd3->leave($__internal_1a4f3ca223d9bc6ccfe2d83c9208ff5500efc5052c47a52877fa19cedcd2afd3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_74cb239335c7a9738f5f049ca3121395c9767048e2276124189e33f0c3837f05 = $this->env->getExtension("native_profiler");
        $__internal_74cb239335c7a9738f5f049ca3121395c9767048e2276124189e33f0c3837f05->enter($__internal_74cb239335c7a9738f5f049ca3121395c9767048e2276124189e33f0c3837f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_74cb239335c7a9738f5f049ca3121395c9767048e2276124189e33f0c3837f05->leave($__internal_74cb239335c7a9738f5f049ca3121395c9767048e2276124189e33f0c3837f05_prof);

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
