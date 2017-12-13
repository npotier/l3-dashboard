<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e3ee925389d0fe6e883d9af601259b4881ff34e7a7807dc95bf2a7c024be4b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3ee925389d0fe6e883d9af601259b4881ff34e7a7807dc95bf2a7c024be4b1->enter($__internal_0e3ee925389d0fe6e883d9af601259b4881ff34e7a7807dc95bf2a7c024be4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_01b95757133143849fdb89e77650c0747ff0e7a948491c3c198b2f32e0b928cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b95757133143849fdb89e77650c0747ff0e7a948491c3c198b2f32e0b928cb->enter($__internal_01b95757133143849fdb89e77650c0747ff0e7a948491c3c198b2f32e0b928cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e3ee925389d0fe6e883d9af601259b4881ff34e7a7807dc95bf2a7c024be4b1->leave($__internal_0e3ee925389d0fe6e883d9af601259b4881ff34e7a7807dc95bf2a7c024be4b1_prof);

        
        $__internal_01b95757133143849fdb89e77650c0747ff0e7a948491c3c198b2f32e0b928cb->leave($__internal_01b95757133143849fdb89e77650c0747ff0e7a948491c3c198b2f32e0b928cb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_596a82ebf53b233edce0178d6a03cb4d19c83b079cb009886a2e8b8232149040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596a82ebf53b233edce0178d6a03cb4d19c83b079cb009886a2e8b8232149040->enter($__internal_596a82ebf53b233edce0178d6a03cb4d19c83b079cb009886a2e8b8232149040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_55025ed199f2ccb9b32c79a30b4dc2a9846014667cddd240b2d884ecef0ccf7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55025ed199f2ccb9b32c79a30b4dc2a9846014667cddd240b2d884ecef0ccf7b->enter($__internal_55025ed199f2ccb9b32c79a30b4dc2a9846014667cddd240b2d884ecef0ccf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_55025ed199f2ccb9b32c79a30b4dc2a9846014667cddd240b2d884ecef0ccf7b->leave($__internal_55025ed199f2ccb9b32c79a30b4dc2a9846014667cddd240b2d884ecef0ccf7b_prof);

        
        $__internal_596a82ebf53b233edce0178d6a03cb4d19c83b079cb009886a2e8b8232149040->leave($__internal_596a82ebf53b233edce0178d6a03cb4d19c83b079cb009886a2e8b8232149040_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_83403f56e5b1aef8bb4360d51c6f6de0acddf5fb5c8db5a875d9edcad465c34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83403f56e5b1aef8bb4360d51c6f6de0acddf5fb5c8db5a875d9edcad465c34c->enter($__internal_83403f56e5b1aef8bb4360d51c6f6de0acddf5fb5c8db5a875d9edcad465c34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_40f482a66b7b6f156e23714485a7935b3b68de7b5aaf22fe06c612c1a1af6b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f482a66b7b6f156e23714485a7935b3b68de7b5aaf22fe06c612c1a1af6b89->enter($__internal_40f482a66b7b6f156e23714485a7935b3b68de7b5aaf22fe06c612c1a1af6b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_40f482a66b7b6f156e23714485a7935b3b68de7b5aaf22fe06c612c1a1af6b89->leave($__internal_40f482a66b7b6f156e23714485a7935b3b68de7b5aaf22fe06c612c1a1af6b89_prof);

        
        $__internal_83403f56e5b1aef8bb4360d51c6f6de0acddf5fb5c8db5a875d9edcad465c34c->leave($__internal_83403f56e5b1aef8bb4360d51c6f6de0acddf5fb5c8db5a875d9edcad465c34c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1891adbeb00438791ece5048db07d668f7a9dffda206ded6c3ac9cc5b82c0e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1891adbeb00438791ece5048db07d668f7a9dffda206ded6c3ac9cc5b82c0e61->enter($__internal_1891adbeb00438791ece5048db07d668f7a9dffda206ded6c3ac9cc5b82c0e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_327c32bb89254a435944de586273e6df66befc0b86ce1a42ed2eba276cbfcf53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327c32bb89254a435944de586273e6df66befc0b86ce1a42ed2eba276cbfcf53->enter($__internal_327c32bb89254a435944de586273e6df66befc0b86ce1a42ed2eba276cbfcf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_327c32bb89254a435944de586273e6df66befc0b86ce1a42ed2eba276cbfcf53->leave($__internal_327c32bb89254a435944de586273e6df66befc0b86ce1a42ed2eba276cbfcf53_prof);

        
        $__internal_1891adbeb00438791ece5048db07d668f7a9dffda206ded6c3ac9cc5b82c0e61->leave($__internal_1891adbeb00438791ece5048db07d668f7a9dffda206ded6c3ac9cc5b82c0e61_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
