<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_6eb294331102fb592380e065a48886fa3bd272e2f2bb07c974ca94a680328515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:Core:search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94dbb8b8cd8ed9eafab8c7842529eea466a73e9544849422d16af7f77af2cd8d = $this->env->getExtension("native_profiler");
        $__internal_94dbb8b8cd8ed9eafab8c7842529eea466a73e9544849422d16af7f77af2cd8d->enter($__internal_94dbb8b8cd8ed9eafab8c7842529eea466a73e9544849422d16af7f77af2cd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94dbb8b8cd8ed9eafab8c7842529eea466a73e9544849422d16af7f77af2cd8d->leave($__internal_94dbb8b8cd8ed9eafab8c7842529eea466a73e9544849422d16af7f77af2cd8d_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc44b86996c79a5542475c9477e119be5ecb87cbc32c830df9eec144371580cc = $this->env->getExtension("native_profiler");
        $__internal_dc44b86996c79a5542475c9477e119be5ecb87cbc32c830df9eec144371580cc->enter($__internal_dc44b86996c79a5542475c9477e119be5ecb87cbc32c830df9eec144371580cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        
        $__internal_dc44b86996c79a5542475c9477e119be5ecb87cbc32c830df9eec144371580cc->leave($__internal_dc44b86996c79a5542475c9477e119be5ecb87cbc32c830df9eec144371580cc_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_7fed08b32f656e32e55ee0a8a7808f235122734e7866c7380e1e5e92a1cd5d5e = $this->env->getExtension("native_profiler");
        $__internal_7fed08b32f656e32e55ee0a8a7808f235122734e7866c7380e1e5e92a1cd5d5e->enter($__internal_7fed08b32f656e32e55ee0a8a7808f235122734e7866c7380e1e5e92a1cd5d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_7fed08b32f656e32e55ee0a8a7808f235122734e7866c7380e1e5e92a1cd5d5e->leave($__internal_7fed08b32f656e32e55ee0a8a7808f235122734e7866c7380e1e5e92a1cd5d5e_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_0f647792bdd81ed44a2111e3a9e6d07d3cd77ee376b4b3ba81d033d30137997a = $this->env->getExtension("native_profiler");
        $__internal_0f647792bdd81ed44a2111e3a9e6d07d3cd77ee376b4b3ba81d033d30137997a->enter($__internal_0f647792bdd81ed44a2111e3a9e6d07d3cd77ee376b4b3ba81d033d30137997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if ((array_key_exists("query", $context) &&  !((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\">

        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 24
                echo "            ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 25
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                        // line 26
                        echo "                ";
                        $context["display"] = $this->env->getExtension('security')->isGranted($context["role"]);
                        // line 27
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "
            ";
                // line 29
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 30
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 31
                        echo "                    ";
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
                        // line 32
                        echo "                    ";
                        if ((($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($context["admin"], "hasRoute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method")))) {
                            // line 33
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 36
(isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "admin_code" => $this->getAttribute(                            // line 37
$context["admin"], "code", array()), "page" => 0, "per_page" => 10, "icon" => $this->getAttribute(                            // line 40
$context["group"], "icon", array()))));
                            // line 41
                            echo "
                    ";
                        }
                        // line 43
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        </div>
    ";
        }
        // line 48
        echo "
";
        
        $__internal_0f647792bdd81ed44a2111e3a9e6d07d3cd77ee376b4b3ba81d033d30137997a->leave($__internal_0f647792bdd81ed44a2111e3a9e6d07d3cd77ee376b4b3ba81d033d30137997a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 48,  143 => 46,  137 => 45,  134 => 44,  128 => 43,  124 => 41,  122 => 40,  121 => 37,  120 => 36,  118 => 33,  115 => 32,  112 => 31,  107 => 30,  105 => 29,  102 => 28,  95 => 27,  92 => 26,  86 => 25,  83 => 24,  79 => 23,  75 => 21,  72 => 20,  70 => 19,  64 => 17,  58 => 16,  47 => 15,  35 => 14,  20 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block title %}{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}{% endblock %}*/
/* {% block breadcrumb %}{% endblock %}*/
/* {% block content %}*/
/*     <h2 class="page-header">{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}</h2>*/
/* */
/*     {% if query is defined and query is not same as(false) %}*/
/*         {% set count = 0 %}*/
/*         <div class="row">*/
/* */
/*         {% for group in groups %}*/
/*             {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}*/
/*             {% for role in group.roles if not display %}*/
/*                 {% set display = is_granted(role) %}*/
/*             {% endfor %}*/
/* */
/*             {% if display %}*/
/*                 {% for admin in group.items %}*/
/*                     {% set count = count + 1 %}*/
/*                     {% if admin.hasRoute('create') and admin.isGranted('CREATE') or admin.hasRoute('list') and admin.isGranted('LIST') %}*/
/*                         {{ sonata_block_render({*/
/*                             'type': 'sonata.admin.block.search_result'*/
/*                         }, {*/
/*                             'query': query,*/
/*                             'admin_code': admin.code,*/
/*                             'page': 0,*/
/*                             'per_page': 10,*/
/*                             'icon': group.icon*/
/*                         }) }}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
