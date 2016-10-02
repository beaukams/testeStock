<?php

/* ::base.html.twig */
class __TwigTemplate_8d738bcc8d8cefaa3c8cc65a05b05be0bfe231f34a50ed55d0e5f5d5371b3924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bb9db1fe5d2a67a1a59720085fcb178b8f7543bec6d1aa67eade82813ed2c97 = $this->env->getExtension("native_profiler");
        $__internal_3bb9db1fe5d2a67a1a59720085fcb178b8f7543bec6d1aa67eade82813ed2c97->enter($__internal_3bb9db1fe5d2a67a1a59720085fcb178b8f7543bec6d1aa67eade82813ed2c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3bb9db1fe5d2a67a1a59720085fcb178b8f7543bec6d1aa67eade82813ed2c97->leave($__internal_3bb9db1fe5d2a67a1a59720085fcb178b8f7543bec6d1aa67eade82813ed2c97_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d76b5fe534559055f8cc246d86ec030991be8a8279a60fd63b86c285e75d5618 = $this->env->getExtension("native_profiler");
        $__internal_d76b5fe534559055f8cc246d86ec030991be8a8279a60fd63b86c285e75d5618->enter($__internal_d76b5fe534559055f8cc246d86ec030991be8a8279a60fd63b86c285e75d5618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d76b5fe534559055f8cc246d86ec030991be8a8279a60fd63b86c285e75d5618->leave($__internal_d76b5fe534559055f8cc246d86ec030991be8a8279a60fd63b86c285e75d5618_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd774ccdaeb3e719869fcb4ac7e17c9db7486d8b19a724c62a074d6467ee091d = $this->env->getExtension("native_profiler");
        $__internal_dd774ccdaeb3e719869fcb4ac7e17c9db7486d8b19a724c62a074d6467ee091d->enter($__internal_dd774ccdaeb3e719869fcb4ac7e17c9db7486d8b19a724c62a074d6467ee091d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dd774ccdaeb3e719869fcb4ac7e17c9db7486d8b19a724c62a074d6467ee091d->leave($__internal_dd774ccdaeb3e719869fcb4ac7e17c9db7486d8b19a724c62a074d6467ee091d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c874611a640d2460b81237b631e0ed5bd4e3c7c41f4ae092228773206572f31 = $this->env->getExtension("native_profiler");
        $__internal_7c874611a640d2460b81237b631e0ed5bd4e3c7c41f4ae092228773206572f31->enter($__internal_7c874611a640d2460b81237b631e0ed5bd4e3c7c41f4ae092228773206572f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c874611a640d2460b81237b631e0ed5bd4e3c7c41f4ae092228773206572f31->leave($__internal_7c874611a640d2460b81237b631e0ed5bd4e3c7c41f4ae092228773206572f31_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa4e8b9f9d40015fbfc08a9fdc5dae3a4c5f46d5dd5c0a683873e3e27dced56d = $this->env->getExtension("native_profiler");
        $__internal_aa4e8b9f9d40015fbfc08a9fdc5dae3a4c5f46d5dd5c0a683873e3e27dced56d->enter($__internal_aa4e8b9f9d40015fbfc08a9fdc5dae3a4c5f46d5dd5c0a683873e3e27dced56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_aa4e8b9f9d40015fbfc08a9fdc5dae3a4c5f46d5dd5c0a683873e3e27dced56d->leave($__internal_aa4e8b9f9d40015fbfc08a9fdc5dae3a4c5f46d5dd5c0a683873e3e27dced56d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
