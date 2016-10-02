<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_4f7215ac3352ebafe367245265356c603201517acde3e5c41be577f5d273d4e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d19ee8287721922d8839ccadfb902e2120b2d3942f90fbec96c2c61776cf6105 = $this->env->getExtension("native_profiler");
        $__internal_d19ee8287721922d8839ccadfb902e2120b2d3942f90fbec96c2c61776cf6105->enter($__internal_d19ee8287721922d8839ccadfb902e2120b2d3942f90fbec96c2c61776cf6105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d19ee8287721922d8839ccadfb902e2120b2d3942f90fbec96c2c61776cf6105->leave($__internal_d19ee8287721922d8839ccadfb902e2120b2d3942f90fbec96c2c61776cf6105_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_0524cc4c1123c9c5c468bae9535d13404a320bb528ebffc7e976cf9a4dbcd9ee = $this->env->getExtension("native_profiler");
        $__internal_0524cc4c1123c9c5c468bae9535d13404a320bb528ebffc7e976cf9a4dbcd9ee->enter($__internal_0524cc4c1123c9c5c468bae9535d13404a320bb528ebffc7e976cf9a4dbcd9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_0524cc4c1123c9c5c468bae9535d13404a320bb528ebffc7e976cf9a4dbcd9ee->leave($__internal_0524cc4c1123c9c5c468bae9535d13404a320bb528ebffc7e976cf9a4dbcd9ee_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_59ad15764486fee850fefd29be3cb6361ccd8ad568743f2388a818e6b382a17e = $this->env->getExtension("native_profiler");
        $__internal_59ad15764486fee850fefd29be3cb6361ccd8ad568743f2388a818e6b382a17e->enter($__internal_59ad15764486fee850fefd29be3cb6361ccd8ad568743f2388a818e6b382a17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_59ad15764486fee850fefd29be3cb6361ccd8ad568743f2388a818e6b382a17e->leave($__internal_59ad15764486fee850fefd29be3cb6361ccd8ad568743f2388a818e6b382a17e_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_043652f0147e99bf2d1034ee47c6ae47525a3ffcf2c0482c0fafd0ab83e13ef1 = $this->env->getExtension("native_profiler");
        $__internal_043652f0147e99bf2d1034ee47c6ae47525a3ffcf2c0482c0fafd0ab83e13ef1->enter($__internal_043652f0147e99bf2d1034ee47c6ae47525a3ffcf2c0482c0fafd0ab83e13ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_043652f0147e99bf2d1034ee47c6ae47525a3ffcf2c0482c0fafd0ab83e13ef1->leave($__internal_043652f0147e99bf2d1034ee47c6ae47525a3ffcf2c0482c0fafd0ab83e13ef1_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_717d89e0d26788c865a8e22ca1b435edfad23d6ed87ad251609128722a23b0a6 = $this->env->getExtension("native_profiler");
        $__internal_717d89e0d26788c865a8e22ca1b435edfad23d6ed87ad251609128722a23b0a6->enter($__internal_717d89e0d26788c865a8e22ca1b435edfad23d6ed87ad251609128722a23b0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $context["name"]), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_717d89e0d26788c865a8e22ca1b435edfad23d6ed87ad251609128722a23b0a6->leave($__internal_717d89e0d26788c865a8e22ca1b435edfad23d6ed87ad251609128722a23b0a6_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_c497e995335583ec51c3a9355a21b7ea840ae84571ba96d226dc2ee86e0aa0fb = $this->env->getExtension("native_profiler");
        $__internal_c497e995335583ec51c3a9355a21b7ea840ae84571ba96d226dc2ee86e0aa0fb->enter($__internal_c497e995335583ec51c3a9355a21b7ea840ae84571ba96d226dc2ee86e0aa0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_c497e995335583ec51c3a9355a21b7ea840ae84571ba96d226dc2ee86e0aa0fb->leave($__internal_c497e995335583ec51c3a9355a21b7ea840ae84571ba96d226dc2ee86e0aa0fb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}*/
/* */
/* {% block actions %}*/
/* {% endblock %}*/
/* */
/* {% block side_menu %}*/
/* {% endblock %}*/
/* */
/* {% block formactions %}*/
/*     <button class="btn btn-success" type="submit" name="btn_preview_approve">*/
/*         <i class="fa fa-check"></i>*/
/*         {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}*/
/*     </button>*/
/*     <button class="btn btn-danger" type="submit" name="btn_preview_decline">*/
/*         <i class="fa fa-times"></i>*/
/*         {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}*/
/*     </button>*/
/* {% endblock %}*/
/* */
/* {% block preview %}*/
/*     <div class="sonata-ba-view">*/
/*         {% for name, view_group in admin.showgroups %}*/
/*             <table class="table table-bordered">*/
/*                 {% if name %}*/
/*                     <tr class="sonata-ba-view-title">*/
/*                         <td colspan="2">*/
/*                             {{ admin.trans(name) }}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endif %}*/
/* */
/*                 {% for field_name in view_group.fields %}*/
/*                     <tr class="sonata-ba-view-container">*/
/*                         {% if admin.show[field_name] is defined %}*/
/*                             {{ admin.show[field_name]|render_view_element(object) }}*/
/*                         {% endif %}*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form %}*/
/*     <div class="sonata-preview-form-container">*/
/*         {{ parent() }}*/
/*     </div>*/
/* {% endblock %}*/
/* */