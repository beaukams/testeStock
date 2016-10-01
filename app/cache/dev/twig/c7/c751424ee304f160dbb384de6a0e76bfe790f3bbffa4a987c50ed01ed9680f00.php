<?php

/* base.html.twig */
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
        $__internal_73aa92c6496ac87e63bd9e7f671130e1530ffdc065a880683fa833c8aef4b120 = $this->env->getExtension("native_profiler");
        $__internal_73aa92c6496ac87e63bd9e7f671130e1530ffdc065a880683fa833c8aef4b120->enter($__internal_73aa92c6496ac87e63bd9e7f671130e1530ffdc065a880683fa833c8aef4b120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_73aa92c6496ac87e63bd9e7f671130e1530ffdc065a880683fa833c8aef4b120->leave($__internal_73aa92c6496ac87e63bd9e7f671130e1530ffdc065a880683fa833c8aef4b120_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3afefcd711c0eebc9b327dd0869e0172be07cbd395eaecffff38b7fe398ebd67 = $this->env->getExtension("native_profiler");
        $__internal_3afefcd711c0eebc9b327dd0869e0172be07cbd395eaecffff38b7fe398ebd67->enter($__internal_3afefcd711c0eebc9b327dd0869e0172be07cbd395eaecffff38b7fe398ebd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3afefcd711c0eebc9b327dd0869e0172be07cbd395eaecffff38b7fe398ebd67->leave($__internal_3afefcd711c0eebc9b327dd0869e0172be07cbd395eaecffff38b7fe398ebd67_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe4b8bbc9efcd42c481622004fdbe2d517c3bb09f803f26f8fe004a473623bea = $this->env->getExtension("native_profiler");
        $__internal_fe4b8bbc9efcd42c481622004fdbe2d517c3bb09f803f26f8fe004a473623bea->enter($__internal_fe4b8bbc9efcd42c481622004fdbe2d517c3bb09f803f26f8fe004a473623bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fe4b8bbc9efcd42c481622004fdbe2d517c3bb09f803f26f8fe004a473623bea->leave($__internal_fe4b8bbc9efcd42c481622004fdbe2d517c3bb09f803f26f8fe004a473623bea_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd749a1fd0fba59a40915585c899e3e78f7a1cd887b24ad6063da653bdbce30b = $this->env->getExtension("native_profiler");
        $__internal_bd749a1fd0fba59a40915585c899e3e78f7a1cd887b24ad6063da653bdbce30b->enter($__internal_bd749a1fd0fba59a40915585c899e3e78f7a1cd887b24ad6063da653bdbce30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd749a1fd0fba59a40915585c899e3e78f7a1cd887b24ad6063da653bdbce30b->leave($__internal_bd749a1fd0fba59a40915585c899e3e78f7a1cd887b24ad6063da653bdbce30b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f9fa9f69d942b1e2a8443018ce1f710ef3c1636123422f3ccf8eede1705ffc9 = $this->env->getExtension("native_profiler");
        $__internal_7f9fa9f69d942b1e2a8443018ce1f710ef3c1636123422f3ccf8eede1705ffc9->enter($__internal_7f9fa9f69d942b1e2a8443018ce1f710ef3c1636123422f3ccf8eede1705ffc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7f9fa9f69d942b1e2a8443018ce1f710ef3c1636123422f3ccf8eede1705ffc9->leave($__internal_7f9fa9f69d942b1e2a8443018ce1f710ef3c1636123422f3ccf8eede1705ffc9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
