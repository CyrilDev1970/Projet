<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_32e4c481536383d50cd9dd37f75507a360c64fe4de6b769666c5d971623fa9e5 extends Twig_Template
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
        $__internal_f2c32a397a0cd2ce40d4378e7fa89ecedeeb1cc6b07cc79d148d6ad8006a380d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c32a397a0cd2ce40d4378e7fa89ecedeeb1cc6b07cc79d148d6ad8006a380d->enter($__internal_f2c32a397a0cd2ce40d4378e7fa89ecedeeb1cc6b07cc79d148d6ad8006a380d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_126da5e5650c663dfa6bac720cf39c198887ea30532fcce8ce21ee1d1d13e59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126da5e5650c663dfa6bac720cf39c198887ea30532fcce8ce21ee1d1d13e59b->enter($__internal_126da5e5650c663dfa6bac720cf39c198887ea30532fcce8ce21ee1d1d13e59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f2c32a397a0cd2ce40d4378e7fa89ecedeeb1cc6b07cc79d148d6ad8006a380d->leave($__internal_f2c32a397a0cd2ce40d4378e7fa89ecedeeb1cc6b07cc79d148d6ad8006a380d_prof);

        
        $__internal_126da5e5650c663dfa6bac720cf39c198887ea30532fcce8ce21ee1d1d13e59b->leave($__internal_126da5e5650c663dfa6bac720cf39c198887ea30532fcce8ce21ee1d1d13e59b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
