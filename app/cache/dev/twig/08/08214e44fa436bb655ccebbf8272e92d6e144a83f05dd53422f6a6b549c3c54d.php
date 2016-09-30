<?php

/* GestionStockBundle:Default:lister.html.twig */
class __TwigTemplate_ab5338c5e90745655ff986a3dd0aa3e2a677c7c636dc84655dc2e71941839143 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Default:lister.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GestionStockBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a29747ba47f81dda8f8f3289211f5738bd323afe2571ef499d02df1ce493f314 = $this->env->getExtension("native_profiler");
        $__internal_a29747ba47f81dda8f8f3289211f5738bd323afe2571ef499d02df1ce493f314->enter($__internal_a29747ba47f81dda8f8f3289211f5738bd323afe2571ef499d02df1ce493f314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Default:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a29747ba47f81dda8f8f3289211f5738bd323afe2571ef499d02df1ce493f314->leave($__internal_a29747ba47f81dda8f8f3289211f5738bd323afe2571ef499d02df1ce493f314_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d5240db3e54a6feab104638618c4d0483a1b9a9fa00c4a608b2da0c9f2ca1416 = $this->env->getExtension("native_profiler");
        $__internal_d5240db3e54a6feab104638618c4d0483a1b9a9fa00c4a608b2da0c9f2ca1416->enter($__internal_d5240db3e54a6feab104638618c4d0483a1b9a9fa00c4a608b2da0c9f2ca1416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "\t <div class=\"col-md-12\" >
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered \">
                <thead>
                    <th>Seuil Mininum</th>
                    <th>Quantité</th>
                    <th>Identifiant Produit</th>
                    
                    <th></th>
                </thead>
                <tbody>
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) ? $context["stocks"] : $this->getContext($context, "stocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 15
            echo "                         <tr>
                            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "seuilMin", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "quantite", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "produit", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_stockage_afficher_stock", array("Identifiant" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-list\"></span></button></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </tbody>
            </table>
        </div>
";
        
        $__internal_d5240db3e54a6feab104638618c4d0483a1b9a9fa00c4a608b2da0c9f2ca1416->leave($__internal_d5240db3e54a6feab104638618c4d0483a1b9a9fa00c4a608b2da0c9f2ca1416_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Default:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  57 => 15,  53 => 14,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/* {% block contenu %}*/
/* 	 <div class="col-md-12" >*/
/*         <div class="table-responsive">*/
/*             <table id="mytable" class="table table-bordered ">*/
/*                 <thead>*/
/*                     <th>Seuil Mininum</th>*/
/*                     <th>Quantité</th>*/
/*                     <th>Identifiant Produit</th>*/
/*                     */
/*                     <th></th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for tag in stocks %}*/
/*                          <tr>*/
/*                             <td>{{ tag.seuilMin}}</td>*/
/*                             <td>{{ tag.quantite}}</td>*/
/*                             <td>{{ tag.produit}}</td>*/
/*                             <td><a href="{{ path('gestion_stockage_afficher_stock', {'Identifiant': tag.id}) }}"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-list"></span></button></a></td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* {% endblock%}*/
