<?php

/* GestionStockBundle:Stock:lister.html.twig */
class __TwigTemplate_3e06660a178d760fb64642f044fd89344e09813867327944224613c06d353273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Stock:lister.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) ? $context["stocks"] : null));
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
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_stockage_afficher_stock", array("Identifiant" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-list\"></span></button></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </tbody>
            </table>
        </div>
";
    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Stock:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  64 => 20,  59 => 18,  55 => 17,  51 => 16,  48 => 15,  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
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
/*                             <td>{{ tag.seuilMin }}</td>*/
/*                             <td>{{ tag.quantite }}</td>*/
/*                             <td>{{ tag.produit }}</td>*/
/* */
/*                             <td><a href="{{ path('gestion_stockage_afficher_stock', {'Identifiant': tag.id }) }}"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-list"></span></button></a></td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* {% endblock%}*/
