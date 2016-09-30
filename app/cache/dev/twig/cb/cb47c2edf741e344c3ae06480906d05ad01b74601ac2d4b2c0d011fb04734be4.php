<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_70e669e90a36c621df3654a62b86250de8e64f5b554156352ca04ca68cbc13d3 extends Twig_Template
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
        $__internal_6b7ddd0b4bf5aa8ad9629741688420dc8fa43d10f760b9b00caf6d1c5ebe1ecd = $this->env->getExtension("native_profiler");
        $__internal_6b7ddd0b4bf5aa8ad9629741688420dc8fa43d10f760b9b00caf6d1c5ebe1ecd->enter($__internal_6b7ddd0b4bf5aa8ad9629741688420dc8fa43d10f760b9b00caf6d1c5ebe1ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6b7ddd0b4bf5aa8ad9629741688420dc8fa43d10f760b9b00caf6d1c5ebe1ecd->leave($__internal_6b7ddd0b4bf5aa8ad9629741688420dc8fa43d10f760b9b00caf6d1c5ebe1ecd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
