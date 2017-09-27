<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30885401aff09ea8372989cb161fdc46e4386c8be8bba661d2bec89d3cbb49c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30885401aff09ea8372989cb161fdc46e4386c8be8bba661d2bec89d3cbb49c5->enter($__internal_30885401aff09ea8372989cb161fdc46e4386c8be8bba661d2bec89d3cbb49c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d6641d8f529dfd1a80c045b18c3d1d38a1fff75f10c7c22b432df653d208538d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6641d8f529dfd1a80c045b18c3d1d38a1fff75f10c7c22b432df653d208538d->enter($__internal_d6641d8f529dfd1a80c045b18c3d1d38a1fff75f10c7c22b432df653d208538d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_30885401aff09ea8372989cb161fdc46e4386c8be8bba661d2bec89d3cbb49c5->leave($__internal_30885401aff09ea8372989cb161fdc46e4386c8be8bba661d2bec89d3cbb49c5_prof);

        
        $__internal_d6641d8f529dfd1a80c045b18c3d1d38a1fff75f10c7c22b432df653d208538d->leave($__internal_d6641d8f529dfd1a80c045b18c3d1d38a1fff75f10c7c22b432df653d208538d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_109fde64bb60161270a1ac0431555aa55de228f276438e409e18bdb10d19a636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_109fde64bb60161270a1ac0431555aa55de228f276438e409e18bdb10d19a636->enter($__internal_109fde64bb60161270a1ac0431555aa55de228f276438e409e18bdb10d19a636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e5f99e626031f9717a4554f6da390b6cb882586e3dc9b33bc5ba1f6041150a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5f99e626031f9717a4554f6da390b6cb882586e3dc9b33bc5ba1f6041150a9->enter($__internal_5e5f99e626031f9717a4554f6da390b6cb882586e3dc9b33bc5ba1f6041150a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5e5f99e626031f9717a4554f6da390b6cb882586e3dc9b33bc5ba1f6041150a9->leave($__internal_5e5f99e626031f9717a4554f6da390b6cb882586e3dc9b33bc5ba1f6041150a9_prof);

        
        $__internal_109fde64bb60161270a1ac0431555aa55de228f276438e409e18bdb10d19a636->leave($__internal_109fde64bb60161270a1ac0431555aa55de228f276438e409e18bdb10d19a636_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_07ecf3c31083f869893ad1d110aeedee760ab38352ed0b308621366719b601bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ecf3c31083f869893ad1d110aeedee760ab38352ed0b308621366719b601bd->enter($__internal_07ecf3c31083f869893ad1d110aeedee760ab38352ed0b308621366719b601bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d5ce4d421bf6be80597816e1ccac5f96127ad1743c2dd40efc78c60ccdbf9f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ce4d421bf6be80597816e1ccac5f96127ad1743c2dd40efc78c60ccdbf9f4e->enter($__internal_d5ce4d421bf6be80597816e1ccac5f96127ad1743c2dd40efc78c60ccdbf9f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d5ce4d421bf6be80597816e1ccac5f96127ad1743c2dd40efc78c60ccdbf9f4e->leave($__internal_d5ce4d421bf6be80597816e1ccac5f96127ad1743c2dd40efc78c60ccdbf9f4e_prof);

        
        $__internal_07ecf3c31083f869893ad1d110aeedee760ab38352ed0b308621366719b601bd->leave($__internal_07ecf3c31083f869893ad1d110aeedee760ab38352ed0b308621366719b601bd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7029e1d8ffcb57736a21f13742872c08ff2f078a5567002b9496105d611e444d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7029e1d8ffcb57736a21f13742872c08ff2f078a5567002b9496105d611e444d->enter($__internal_7029e1d8ffcb57736a21f13742872c08ff2f078a5567002b9496105d611e444d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2059393132d51cc59e58e984bccae2b26d392234f4e9abd79b05b5ea40375194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2059393132d51cc59e58e984bccae2b26d392234f4e9abd79b05b5ea40375194->enter($__internal_2059393132d51cc59e58e984bccae2b26d392234f4e9abd79b05b5ea40375194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2059393132d51cc59e58e984bccae2b26d392234f4e9abd79b05b5ea40375194->leave($__internal_2059393132d51cc59e58e984bccae2b26d392234f4e9abd79b05b5ea40375194_prof);

        
        $__internal_7029e1d8ffcb57736a21f13742872c08ff2f078a5567002b9496105d611e444d->leave($__internal_7029e1d8ffcb57736a21f13742872c08ff2f078a5567002b9496105d611e444d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
