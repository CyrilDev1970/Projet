<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b566960fe38abe42b01f087b73374173b6ce09d41c0af14ee8cdee038cbfb577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b566960fe38abe42b01f087b73374173b6ce09d41c0af14ee8cdee038cbfb577->enter($__internal_b566960fe38abe42b01f087b73374173b6ce09d41c0af14ee8cdee038cbfb577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bd3696f0d0edfb3c9d7c42aa23bdb7785b1151bead00bc295be176b806213a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3696f0d0edfb3c9d7c42aa23bdb7785b1151bead00bc295be176b806213a9d->enter($__internal_bd3696f0d0edfb3c9d7c42aa23bdb7785b1151bead00bc295be176b806213a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b566960fe38abe42b01f087b73374173b6ce09d41c0af14ee8cdee038cbfb577->leave($__internal_b566960fe38abe42b01f087b73374173b6ce09d41c0af14ee8cdee038cbfb577_prof);

        
        $__internal_bd3696f0d0edfb3c9d7c42aa23bdb7785b1151bead00bc295be176b806213a9d->leave($__internal_bd3696f0d0edfb3c9d7c42aa23bdb7785b1151bead00bc295be176b806213a9d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4623cc644772a13cbd1e2b0a34ed3e5ff07765ce82787d3977b7523fc32d1801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4623cc644772a13cbd1e2b0a34ed3e5ff07765ce82787d3977b7523fc32d1801->enter($__internal_4623cc644772a13cbd1e2b0a34ed3e5ff07765ce82787d3977b7523fc32d1801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be2140edb61eec1b43af2137e100d6b5b40497774731c0f677b246851841e6a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2140edb61eec1b43af2137e100d6b5b40497774731c0f677b246851841e6a6->enter($__internal_be2140edb61eec1b43af2137e100d6b5b40497774731c0f677b246851841e6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_be2140edb61eec1b43af2137e100d6b5b40497774731c0f677b246851841e6a6->leave($__internal_be2140edb61eec1b43af2137e100d6b5b40497774731c0f677b246851841e6a6_prof);

        
        $__internal_4623cc644772a13cbd1e2b0a34ed3e5ff07765ce82787d3977b7523fc32d1801->leave($__internal_4623cc644772a13cbd1e2b0a34ed3e5ff07765ce82787d3977b7523fc32d1801_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a5eba4059607e0a659194b963b4308cb10777578f02e312e78ba4f9bc2731ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5eba4059607e0a659194b963b4308cb10777578f02e312e78ba4f9bc2731ea->enter($__internal_9a5eba4059607e0a659194b963b4308cb10777578f02e312e78ba4f9bc2731ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68cef1df5824f38834a05d7f983c5fce2fc7ee0b4617df60f555836db7627642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68cef1df5824f38834a05d7f983c5fce2fc7ee0b4617df60f555836db7627642->enter($__internal_68cef1df5824f38834a05d7f983c5fce2fc7ee0b4617df60f555836db7627642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_68cef1df5824f38834a05d7f983c5fce2fc7ee0b4617df60f555836db7627642->leave($__internal_68cef1df5824f38834a05d7f983c5fce2fc7ee0b4617df60f555836db7627642_prof);

        
        $__internal_9a5eba4059607e0a659194b963b4308cb10777578f02e312e78ba4f9bc2731ea->leave($__internal_9a5eba4059607e0a659194b963b4308cb10777578f02e312e78ba4f9bc2731ea_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_52380889e17962f4e7617667c9ee37bd2327dbe04a43720b70d9efde565b2b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52380889e17962f4e7617667c9ee37bd2327dbe04a43720b70d9efde565b2b26->enter($__internal_52380889e17962f4e7617667c9ee37bd2327dbe04a43720b70d9efde565b2b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64890be4b0fdb865cc7f3b7c55efb6020d55f560e705ae93ebab7085d94ba324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64890be4b0fdb865cc7f3b7c55efb6020d55f560e705ae93ebab7085d94ba324->enter($__internal_64890be4b0fdb865cc7f3b7c55efb6020d55f560e705ae93ebab7085d94ba324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_64890be4b0fdb865cc7f3b7c55efb6020d55f560e705ae93ebab7085d94ba324->leave($__internal_64890be4b0fdb865cc7f3b7c55efb6020d55f560e705ae93ebab7085d94ba324_prof);

        
        $__internal_52380889e17962f4e7617667c9ee37bd2327dbe04a43720b70d9efde565b2b26->leave($__internal_52380889e17962f4e7617667c9ee37bd2327dbe04a43720b70d9efde565b2b26_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
