<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_349f02141c322637a35a4e0442a5ba0f75c37ce1ff887b8078170e8323caab1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb00c4a41b9f3b4c998ba1714b8a3ccb4796beb3962907c26283231251b49966 = $this->env->getExtension("native_profiler");
        $__internal_bb00c4a41b9f3b4c998ba1714b8a3ccb4796beb3962907c26283231251b49966->enter($__internal_bb00c4a41b9f3b4c998ba1714b8a3ccb4796beb3962907c26283231251b49966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb00c4a41b9f3b4c998ba1714b8a3ccb4796beb3962907c26283231251b49966->leave($__internal_bb00c4a41b9f3b4c998ba1714b8a3ccb4796beb3962907c26283231251b49966_prof);

    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_e00de75329699e9476b52200c6445e5edb535c41aef61e91477fb084c891efa3 = $this->env->getExtension("native_profiler");
        $__internal_e00de75329699e9476b52200c6445e5edb535c41aef61e91477fb084c891efa3->enter($__internal_e00de75329699e9476b52200c6445e5edb535c41aef61e91477fb084c891efa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "        </div>
    </div>
";
        
        $__internal_e00de75329699e9476b52200c6445e5edb535c41aef61e91477fb084c891efa3->leave($__internal_e00de75329699e9476b52200c6445e5edb535c41aef61e91477fb084c891efa3_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac4f5d9352770d9e3fcfebb59d37561960e6545495f9fc0df98f8cdc9edfaaea = $this->env->getExtension("native_profiler");
        $__internal_ac4f5d9352770d9e3fcfebb59d37561960e6545495f9fc0df98f8cdc9edfaaea->enter($__internal_ac4f5d9352770d9e3fcfebb59d37561960e6545495f9fc0df98f8cdc9edfaaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "                ";
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 12)->display($context);
        // line 13
        echo "            ";
        
        $__internal_ac4f5d9352770d9e3fcfebb59d37561960e6545495f9fc0df98f8cdc9edfaaea->leave($__internal_ac4f5d9352770d9e3fcfebb59d37561960e6545495f9fc0df98f8cdc9edfaaea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  72 => 12,  66 => 11,  57 => 14,  55 => 11,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SonataUserBundle:Profile:action.html.twig" %}*/
/* */
/* {% block sonata_profile_content %}*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">{{ "title_user_edit_password" | trans({}, 'SonataUserBundle') }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             {% block fos_user_content %}*/
/*                 {% include "SonataUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock sonata_profile_content %}*/
/* */
