<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_13621c07497fd564650117538856fa8965cecb032fc5f2d010acd495a1caf7eb extends Twig_Template
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
        $__internal_b287cb1efea91d3847585e5125cdbe37b56cda0b178427b966f6a6b1da56e29b = $this->env->getExtension("native_profiler");
        $__internal_b287cb1efea91d3847585e5125cdbe37b56cda0b178427b966f6a6b1da56e29b->enter($__internal_b287cb1efea91d3847585e5125cdbe37b56cda0b178427b966f6a6b1da56e29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b287cb1efea91d3847585e5125cdbe37b56cda0b178427b966f6a6b1da56e29b->leave($__internal_b287cb1efea91d3847585e5125cdbe37b56cda0b178427b966f6a6b1da56e29b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
