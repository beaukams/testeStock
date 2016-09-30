<?php

/* ::base.html.twig */
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
        $__internal_3ef02045da9017a4ea8b9254d059a9d5a859527d363353cfa93acd01f9930539 = $this->env->getExtension("native_profiler");
        $__internal_3ef02045da9017a4ea8b9254d059a9d5a859527d363353cfa93acd01f9930539->enter($__internal_3ef02045da9017a4ea8b9254d059a9d5a859527d363353cfa93acd01f9930539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3ef02045da9017a4ea8b9254d059a9d5a859527d363353cfa93acd01f9930539->leave($__internal_3ef02045da9017a4ea8b9254d059a9d5a859527d363353cfa93acd01f9930539_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a38dbb922a18d6e727c61c59b098b904e1e10ac7986128bc60064b9c235d26c = $this->env->getExtension("native_profiler");
        $__internal_6a38dbb922a18d6e727c61c59b098b904e1e10ac7986128bc60064b9c235d26c->enter($__internal_6a38dbb922a18d6e727c61c59b098b904e1e10ac7986128bc60064b9c235d26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6a38dbb922a18d6e727c61c59b098b904e1e10ac7986128bc60064b9c235d26c->leave($__internal_6a38dbb922a18d6e727c61c59b098b904e1e10ac7986128bc60064b9c235d26c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9023ece883b5b8f99ddef53289f75dcd57bd7066035cc9047287592d4e1f8b3a = $this->env->getExtension("native_profiler");
        $__internal_9023ece883b5b8f99ddef53289f75dcd57bd7066035cc9047287592d4e1f8b3a->enter($__internal_9023ece883b5b8f99ddef53289f75dcd57bd7066035cc9047287592d4e1f8b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9023ece883b5b8f99ddef53289f75dcd57bd7066035cc9047287592d4e1f8b3a->leave($__internal_9023ece883b5b8f99ddef53289f75dcd57bd7066035cc9047287592d4e1f8b3a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b44cdbc08b7ef8c3ac42ecaad5df3062fcbefbbc44ed236b882517780c84965 = $this->env->getExtension("native_profiler");
        $__internal_3b44cdbc08b7ef8c3ac42ecaad5df3062fcbefbbc44ed236b882517780c84965->enter($__internal_3b44cdbc08b7ef8c3ac42ecaad5df3062fcbefbbc44ed236b882517780c84965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3b44cdbc08b7ef8c3ac42ecaad5df3062fcbefbbc44ed236b882517780c84965->leave($__internal_3b44cdbc08b7ef8c3ac42ecaad5df3062fcbefbbc44ed236b882517780c84965_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f43dc15c73081559e204e0f7ef50aa6689f7be640793afd38dd34820b82fa97 = $this->env->getExtension("native_profiler");
        $__internal_6f43dc15c73081559e204e0f7ef50aa6689f7be640793afd38dd34820b82fa97->enter($__internal_6f43dc15c73081559e204e0f7ef50aa6689f7be640793afd38dd34820b82fa97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f43dc15c73081559e204e0f7ef50aa6689f7be640793afd38dd34820b82fa97->leave($__internal_6f43dc15c73081559e204e0f7ef50aa6689f7be640793afd38dd34820b82fa97_prof);

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
