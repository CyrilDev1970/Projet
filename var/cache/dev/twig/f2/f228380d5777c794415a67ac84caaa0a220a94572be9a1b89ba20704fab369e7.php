<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0f7f27cac06b44931dfb577da853931a49557d319af7f66fd52cc7698018388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f7f27cac06b44931dfb577da853931a49557d319af7f66fd52cc7698018388->enter($__internal_b0f7f27cac06b44931dfb577da853931a49557d319af7f66fd52cc7698018388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_adc9cfa11883a4ef11f79269717153022b65d6966dd287bb87deb2055814f010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc9cfa11883a4ef11f79269717153022b65d6966dd287bb87deb2055814f010->enter($__internal_adc9cfa11883a4ef11f79269717153022b65d6966dd287bb87deb2055814f010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0f7f27cac06b44931dfb577da853931a49557d319af7f66fd52cc7698018388->leave($__internal_b0f7f27cac06b44931dfb577da853931a49557d319af7f66fd52cc7698018388_prof);

        
        $__internal_adc9cfa11883a4ef11f79269717153022b65d6966dd287bb87deb2055814f010->leave($__internal_adc9cfa11883a4ef11f79269717153022b65d6966dd287bb87deb2055814f010_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01750dadc8b63c4a42d18d8fc6611074eb65597d6d0ebf7ad9d1a460432fb038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01750dadc8b63c4a42d18d8fc6611074eb65597d6d0ebf7ad9d1a460432fb038->enter($__internal_01750dadc8b63c4a42d18d8fc6611074eb65597d6d0ebf7ad9d1a460432fb038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7417004456e3334f4394107f11a3bd3421fcd1d82c652c995661f105b752d59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7417004456e3334f4394107f11a3bd3421fcd1d82c652c995661f105b752d59f->enter($__internal_7417004456e3334f4394107f11a3bd3421fcd1d82c652c995661f105b752d59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7417004456e3334f4394107f11a3bd3421fcd1d82c652c995661f105b752d59f->leave($__internal_7417004456e3334f4394107f11a3bd3421fcd1d82c652c995661f105b752d59f_prof);

        
        $__internal_01750dadc8b63c4a42d18d8fc6611074eb65597d6d0ebf7ad9d1a460432fb038->leave($__internal_01750dadc8b63c4a42d18d8fc6611074eb65597d6d0ebf7ad9d1a460432fb038_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e398181c87c0692008f9ef6830a6e06cfc1914eaf792c2182d989e3688734402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e398181c87c0692008f9ef6830a6e06cfc1914eaf792c2182d989e3688734402->enter($__internal_e398181c87c0692008f9ef6830a6e06cfc1914eaf792c2182d989e3688734402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bbe3fcbcdbb4d669f8b195e9c66909f68ead41ba92bc829125d09a3fbdfa5b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe3fcbcdbb4d669f8b195e9c66909f68ead41ba92bc829125d09a3fbdfa5b5a->enter($__internal_bbe3fcbcdbb4d669f8b195e9c66909f68ead41ba92bc829125d09a3fbdfa5b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bbe3fcbcdbb4d669f8b195e9c66909f68ead41ba92bc829125d09a3fbdfa5b5a->leave($__internal_bbe3fcbcdbb4d669f8b195e9c66909f68ead41ba92bc829125d09a3fbdfa5b5a_prof);

        
        $__internal_e398181c87c0692008f9ef6830a6e06cfc1914eaf792c2182d989e3688734402->leave($__internal_e398181c87c0692008f9ef6830a6e06cfc1914eaf792c2182d989e3688734402_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_79804192bdb8edb4602ef2c4e6a2454289f365358ae0ca351e62a64593f24912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79804192bdb8edb4602ef2c4e6a2454289f365358ae0ca351e62a64593f24912->enter($__internal_79804192bdb8edb4602ef2c4e6a2454289f365358ae0ca351e62a64593f24912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f1c632e412b59d7a122d9b8d655ff0da478a1de73b3b8a5fc5b14033008ef512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c632e412b59d7a122d9b8d655ff0da478a1de73b3b8a5fc5b14033008ef512->enter($__internal_f1c632e412b59d7a122d9b8d655ff0da478a1de73b3b8a5fc5b14033008ef512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f1c632e412b59d7a122d9b8d655ff0da478a1de73b3b8a5fc5b14033008ef512->leave($__internal_f1c632e412b59d7a122d9b8d655ff0da478a1de73b3b8a5fc5b14033008ef512_prof);

        
        $__internal_79804192bdb8edb4602ef2c4e6a2454289f365358ae0ca351e62a64593f24912->leave($__internal_79804192bdb8edb4602ef2c4e6a2454289f365358ae0ca351e62a64593f24912_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
