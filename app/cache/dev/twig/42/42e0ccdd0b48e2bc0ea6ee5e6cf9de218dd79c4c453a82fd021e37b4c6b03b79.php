<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_1a6b62d8518add708c7da607120e1edd5f22c929f895b97b4b330102042b27d0 extends Twig_Template
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
        $__internal_b22871193faa61ea31873acf7afdf4b89942767b1420d1a7fe7fdd795ec205fd = $this->env->getExtension("native_profiler");
        $__internal_b22871193faa61ea31873acf7afdf4b89942767b1420d1a7fe7fdd795ec205fd->enter($__internal_b22871193faa61ea31873acf7afdf4b89942767b1420d1a7fe7fdd795ec205fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b22871193faa61ea31873acf7afdf4b89942767b1420d1a7fe7fdd795ec205fd->leave($__internal_b22871193faa61ea31873acf7afdf4b89942767b1420d1a7fe7fdd795ec205fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4d888dce43744fa69f4396fed08d84c70facc5737a7d7c07668580efc9b87ea = $this->env->getExtension("native_profiler");
        $__internal_f4d888dce43744fa69f4396fed08d84c70facc5737a7d7c07668580efc9b87ea->enter($__internal_f4d888dce43744fa69f4396fed08d84c70facc5737a7d7c07668580efc9b87ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f4d888dce43744fa69f4396fed08d84c70facc5737a7d7c07668580efc9b87ea->leave($__internal_f4d888dce43744fa69f4396fed08d84c70facc5737a7d7c07668580efc9b87ea_prof);

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
