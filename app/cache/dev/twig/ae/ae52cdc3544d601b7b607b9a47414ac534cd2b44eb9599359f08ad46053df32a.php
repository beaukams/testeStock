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
        $__internal_9d8a2f152f8ce6f5c7fadc71a4c9db1dbb2d767b17ec204e1cdbc28493430212 = $this->env->getExtension("native_profiler");
        $__internal_9d8a2f152f8ce6f5c7fadc71a4c9db1dbb2d767b17ec204e1cdbc28493430212->enter($__internal_9d8a2f152f8ce6f5c7fadc71a4c9db1dbb2d767b17ec204e1cdbc28493430212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Categorie:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d8a2f152f8ce6f5c7fadc71a4c9db1dbb2d767b17ec204e1cdbc28493430212->leave($__internal_9d8a2f152f8ce6f5c7fadc71a4c9db1dbb2d767b17ec204e1cdbc28493430212_prof);

    }

    // line 3
    public function block_tilte($context, array $blocks = array())
    {
        $__internal_067dabf952932b02eecbca04b9449815900865d9ed3c857a24d6574d8e44ce8a = $this->env->getExtension("native_profiler");
        $__internal_067dabf952932b02eecbca04b9449815900865d9ed3c857a24d6574d8e44ce8a->enter($__internal_067dabf952932b02eecbca04b9449815900865d9ed3c857a24d6574d8e44ce8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tilte"));

        // line 4
        echo "\t";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
";
        
        $__internal_067dabf952932b02eecbca04b9449815900865d9ed3c857a24d6574d8e44ce8a->leave($__internal_067dabf952932b02eecbca04b9449815900865d9ed3c857a24d6574d8e44ce8a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_736dbc849694c3dd6a582357dcae838ed03f3b4b5d4d33307ea1d51777ae47ec = $this->env->getExtension("native_profiler");
        $__internal_736dbc849694c3dd6a582357dcae838ed03f3b4b5d4d33307ea1d51777ae47ec->enter($__internal_736dbc849694c3dd6a582357dcae838ed03f3b4b5d4d33307ea1d51777ae47ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_736dbc849694c3dd6a582357dcae838ed03f3b4b5d4d33307ea1d51777ae47ec->leave($__internal_736dbc849694c3dd6a582357dcae838ed03f3b4b5d4d33307ea1d51777ae47ec_prof);

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
