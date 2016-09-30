<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2fb100637ecf0e9c82ea58dd1b2992de8944cfc1627ba1e3c75d49a584f8b525 extends Twig_Template
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
        $__internal_26a20d041bdf85106dcb690f2af01a8f75bf8820bab5cbce834919e2ec5f8675 = $this->env->getExtension("native_profiler");
        $__internal_26a20d041bdf85106dcb690f2af01a8f75bf8820bab5cbce834919e2ec5f8675->enter($__internal_26a20d041bdf85106dcb690f2af01a8f75bf8820bab5cbce834919e2ec5f8675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_26a20d041bdf85106dcb690f2af01a8f75bf8820bab5cbce834919e2ec5f8675->leave($__internal_26a20d041bdf85106dcb690f2af01a8f75bf8820bab5cbce834919e2ec5f8675_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
