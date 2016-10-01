<?php

/* GestionStockBundle:Categorie:ajouter.html.twig */
class __TwigTemplate_2282673739158e2f91290667a526b84fa3769bdcf4a456551c8f72413ec5a98d extends Twig_Template
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
        $__internal_359c67b34809b566902b9323a16472e7d74b805eb77c94c5b1e16d1221c14b0b = $this->env->getExtension("native_profiler");
        $__internal_359c67b34809b566902b9323a16472e7d74b805eb77c94c5b1e16d1221c14b0b->enter($__internal_359c67b34809b566902b9323a16472e7d74b805eb77c94c5b1e16d1221c14b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Categorie:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_359c67b34809b566902b9323a16472e7d74b805eb77c94c5b1e16d1221c14b0b->leave($__internal_359c67b34809b566902b9323a16472e7d74b805eb77c94c5b1e16d1221c14b0b_prof);

    }

    // line 3
    public function block_tilte($context, array $blocks = array())
    {
        $__internal_2375d8a895f9ac7f93ac73b2e37d89c8485f9c1c65be2bfada1af039d5c2fdff = $this->env->getExtension("native_profiler");
        $__internal_2375d8a895f9ac7f93ac73b2e37d89c8485f9c1c65be2bfada1af039d5c2fdff->enter($__internal_2375d8a895f9ac7f93ac73b2e37d89c8485f9c1c65be2bfada1af039d5c2fdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tilte"));

        // line 4
        echo "\t";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
";
        
        $__internal_2375d8a895f9ac7f93ac73b2e37d89c8485f9c1c65be2bfada1af039d5c2fdff->leave($__internal_2375d8a895f9ac7f93ac73b2e37d89c8485f9c1c65be2bfada1af039d5c2fdff_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fefe605293f8b3dfeb4d3b915dcb6d5df7a48d9b177bd3bfbbe4c84ed0a537d4 = $this->env->getExtension("native_profiler");
        $__internal_fefe605293f8b3dfeb4d3b915dcb6d5df7a48d9b177bd3bfbbe4c84ed0a537d4->enter($__internal_fefe605293f8b3dfeb4d3b915dcb6d5df7a48d9b177bd3bfbbe4c84ed0a537d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fefe605293f8b3dfeb4d3b915dcb6d5df7a48d9b177bd3bfbbe4c84ed0a537d4->leave($__internal_fefe605293f8b3dfeb4d3b915dcb6d5df7a48d9b177bd3bfbbe4c84ed0a537d4_prof);

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
