<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b0d65082550fc75c62d7b7aeeb1eb4b009c7a82790a71824a273adf970ec6140 extends Twig_Template
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
        $__internal_bfaaab521e6f017a57cb4e6a08518cd35d2ce0d18fed9b8a3789f46d292afb4e = $this->env->getExtension("native_profiler");
        $__internal_bfaaab521e6f017a57cb4e6a08518cd35d2ce0d18fed9b8a3789f46d292afb4e->enter($__internal_bfaaab521e6f017a57cb4e6a08518cd35d2ce0d18fed9b8a3789f46d292afb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bfaaab521e6f017a57cb4e6a08518cd35d2ce0d18fed9b8a3789f46d292afb4e->leave($__internal_bfaaab521e6f017a57cb4e6a08518cd35d2ce0d18fed9b8a3789f46d292afb4e_prof);

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
