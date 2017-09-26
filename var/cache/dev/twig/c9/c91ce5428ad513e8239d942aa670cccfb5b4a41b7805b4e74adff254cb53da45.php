<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c4ce776cdc8e5090498641af38149b7c0f19f0a052d446f69ef69ea45e261a9f extends Twig_Template
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
        $__internal_3ea91b73230bcd7b0691ea94c8c7516736ce7e6619af307ba6e4a6d8cd50b4c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea91b73230bcd7b0691ea94c8c7516736ce7e6619af307ba6e4a6d8cd50b4c5->enter($__internal_3ea91b73230bcd7b0691ea94c8c7516736ce7e6619af307ba6e4a6d8cd50b4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_43ce8bbcdd2341d3568474390dad814f9b240b91897a7b4b6aa1f57b3feea65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ce8bbcdd2341d3568474390dad814f9b240b91897a7b4b6aa1f57b3feea65a->enter($__internal_43ce8bbcdd2341d3568474390dad814f9b240b91897a7b4b6aa1f57b3feea65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3ea91b73230bcd7b0691ea94c8c7516736ce7e6619af307ba6e4a6d8cd50b4c5->leave($__internal_3ea91b73230bcd7b0691ea94c8c7516736ce7e6619af307ba6e4a6d8cd50b4c5_prof);

        
        $__internal_43ce8bbcdd2341d3568474390dad814f9b240b91897a7b4b6aa1f57b3feea65a->leave($__internal_43ce8bbcdd2341d3568474390dad814f9b240b91897a7b4b6aa1f57b3feea65a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
