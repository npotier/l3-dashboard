<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_309be693ca131c945f2c79843f08af9d1f9a40f7fd1c073ddd6f9bbf66cd87d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e7c68bd1497cf4f5b8d3492e8f630667c73d9381c8ee6e40e701f4bdf79f146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7c68bd1497cf4f5b8d3492e8f630667c73d9381c8ee6e40e701f4bdf79f146->enter($__internal_7e7c68bd1497cf4f5b8d3492e8f630667c73d9381c8ee6e40e701f4bdf79f146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f574ddcb6d9ea76593e809ea69c14ae533d8a9567dc618d44d16a46079a84a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f574ddcb6d9ea76593e809ea69c14ae533d8a9567dc618d44d16a46079a84a72->enter($__internal_f574ddcb6d9ea76593e809ea69c14ae533d8a9567dc618d44d16a46079a84a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e7c68bd1497cf4f5b8d3492e8f630667c73d9381c8ee6e40e701f4bdf79f146->leave($__internal_7e7c68bd1497cf4f5b8d3492e8f630667c73d9381c8ee6e40e701f4bdf79f146_prof);

        
        $__internal_f574ddcb6d9ea76593e809ea69c14ae533d8a9567dc618d44d16a46079a84a72->leave($__internal_f574ddcb6d9ea76593e809ea69c14ae533d8a9567dc618d44d16a46079a84a72_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_80cbaef140b91983c0b751acfed21e7f8a6e240e4d0d5ac9ad6248d56abe7d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80cbaef140b91983c0b751acfed21e7f8a6e240e4d0d5ac9ad6248d56abe7d77->enter($__internal_80cbaef140b91983c0b751acfed21e7f8a6e240e4d0d5ac9ad6248d56abe7d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_88be8469fdff7f2c0a7e958a0a8318bfe1f40d0cc9e6a905511ced5813c3f99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88be8469fdff7f2c0a7e958a0a8318bfe1f40d0cc9e6a905511ced5813c3f99f->enter($__internal_88be8469fdff7f2c0a7e958a0a8318bfe1f40d0cc9e6a905511ced5813c3f99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_88be8469fdff7f2c0a7e958a0a8318bfe1f40d0cc9e6a905511ced5813c3f99f->leave($__internal_88be8469fdff7f2c0a7e958a0a8318bfe1f40d0cc9e6a905511ced5813c3f99f_prof);

        
        $__internal_80cbaef140b91983c0b751acfed21e7f8a6e240e4d0d5ac9ad6248d56abe7d77->leave($__internal_80cbaef140b91983c0b751acfed21e7f8a6e240e4d0d5ac9ad6248d56abe7d77_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
