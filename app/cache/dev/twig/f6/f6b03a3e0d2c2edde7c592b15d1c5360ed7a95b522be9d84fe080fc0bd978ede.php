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
        $__internal_12bfea4ee9b63274a9c6ac47f907de0f0866123f2ad54768b1f7299f3bb92961 = $this->env->getExtension("native_profiler");
        $__internal_12bfea4ee9b63274a9c6ac47f907de0f0866123f2ad54768b1f7299f3bb92961->enter($__internal_12bfea4ee9b63274a9c6ac47f907de0f0866123f2ad54768b1f7299f3bb92961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_12bfea4ee9b63274a9c6ac47f907de0f0866123f2ad54768b1f7299f3bb92961->leave($__internal_12bfea4ee9b63274a9c6ac47f907de0f0866123f2ad54768b1f7299f3bb92961_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_22d793b229bdbed97b3122650106803a62a9547c03516eec9f50e32d1570a0d0 = $this->env->getExtension("native_profiler");
        $__internal_22d793b229bdbed97b3122650106803a62a9547c03516eec9f50e32d1570a0d0->enter($__internal_22d793b229bdbed97b3122650106803a62a9547c03516eec9f50e32d1570a0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_22d793b229bdbed97b3122650106803a62a9547c03516eec9f50e32d1570a0d0->leave($__internal_22d793b229bdbed97b3122650106803a62a9547c03516eec9f50e32d1570a0d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce9175896c65f9eb90fa29cf7487e9bc0b00b2f8ad06cc221e08de4a43ce5fc7 = $this->env->getExtension("native_profiler");
        $__internal_ce9175896c65f9eb90fa29cf7487e9bc0b00b2f8ad06cc221e08de4a43ce5fc7->enter($__internal_ce9175896c65f9eb90fa29cf7487e9bc0b00b2f8ad06cc221e08de4a43ce5fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ce9175896c65f9eb90fa29cf7487e9bc0b00b2f8ad06cc221e08de4a43ce5fc7->leave($__internal_ce9175896c65f9eb90fa29cf7487e9bc0b00b2f8ad06cc221e08de4a43ce5fc7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cc73e426063780198db42519962cbb52de7540cc7cf07de31d2925da594fc2d = $this->env->getExtension("native_profiler");
        $__internal_4cc73e426063780198db42519962cbb52de7540cc7cf07de31d2925da594fc2d->enter($__internal_4cc73e426063780198db42519962cbb52de7540cc7cf07de31d2925da594fc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4cc73e426063780198db42519962cbb52de7540cc7cf07de31d2925da594fc2d->leave($__internal_4cc73e426063780198db42519962cbb52de7540cc7cf07de31d2925da594fc2d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0cbb8dcaa9e85e5f4d2a442937b9c0a5d75e5f3ccacbe05b5592faaf8ada2c65 = $this->env->getExtension("native_profiler");
        $__internal_0cbb8dcaa9e85e5f4d2a442937b9c0a5d75e5f3ccacbe05b5592faaf8ada2c65->enter($__internal_0cbb8dcaa9e85e5f4d2a442937b9c0a5d75e5f3ccacbe05b5592faaf8ada2c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0cbb8dcaa9e85e5f4d2a442937b9c0a5d75e5f3ccacbe05b5592faaf8ada2c65->leave($__internal_0cbb8dcaa9e85e5f4d2a442937b9c0a5d75e5f3ccacbe05b5592faaf8ada2c65_prof);

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
