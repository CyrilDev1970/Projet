<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02d845a49bdd57a4be066814fe8a9768b23f387ad2777b19ef633ba46046768f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c04815c4ec063fe1d0d3f10826c1831e7399adb6219a21df6fa5d75bdebe4b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c04815c4ec063fe1d0d3f10826c1831e7399adb6219a21df6fa5d75bdebe4b9->enter($__internal_4c04815c4ec063fe1d0d3f10826c1831e7399adb6219a21df6fa5d75bdebe4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b22f09e5761230b5cad946e2806cc8e3b75cdfbfa2f6f5b6696ec5e7c0469e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22f09e5761230b5cad946e2806cc8e3b75cdfbfa2f6f5b6696ec5e7c0469e12->enter($__internal_b22f09e5761230b5cad946e2806cc8e3b75cdfbfa2f6f5b6696ec5e7c0469e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c04815c4ec063fe1d0d3f10826c1831e7399adb6219a21df6fa5d75bdebe4b9->leave($__internal_4c04815c4ec063fe1d0d3f10826c1831e7399adb6219a21df6fa5d75bdebe4b9_prof);

        
        $__internal_b22f09e5761230b5cad946e2806cc8e3b75cdfbfa2f6f5b6696ec5e7c0469e12->leave($__internal_b22f09e5761230b5cad946e2806cc8e3b75cdfbfa2f6f5b6696ec5e7c0469e12_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_793f82ebdc30a48684975de9538c3a0b53eb6d930a52fc5ffdb984a1c3ce1446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_793f82ebdc30a48684975de9538c3a0b53eb6d930a52fc5ffdb984a1c3ce1446->enter($__internal_793f82ebdc30a48684975de9538c3a0b53eb6d930a52fc5ffdb984a1c3ce1446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ae45157d225eddcbf97dcfb67bfc4ba008f717725bad047cfb31a2a2e3c0158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae45157d225eddcbf97dcfb67bfc4ba008f717725bad047cfb31a2a2e3c0158->enter($__internal_3ae45157d225eddcbf97dcfb67bfc4ba008f717725bad047cfb31a2a2e3c0158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3ae45157d225eddcbf97dcfb67bfc4ba008f717725bad047cfb31a2a2e3c0158->leave($__internal_3ae45157d225eddcbf97dcfb67bfc4ba008f717725bad047cfb31a2a2e3c0158_prof);

        
        $__internal_793f82ebdc30a48684975de9538c3a0b53eb6d930a52fc5ffdb984a1c3ce1446->leave($__internal_793f82ebdc30a48684975de9538c3a0b53eb6d930a52fc5ffdb984a1c3ce1446_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_69d0ba96f9c5695a0a286a585fe4fccb4ae617755fda4659f5891dd18bb080e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d0ba96f9c5695a0a286a585fe4fccb4ae617755fda4659f5891dd18bb080e7->enter($__internal_69d0ba96f9c5695a0a286a585fe4fccb4ae617755fda4659f5891dd18bb080e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89fab043ccd597ad34b474317ebcd51404bdec910136a161ca71a3928269829b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fab043ccd597ad34b474317ebcd51404bdec910136a161ca71a3928269829b->enter($__internal_89fab043ccd597ad34b474317ebcd51404bdec910136a161ca71a3928269829b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_89fab043ccd597ad34b474317ebcd51404bdec910136a161ca71a3928269829b->leave($__internal_89fab043ccd597ad34b474317ebcd51404bdec910136a161ca71a3928269829b_prof);

        
        $__internal_69d0ba96f9c5695a0a286a585fe4fccb4ae617755fda4659f5891dd18bb080e7->leave($__internal_69d0ba96f9c5695a0a286a585fe4fccb4ae617755fda4659f5891dd18bb080e7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
