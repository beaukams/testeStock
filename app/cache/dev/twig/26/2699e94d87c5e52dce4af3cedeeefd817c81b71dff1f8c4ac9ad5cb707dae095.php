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
        $__internal_9f3332813f806c1d1a6f76c79c34689ae587ff555a128e716dd9d51224c796fe = $this->env->getExtension("native_profiler");
        $__internal_9f3332813f806c1d1a6f76c79c34689ae587ff555a128e716dd9d51224c796fe->enter($__internal_9f3332813f806c1d1a6f76c79c34689ae587ff555a128e716dd9d51224c796fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Categorie:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f3332813f806c1d1a6f76c79c34689ae587ff555a128e716dd9d51224c796fe->leave($__internal_9f3332813f806c1d1a6f76c79c34689ae587ff555a128e716dd9d51224c796fe_prof);

    }

    // line 3
    public function block_tilte($context, array $blocks = array())
    {
        $__internal_d1ebf436f9c09aced7a539f28da4be309ad1a97c9072a9c04f9bafc59c6f738b = $this->env->getExtension("native_profiler");
        $__internal_d1ebf436f9c09aced7a539f28da4be309ad1a97c9072a9c04f9bafc59c6f738b->enter($__internal_d1ebf436f9c09aced7a539f28da4be309ad1a97c9072a9c04f9bafc59c6f738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tilte"));

        // line 4
        echo "\t";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
";
        
        $__internal_d1ebf436f9c09aced7a539f28da4be309ad1a97c9072a9c04f9bafc59c6f738b->leave($__internal_d1ebf436f9c09aced7a539f28da4be309ad1a97c9072a9c04f9bafc59c6f738b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_feccbc5a7fa6fcb9ac07d8e2a7ec6e780ecb7be4926c782077efa6441a312dc8 = $this->env->getExtension("native_profiler");
        $__internal_feccbc5a7fa6fcb9ac07d8e2a7ec6e780ecb7be4926c782077efa6441a312dc8->enter($__internal_feccbc5a7fa6fcb9ac07d8e2a7ec6e780ecb7be4926c782077efa6441a312dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_feccbc5a7fa6fcb9ac07d8e2a7ec6e780ecb7be4926c782077efa6441a312dc8->leave($__internal_feccbc5a7fa6fcb9ac07d8e2a7ec6e780ecb7be4926c782077efa6441a312dc8_prof);

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
