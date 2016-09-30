<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3e924e74fc4fd6cc14f47723fd824ec2845a1304f727e9927811471d5f80940e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_492ae1a265368f8e46b0c699db97973b3faae80257fffef4331db8879e67ec12 = $this->env->getExtension("native_profiler");
        $__internal_492ae1a265368f8e46b0c699db97973b3faae80257fffef4331db8879e67ec12->enter($__internal_492ae1a265368f8e46b0c699db97973b3faae80257fffef4331db8879e67ec12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_492ae1a265368f8e46b0c699db97973b3faae80257fffef4331db8879e67ec12->leave($__internal_492ae1a265368f8e46b0c699db97973b3faae80257fffef4331db8879e67ec12_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78f37eb0c8f95a062323b34987c3dd31b84d1c2d2ec7fd8a8ade4d88a789593e = $this->env->getExtension("native_profiler");
        $__internal_78f37eb0c8f95a062323b34987c3dd31b84d1c2d2ec7fd8a8ade4d88a789593e->enter($__internal_78f37eb0c8f95a062323b34987c3dd31b84d1c2d2ec7fd8a8ade4d88a789593e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_78f37eb0c8f95a062323b34987c3dd31b84d1c2d2ec7fd8a8ade4d88a789593e->leave($__internal_78f37eb0c8f95a062323b34987c3dd31b84d1c2d2ec7fd8a8ade4d88a789593e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9b2ff6650c219a83cfb90f43bf145a8d78e712669410c6fb2f2792c08dddd4d = $this->env->getExtension("native_profiler");
        $__internal_a9b2ff6650c219a83cfb90f43bf145a8d78e712669410c6fb2f2792c08dddd4d->enter($__internal_a9b2ff6650c219a83cfb90f43bf145a8d78e712669410c6fb2f2792c08dddd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a9b2ff6650c219a83cfb90f43bf145a8d78e712669410c6fb2f2792c08dddd4d->leave($__internal_a9b2ff6650c219a83cfb90f43bf145a8d78e712669410c6fb2f2792c08dddd4d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
