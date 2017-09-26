<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ec1d7375e20d3f49b5b347decaa1bb97b35616e5a49d90689b7e87f4c24acf28 extends Twig_Template
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
        $__internal_fc4595ff0caadd1ed6150615b054892172610cc99b980d5f73e1484be3caee8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4595ff0caadd1ed6150615b054892172610cc99b980d5f73e1484be3caee8c->enter($__internal_fc4595ff0caadd1ed6150615b054892172610cc99b980d5f73e1484be3caee8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a2269cca98b9c3b1dc47419ee739b34f0e15d38387e7e1f654e2109d52be78af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2269cca98b9c3b1dc47419ee739b34f0e15d38387e7e1f654e2109d52be78af->enter($__internal_a2269cca98b9c3b1dc47419ee739b34f0e15d38387e7e1f654e2109d52be78af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fc4595ff0caadd1ed6150615b054892172610cc99b980d5f73e1484be3caee8c->leave($__internal_fc4595ff0caadd1ed6150615b054892172610cc99b980d5f73e1484be3caee8c_prof);

        
        $__internal_a2269cca98b9c3b1dc47419ee739b34f0e15d38387e7e1f654e2109d52be78af->leave($__internal_a2269cca98b9c3b1dc47419ee739b34f0e15d38387e7e1f654e2109d52be78af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
