<?php

/* GestionStockBundle:Produit:lister.html.twig */
class __TwigTemplate_1ebbe627b1a845eecbc029fed7ef3af923cdb7e7f41e2a278052629d858bac18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Produit:lister.html.twig", 1);
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
        $__internal_9e94e32a6547fafc379014a17f683491fabb944dd6f9a76d8f5cad744acbb2e9 = $this->env->getExtension("native_profiler");
        $__internal_9e94e32a6547fafc379014a17f683491fabb944dd6f9a76d8f5cad744acbb2e9->enter($__internal_9e94e32a6547fafc379014a17f683491fabb944dd6f9a76d8f5cad744acbb2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Produit:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e94e32a6547fafc379014a17f683491fabb944dd6f9a76d8f5cad744acbb2e9->leave($__internal_9e94e32a6547fafc379014a17f683491fabb944dd6f9a76d8f5cad744acbb2e9_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_1c78c8dcaf5f0763fb368a37d221f72449d2799b6a8d2185d73234997ae529ba = $this->env->getExtension("native_profiler");
        $__internal_1c78c8dcaf5f0763fb368a37d221f72449d2799b6a8d2185d73234997ae529ba->enter($__internal_1c78c8dcaf5f0763fb368a37d221f72449d2799b6a8d2185d73234997ae529ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "\t <div class=\"col-md-12\" >
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered \">
                <thead>
                    <th>Libellé</th>
                    <th>Code Barre</th>
                    <th>Prix Unitaire</th>
                    <th>Date de Péremption</th>
                    <th>Réference</th>
                    <th>Catégorie</th>
                    <th></th>
                </thead>
                <tbody>
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 17
            echo "                         <tr>
                            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "libelle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "codebarre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "prixunitaire", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tag"], "dateperemption", array()), "m-d-Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "reference", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "categorie", array()), "html", null, true);
            echo "</td>
                             <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_stock_afficher_produit", array("code" => $this->getAttribute($context["tag"], "codebarre", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-list\"></span></button></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </tbody>
            </table>
        </div>
";
        
        $__internal_1c78c8dcaf5f0763fb368a37d221f72449d2799b6a8d2185d73234997ae529ba->leave($__internal_1c78c8dcaf5f0763fb368a37d221f72449d2799b6a8d2185d73234997ae529ba_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Produit:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  59 => 17,  55 => 16,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/* {% block contenu %}*/
/* 	 <div class="col-md-12" >*/
/*         <div class="table-responsive">*/
/*             <table id="mytable" class="table table-bordered ">*/
/*                 <thead>*/
/*                     <th>Libellé</th>*/
/*                     <th>Code Barre</th>*/
/*                     <th>Prix Unitaire</th>*/
/*                     <th>Date de Péremption</th>*/
/*                     <th>Réference</th>*/
/*                     <th>Catégorie</th>*/
/*                     <th></th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for tag in produits %}*/
/*                          <tr>*/
/*                             <td>{{ tag.libelle}}</td>*/
/*                             <td>{{ tag.codebarre}}</td>*/
/*                             <td>{{ tag.prixunitaire}}</td>*/
/*                             <td>{{ tag.dateperemption |date('m-d-Y')}}</td>*/
/*                             <td>{{ tag.reference }}</td>*/
/*                             <td>{{ tag.categorie }}</td>*/
/*                              <td><a href="{{ path('gestion_stock_afficher_produit', {'code': tag.codebarre}) }}"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-list"></span></button></a></td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* {% endblock%}*/
