<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_999d515cbc9c48baf6a1a778c83be9275d7c9da157797a35a29c5124773c7610 extends Twig_Template
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
        $__internal_d5df121fc19da962bd969ba64fb37d21ead0d0237d64e01a059aca3b81049c07 = $this->env->getExtension("native_profiler");
        $__internal_d5df121fc19da962bd969ba64fb37d21ead0d0237d64e01a059aca3b81049c07->enter($__internal_d5df121fc19da962bd969ba64fb37d21ead0d0237d64e01a059aca3b81049c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

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
        
        $__internal_d5df121fc19da962bd969ba64fb37d21ead0d0237d64e01a059aca3b81049c07->leave($__internal_d5df121fc19da962bd969ba64fb37d21ead0d0237d64e01a059aca3b81049c07_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_b74c18b1fa2c8fe66de8096f5332cd065296bcae1fcc98bb5285e90e4060ab0f = $this->env->getExtension("native_profiler");
        $__internal_b74c18b1fa2c8fe66de8096f5332cd065296bcae1fcc98bb5285e90e4060ab0f->enter($__internal_b74c18b1fa2c8fe66de8096f5332cd065296bcae1fcc98bb5285e90e4060ab0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_b74c18b1fa2c8fe66de8096f5332cd065296bcae1fcc98bb5285e90e4060ab0f->leave($__internal_b74c18b1fa2c8fe66de8096f5332cd065296bcae1fcc98bb5285e90e4060ab0f_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_480d7cda25b50b839833057bf2d8120caccfdf0704e24c95a23264b51eaa0c13 = $this->env->getExtension("native_profiler");
        $__internal_480d7cda25b50b839833057bf2d8120caccfdf0704e24c95a23264b51eaa0c13->enter($__internal_480d7cda25b50b839833057bf2d8120caccfdf0704e24c95a23264b51eaa0c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_480d7cda25b50b839833057bf2d8120caccfdf0704e24c95a23264b51eaa0c13->leave($__internal_480d7cda25b50b839833057bf2d8120caccfdf0704e24c95a23264b51eaa0c13_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_f2c0d3b41beea2d117e6a86fffb48aa33ea1f361d8c385bdc0b55efc46e90bf4 = $this->env->getExtension("native_profiler");
        $__internal_f2c0d3b41beea2d117e6a86fffb48aa33ea1f361d8c385bdc0b55efc46e90bf4->enter($__internal_f2c0d3b41beea2d117e6a86fffb48aa33ea1f361d8c385bdc0b55efc46e90bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

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
        
        $__internal_f2c0d3b41beea2d117e6a86fffb48aa33ea1f361d8c385bdc0b55efc46e90bf4->leave($__internal_f2c0d3b41beea2d117e6a86fffb48aa33ea1f361d8c385bdc0b55efc46e90bf4_prof);

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
