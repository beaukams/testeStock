<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_149f0458e9876b17b52a6debb212e19f7ac027ddcf91c5652249fee186855f82 extends Twig_Template
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
        $__internal_092c12d7f82005a98d70b4c7ff3d88926d2e521edf8e7921c8bd15dadd67c154 = $this->env->getExtension("native_profiler");
        $__internal_092c12d7f82005a98d70b4c7ff3d88926d2e521edf8e7921c8bd15dadd67c154->enter($__internal_092c12d7f82005a98d70b4c7ff3d88926d2e521edf8e7921c8bd15dadd67c154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_092c12d7f82005a98d70b4c7ff3d88926d2e521edf8e7921c8bd15dadd67c154->leave($__internal_092c12d7f82005a98d70b4c7ff3d88926d2e521edf8e7921c8bd15dadd67c154_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
