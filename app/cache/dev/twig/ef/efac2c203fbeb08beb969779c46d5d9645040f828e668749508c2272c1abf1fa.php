<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f6b5a9b23943346a59c83b4f45883352cad39f6073c9e5c745643bb3a389aeb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd96bb154342de841d613c513466cb20a350a6e0e84d4c553a2bdecc96307bc6 = $this->env->getExtension("native_profiler");
        $__internal_fd96bb154342de841d613c513466cb20a350a6e0e84d4c553a2bdecc96307bc6->enter($__internal_fd96bb154342de841d613c513466cb20a350a6e0e84d4c553a2bdecc96307bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd96bb154342de841d613c513466cb20a350a6e0e84d4c553a2bdecc96307bc6->leave($__internal_fd96bb154342de841d613c513466cb20a350a6e0e84d4c553a2bdecc96307bc6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ce4d20d1e4c3a62c0b6e8d14a1942feccb299939a014eb796497a693e3de984 = $this->env->getExtension("native_profiler");
        $__internal_1ce4d20d1e4c3a62c0b6e8d14a1942feccb299939a014eb796497a693e3de984->enter($__internal_1ce4d20d1e4c3a62c0b6e8d14a1942feccb299939a014eb796497a693e3de984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_resetting", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 9
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 9)->display($context);
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_1ce4d20d1e4c3a62c0b6e8d14a1942feccb299939a014eb796497a693e3de984->leave($__internal_1ce4d20d1e4c3a62c0b6e8d14a1942feccb299939a014eb796497a693e3de984_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "SonataUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">{{ "title_user_resetting" | trans({}, 'SonataUserBundle') }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
