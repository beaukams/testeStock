<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b5ae37abb1b6ff4282a2ac593724ac9afbb9e377c4c00c43c019bc87375141f0 extends Twig_Template
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
        $__internal_a4f3453f159169f285ed62df96d6d8ba4035655c79acca222afeb4528f211585 = $this->env->getExtension("native_profiler");
        $__internal_a4f3453f159169f285ed62df96d6d8ba4035655c79acca222afeb4528f211585->enter($__internal_a4f3453f159169f285ed62df96d6d8ba4035655c79acca222afeb4528f211585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a4f3453f159169f285ed62df96d6d8ba4035655c79acca222afeb4528f211585->leave($__internal_a4f3453f159169f285ed62df96d6d8ba4035655c79acca222afeb4528f211585_prof);

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
