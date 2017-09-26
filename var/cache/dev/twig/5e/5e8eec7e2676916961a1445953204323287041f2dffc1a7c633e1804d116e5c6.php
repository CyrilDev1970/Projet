<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d78503504fb6b096f928955d266daa015d957a8b58d47e03bfb63bdce6b1203b extends Twig_Template
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
        $__internal_a3afa3f5cee6635615e4027c446cbbeea801e0b08b4e902ba4dba6f170d4118c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3afa3f5cee6635615e4027c446cbbeea801e0b08b4e902ba4dba6f170d4118c->enter($__internal_a3afa3f5cee6635615e4027c446cbbeea801e0b08b4e902ba4dba6f170d4118c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_17aa839308e3284a72599390ce46dea0d374b078f343c81f8afb423a9776d7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17aa839308e3284a72599390ce46dea0d374b078f343c81f8afb423a9776d7ce->enter($__internal_17aa839308e3284a72599390ce46dea0d374b078f343c81f8afb423a9776d7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a3afa3f5cee6635615e4027c446cbbeea801e0b08b4e902ba4dba6f170d4118c->leave($__internal_a3afa3f5cee6635615e4027c446cbbeea801e0b08b4e902ba4dba6f170d4118c_prof);

        
        $__internal_17aa839308e3284a72599390ce46dea0d374b078f343c81f8afb423a9776d7ce->leave($__internal_17aa839308e3284a72599390ce46dea0d374b078f343c81f8afb423a9776d7ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
