<?php

/* GestionStockBundle:Produit:modifier.html.twig */
class __TwigTemplate_9d56e0bfbe9e9649e46743bb942572f7b83a4eb1ddd0f7a0e3a05f2edfe389fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Produit:modifier.html.twig", 1);
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
        echo "\t <br><br>
\t <div class=\"well\">
        <em><center><h2>Modifier le produit ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : null), "libelle", array()), "html", null, true);
        echo " </h2></center></em>
        </br>
\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors');
        echo "
\t\t<div class=\"form-group\">
\t\t    ";
        // line 11
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "libelle", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Libellé produit"));
        echo "

\t\t    ";
        // line 14
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "libelle", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 18
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t    ";
        // line 23
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "codebarre", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Quantité produit"));
        echo "

\t\t    ";
        // line 26
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "codebarre", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 30
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "codebarre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t    ";
        // line 35
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "prixunitaire", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Prix Unitaire"));
        echo "

\t\t    ";
        // line 38
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "prixunitaire", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 42
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "prixunitaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t    ";
        // line 47
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "dateperemption", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Date de péremption"));
        echo "

\t\t    ";
        // line 50
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "dateperemption", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 54
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "dateperemption", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t    ";
        // line 59
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "reference", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Réference du produit"));
        echo "

\t\t    ";
        // line 62
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "reference", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 66
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "reference", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t    ";
        // line 72
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "categorie", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Categorie du produit"));
        echo "

\t\t    ";
        // line 75
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "categorie", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 79
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>
\t
\t   </br>
        <span style=\"margin-left:30%\">";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "Ajouter", array()), 'widget', array("label" => "Modifier", "attr" => array("class" => "btn btn-primary")));
        echo "</span>

         <span style=\"margin-left:25%\">";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "Annuler", array()), 'widget', array("label" => "Annuler", "attr" => array("class" => "btn btn-warning")));
        echo "</span>

\t\t";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'widget');
        echo "
\t\t ";
        // line 89
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_end');
        echo "\t
\t\t </div>
\t";
    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Produit:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 89,  187 => 88,  182 => 86,  177 => 84,  168 => 79,  161 => 75,  155 => 72,  146 => 66,  139 => 62,  133 => 59,  125 => 54,  118 => 50,  112 => 47,  104 => 42,  97 => 38,  91 => 35,  83 => 30,  76 => 26,  70 => 23,  62 => 18,  55 => 14,  49 => 11,  44 => 8,  40 => 7,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/* 	 {% block contenu %}*/
/* 	 <br><br>*/
/* 	 <div class="well">*/
/*         <em><center><h2>Modifier le produit {{code.libelle}} </h2></center></em>*/
/*         </br>*/
/* 		{{ form_start(formulaire, {'attr': {'class': 'form-horizontal'}}) }}*/
/* 		{{ form_errors(formulaire) }}*/
/* 		<div class="form-group">*/
/* 		    {# Génération du label. #}*/
/* 		    {{ form_label(formulaire.libelle, "Libellé produit", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/* 		    {# Affichage des erreurs pour ce champ précis. #}*/
/* 		    {{ form_errors(formulaire.libelle) }}*/
/* */
/* 		    <div class="col-sm-4">*/
/* 		        {# Génération de l'input. #}*/
/* 		        {{ form_widget(formulaire.libelle, {'attr': {'class': 'form-control'}}) }}*/
/* 		    </div>*/
/* 		</div>*/
/* 		<div class="form-group">*/
/* 		    {# Génération du label. #}*/
/* 		    {{ form_label(formulaire.codebarre, "Quantité produit", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/* 		    {# Affichage des erreurs pour ce champ précis. #}*/
/* 		    {{ form_errors(formulaire.codebarre) }}*/
/* */
/* 		    <div class="col-sm-4">*/
/* 		        {# Génération de l'input. #}*/
/* 		        {{ form_widget(formulaire.codebarre, {'attr': {'class': 'form-control'}}) }}*/
/* 		    </div>*/
/* 		</div>*/
/* 		<div class="form-group">*/
/* 		    {# Génération du label. #}*/
/* 		    {{ form_label(formulaire.prixunitaire, "Prix Unitaire", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/* 		    {# Affichage des erreurs pour ce champ précis. #}*/
/* 		    {{ form_errors(formulaire.prixunitaire) }}*/
/* */
/* 		    <div class="col-sm-4">*/
/* 		        {# Génération de l'input. #}*/
/* 		        {{ form_widget(formulaire.prixunitaire, {'attr': {'class': 'form-control'}}) }}*/
/* 		    </div>*/
/* 		</div>*/
/* 		<div class="form-group">*/
/* 		    {# Génération du label. #}*/
/* 		    {{ form_label(formulaire.dateperemption, "Date de péremption", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/* 		    {# Affichage des erreurs pour ce champ précis. #}*/
/* 		    {{ form_errors(formulaire.dateperemption) }}*/
/* */
/* 		    <div class="col-sm-4">*/
/* 		        {# Génération de l'input. #}*/
/* 		        {{ form_widget(formulaire.dateperemption, {'attr': {'class': 'form-control'}}) }}*/
/* 		    </div>*/
/* 		</div>*/
/* 		<div class="form-group">*/
/* 		    {# Génération du label. #}*/
/* 		    {{ form_label(formulaire.reference, "Réference du produit", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/* 		    {# Affichage des erreurs pour ce champ précis. #}*/
/* 		    {{ form_errors(formulaire.reference) }}*/
/* */
/* 		    <div class="col-sm-4">*/
/* 		        {# Génération de l'input. #}*/
/* 		        {{ form_widget(formulaire.reference, {'attr': {'class': 'form-control'}}) }}*/
/* 		    </div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 		    {# Génération du label. #}*/
/* 		    {{ form_label(formulaire.categorie, "Categorie du produit", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/* 		    {# Affichage des erreurs pour ce champ précis. #}*/
/* 		    {{ form_errors(formulaire.categorie) }}*/
/* */
/* 		    <div class="col-sm-4">*/
/* 		        {# Génération de l'input. #}*/
/* 		        {{ form_widget(formulaire.categorie, {'attr': {'class': 'form-control'}}) }}*/
/* 		    </div>*/
/* 		</div>*/
/* 	*/
/* 	   </br>*/
/*         <span style="margin-left:30%">{{ form_widget(formulaire.Ajouter, {'label': 'Modifier', 'attr': {'class': 'btn btn-primary'}}) }}</span>*/
/* */
/*          <span style="margin-left:25%">{{ form_widget(formulaire.Annuler, {'label': 'Annuler', 'attr': {'class': 'btn btn-warning'}}) }}</span>*/
/* */
/* 		{{ form_widget(formulaire) }}*/
/* 		 {{ form_end(formulaire) }}	*/
/* 		 </div>*/
/* 	{%endblock%}*/
