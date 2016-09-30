<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7bc526068f71d77217b509939027b1ede0626bccfeb299887e670c3753af910d extends Twig_Template
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
        $__internal_f5b0338015eac096af08cd0e39c2c13b25eefa31b246d34bb25368c32cd68f57 = $this->env->getExtension("native_profiler");
        $__internal_f5b0338015eac096af08cd0e39c2c13b25eefa31b246d34bb25368c32cd68f57->enter($__internal_f5b0338015eac096af08cd0e39c2c13b25eefa31b246d34bb25368c32cd68f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f5b0338015eac096af08cd0e39c2c13b25eefa31b246d34bb25368c32cd68f57->leave($__internal_f5b0338015eac096af08cd0e39c2c13b25eefa31b246d34bb25368c32cd68f57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
