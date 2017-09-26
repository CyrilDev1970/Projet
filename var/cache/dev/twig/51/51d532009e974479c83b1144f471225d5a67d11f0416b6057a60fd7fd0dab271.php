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
        $__internal_dedaf866ca44f3f436e368abccbcdb34a2efe2075e094f3106d805b3f5160fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dedaf866ca44f3f436e368abccbcdb34a2efe2075e094f3106d805b3f5160fb0->enter($__internal_dedaf866ca44f3f436e368abccbcdb34a2efe2075e094f3106d805b3f5160fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5aae9b12048235200cfd2ec07318bbb18ae7931fab6361f4523cb5ddd1903a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aae9b12048235200cfd2ec07318bbb18ae7931fab6361f4523cb5ddd1903a8f->enter($__internal_5aae9b12048235200cfd2ec07318bbb18ae7931fab6361f4523cb5ddd1903a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_dedaf866ca44f3f436e368abccbcdb34a2efe2075e094f3106d805b3f5160fb0->leave($__internal_dedaf866ca44f3f436e368abccbcdb34a2efe2075e094f3106d805b3f5160fb0_prof);

        
        $__internal_5aae9b12048235200cfd2ec07318bbb18ae7931fab6361f4523cb5ddd1903a8f->leave($__internal_5aae9b12048235200cfd2ec07318bbb18ae7931fab6361f4523cb5ddd1903a8f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f274fe038e239b465a6ea830bb3370ba92d4a2d5caf29e1711f7747544636fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f274fe038e239b465a6ea830bb3370ba92d4a2d5caf29e1711f7747544636fcc->enter($__internal_f274fe038e239b465a6ea830bb3370ba92d4a2d5caf29e1711f7747544636fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_801b4351978377de5efc6e58294f9c50bd11e0871a5adead1f0a468bdd15821a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801b4351978377de5efc6e58294f9c50bd11e0871a5adead1f0a468bdd15821a->enter($__internal_801b4351978377de5efc6e58294f9c50bd11e0871a5adead1f0a468bdd15821a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_801b4351978377de5efc6e58294f9c50bd11e0871a5adead1f0a468bdd15821a->leave($__internal_801b4351978377de5efc6e58294f9c50bd11e0871a5adead1f0a468bdd15821a_prof);

        
        $__internal_f274fe038e239b465a6ea830bb3370ba92d4a2d5caf29e1711f7747544636fcc->leave($__internal_f274fe038e239b465a6ea830bb3370ba92d4a2d5caf29e1711f7747544636fcc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_581ce003e63a565755b0ca434a02e2f3674260bc808137a31994f7a25d2c5e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_581ce003e63a565755b0ca434a02e2f3674260bc808137a31994f7a25d2c5e0a->enter($__internal_581ce003e63a565755b0ca434a02e2f3674260bc808137a31994f7a25d2c5e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0511412ced822ddd469bc41ec761cd73ef509c933e5ccff9968572e69b0e613b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0511412ced822ddd469bc41ec761cd73ef509c933e5ccff9968572e69b0e613b->enter($__internal_0511412ced822ddd469bc41ec761cd73ef509c933e5ccff9968572e69b0e613b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0511412ced822ddd469bc41ec761cd73ef509c933e5ccff9968572e69b0e613b->leave($__internal_0511412ced822ddd469bc41ec761cd73ef509c933e5ccff9968572e69b0e613b_prof);

        
        $__internal_581ce003e63a565755b0ca434a02e2f3674260bc808137a31994f7a25d2c5e0a->leave($__internal_581ce003e63a565755b0ca434a02e2f3674260bc808137a31994f7a25d2c5e0a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1139beb176137b4abcc725047f149d087fda3ab7f254b175754c4a4ab88b4721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1139beb176137b4abcc725047f149d087fda3ab7f254b175754c4a4ab88b4721->enter($__internal_1139beb176137b4abcc725047f149d087fda3ab7f254b175754c4a4ab88b4721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_814ddfc4bcc39661c9e33bd9e75a75818cbb1de7520de039e915253b3b4356a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814ddfc4bcc39661c9e33bd9e75a75818cbb1de7520de039e915253b3b4356a9->enter($__internal_814ddfc4bcc39661c9e33bd9e75a75818cbb1de7520de039e915253b3b4356a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_814ddfc4bcc39661c9e33bd9e75a75818cbb1de7520de039e915253b3b4356a9->leave($__internal_814ddfc4bcc39661c9e33bd9e75a75818cbb1de7520de039e915253b3b4356a9_prof);

        
        $__internal_1139beb176137b4abcc725047f149d087fda3ab7f254b175754c4a4ab88b4721->leave($__internal_1139beb176137b4abcc725047f149d087fda3ab7f254b175754c4a4ab88b4721_prof);

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
