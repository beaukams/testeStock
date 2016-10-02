<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_767dc2a1dc8c921db6b732fdf24e574f44c7dc6e7a6950be2db42dd0002e6dac extends Twig_Template
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
        $__internal_437c1143e9d795fd59773506f058a5e0950cc6f95dbd0ae1a6b08ed9c2d4c4c2 = $this->env->getExtension("native_profiler");
        $__internal_437c1143e9d795fd59773506f058a5e0950cc6f95dbd0ae1a6b08ed9c2d4c4c2->enter($__internal_437c1143e9d795fd59773506f058a5e0950cc6f95dbd0ae1a6b08ed9c2d4c4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_437c1143e9d795fd59773506f058a5e0950cc6f95dbd0ae1a6b08ed9c2d4c4c2->leave($__internal_437c1143e9d795fd59773506f058a5e0950cc6f95dbd0ae1a6b08ed9c2d4c4c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
