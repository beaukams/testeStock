<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_47c86d3499717efdf473ac9227852034a59fa0015828bab354f2616dfe350ace extends Twig_Template
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
        $__internal_28d4568a399a3bf4ac43e5916b6f64806e4495633843dfc3fdf0554644b1aaa3 = $this->env->getExtension("native_profiler");
        $__internal_28d4568a399a3bf4ac43e5916b6f64806e4495633843dfc3fdf0554644b1aaa3->enter($__internal_28d4568a399a3bf4ac43e5916b6f64806e4495633843dfc3fdf0554644b1aaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_28d4568a399a3bf4ac43e5916b6f64806e4495633843dfc3fdf0554644b1aaa3->leave($__internal_28d4568a399a3bf4ac43e5916b6f64806e4495633843dfc3fdf0554644b1aaa3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
