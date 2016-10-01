<?php

/* GestionStockBundle:Stock:lister.html.twig */
class __TwigTemplate_4973aedf9971418f856525c720a414eaf7d0caf5c679c456f67a6aab0d2dffb0 extends Twig_Template
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
        $__internal_10d26077ff98eb270bc5184aaa78b12af9df52555212b349cd121542c6d0a339 = $this->env->getExtension("native_profiler");
        $__internal_10d26077ff98eb270bc5184aaa78b12af9df52555212b349cd121542c6d0a339->enter($__internal_10d26077ff98eb270bc5184aaa78b12af9df52555212b349cd121542c6d0a339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Stock:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10d26077ff98eb270bc5184aaa78b12af9df52555212b349cd121542c6d0a339->leave($__internal_10d26077ff98eb270bc5184aaa78b12af9df52555212b349cd121542c6d0a339_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_12a8fe2bde82f22c66314f91c43ce0c77e3213d270718f98c076776290c7492c = $this->env->getExtension("native_profiler");
        $__internal_12a8fe2bde82f22c66314f91c43ce0c77e3213d270718f98c076776290c7492c->enter($__internal_12a8fe2bde82f22c66314f91c43ce0c77e3213d270718f98c076776290c7492c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_12a8fe2bde82f22c66314f91c43ce0c77e3213d270718f98c076776290c7492c->leave($__internal_12a8fe2bde82f22c66314f91c43ce0c77e3213d270718f98c076776290c7492c_prof);

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
        return array (  82 => 23,  73 => 20,  68 => 18,  64 => 17,  60 => 16,  57 => 15,  53 => 14,  40 => 3,  34 => 2,  11 => 1,);
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
