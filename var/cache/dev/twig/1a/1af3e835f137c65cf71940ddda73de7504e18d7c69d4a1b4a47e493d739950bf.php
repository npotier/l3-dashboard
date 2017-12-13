<?php

/* default/hello.html.twig */
class __TwigTemplate_287da84b7a7c2d75939c1ce29377a009c6172664654da47748ae15cfefdc9054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/hello.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c4c9ebfa3f72327c0becda024ea0b7ee705856df4835623a18ee7d406a5e004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4c9ebfa3f72327c0becda024ea0b7ee705856df4835623a18ee7d406a5e004->enter($__internal_4c4c9ebfa3f72327c0becda024ea0b7ee705856df4835623a18ee7d406a5e004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/hello.html.twig"));

        $__internal_e3a3d2026e0cb2654b263dc4605e1ee7472e9020f7db423d64c86674f8e2c5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a3d2026e0cb2654b263dc4605e1ee7472e9020f7db423d64c86674f8e2c5e4->enter($__internal_e3a3d2026e0cb2654b263dc4605e1ee7472e9020f7db423d64c86674f8e2c5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/hello.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c4c9ebfa3f72327c0becda024ea0b7ee705856df4835623a18ee7d406a5e004->leave($__internal_4c4c9ebfa3f72327c0becda024ea0b7ee705856df4835623a18ee7d406a5e004_prof);

        
        $__internal_e3a3d2026e0cb2654b263dc4605e1ee7472e9020f7db423d64c86674f8e2c5e4->leave($__internal_e3a3d2026e0cb2654b263dc4605e1ee7472e9020f7db423d64c86674f8e2c5e4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e355bfa0685d00011a3ae4c15ae729a00f7dd25151e67cf0d92b7605e993b472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e355bfa0685d00011a3ae4c15ae729a00f7dd25151e67cf0d92b7605e993b472->enter($__internal_e355bfa0685d00011a3ae4c15ae729a00f7dd25151e67cf0d92b7605e993b472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a46192ae21c83afb3bce0a6ac2e3a535bd97c4456120547b02d19e763c7afd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a46192ae21c83afb3bce0a6ac2e3a535bd97c4456120547b02d19e763c7afd4->enter($__internal_5a46192ae21c83afb3bce0a6ac2e3a535bd97c4456120547b02d19e763c7afd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "hello ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "
";
        
        $__internal_5a46192ae21c83afb3bce0a6ac2e3a535bd97c4456120547b02d19e763c7afd4->leave($__internal_5a46192ae21c83afb3bce0a6ac2e3a535bd97c4456120547b02d19e763c7afd4_prof);

        
        $__internal_e355bfa0685d00011a3ae4c15ae729a00f7dd25151e67cf0d92b7605e993b472->leave($__internal_e355bfa0685d00011a3ae4c15ae729a00f7dd25151e67cf0d92b7605e993b472_prof);

    }

    public function getTemplateName()
    {
        return "default/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
hello {{ name }}
{% endblock %}
", "default/hello.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/app/Resources/views/default/hello.html.twig");
    }
}
