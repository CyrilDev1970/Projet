<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_34c3a0643dfc7d72a581e0e6090842eda852bb909c6261b5861c9eda5e28b623 extends Twig_Template
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
        $__internal_44cc32b900fcc3f8e052fbd659bf268bdc87b085f4ec3532192d44624d5eb69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44cc32b900fcc3f8e052fbd659bf268bdc87b085f4ec3532192d44624d5eb69a->enter($__internal_44cc32b900fcc3f8e052fbd659bf268bdc87b085f4ec3532192d44624d5eb69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_328f0e6a2b9ee3cc402e91d977ab0331afc28472e1b229e8e037e6be7104bbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328f0e6a2b9ee3cc402e91d977ab0331afc28472e1b229e8e037e6be7104bbf1->enter($__internal_328f0e6a2b9ee3cc402e91d977ab0331afc28472e1b229e8e037e6be7104bbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_44cc32b900fcc3f8e052fbd659bf268bdc87b085f4ec3532192d44624d5eb69a->leave($__internal_44cc32b900fcc3f8e052fbd659bf268bdc87b085f4ec3532192d44624d5eb69a_prof);

        
        $__internal_328f0e6a2b9ee3cc402e91d977ab0331afc28472e1b229e8e037e6be7104bbf1->leave($__internal_328f0e6a2b9ee3cc402e91d977ab0331afc28472e1b229e8e037e6be7104bbf1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_55b395d262f8de4a2a4bd3993a80b02a6b6a4ca6e16b046718e883418110f6e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b395d262f8de4a2a4bd3993a80b02a6b6a4ca6e16b046718e883418110f6e6->enter($__internal_55b395d262f8de4a2a4bd3993a80b02a6b6a4ca6e16b046718e883418110f6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_13c77eea08d8dcbcd708b896b53e15294fafe429c569d3a3c1c01730653672f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c77eea08d8dcbcd708b896b53e15294fafe429c569d3a3c1c01730653672f5->enter($__internal_13c77eea08d8dcbcd708b896b53e15294fafe429c569d3a3c1c01730653672f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_13c77eea08d8dcbcd708b896b53e15294fafe429c569d3a3c1c01730653672f5->leave($__internal_13c77eea08d8dcbcd708b896b53e15294fafe429c569d3a3c1c01730653672f5_prof);

        
        $__internal_55b395d262f8de4a2a4bd3993a80b02a6b6a4ca6e16b046718e883418110f6e6->leave($__internal_55b395d262f8de4a2a4bd3993a80b02a6b6a4ca6e16b046718e883418110f6e6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1903a91058b9de9ee066141738c460a2ecf5b6098a3d68a7a1062f805f7fc811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1903a91058b9de9ee066141738c460a2ecf5b6098a3d68a7a1062f805f7fc811->enter($__internal_1903a91058b9de9ee066141738c460a2ecf5b6098a3d68a7a1062f805f7fc811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_a70decc97c4b740f74e30f2e21f398fcd62c43a91e7fe0908a7fb0363ef13595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70decc97c4b740f74e30f2e21f398fcd62c43a91e7fe0908a7fb0363ef13595->enter($__internal_a70decc97c4b740f74e30f2e21f398fcd62c43a91e7fe0908a7fb0363ef13595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a70decc97c4b740f74e30f2e21f398fcd62c43a91e7fe0908a7fb0363ef13595->leave($__internal_a70decc97c4b740f74e30f2e21f398fcd62c43a91e7fe0908a7fb0363ef13595_prof);

        
        $__internal_1903a91058b9de9ee066141738c460a2ecf5b6098a3d68a7a1062f805f7fc811->leave($__internal_1903a91058b9de9ee066141738c460a2ecf5b6098a3d68a7a1062f805f7fc811_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8fd223cbac4ed5d50e6463b010b6e94dd05d4ac6d7a116d7ac0462a72c224be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd223cbac4ed5d50e6463b010b6e94dd05d4ac6d7a116d7ac0462a72c224be0->enter($__internal_8fd223cbac4ed5d50e6463b010b6e94dd05d4ac6d7a116d7ac0462a72c224be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d01add9adc21d0bdc27c7288ef47ade3a2a773e970734fcf5b0e2c977466736d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01add9adc21d0bdc27c7288ef47ade3a2a773e970734fcf5b0e2c977466736d->enter($__internal_d01add9adc21d0bdc27c7288ef47ade3a2a773e970734fcf5b0e2c977466736d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d01add9adc21d0bdc27c7288ef47ade3a2a773e970734fcf5b0e2c977466736d->leave($__internal_d01add9adc21d0bdc27c7288ef47ade3a2a773e970734fcf5b0e2c977466736d_prof);

        
        $__internal_8fd223cbac4ed5d50e6463b010b6e94dd05d4ac6d7a116d7ac0462a72c224be0->leave($__internal_8fd223cbac4ed5d50e6463b010b6e94dd05d4ac6d7a116d7ac0462a72c224be0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
