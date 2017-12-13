<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
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
        $__internal_cc1e80a312539c511545bbc7b1324a18140ff0733ccd76b5a8e534610ee63745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc1e80a312539c511545bbc7b1324a18140ff0733ccd76b5a8e534610ee63745->enter($__internal_cc1e80a312539c511545bbc7b1324a18140ff0733ccd76b5a8e534610ee63745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5919bd4a86defac4a7fbae9e64073c8a51711b7bd92a11b87b1eba129d8cf023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5919bd4a86defac4a7fbae9e64073c8a51711b7bd92a11b87b1eba129d8cf023->enter($__internal_5919bd4a86defac4a7fbae9e64073c8a51711b7bd92a11b87b1eba129d8cf023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_cc1e80a312539c511545bbc7b1324a18140ff0733ccd76b5a8e534610ee63745->leave($__internal_cc1e80a312539c511545bbc7b1324a18140ff0733ccd76b5a8e534610ee63745_prof);

        
        $__internal_5919bd4a86defac4a7fbae9e64073c8a51711b7bd92a11b87b1eba129d8cf023->leave($__internal_5919bd4a86defac4a7fbae9e64073c8a51711b7bd92a11b87b1eba129d8cf023_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dda40a6a062bd986b4f7d47f22793446a198c4ed1a316c3fdec69cf28bd849f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dda40a6a062bd986b4f7d47f22793446a198c4ed1a316c3fdec69cf28bd849f->enter($__internal_6dda40a6a062bd986b4f7d47f22793446a198c4ed1a316c3fdec69cf28bd849f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef597ce02c451a68fc328216f25094565f3cad6df0e721195284411f23c34a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef597ce02c451a68fc328216f25094565f3cad6df0e721195284411f23c34a58->enter($__internal_ef597ce02c451a68fc328216f25094565f3cad6df0e721195284411f23c34a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ef597ce02c451a68fc328216f25094565f3cad6df0e721195284411f23c34a58->leave($__internal_ef597ce02c451a68fc328216f25094565f3cad6df0e721195284411f23c34a58_prof);

        
        $__internal_6dda40a6a062bd986b4f7d47f22793446a198c4ed1a316c3fdec69cf28bd849f->leave($__internal_6dda40a6a062bd986b4f7d47f22793446a198c4ed1a316c3fdec69cf28bd849f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1bf50d9c26baaa6fb19e99a75a30b27463e977f03ee8a4e02ef399d98bebe58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1bf50d9c26baaa6fb19e99a75a30b27463e977f03ee8a4e02ef399d98bebe58->enter($__internal_e1bf50d9c26baaa6fb19e99a75a30b27463e977f03ee8a4e02ef399d98bebe58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a1031d38d8927cefe299f5b799ea8564cea4411ab4266bd49d0570b84a4d1958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1031d38d8927cefe299f5b799ea8564cea4411ab4266bd49d0570b84a4d1958->enter($__internal_a1031d38d8927cefe299f5b799ea8564cea4411ab4266bd49d0570b84a4d1958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a1031d38d8927cefe299f5b799ea8564cea4411ab4266bd49d0570b84a4d1958->leave($__internal_a1031d38d8927cefe299f5b799ea8564cea4411ab4266bd49d0570b84a4d1958_prof);

        
        $__internal_e1bf50d9c26baaa6fb19e99a75a30b27463e977f03ee8a4e02ef399d98bebe58->leave($__internal_e1bf50d9c26baaa6fb19e99a75a30b27463e977f03ee8a4e02ef399d98bebe58_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_35479fa3af7bc49bf822b527d8bd0aa629a5d516982e6a11f0b8d3615a256846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35479fa3af7bc49bf822b527d8bd0aa629a5d516982e6a11f0b8d3615a256846->enter($__internal_35479fa3af7bc49bf822b527d8bd0aa629a5d516982e6a11f0b8d3615a256846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46117b0f32f5efab84fc87a45bff756ec462707963551eec7d2dba740fd6f157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46117b0f32f5efab84fc87a45bff756ec462707963551eec7d2dba740fd6f157->enter($__internal_46117b0f32f5efab84fc87a45bff756ec462707963551eec7d2dba740fd6f157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_46117b0f32f5efab84fc87a45bff756ec462707963551eec7d2dba740fd6f157->leave($__internal_46117b0f32f5efab84fc87a45bff756ec462707963551eec7d2dba740fd6f157_prof);

        
        $__internal_35479fa3af7bc49bf822b527d8bd0aa629a5d516982e6a11f0b8d3615a256846->leave($__internal_35479fa3af7bc49bf822b527d8bd0aa629a5d516982e6a11f0b8d3615a256846_prof);

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
", "@Twig/layout.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
