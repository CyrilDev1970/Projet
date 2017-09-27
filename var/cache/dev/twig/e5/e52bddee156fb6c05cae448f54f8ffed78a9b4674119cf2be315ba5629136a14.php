<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db2acf3d4baf9fe1bbac4684b95fe7243bee5ac4bfd5095b59ca47352efd3dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2acf3d4baf9fe1bbac4684b95fe7243bee5ac4bfd5095b59ca47352efd3dca->enter($__internal_db2acf3d4baf9fe1bbac4684b95fe7243bee5ac4bfd5095b59ca47352efd3dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e42b871b18ed3e270bf12c6e46f298f02997e56fd70996b48acd01b732d651d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42b871b18ed3e270bf12c6e46f298f02997e56fd70996b48acd01b732d651d7->enter($__internal_e42b871b18ed3e270bf12c6e46f298f02997e56fd70996b48acd01b732d651d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_db2acf3d4baf9fe1bbac4684b95fe7243bee5ac4bfd5095b59ca47352efd3dca->leave($__internal_db2acf3d4baf9fe1bbac4684b95fe7243bee5ac4bfd5095b59ca47352efd3dca_prof);

        
        $__internal_e42b871b18ed3e270bf12c6e46f298f02997e56fd70996b48acd01b732d651d7->leave($__internal_e42b871b18ed3e270bf12c6e46f298f02997e56fd70996b48acd01b732d651d7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_58626cb33515b9c2643280381caab6f262320c343d06829773ce73a48e6f1239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58626cb33515b9c2643280381caab6f262320c343d06829773ce73a48e6f1239->enter($__internal_58626cb33515b9c2643280381caab6f262320c343d06829773ce73a48e6f1239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1660f29f34a5a7dec6283272c65fe3708a4190faeded322ec5364b2b77b502c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1660f29f34a5a7dec6283272c65fe3708a4190faeded322ec5364b2b77b502c9->enter($__internal_1660f29f34a5a7dec6283272c65fe3708a4190faeded322ec5364b2b77b502c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1660f29f34a5a7dec6283272c65fe3708a4190faeded322ec5364b2b77b502c9->leave($__internal_1660f29f34a5a7dec6283272c65fe3708a4190faeded322ec5364b2b77b502c9_prof);

        
        $__internal_58626cb33515b9c2643280381caab6f262320c343d06829773ce73a48e6f1239->leave($__internal_58626cb33515b9c2643280381caab6f262320c343d06829773ce73a48e6f1239_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84008091a725090c4032f92b188539daed72c7c954c8cbe8202afacee26d4dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84008091a725090c4032f92b188539daed72c7c954c8cbe8202afacee26d4dd7->enter($__internal_84008091a725090c4032f92b188539daed72c7c954c8cbe8202afacee26d4dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b4f601aeb141c6050b27cc131347e46be097d524ebd25d882e70fa271a499b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f601aeb141c6050b27cc131347e46be097d524ebd25d882e70fa271a499b7e->enter($__internal_b4f601aeb141c6050b27cc131347e46be097d524ebd25d882e70fa271a499b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b4f601aeb141c6050b27cc131347e46be097d524ebd25d882e70fa271a499b7e->leave($__internal_b4f601aeb141c6050b27cc131347e46be097d524ebd25d882e70fa271a499b7e_prof);

        
        $__internal_84008091a725090c4032f92b188539daed72c7c954c8cbe8202afacee26d4dd7->leave($__internal_84008091a725090c4032f92b188539daed72c7c954c8cbe8202afacee26d4dd7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_578492cf18221055211d3d93cc344b9093df9ffc56f3e2b9da775a66d5a4c52c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578492cf18221055211d3d93cc344b9093df9ffc56f3e2b9da775a66d5a4c52c->enter($__internal_578492cf18221055211d3d93cc344b9093df9ffc56f3e2b9da775a66d5a4c52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf071707eb2670ab1d467dbfc5a385a40aea4869db61304ac8961007e32cea1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf071707eb2670ab1d467dbfc5a385a40aea4869db61304ac8961007e32cea1b->enter($__internal_cf071707eb2670ab1d467dbfc5a385a40aea4869db61304ac8961007e32cea1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cf071707eb2670ab1d467dbfc5a385a40aea4869db61304ac8961007e32cea1b->leave($__internal_cf071707eb2670ab1d467dbfc5a385a40aea4869db61304ac8961007e32cea1b_prof);

        
        $__internal_578492cf18221055211d3d93cc344b9093df9ffc56f3e2b9da775a66d5a4c52c->leave($__internal_578492cf18221055211d3d93cc344b9093df9ffc56f3e2b9da775a66d5a4c52c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9b4cf0457d300c0bc5da149f48f972ec369d4d2cdb19e00706e484e35f4cd21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4cf0457d300c0bc5da149f48f972ec369d4d2cdb19e00706e484e35f4cd21f->enter($__internal_9b4cf0457d300c0bc5da149f48f972ec369d4d2cdb19e00706e484e35f4cd21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da9a7d89046ca04aafd067b6733ae99a4e9a934d419ef614941d28c7c62fc301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9a7d89046ca04aafd067b6733ae99a4e9a934d419ef614941d28c7c62fc301->enter($__internal_da9a7d89046ca04aafd067b6733ae99a4e9a934d419ef614941d28c7c62fc301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_da9a7d89046ca04aafd067b6733ae99a4e9a934d419ef614941d28c7c62fc301->leave($__internal_da9a7d89046ca04aafd067b6733ae99a4e9a934d419ef614941d28c7c62fc301_prof);

        
        $__internal_9b4cf0457d300c0bc5da149f48f972ec369d4d2cdb19e00706e484e35f4cd21f->leave($__internal_9b4cf0457d300c0bc5da149f48f972ec369d4d2cdb19e00706e484e35f4cd21f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/cartel_team/app/Resources/views/base.html.twig");
    }
}
