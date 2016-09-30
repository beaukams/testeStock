<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_23c2cf3c938d91cbc9d2282499183b1d25f110853306c7f672c74fdcef74ed9a extends Twig_Template
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
        $__internal_b664eecb239066ea966dcfc3e2077cd23f9896be79fff9369c0fd38689fe25a2 = $this->env->getExtension("native_profiler");
        $__internal_b664eecb239066ea966dcfc3e2077cd23f9896be79fff9369c0fd38689fe25a2->enter($__internal_b664eecb239066ea966dcfc3e2077cd23f9896be79fff9369c0fd38689fe25a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b664eecb239066ea966dcfc3e2077cd23f9896be79fff9369c0fd38689fe25a2->leave($__internal_b664eecb239066ea966dcfc3e2077cd23f9896be79fff9369c0fd38689fe25a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'reset')) ?>*/
/* */
