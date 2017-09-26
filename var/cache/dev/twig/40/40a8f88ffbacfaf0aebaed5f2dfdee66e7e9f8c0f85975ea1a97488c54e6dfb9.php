<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_be60098eb44d6b35a9fd636e6ed89befca9cdda508250e89057ebb07ca22ed84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be60098eb44d6b35a9fd636e6ed89befca9cdda508250e89057ebb07ca22ed84->enter($__internal_be60098eb44d6b35a9fd636e6ed89befca9cdda508250e89057ebb07ca22ed84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5f10190df84e673f152a6f725be0742de65841eb98ecc21be1b35233ff30272c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f10190df84e673f152a6f725be0742de65841eb98ecc21be1b35233ff30272c->enter($__internal_5f10190df84e673f152a6f725be0742de65841eb98ecc21be1b35233ff30272c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be60098eb44d6b35a9fd636e6ed89befca9cdda508250e89057ebb07ca22ed84->leave($__internal_be60098eb44d6b35a9fd636e6ed89befca9cdda508250e89057ebb07ca22ed84_prof);

        
        $__internal_5f10190df84e673f152a6f725be0742de65841eb98ecc21be1b35233ff30272c->leave($__internal_5f10190df84e673f152a6f725be0742de65841eb98ecc21be1b35233ff30272c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7275de65d06f2670602cece3470d729d522852fec71fa7dd1dce3480a8db541a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7275de65d06f2670602cece3470d729d522852fec71fa7dd1dce3480a8db541a->enter($__internal_7275de65d06f2670602cece3470d729d522852fec71fa7dd1dce3480a8db541a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7cf6987acd67683aef60dfe7c1a0f543f767ea7c0b04fe7f332784804ebb4a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf6987acd67683aef60dfe7c1a0f543f767ea7c0b04fe7f332784804ebb4a67->enter($__internal_7cf6987acd67683aef60dfe7c1a0f543f767ea7c0b04fe7f332784804ebb4a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7cf6987acd67683aef60dfe7c1a0f543f767ea7c0b04fe7f332784804ebb4a67->leave($__internal_7cf6987acd67683aef60dfe7c1a0f543f767ea7c0b04fe7f332784804ebb4a67_prof);

        
        $__internal_7275de65d06f2670602cece3470d729d522852fec71fa7dd1dce3480a8db541a->leave($__internal_7275de65d06f2670602cece3470d729d522852fec71fa7dd1dce3480a8db541a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e1ace444a18238cec9699356b5d05b8e52121bad3b6d97f4b26c390e0fe3610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1ace444a18238cec9699356b5d05b8e52121bad3b6d97f4b26c390e0fe3610->enter($__internal_2e1ace444a18238cec9699356b5d05b8e52121bad3b6d97f4b26c390e0fe3610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_93bcc000649faaa3195f8a91bb07b7bb0c9612b9c249d792a21df09605da3149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93bcc000649faaa3195f8a91bb07b7bb0c9612b9c249d792a21df09605da3149->enter($__internal_93bcc000649faaa3195f8a91bb07b7bb0c9612b9c249d792a21df09605da3149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_93bcc000649faaa3195f8a91bb07b7bb0c9612b9c249d792a21df09605da3149->leave($__internal_93bcc000649faaa3195f8a91bb07b7bb0c9612b9c249d792a21df09605da3149_prof);

        
        $__internal_2e1ace444a18238cec9699356b5d05b8e52121bad3b6d97f4b26c390e0fe3610->leave($__internal_2e1ace444a18238cec9699356b5d05b8e52121bad3b6d97f4b26c390e0fe3610_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8da0656dd12e468b61ac6e506254dae10864e269b5f35bbdd433f5b9f97d5f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da0656dd12e468b61ac6e506254dae10864e269b5f35bbdd433f5b9f97d5f81->enter($__internal_8da0656dd12e468b61ac6e506254dae10864e269b5f35bbdd433f5b9f97d5f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fce2fcd90e3ae04f85798bb0e51c7b7d60b4cb1f7db4fab5618ad67cc634a720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce2fcd90e3ae04f85798bb0e51c7b7d60b4cb1f7db4fab5618ad67cc634a720->enter($__internal_fce2fcd90e3ae04f85798bb0e51c7b7d60b4cb1f7db4fab5618ad67cc634a720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fce2fcd90e3ae04f85798bb0e51c7b7d60b4cb1f7db4fab5618ad67cc634a720->leave($__internal_fce2fcd90e3ae04f85798bb0e51c7b7d60b4cb1f7db4fab5618ad67cc634a720_prof);

        
        $__internal_8da0656dd12e468b61ac6e506254dae10864e269b5f35bbdd433f5b9f97d5f81->leave($__internal_8da0656dd12e468b61ac6e506254dae10864e269b5f35bbdd433f5b9f97d5f81_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
