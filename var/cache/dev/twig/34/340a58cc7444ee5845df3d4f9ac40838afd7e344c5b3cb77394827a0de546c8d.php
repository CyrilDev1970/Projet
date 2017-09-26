<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_69787b8f45555631b7dd60dddf820b29a6106424c88235bb45364dc950e1a374 extends Twig_Template
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
        $__internal_63880f6cdee904d6cdc546ae644f582fcaaa7b24c092e10fa414816521d5cc47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63880f6cdee904d6cdc546ae644f582fcaaa7b24c092e10fa414816521d5cc47->enter($__internal_63880f6cdee904d6cdc546ae644f582fcaaa7b24c092e10fa414816521d5cc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_89e9077bc0313ed50292145067aa604cfadb09b2aed6e523a004ac453d6ebbe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e9077bc0313ed50292145067aa604cfadb09b2aed6e523a004ac453d6ebbe1->enter($__internal_89e9077bc0313ed50292145067aa604cfadb09b2aed6e523a004ac453d6ebbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_63880f6cdee904d6cdc546ae644f582fcaaa7b24c092e10fa414816521d5cc47->leave($__internal_63880f6cdee904d6cdc546ae644f582fcaaa7b24c092e10fa414816521d5cc47_prof);

        
        $__internal_89e9077bc0313ed50292145067aa604cfadb09b2aed6e523a004ac453d6ebbe1->leave($__internal_89e9077bc0313ed50292145067aa604cfadb09b2aed6e523a004ac453d6ebbe1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
