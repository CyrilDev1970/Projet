<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_27855908a8d2aa753782c8c6fae419a152fb85ec52e589db0780b5dc6a41addb extends Twig_Template
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
        $__internal_c57b9cd1dfd3726e928b12d8b5aeacbe923ee6a6d08413e8f4046662ad4ad15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c57b9cd1dfd3726e928b12d8b5aeacbe923ee6a6d08413e8f4046662ad4ad15d->enter($__internal_c57b9cd1dfd3726e928b12d8b5aeacbe923ee6a6d08413e8f4046662ad4ad15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_0a5e2a1b6694456d2eb0cfad25af2e8dff4d49870656e9840f1dd2b5dbf5b2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5e2a1b6694456d2eb0cfad25af2e8dff4d49870656e9840f1dd2b5dbf5b2de->enter($__internal_0a5e2a1b6694456d2eb0cfad25af2e8dff4d49870656e9840f1dd2b5dbf5b2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c57b9cd1dfd3726e928b12d8b5aeacbe923ee6a6d08413e8f4046662ad4ad15d->leave($__internal_c57b9cd1dfd3726e928b12d8b5aeacbe923ee6a6d08413e8f4046662ad4ad15d_prof);

        
        $__internal_0a5e2a1b6694456d2eb0cfad25af2e8dff4d49870656e9840f1dd2b5dbf5b2de->leave($__internal_0a5e2a1b6694456d2eb0cfad25af2e8dff4d49870656e9840f1dd2b5dbf5b2de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
