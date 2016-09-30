<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_35ee23c48898d00335b39d4be5aa7144f1ab89c59993aba4710d1b4eb7a53f71 extends Twig_Template
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
        $__internal_b987d5b2111d5313535ce37f85c1128d2a865b91deb4cf81da9840f7db02c827 = $this->env->getExtension("native_profiler");
        $__internal_b987d5b2111d5313535ce37f85c1128d2a865b91deb4cf81da9840f7db02c827->enter($__internal_b987d5b2111d5313535ce37f85c1128d2a865b91deb4cf81da9840f7db02c827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b987d5b2111d5313535ce37f85c1128d2a865b91deb4cf81da9840f7db02c827->leave($__internal_b987d5b2111d5313535ce37f85c1128d2a865b91deb4cf81da9840f7db02c827_prof);

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
