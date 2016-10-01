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
        $__internal_a5613be8fa3b0b5dabf9daa3b628178e9129eb97b5ee3140f3c3b3256ac4b122 = $this->env->getExtension("native_profiler");
        $__internal_a5613be8fa3b0b5dabf9daa3b628178e9129eb97b5ee3140f3c3b3256ac4b122->enter($__internal_a5613be8fa3b0b5dabf9daa3b628178e9129eb97b5ee3140f3c3b3256ac4b122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Categorie:categorieProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5613be8fa3b0b5dabf9daa3b628178e9129eb97b5ee3140f3c3b3256ac4b122->leave($__internal_a5613be8fa3b0b5dabf9daa3b628178e9129eb97b5ee3140f3c3b3256ac4b122_prof);

    }

    // line 2
    public function block_tilte($context, array $blocks = array())
    {
        $__internal_532f34863540833d4562ad54424ea89bfe2361616c1b75337215ee1f598af817 = $this->env->getExtension("native_profiler");
        $__internal_532f34863540833d4562ad54424ea89bfe2361616c1b75337215ee1f598af817->enter($__internal_532f34863540833d4562ad54424ea89bfe2361616c1b75337215ee1f598af817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tilte"));

        // line 3
        echo "\t";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
";
        
        $__internal_532f34863540833d4562ad54424ea89bfe2361616c1b75337215ee1f598af817->leave($__internal_532f34863540833d4562ad54424ea89bfe2361616c1b75337215ee1f598af817_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f760c9e460a192f53c55ddb8276beff69644c581a5ebcf2c36fe083e341ab96 = $this->env->getExtension("native_profiler");
        $__internal_2f760c9e460a192f53c55ddb8276beff69644c581a5ebcf2c36fe083e341ab96->enter($__internal_2f760c9e460a192f53c55ddb8276beff69644c581a5ebcf2c36fe083e341ab96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f760c9e460a192f53c55ddb8276beff69644c581a5ebcf2c36fe083e341ab96->leave($__internal_2f760c9e460a192f53c55ddb8276beff69644c581a5ebcf2c36fe083e341ab96_prof);

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
