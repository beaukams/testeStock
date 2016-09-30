<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_eb82c63a922b075453dd065dcc50c480962101b6162d202921ebff6d601d7914 extends Twig_Template
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
        $__internal_db230af5410363dfdedc2e171784b25c66b8a09c7f6595f23b87c50112ea283d = $this->env->getExtension("native_profiler");
        $__internal_db230af5410363dfdedc2e171784b25c66b8a09c7f6595f23b87c50112ea283d->enter($__internal_db230af5410363dfdedc2e171784b25c66b8a09c7f6595f23b87c50112ea283d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_db230af5410363dfdedc2e171784b25c66b8a09c7f6595f23b87c50112ea283d->leave($__internal_db230af5410363dfdedc2e171784b25c66b8a09c7f6595f23b87c50112ea283d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
