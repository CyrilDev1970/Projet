<?php

/* ::base.html.twig */
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
        $__internal_334248fb8ed0aac6fdbda2987682deb9217500b94e0d3f1e50aecbc53413b260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_334248fb8ed0aac6fdbda2987682deb9217500b94e0d3f1e50aecbc53413b260->enter($__internal_334248fb8ed0aac6fdbda2987682deb9217500b94e0d3f1e50aecbc53413b260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_e034851562e01cd748cc8e739aabddcc03a48acf751fe5893f8f7263ea84942b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e034851562e01cd748cc8e739aabddcc03a48acf751fe5893f8f7263ea84942b->enter($__internal_e034851562e01cd748cc8e739aabddcc03a48acf751fe5893f8f7263ea84942b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_334248fb8ed0aac6fdbda2987682deb9217500b94e0d3f1e50aecbc53413b260->leave($__internal_334248fb8ed0aac6fdbda2987682deb9217500b94e0d3f1e50aecbc53413b260_prof);

        
        $__internal_e034851562e01cd748cc8e739aabddcc03a48acf751fe5893f8f7263ea84942b->leave($__internal_e034851562e01cd748cc8e739aabddcc03a48acf751fe5893f8f7263ea84942b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_936c12fd9bdc756d0ff440612d9fed41c227d4f3dff0e563eb3d1de9fba226dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936c12fd9bdc756d0ff440612d9fed41c227d4f3dff0e563eb3d1de9fba226dc->enter($__internal_936c12fd9bdc756d0ff440612d9fed41c227d4f3dff0e563eb3d1de9fba226dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9503466775df59d8b3406961f42a9d90fc3d1b2c9ed67f06ab04c804d1eee212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9503466775df59d8b3406961f42a9d90fc3d1b2c9ed67f06ab04c804d1eee212->enter($__internal_9503466775df59d8b3406961f42a9d90fc3d1b2c9ed67f06ab04c804d1eee212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9503466775df59d8b3406961f42a9d90fc3d1b2c9ed67f06ab04c804d1eee212->leave($__internal_9503466775df59d8b3406961f42a9d90fc3d1b2c9ed67f06ab04c804d1eee212_prof);

        
        $__internal_936c12fd9bdc756d0ff440612d9fed41c227d4f3dff0e563eb3d1de9fba226dc->leave($__internal_936c12fd9bdc756d0ff440612d9fed41c227d4f3dff0e563eb3d1de9fba226dc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_562f045bcd2a75856802bb029fbfa9dcfbe6f2083193a26bc9d1a0a628816e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562f045bcd2a75856802bb029fbfa9dcfbe6f2083193a26bc9d1a0a628816e15->enter($__internal_562f045bcd2a75856802bb029fbfa9dcfbe6f2083193a26bc9d1a0a628816e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ecb80eebadd7146d7a149a9c7b03a4d5a9e1cc9c4dcfdc698927db9c38306feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb80eebadd7146d7a149a9c7b03a4d5a9e1cc9c4dcfdc698927db9c38306feb->enter($__internal_ecb80eebadd7146d7a149a9c7b03a4d5a9e1cc9c4dcfdc698927db9c38306feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ecb80eebadd7146d7a149a9c7b03a4d5a9e1cc9c4dcfdc698927db9c38306feb->leave($__internal_ecb80eebadd7146d7a149a9c7b03a4d5a9e1cc9c4dcfdc698927db9c38306feb_prof);

        
        $__internal_562f045bcd2a75856802bb029fbfa9dcfbe6f2083193a26bc9d1a0a628816e15->leave($__internal_562f045bcd2a75856802bb029fbfa9dcfbe6f2083193a26bc9d1a0a628816e15_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b725ad6f924d6be762ea7b3760e8b56b3382b60d726a0d8c970fa5b12ab7632e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b725ad6f924d6be762ea7b3760e8b56b3382b60d726a0d8c970fa5b12ab7632e->enter($__internal_b725ad6f924d6be762ea7b3760e8b56b3382b60d726a0d8c970fa5b12ab7632e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4bc23bd244af57796bd561146f4a258df50f257f076dae4eea57d665dd769409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc23bd244af57796bd561146f4a258df50f257f076dae4eea57d665dd769409->enter($__internal_4bc23bd244af57796bd561146f4a258df50f257f076dae4eea57d665dd769409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4bc23bd244af57796bd561146f4a258df50f257f076dae4eea57d665dd769409->leave($__internal_4bc23bd244af57796bd561146f4a258df50f257f076dae4eea57d665dd769409_prof);

        
        $__internal_b725ad6f924d6be762ea7b3760e8b56b3382b60d726a0d8c970fa5b12ab7632e->leave($__internal_b725ad6f924d6be762ea7b3760e8b56b3382b60d726a0d8c970fa5b12ab7632e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec0af3aa08bd5e03973f0a51467b4a4b88b202ae9c8301c6da0f81234fa83816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec0af3aa08bd5e03973f0a51467b4a4b88b202ae9c8301c6da0f81234fa83816->enter($__internal_ec0af3aa08bd5e03973f0a51467b4a4b88b202ae9c8301c6da0f81234fa83816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1e18b3203af3cfdc1b3ef73bba2e7d0850d6b68456e4307e5dc28e73ba846507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e18b3203af3cfdc1b3ef73bba2e7d0850d6b68456e4307e5dc28e73ba846507->enter($__internal_1e18b3203af3cfdc1b3ef73bba2e7d0850d6b68456e4307e5dc28e73ba846507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1e18b3203af3cfdc1b3ef73bba2e7d0850d6b68456e4307e5dc28e73ba846507->leave($__internal_1e18b3203af3cfdc1b3ef73bba2e7d0850d6b68456e4307e5dc28e73ba846507_prof);

        
        $__internal_ec0af3aa08bd5e03973f0a51467b4a4b88b202ae9c8301c6da0f81234fa83816->leave($__internal_ec0af3aa08bd5e03973f0a51467b4a4b88b202ae9c8301c6da0f81234fa83816_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/var/www/cartel_team/app/Resources/views/base.html.twig");
    }
}
