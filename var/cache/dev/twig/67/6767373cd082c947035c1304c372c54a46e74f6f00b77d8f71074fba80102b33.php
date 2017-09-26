<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_af193a305e15e92105d5ffb823e9a400347a32c6e416ee74f13d00ce1a949e52 extends Twig_Template
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
        $__internal_e4a00165fc843c032f90d86db6a9316f9590a8cc53772ad7ddf8cfab6498deee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a00165fc843c032f90d86db6a9316f9590a8cc53772ad7ddf8cfab6498deee->enter($__internal_e4a00165fc843c032f90d86db6a9316f9590a8cc53772ad7ddf8cfab6498deee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_99dcb51d27249d4f2152e835007124d229a340dd2ccf7fb52f587053e5a7633f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99dcb51d27249d4f2152e835007124d229a340dd2ccf7fb52f587053e5a7633f->enter($__internal_99dcb51d27249d4f2152e835007124d229a340dd2ccf7fb52f587053e5a7633f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e4a00165fc843c032f90d86db6a9316f9590a8cc53772ad7ddf8cfab6498deee->leave($__internal_e4a00165fc843c032f90d86db6a9316f9590a8cc53772ad7ddf8cfab6498deee_prof);

        
        $__internal_99dcb51d27249d4f2152e835007124d229a340dd2ccf7fb52f587053e5a7633f->leave($__internal_99dcb51d27249d4f2152e835007124d229a340dd2ccf7fb52f587053e5a7633f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
