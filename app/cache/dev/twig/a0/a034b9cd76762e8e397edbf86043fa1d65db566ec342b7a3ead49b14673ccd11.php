<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_99571d30b385faa39dd492250074f9d258a2b86a199932ccb0f896101665b901 extends Twig_Template
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
        $__internal_32e22100c210cf89d3bb03707d98f5d61dfa85a8b396dc11c11ede755dad3c0b = $this->env->getExtension("native_profiler");
        $__internal_32e22100c210cf89d3bb03707d98f5d61dfa85a8b396dc11c11ede755dad3c0b->enter($__internal_32e22100c210cf89d3bb03707d98f5d61dfa85a8b396dc11c11ede755dad3c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_32e22100c210cf89d3bb03707d98f5d61dfa85a8b396dc11c11ede755dad3c0b->leave($__internal_32e22100c210cf89d3bb03707d98f5d61dfa85a8b396dc11c11ede755dad3c0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
