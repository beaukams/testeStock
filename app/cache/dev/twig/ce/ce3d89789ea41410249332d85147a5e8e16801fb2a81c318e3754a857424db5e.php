<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_f84507c2f9ccea5ccafa7690d2c3a103d4e06465a4da1dcb68f6948bc0f6dee6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_792040d170b2d024a67d574871128f06302bd1a02037daaefd5f66fca285505c = $this->env->getExtension("native_profiler");
        $__internal_792040d170b2d024a67d574871128f06302bd1a02037daaefd5f66fca285505c->enter($__internal_792040d170b2d024a67d574871128f06302bd1a02037daaefd5f66fca285505c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_792040d170b2d024a67d574871128f06302bd1a02037daaefd5f66fca285505c->leave($__internal_792040d170b2d024a67d574871128f06302bd1a02037daaefd5f66fca285505c_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_3379fb1da3e40068af671580e61578b88242e84b3cee89b96b6a935960d976b7 = $this->env->getExtension("native_profiler");
        $__internal_3379fb1da3e40068af671580e61578b88242e84b3cee89b96b6a935960d976b7->enter($__internal_3379fb1da3e40068af671580e61578b88242e84b3cee89b96b6a935960d976b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_3379fb1da3e40068af671580e61578b88242e84b3cee89b96b6a935960d976b7->leave($__internal_3379fb1da3e40068af671580e61578b88242e84b3cee89b96b6a935960d976b7_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_9311c7fc55f67e1843516f68b31baacfe36d6184b7224f839e128d342f854c74 = $this->env->getExtension("native_profiler");
        $__internal_9311c7fc55f67e1843516f68b31baacfe36d6184b7224f839e128d342f854c74->enter($__internal_9311c7fc55f67e1843516f68b31baacfe36d6184b7224f839e128d342f854c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_9311c7fc55f67e1843516f68b31baacfe36d6184b7224f839e128d342f854c74->leave($__internal_9311c7fc55f67e1843516f68b31baacfe36d6184b7224f839e128d342f854c74_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_ae6c6967f824f5305db86a1f80cf547094f397cbd7addb0ffbe88d75998414dc = $this->env->getExtension("native_profiler");
        $__internal_ae6c6967f824f5305db86a1f80cf547094f397cbd7addb0ffbe88d75998414dc->enter($__internal_ae6c6967f824f5305db86a1f80cf547094f397cbd7addb0ffbe88d75998414dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_ae6c6967f824f5305db86a1f80cf547094f397cbd7addb0ffbe88d75998414dc->leave($__internal_ae6c6967f824f5305db86a1f80cf547094f397cbd7addb0ffbe88d75998414dc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  111 => 27,  102 => 26,  98 => 25,  94 => 24,  87 => 23,  81 => 22,  73 => 19,  70 => 18,  64 => 17,  51 => 13,  45 => 12,  38 => 22,  35 => 21,  33 => 17,  30 => 16,  28 => 12,  25 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% block num_pages %}*/
/*     {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}*/
/*     &nbsp;-&nbsp;*/
/* {% endblock %}*/
/* */
/* {% block num_results %}*/
/*     {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}*/
/*     &nbsp;-&nbsp;*/
/* {% endblock %}*/
/* */
/* {% block max_per_page %}*/
/*     <label class="control-label" for="{{ admin.uniqid }}_per_page">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>*/
/*     <select class="per-page small form-control" id="{{ admin.uniqid }}_per_page" style="width: auto">*/
/*         {% for per_page in admin.getperpageoptions %}*/
/*             <option {% if per_page == admin.datagrid.pager.maxperpage %}selected="selected"{% endif %} value="{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}">*/
/*                 {{ per_page }}*/
/*             </option>*/
/*         {% endfor %}*/
/*     </select>*/
/* {% endblock %}*/
/* */
