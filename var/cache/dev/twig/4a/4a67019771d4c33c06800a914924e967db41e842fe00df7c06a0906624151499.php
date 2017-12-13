<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
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
        $__internal_7d46867e7f1014c1402a0b659bd96df1a21a57c3c80bac2a7559c1d193d5b101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d46867e7f1014c1402a0b659bd96df1a21a57c3c80bac2a7559c1d193d5b101->enter($__internal_7d46867e7f1014c1402a0b659bd96df1a21a57c3c80bac2a7559c1d193d5b101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d89485087b5b4b89dbaf327ca27b9345b2271a502e0b7c282d5eadee1ff2c143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89485087b5b4b89dbaf327ca27b9345b2271a502e0b7c282d5eadee1ff2c143->enter($__internal_d89485087b5b4b89dbaf327ca27b9345b2271a502e0b7c282d5eadee1ff2c143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d46867e7f1014c1402a0b659bd96df1a21a57c3c80bac2a7559c1d193d5b101->leave($__internal_7d46867e7f1014c1402a0b659bd96df1a21a57c3c80bac2a7559c1d193d5b101_prof);

        
        $__internal_d89485087b5b4b89dbaf327ca27b9345b2271a502e0b7c282d5eadee1ff2c143->leave($__internal_d89485087b5b4b89dbaf327ca27b9345b2271a502e0b7c282d5eadee1ff2c143_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11ab30ce6ba815df36d0ff59ffe527a295b365ce7c3472df2fd3515735d985aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ab30ce6ba815df36d0ff59ffe527a295b365ce7c3472df2fd3515735d985aa->enter($__internal_11ab30ce6ba815df36d0ff59ffe527a295b365ce7c3472df2fd3515735d985aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ab623628e688ed91f97b94a96ed2cf3e9968dc0eb331c3c242e305ee6c98187a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab623628e688ed91f97b94a96ed2cf3e9968dc0eb331c3c242e305ee6c98187a->enter($__internal_ab623628e688ed91f97b94a96ed2cf3e9968dc0eb331c3c242e305ee6c98187a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ab623628e688ed91f97b94a96ed2cf3e9968dc0eb331c3c242e305ee6c98187a->leave($__internal_ab623628e688ed91f97b94a96ed2cf3e9968dc0eb331c3c242e305ee6c98187a_prof);

        
        $__internal_11ab30ce6ba815df36d0ff59ffe527a295b365ce7c3472df2fd3515735d985aa->leave($__internal_11ab30ce6ba815df36d0ff59ffe527a295b365ce7c3472df2fd3515735d985aa_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_aaed93b3de22a11a7fb4f98543ec974171c45c81f0e151ef596078abe125e992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaed93b3de22a11a7fb4f98543ec974171c45c81f0e151ef596078abe125e992->enter($__internal_aaed93b3de22a11a7fb4f98543ec974171c45c81f0e151ef596078abe125e992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fca9a61056d4353a692f67fff3373eb3b611528c4511f8dbb4415a4d5cd29682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca9a61056d4353a692f67fff3373eb3b611528c4511f8dbb4415a4d5cd29682->enter($__internal_fca9a61056d4353a692f67fff3373eb3b611528c4511f8dbb4415a4d5cd29682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fca9a61056d4353a692f67fff3373eb3b611528c4511f8dbb4415a4d5cd29682->leave($__internal_fca9a61056d4353a692f67fff3373eb3b611528c4511f8dbb4415a4d5cd29682_prof);

        
        $__internal_aaed93b3de22a11a7fb4f98543ec974171c45c81f0e151ef596078abe125e992->leave($__internal_aaed93b3de22a11a7fb4f98543ec974171c45c81f0e151ef596078abe125e992_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddc0e9eeeda322ec47f5342bb53c74aa5d422bb8e35dd830c3846f244e36fc04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc0e9eeeda322ec47f5342bb53c74aa5d422bb8e35dd830c3846f244e36fc04->enter($__internal_ddc0e9eeeda322ec47f5342bb53c74aa5d422bb8e35dd830c3846f244e36fc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ed25e60c53a11a5c504921d9422c12ea75b2d9e8566bba8ad0b6ceaa524afa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed25e60c53a11a5c504921d9422c12ea75b2d9e8566bba8ad0b6ceaa524afa9->enter($__internal_3ed25e60c53a11a5c504921d9422c12ea75b2d9e8566bba8ad0b6ceaa524afa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3ed25e60c53a11a5c504921d9422c12ea75b2d9e8566bba8ad0b6ceaa524afa9->leave($__internal_3ed25e60c53a11a5c504921d9422c12ea75b2d9e8566bba8ad0b6ceaa524afa9_prof);

        
        $__internal_ddc0e9eeeda322ec47f5342bb53c74aa5d422bb8e35dd830c3846f244e36fc04->leave($__internal_ddc0e9eeeda322ec47f5342bb53c74aa5d422bb8e35dd830c3846f244e36fc04_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
