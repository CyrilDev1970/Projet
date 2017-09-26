<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0a613460bff8d95f3e4cd222f89856befc9503068b7f3b576bb61fe5bbbc2221 extends Twig_Template
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
        $__internal_dd5be5be21291c404937564e55497eb4df5f1e6672f076ff00b47abb9feae1ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5be5be21291c404937564e55497eb4df5f1e6672f076ff00b47abb9feae1ba->enter($__internal_dd5be5be21291c404937564e55497eb4df5f1e6672f076ff00b47abb9feae1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_ec57cdf6f5127156fd4bb462133b9fea379fa9629b18d738d17c8913e2628030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec57cdf6f5127156fd4bb462133b9fea379fa9629b18d738d17c8913e2628030->enter($__internal_ec57cdf6f5127156fd4bb462133b9fea379fa9629b18d738d17c8913e2628030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dd5be5be21291c404937564e55497eb4df5f1e6672f076ff00b47abb9feae1ba->leave($__internal_dd5be5be21291c404937564e55497eb4df5f1e6672f076ff00b47abb9feae1ba_prof);

        
        $__internal_ec57cdf6f5127156fd4bb462133b9fea379fa9629b18d738d17c8913e2628030->leave($__internal_ec57cdf6f5127156fd4bb462133b9fea379fa9629b18d738d17c8913e2628030_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
