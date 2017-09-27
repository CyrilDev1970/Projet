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
        $__internal_0872de4333fd48899d75102444e809bb9281ca42b3e470423904472149449283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0872de4333fd48899d75102444e809bb9281ca42b3e470423904472149449283->enter($__internal_0872de4333fd48899d75102444e809bb9281ca42b3e470423904472149449283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f0df4438beed886394b917380c80c3860d22e6db5af0646a424bab68b35bb51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0df4438beed886394b917380c80c3860d22e6db5af0646a424bab68b35bb51c->enter($__internal_f0df4438beed886394b917380c80c3860d22e6db5af0646a424bab68b35bb51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0872de4333fd48899d75102444e809bb9281ca42b3e470423904472149449283->leave($__internal_0872de4333fd48899d75102444e809bb9281ca42b3e470423904472149449283_prof);

        
        $__internal_f0df4438beed886394b917380c80c3860d22e6db5af0646a424bab68b35bb51c->leave($__internal_f0df4438beed886394b917380c80c3860d22e6db5af0646a424bab68b35bb51c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d770c3b0571b9d913b8ed7d3feac10271058cd79e92832116d546e4ba3dc3c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d770c3b0571b9d913b8ed7d3feac10271058cd79e92832116d546e4ba3dc3c65->enter($__internal_d770c3b0571b9d913b8ed7d3feac10271058cd79e92832116d546e4ba3dc3c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d763bf7f38bcdb430321bf197efef3ed78e198399f3d56cc99855a913a84f7d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d763bf7f38bcdb430321bf197efef3ed78e198399f3d56cc99855a913a84f7d2->enter($__internal_d763bf7f38bcdb430321bf197efef3ed78e198399f3d56cc99855a913a84f7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d763bf7f38bcdb430321bf197efef3ed78e198399f3d56cc99855a913a84f7d2->leave($__internal_d763bf7f38bcdb430321bf197efef3ed78e198399f3d56cc99855a913a84f7d2_prof);

        
        $__internal_d770c3b0571b9d913b8ed7d3feac10271058cd79e92832116d546e4ba3dc3c65->leave($__internal_d770c3b0571b9d913b8ed7d3feac10271058cd79e92832116d546e4ba3dc3c65_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04055af73f994d68c82360a5ba915eb078328ec355c205ddd6439d08005bbf4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04055af73f994d68c82360a5ba915eb078328ec355c205ddd6439d08005bbf4e->enter($__internal_04055af73f994d68c82360a5ba915eb078328ec355c205ddd6439d08005bbf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a76cd343aa9fc74a12e15a89d42a525b682d20fd14db39598dba42be2641e8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76cd343aa9fc74a12e15a89d42a525b682d20fd14db39598dba42be2641e8ab->enter($__internal_a76cd343aa9fc74a12e15a89d42a525b682d20fd14db39598dba42be2641e8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a76cd343aa9fc74a12e15a89d42a525b682d20fd14db39598dba42be2641e8ab->leave($__internal_a76cd343aa9fc74a12e15a89d42a525b682d20fd14db39598dba42be2641e8ab_prof);

        
        $__internal_04055af73f994d68c82360a5ba915eb078328ec355c205ddd6439d08005bbf4e->leave($__internal_04055af73f994d68c82360a5ba915eb078328ec355c205ddd6439d08005bbf4e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_627a605681f67e5b99fccf3d332f66d1a34396819077d423169655e6d305790d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627a605681f67e5b99fccf3d332f66d1a34396819077d423169655e6d305790d->enter($__internal_627a605681f67e5b99fccf3d332f66d1a34396819077d423169655e6d305790d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fdd776c61fe1b8377a9951a00f63f093d50c478b4ee120dbbad6fea72ff6beaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd776c61fe1b8377a9951a00f63f093d50c478b4ee120dbbad6fea72ff6beaf->enter($__internal_fdd776c61fe1b8377a9951a00f63f093d50c478b4ee120dbbad6fea72ff6beaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fdd776c61fe1b8377a9951a00f63f093d50c478b4ee120dbbad6fea72ff6beaf->leave($__internal_fdd776c61fe1b8377a9951a00f63f093d50c478b4ee120dbbad6fea72ff6beaf_prof);

        
        $__internal_627a605681f67e5b99fccf3d332f66d1a34396819077d423169655e6d305790d->leave($__internal_627a605681f67e5b99fccf3d332f66d1a34396819077d423169655e6d305790d_prof);

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
