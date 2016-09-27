<?php

/* base.html.twig */
class __TwigTemplate_aeeb11baf71cd121cb8774d952c640006fb890a585af6a08485cbb42e7aa2e0f extends Twig_Template
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
        $__internal_981442603a32a2fa44f7f1b68a47e894f608dc27f74697242635cfb3d2fcfd30 = $this->env->getExtension("native_profiler");
        $__internal_981442603a32a2fa44f7f1b68a47e894f608dc27f74697242635cfb3d2fcfd30->enter($__internal_981442603a32a2fa44f7f1b68a47e894f608dc27f74697242635cfb3d2fcfd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_981442603a32a2fa44f7f1b68a47e894f608dc27f74697242635cfb3d2fcfd30->leave($__internal_981442603a32a2fa44f7f1b68a47e894f608dc27f74697242635cfb3d2fcfd30_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6609da901f0bf9b6df24969830ec74beafdd0c5f44581c13ac09fb43837a1db9 = $this->env->getExtension("native_profiler");
        $__internal_6609da901f0bf9b6df24969830ec74beafdd0c5f44581c13ac09fb43837a1db9->enter($__internal_6609da901f0bf9b6df24969830ec74beafdd0c5f44581c13ac09fb43837a1db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6609da901f0bf9b6df24969830ec74beafdd0c5f44581c13ac09fb43837a1db9->leave($__internal_6609da901f0bf9b6df24969830ec74beafdd0c5f44581c13ac09fb43837a1db9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_201842c9ba4204e28d9eece0e907863b4e1b65bd156dfc438c4c956d1179621e = $this->env->getExtension("native_profiler");
        $__internal_201842c9ba4204e28d9eece0e907863b4e1b65bd156dfc438c4c956d1179621e->enter($__internal_201842c9ba4204e28d9eece0e907863b4e1b65bd156dfc438c4c956d1179621e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_201842c9ba4204e28d9eece0e907863b4e1b65bd156dfc438c4c956d1179621e->leave($__internal_201842c9ba4204e28d9eece0e907863b4e1b65bd156dfc438c4c956d1179621e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d682e328852958858189180af98f3e739c8a194d83a96c91f573fed09bc50d1 = $this->env->getExtension("native_profiler");
        $__internal_6d682e328852958858189180af98f3e739c8a194d83a96c91f573fed09bc50d1->enter($__internal_6d682e328852958858189180af98f3e739c8a194d83a96c91f573fed09bc50d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6d682e328852958858189180af98f3e739c8a194d83a96c91f573fed09bc50d1->leave($__internal_6d682e328852958858189180af98f3e739c8a194d83a96c91f573fed09bc50d1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_95ddf681b47344a774881630bf37989439011ea10491bd237f77be515ccf4400 = $this->env->getExtension("native_profiler");
        $__internal_95ddf681b47344a774881630bf37989439011ea10491bd237f77be515ccf4400->enter($__internal_95ddf681b47344a774881630bf37989439011ea10491bd237f77be515ccf4400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_95ddf681b47344a774881630bf37989439011ea10491bd237f77be515ccf4400->leave($__internal_95ddf681b47344a774881630bf37989439011ea10491bd237f77be515ccf4400_prof);

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
