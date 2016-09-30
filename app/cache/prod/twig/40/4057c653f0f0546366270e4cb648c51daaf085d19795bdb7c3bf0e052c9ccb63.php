<?php

/* GestionStockBundle:Categorie:modifier.html.twig */
class __TwigTemplate_a0d8cafdea2acc1ebd98447e371caf6ce863006930ccc58d4ae1e4080b357975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GestionStockBundle:Categorie:modifier.html.twig", 1);
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

    // line 2
    public function block_tilte($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t<h1>Modification d'une categorie </h1>

\t<form action=\"\" method=\"post\" ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "libelle", array()), 'label');
        echo "
\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "libelle", array()), 'widget');
        echo "

\t    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t\t
\t</form>
\t<p><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("gestion_stock_categorie_lister");
        echo "\">Retour à la liste des categorie</a></p>

";
    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Categorie:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  74 => 19,  69 => 17,  65 => 16,  60 => 14,  56 => 13,  52 => 12,  45 => 8,  42 => 7,  39 => 6,  32 => 3,  29 => 2,  11 => 1,);
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
/* 	<h1>Modification d'une categorie </h1>*/
/* */
/* 	<form action="" method="post" {{ form_enctype(form) }}>*/
/* 		{{form_start(form)}}*/
/* 			{{form_errors(form)}}*/
/* */
/* 			{{form_label(form.libelle)}}*/
/* 			{{form_widget(form.libelle)}}*/
/* */
/* 	    {{form_end(form)}}*/
/* 		*/
/* 	</form>*/
/* 	<p><a href="{{ path('gestion_stock_categorie_lister') }}">Retour à la liste des categorie</a></p>*/
/* */
/* {% endblock %}*/
/* */
/* */
