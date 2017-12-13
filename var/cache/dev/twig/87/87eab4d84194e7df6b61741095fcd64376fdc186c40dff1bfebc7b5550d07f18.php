<?php

/* manager/new.html.twig */
class __TwigTemplate_bfcd8b8a986eb1af471bbfb86f8bc77f50e405e987d2f9b183ca21d954ff6349 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "manager/new.html.twig", 1);
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
        $__internal_5de7151486c541a86b0e98c555aac1ebd9fbd7a3b9668cd52ee10b90c47663c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de7151486c541a86b0e98c555aac1ebd9fbd7a3b9668cd52ee10b90c47663c0->enter($__internal_5de7151486c541a86b0e98c555aac1ebd9fbd7a3b9668cd52ee10b90c47663c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "manager/new.html.twig"));

        $__internal_f6bfb2659eb9d9da47d5546818497dbe433872ba647963fc004db575a575412c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bfb2659eb9d9da47d5546818497dbe433872ba647963fc004db575a575412c->enter($__internal_f6bfb2659eb9d9da47d5546818497dbe433872ba647963fc004db575a575412c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "manager/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5de7151486c541a86b0e98c555aac1ebd9fbd7a3b9668cd52ee10b90c47663c0->leave($__internal_5de7151486c541a86b0e98c555aac1ebd9fbd7a3b9668cd52ee10b90c47663c0_prof);

        
        $__internal_f6bfb2659eb9d9da47d5546818497dbe433872ba647963fc004db575a575412c->leave($__internal_f6bfb2659eb9d9da47d5546818497dbe433872ba647963fc004db575a575412c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3889df5d0ff6c99f2117d0bc2f7b961ecea88704b1da4d08364e477c2223686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3889df5d0ff6c99f2117d0bc2f7b961ecea88704b1da4d08364e477c2223686->enter($__internal_a3889df5d0ff6c99f2117d0bc2f7b961ecea88704b1da4d08364e477c2223686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d704fbadf98cefd4004ac457ab4f25e3455118308c1ee5de596ec421549b9c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d704fbadf98cefd4004ac457ab4f25e3455118308c1ee5de596ec421549b9c91->enter($__internal_d704fbadf98cefd4004ac457ab4f25e3455118308c1ee5de596ec421549b9c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Manager creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manager_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d704fbadf98cefd4004ac457ab4f25e3455118308c1ee5de596ec421549b9c91->leave($__internal_d704fbadf98cefd4004ac457ab4f25e3455118308c1ee5de596ec421549b9c91_prof);

        
        $__internal_a3889df5d0ff6c99f2117d0bc2f7b961ecea88704b1da4d08364e477c2223686->leave($__internal_a3889df5d0ff6c99f2117d0bc2f7b961ecea88704b1da4d08364e477c2223686_prof);

    }

    public function getTemplateName()
    {
        return "manager/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Manager creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('manager_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "manager/new.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/app/Resources/views/manager/new.html.twig");
    }
}
