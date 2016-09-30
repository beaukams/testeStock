<?php

/* GestionStockBundle:Categorie:modifier.html.twig */
class __TwigTemplate_4a319c978b51662a42543d9dd816b084fcabbdb870d7d802ea375d6e3f960e3c extends Twig_Template
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
        $__internal_d7069d7e900dc6e307f8e1f7d4666c2cc4293a6ef0af4eece0b3b23fa8cfebb2 = $this->env->getExtension("native_profiler");
        $__internal_d7069d7e900dc6e307f8e1f7d4666c2cc4293a6ef0af4eece0b3b23fa8cfebb2->enter($__internal_d7069d7e900dc6e307f8e1f7d4666c2cc4293a6ef0af4eece0b3b23fa8cfebb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Categorie:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7069d7e900dc6e307f8e1f7d4666c2cc4293a6ef0af4eece0b3b23fa8cfebb2->leave($__internal_d7069d7e900dc6e307f8e1f7d4666c2cc4293a6ef0af4eece0b3b23fa8cfebb2_prof);

    }

    // line 2
    public function block_tilte($context, array $blocks = array())
    {
        $__internal_8ca9ed86865354bcc2b2ab938f13e929f451b40ace042f4b9e747e0cbb66364a = $this->env->getExtension("native_profiler");
        $__internal_8ca9ed86865354bcc2b2ab938f13e929f451b40ace042f4b9e747e0cbb66364a->enter($__internal_8ca9ed86865354bcc2b2ab938f13e929f451b40ace042f4b9e747e0cbb66364a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tilte"));

        // line 3
        echo "\t";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
";
        
        $__internal_8ca9ed86865354bcc2b2ab938f13e929f451b40ace042f4b9e747e0cbb66364a->leave($__internal_8ca9ed86865354bcc2b2ab938f13e929f451b40ace042f4b9e747e0cbb66364a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c49f0e8d26093e92d30e4b3754dd46ed6584e4fb6539c61ab21266bc100ddea = $this->env->getExtension("native_profiler");
        $__internal_1c49f0e8d26093e92d30e4b3754dd46ed6584e4fb6539c61ab21266bc100ddea->enter($__internal_1c49f0e8d26093e92d30e4b3754dd46ed6584e4fb6539c61ab21266bc100ddea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t<h1>Modification d'une categorie </h1>

\t<form action=\"\" method=\"post\" ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'label');
        echo "
\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo "

\t    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t
\t</form>
\t<p><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("gestion_stock_categorie_lister");
        echo "\">Retour à la liste des categorie</a></p>

";
        
        $__internal_1c49f0e8d26093e92d30e4b3754dd46ed6584e4fb6539c61ab21266bc100ddea->leave($__internal_1c49f0e8d26093e92d30e4b3754dd46ed6584e4fb6539c61ab21266bc100ddea_prof);

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
        return array (  95 => 22,  89 => 19,  84 => 17,  80 => 16,  75 => 14,  71 => 13,  67 => 12,  60 => 8,  57 => 7,  51 => 6,  41 => 3,  35 => 2,  11 => 1,);
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
