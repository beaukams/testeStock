<?php

/* GestionStockBundle:Produit:supprimer.html.twig */
class __TwigTemplate_5a718fe15945f023b02e78c11838a8c6355a29d955a0375ea56c43f4e6cdd2fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Produit:supprimer.html.twig", 1);
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
        echo "   <br><br>
   <div class=\"well\">
        <strong><center><h2>Supprimer le produit ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : null), "libelle", array()), "html", null, true);
        echo " </h2></center></strong>
        </br>
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors');
        echo "
    <div class=\"form-group\">
        ";
        // line 11
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "libelle", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Libellé produit"));
        echo "

        ";
        // line 14
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "libelle", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 18
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 23
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "codebarre", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Quantité produit"));
        echo "

        ";
        // line 26
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "codebarre", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 30
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "codebarre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 35
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "prixunitaire", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Prix Unitaire"));
        echo "

        ";
        // line 38
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "prixunitaire", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 42
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "prixunitaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 47
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "dateperemption", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Date de péremption"));
        echo "

        ";
        // line 50
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "dateperemption", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 54
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "dateperemption", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 59
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "reference", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Réference du produit"));
        echo "

        ";
        // line 62
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "reference", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 66
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "reference", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 72
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "categorie", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Categorie du produit"));
        echo "

        ";
        // line 75
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "categorie", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 79
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

        </br>
   
        <span style=\"margin-left:30%\">";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "Ajouter", array()), 'widget', array("label" => "Supprimer", "attr" => array("class" => "btn btn-danger")));
        echo "</span>

        <span style=\"margin-left:25%\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "Annuler", array()), 'widget', array("label" => "Annuler", "attr" => array("class" => "btn btn-warning")));
        echo "</span>

    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'widget');
        echo "
     ";
        // line 90
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_end');
        echo " 
     </div>
  ";
    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Produit:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 90,  188 => 89,  183 => 87,  178 => 85,  168 => 79,  161 => 75,  155 => 72,  146 => 66,  139 => 62,  133 => 59,  125 => 54,  118 => 50,  112 => 47,  104 => 42,  97 => 38,  91 => 35,  83 => 30,  76 => 26,  70 => 23,  62 => 18,  55 => 14,  49 => 11,  44 => 8,  40 => 7,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/*    {% block contenu %}*/
/*    <br><br>*/
/*    <div class="well">*/
/*         <strong><center><h2>Supprimer le produit {{code.libelle}} </h2></center></strong>*/
/*         </br>*/
/*     {{ form_start(formulaire, {'attr': {'class': 'form-horizontal'}}) }}*/
/*     {{ form_errors(formulaire) }}*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.libelle, "Libellé produit", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.libelle) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.libelle, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.codebarre, "Quantité produit", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.codebarre) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.codebarre, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.prixunitaire, "Prix Unitaire", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.prixunitaire) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.prixunitaire, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.dateperemption, "Date de péremption", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.dateperemption) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.dateperemption, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.reference, "Réference du produit", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.reference) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.reference, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.categorie, "Categorie du produit", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.categorie) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.categorie, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*         </br>*/
/*    */
/*         <span style="margin-left:30%">{{ form_widget(formulaire.Ajouter, {'label': 'Supprimer', 'attr': {'class': 'btn btn-danger'}}) }}</span>*/
/* */
/*         <span style="margin-left:25%">{{ form_widget(formulaire.Annuler, {'label': 'Annuler', 'attr': {'class': 'btn btn-warning'}}) }}</span>*/
/* */
/*     {{ form_widget(formulaire) }}*/
/*      {{ form_end(formulaire) }} */
/*      </div>*/
/*   {%endblock%}*/
