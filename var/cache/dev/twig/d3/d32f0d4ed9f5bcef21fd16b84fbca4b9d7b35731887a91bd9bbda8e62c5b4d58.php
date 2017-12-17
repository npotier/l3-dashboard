<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_037ae85d0493d952e10e9dab56c4a0d869b839b63dadadfce8ea1e82033789c9 extends Twig_Template
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
        $__internal_f70b02dd8d8c11698ed879f4f14ec66333408bd4f0c5fdfc34bae394eface781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f70b02dd8d8c11698ed879f4f14ec66333408bd4f0c5fdfc34bae394eface781->enter($__internal_f70b02dd8d8c11698ed879f4f14ec66333408bd4f0c5fdfc34bae394eface781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0b4c12eaf7f6320f8619edd7b3b8658f61de52dd437d9b559774d52ba21cad6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4c12eaf7f6320f8619edd7b3b8658f61de52dd437d9b559774d52ba21cad6f->enter($__internal_0b4c12eaf7f6320f8619edd7b3b8658f61de52dd437d9b559774d52ba21cad6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_f70b02dd8d8c11698ed879f4f14ec66333408bd4f0c5fdfc34bae394eface781->leave($__internal_f70b02dd8d8c11698ed879f4f14ec66333408bd4f0c5fdfc34bae394eface781_prof);

        
        $__internal_0b4c12eaf7f6320f8619edd7b3b8658f61de52dd437d9b559774d52ba21cad6f->leave($__internal_0b4c12eaf7f6320f8619edd7b3b8658f61de52dd437d9b559774d52ba21cad6f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebeea049a486e96c4baea4b52cca305ed897a26a94bc6e2a414bd2383bc5bc49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebeea049a486e96c4baea4b52cca305ed897a26a94bc6e2a414bd2383bc5bc49->enter($__internal_ebeea049a486e96c4baea4b52cca305ed897a26a94bc6e2a414bd2383bc5bc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64deddd355efb9ae642bfe25871b41c6544d55e6e32134877296857eeb25714c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64deddd355efb9ae642bfe25871b41c6544d55e6e32134877296857eeb25714c->enter($__internal_64deddd355efb9ae642bfe25871b41c6544d55e6e32134877296857eeb25714c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_64deddd355efb9ae642bfe25871b41c6544d55e6e32134877296857eeb25714c->leave($__internal_64deddd355efb9ae642bfe25871b41c6544d55e6e32134877296857eeb25714c_prof);

        
        $__internal_ebeea049a486e96c4baea4b52cca305ed897a26a94bc6e2a414bd2383bc5bc49->leave($__internal_ebeea049a486e96c4baea4b52cca305ed897a26a94bc6e2a414bd2383bc5bc49_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6024f704667d55b6a821cb9f0a433400b5fd50b844a0627a738049ab66d084d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6024f704667d55b6a821cb9f0a433400b5fd50b844a0627a738049ab66d084d5->enter($__internal_6024f704667d55b6a821cb9f0a433400b5fd50b844a0627a738049ab66d084d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a9d12a389186ebde11f6d37a50bbdeac7cfc4526efc5583fc94e0cca1969f140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d12a389186ebde11f6d37a50bbdeac7cfc4526efc5583fc94e0cca1969f140->enter($__internal_a9d12a389186ebde11f6d37a50bbdeac7cfc4526efc5583fc94e0cca1969f140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a9d12a389186ebde11f6d37a50bbdeac7cfc4526efc5583fc94e0cca1969f140->leave($__internal_a9d12a389186ebde11f6d37a50bbdeac7cfc4526efc5583fc94e0cca1969f140_prof);

        
        $__internal_6024f704667d55b6a821cb9f0a433400b5fd50b844a0627a738049ab66d084d5->leave($__internal_6024f704667d55b6a821cb9f0a433400b5fd50b844a0627a738049ab66d084d5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f1badb8642277078c4203b8c54caf3c57be7ddb165973522599f8a7465d4def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1badb8642277078c4203b8c54caf3c57be7ddb165973522599f8a7465d4def->enter($__internal_5f1badb8642277078c4203b8c54caf3c57be7ddb165973522599f8a7465d4def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c70615ae840b4025b64539ecd6174f5fe934cfe22ac5b317e8f9e7403be00f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c70615ae840b4025b64539ecd6174f5fe934cfe22ac5b317e8f9e7403be00f6->enter($__internal_6c70615ae840b4025b64539ecd6174f5fe934cfe22ac5b317e8f9e7403be00f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6c70615ae840b4025b64539ecd6174f5fe934cfe22ac5b317e8f9e7403be00f6->leave($__internal_6c70615ae840b4025b64539ecd6174f5fe934cfe22ac5b317e8f9e7403be00f6_prof);

        
        $__internal_5f1badb8642277078c4203b8c54caf3c57be7ddb165973522599f8a7465d4def->leave($__internal_5f1badb8642277078c4203b8c54caf3c57be7ddb165973522599f8a7465d4def_prof);

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
", "@Twig/layout.html.twig", "/var/www/html/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
