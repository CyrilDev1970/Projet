<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_d2a768e8d244a97ac1918d04e896b3a8a41bffdfe8b3a479c42fa239c0c9fbac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b17cdfdba6e38572a75b2bf7570e44b4f612d0d64e8c196333f12d711c70835b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b17cdfdba6e38572a75b2bf7570e44b4f612d0d64e8c196333f12d711c70835b->enter($__internal_b17cdfdba6e38572a75b2bf7570e44b4f612d0d64e8c196333f12d711c70835b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_ea83cf74566b0fb88f80fc7d0db0f5e7627d659881eb2355e78547f0a3197d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea83cf74566b0fb88f80fc7d0db0f5e7627d659881eb2355e78547f0a3197d44->enter($__internal_ea83cf74566b0fb88f80fc7d0db0f5e7627d659881eb2355e78547f0a3197d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b17cdfdba6e38572a75b2bf7570e44b4f612d0d64e8c196333f12d711c70835b->leave($__internal_b17cdfdba6e38572a75b2bf7570e44b4f612d0d64e8c196333f12d711c70835b_prof);

        
        $__internal_ea83cf74566b0fb88f80fc7d0db0f5e7627d659881eb2355e78547f0a3197d44->leave($__internal_ea83cf74566b0fb88f80fc7d0db0f5e7627d659881eb2355e78547f0a3197d44_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_71c0dd54a70fddcee5580d838a0ea4fc082b3b80438c69d11209d83ba1911b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c0dd54a70fddcee5580d838a0ea4fc082b3b80438c69d11209d83ba1911b9b->enter($__internal_71c0dd54a70fddcee5580d838a0ea4fc082b3b80438c69d11209d83ba1911b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a4f0ca134df16a12fc4a938eafff3a757fb465c34c9c3d411d1fa86d5cc75936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f0ca134df16a12fc4a938eafff3a757fb465c34c9c3d411d1fa86d5cc75936->enter($__internal_a4f0ca134df16a12fc4a938eafff3a757fb465c34c9c3d411d1fa86d5cc75936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_a4f0ca134df16a12fc4a938eafff3a757fb465c34c9c3d411d1fa86d5cc75936->leave($__internal_a4f0ca134df16a12fc4a938eafff3a757fb465c34c9c3d411d1fa86d5cc75936_prof);

        
        $__internal_71c0dd54a70fddcee5580d838a0ea4fc082b3b80438c69d11209d83ba1911b9b->leave($__internal_71c0dd54a70fddcee5580d838a0ea4fc082b3b80438c69d11209d83ba1911b9b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5d85a93f4da3cef8f075255653ae8ae6b9a8cdc9308f6ea5f28b8b3367f3656f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d85a93f4da3cef8f075255653ae8ae6b9a8cdc9308f6ea5f28b8b3367f3656f->enter($__internal_5d85a93f4da3cef8f075255653ae8ae6b9a8cdc9308f6ea5f28b8b3367f3656f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d856a01ec6a6b628bab3e5f220b010d413eb13e13dc53e88ee6d5445b55dbb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d856a01ec6a6b628bab3e5f220b010d413eb13e13dc53e88ee6d5445b55dbb3f->enter($__internal_d856a01ec6a6b628bab3e5f220b010d413eb13e13dc53e88ee6d5445b55dbb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d856a01ec6a6b628bab3e5f220b010d413eb13e13dc53e88ee6d5445b55dbb3f->leave($__internal_d856a01ec6a6b628bab3e5f220b010d413eb13e13dc53e88ee6d5445b55dbb3f_prof);

        
        $__internal_5d85a93f4da3cef8f075255653ae8ae6b9a8cdc9308f6ea5f28b8b3367f3656f->leave($__internal_5d85a93f4da3cef8f075255653ae8ae6b9a8cdc9308f6ea5f28b8b3367f3656f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a8af02701a429be656ecb0231344bb954a8ee521a4464c834cd2f2805e5c99b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8af02701a429be656ecb0231344bb954a8ee521a4464c834cd2f2805e5c99b2->enter($__internal_a8af02701a429be656ecb0231344bb954a8ee521a4464c834cd2f2805e5c99b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2bde9eef3c7d86bc14fb360cc76dec2ba640b90e80ae625af9d09ec2e0c39f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bde9eef3c7d86bc14fb360cc76dec2ba640b90e80ae625af9d09ec2e0c39f8a->enter($__internal_2bde9eef3c7d86bc14fb360cc76dec2ba640b90e80ae625af9d09ec2e0c39f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2bde9eef3c7d86bc14fb360cc76dec2ba640b90e80ae625af9d09ec2e0c39f8a->leave($__internal_2bde9eef3c7d86bc14fb360cc76dec2ba640b90e80ae625af9d09ec2e0c39f8a_prof);

        
        $__internal_a8af02701a429be656ecb0231344bb954a8ee521a4464c834cd2f2805e5c99b2->leave($__internal_a8af02701a429be656ecb0231344bb954a8ee521a4464c834cd2f2805e5c99b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
