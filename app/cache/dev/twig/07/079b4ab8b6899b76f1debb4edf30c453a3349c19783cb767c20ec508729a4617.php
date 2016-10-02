<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig */
class __TwigTemplate_2955137b827c81ff5dab97b03e41238d9480a01a1ab9449d4a9d34d893acfad8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65ce0bb3b99d295d2640bbbba5ccd7b99f15f6fb4911c17b9f267c3e1af8b22a = $this->env->getExtension("native_profiler");
        $__internal_65ce0bb3b99d295d2640bbbba5ccd7b99f15f6fb4911c17b9f267c3e1af8b22a->enter($__internal_65ce0bb3b99d295d2640bbbba5ccd7b99f15f6fb4911c17b9f267c3e1af8b22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig"));

        // line 11
        echo "
<div class=\"modal fade\" id=\"field_dialog_";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_65ce0bb3b99d295d2640bbbba5ccd7b99f15f6fb4911c17b9f267c3e1af8b22a->leave($__internal_65ce0bb3b99d295d2640bbbba5ccd7b99f15f6fb4911c17b9f267c3e1af8b22a_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* <div class="modal fade" id="field_dialog_{{ id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog modal-lg">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                 <h4 class="modal-title"></h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
