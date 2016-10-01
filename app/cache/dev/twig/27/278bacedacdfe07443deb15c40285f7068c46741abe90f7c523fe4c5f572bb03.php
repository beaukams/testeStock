<?php

/* GestionStockBundle:Stock:ajouter.html.twig */
class __TwigTemplate_d1299b39ebfd8fe12090f1fcf95283dba965df6e8cdf47d5c231d14091032f1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Stock:ajouter.html.twig", 1);
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
        $__internal_891383147962fe2be1afc2967ab854e7d4799fba076db1c42b303a5f904337cd = $this->env->getExtension("native_profiler");
        $__internal_891383147962fe2be1afc2967ab854e7d4799fba076db1c42b303a5f904337cd->enter($__internal_891383147962fe2be1afc2967ab854e7d4799fba076db1c42b303a5f904337cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Stock:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_891383147962fe2be1afc2967ab854e7d4799fba076db1c42b303a5f904337cd->leave($__internal_891383147962fe2be1afc2967ab854e7d4799fba076db1c42b303a5f904337cd_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_25ce4295039de7921a394f85148047fb1cf2aac61c066bf5fb17a2ab4f3a35e0 = $this->env->getExtension("native_profiler");
        $__internal_25ce4295039de7921a394f85148047fb1cf2aac61c066bf5fb17a2ab4f3a35e0->enter($__internal_25ce4295039de7921a394f85148047fb1cf2aac61c066bf5fb17a2ab4f3a35e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "\t <br><br>
\t <div class=\"well\">
        <em><center><h2>Ajouter un nouveau produit pharmaceutique Dans Stock  </h2></center></em>
\t\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "
\t\t<div class=\"form-group\">
\t\t    ";
        // line 10
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "produitTemp", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Produit : "));
        echo "

\t\t    ";
        // line 13
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "produitTemp", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 17
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "produitTemp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t    ";
        // line 23
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "quantite", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "quantité à ajouter : "));
        echo "

\t\t    ";
        // line 26
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "quantite", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 30
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t    ";
        // line 36
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "seuilMin", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Seuil Min : "));
        echo "

\t\t    ";
        // line 39
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "seuilMin", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 43
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "seuilMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>
\t\t

\t\t";
        // line 49
        echo "        <span style=\"margin-left:30%\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Ajouter", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</span>

        <span style=\"margin-left:30%\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Annuler", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</span>

\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'widget');
        echo "
\t\t ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "\t
\t\t </div>
\t";
        
        $__internal_25ce4295039de7921a394f85148047fb1cf2aac61c066bf5fb17a2ab4f3a35e0->leave($__internal_25ce4295039de7921a394f85148047fb1cf2aac61c066bf5fb17a2ab4f3a35e0_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Stock:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 54,  131 => 53,  126 => 51,  120 => 49,  111 => 43,  104 => 39,  98 => 36,  89 => 30,  82 => 26,  76 => 23,  67 => 17,  60 => 13,  54 => 10,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/* 	 {% block contenu %}*/
/* 	 <br><br>*/
/* 	 <div class="well">*/
/*         <em><center><h2>Ajouter un nouveau produit pharmaceutique Dans Stock  </h2></center></em>*/
/* 		{{ form_start(formulaire, {'attr': {'class': 'form-horizontal'}}) }}*/
/* 		{{ form_errors(formulaire) }}*/
/* 		<div class="form-group">*/
/* 		    {# Génération du label. #}*/
/* 		    {{ form_label(formulaire.produitTemp, "Produit : ", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/* 		    {# Affichage des erreurs pour ce champ précis. #}*/
/* 		    {{ form_errors(formulaire.produitTemp) }}*/
/* */
/* 		    <div class="col-sm-4">*/
/* 		        {# Génération de l'input. #}*/
/* 		        {{ form_widget(formulaire.produitTemp, {'attr': {'class': 'form-control'}}) }}*/
/* 		    </div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 		    {# Génération du label. #}*/
/* 		    {{ form_label(formulaire.quantite, "quantité à ajouter : ", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/* 		    {# Affichage des erreurs pour ce champ précis. #}*/
/* 		    {{ form_errors(formulaire.quantite) }}*/
/* */
/* 		    <div class="col-sm-4">*/
/* 		        {# Génération de l'input. #}*/
/* 		        {{ form_widget(formulaire.quantite, {'attr': {'class': 'form-control'}}) }}*/
/* 		    </div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 		    {# Génération du label. #}*/
/* 		    {{ form_label(formulaire.seuilMin, "Seuil Min : ", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/* 		    {# Affichage des erreurs pour ce champ précis. #}*/
/* 		    {{ form_errors(formulaire.seuilMin) }}*/
/* */
/* 		    <div class="col-sm-4">*/
/* 		        {# Génération de l'input. #}*/
/* 		        {{ form_widget(formulaire.seuilMin, {'attr': {'class': 'form-control'}}) }}*/
/* 		    </div>*/
/* 		</div>*/
/* 		*/
/* */
/* 		{# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/*         <span style="margin-left:30%">{{ form_widget(formulaire.Ajouter, {'attr': {'class': 'btn btn-primary'}}) }}</span>*/
/* */
/*         <span style="margin-left:30%">{{ form_widget(formulaire.Annuler, {'attr': {'class': 'btn btn-primary'}}) }}</span>*/
/* */
/* 		{{ form_widget(formulaire) }}*/
/* 		 {{ form_end(formulaire) }}	*/
/* 		 </div>*/
/* 	{%endblock%}*/
