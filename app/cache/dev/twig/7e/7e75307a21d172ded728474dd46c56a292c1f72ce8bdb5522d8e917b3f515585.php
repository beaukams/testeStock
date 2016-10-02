<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8ecc84c96e19d093f6b2520889b9160e91ae51e040c3cc9d1090163550bbf198 extends Twig_Template
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
        $__internal_4b6cc086e711f3ba9cb13f243c7f09cf2556757aa3ac0e5c04b501e776dcdb06 = $this->env->getExtension("native_profiler");
        $__internal_4b6cc086e711f3ba9cb13f243c7f09cf2556757aa3ac0e5c04b501e776dcdb06->enter($__internal_4b6cc086e711f3ba9cb13f243c7f09cf2556757aa3ac0e5c04b501e776dcdb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4b6cc086e711f3ba9cb13f243c7f09cf2556757aa3ac0e5c04b501e776dcdb06->leave($__internal_4b6cc086e711f3ba9cb13f243c7f09cf2556757aa3ac0e5c04b501e776dcdb06_prof);

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
