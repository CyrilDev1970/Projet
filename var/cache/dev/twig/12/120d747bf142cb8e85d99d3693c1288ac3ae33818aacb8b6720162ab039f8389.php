<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d53362d5fd36a3d30e2f56b1c274010097ef26b923f47ddb38f1001b86b65b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23bb1e4aaf22aaeb270d2fe267d2c06b00c30c1750fe2523bef62e082e2e912f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23bb1e4aaf22aaeb270d2fe267d2c06b00c30c1750fe2523bef62e082e2e912f->enter($__internal_23bb1e4aaf22aaeb270d2fe267d2c06b00c30c1750fe2523bef62e082e2e912f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f7d1c61215e9ea112862f2a5cededd3626191b7db7f56433101cbf4e607884e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d1c61215e9ea112862f2a5cededd3626191b7db7f56433101cbf4e607884e3->enter($__internal_f7d1c61215e9ea112862f2a5cededd3626191b7db7f56433101cbf4e607884e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_23bb1e4aaf22aaeb270d2fe267d2c06b00c30c1750fe2523bef62e082e2e912f->leave($__internal_23bb1e4aaf22aaeb270d2fe267d2c06b00c30c1750fe2523bef62e082e2e912f_prof);

        
        $__internal_f7d1c61215e9ea112862f2a5cededd3626191b7db7f56433101cbf4e607884e3->leave($__internal_f7d1c61215e9ea112862f2a5cededd3626191b7db7f56433101cbf4e607884e3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4a7590ec816f80b5129c035c033d02e299554713a51cf5e8de3ad3213d0ccc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a7590ec816f80b5129c035c033d02e299554713a51cf5e8de3ad3213d0ccc3->enter($__internal_a4a7590ec816f80b5129c035c033d02e299554713a51cf5e8de3ad3213d0ccc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_64cc2a8538ceb573c09ec7aa39b4cb0bad5d4b943e848283df0c4ad5c33c3241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64cc2a8538ceb573c09ec7aa39b4cb0bad5d4b943e848283df0c4ad5c33c3241->enter($__internal_64cc2a8538ceb573c09ec7aa39b4cb0bad5d4b943e848283df0c4ad5c33c3241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_64cc2a8538ceb573c09ec7aa39b4cb0bad5d4b943e848283df0c4ad5c33c3241->leave($__internal_64cc2a8538ceb573c09ec7aa39b4cb0bad5d4b943e848283df0c4ad5c33c3241_prof);

        
        $__internal_a4a7590ec816f80b5129c035c033d02e299554713a51cf5e8de3ad3213d0ccc3->leave($__internal_a4a7590ec816f80b5129c035c033d02e299554713a51cf5e8de3ad3213d0ccc3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
