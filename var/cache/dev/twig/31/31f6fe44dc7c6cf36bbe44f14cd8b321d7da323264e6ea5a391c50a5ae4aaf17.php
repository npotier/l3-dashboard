<?php

/* fiche1/new.html.twig */
class __TwigTemplate_522af9cb0354d7396f4e0c4d7d0e186b1f8b3791d8835bf290cab809ea0611f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche1/new.html.twig", 1);
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
        $__internal_2662c0c7f455ae98976380f996ab1c70ac9f2f5fdd6876b8fa259539b4564f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2662c0c7f455ae98976380f996ab1c70ac9f2f5fdd6876b8fa259539b4564f81->enter($__internal_2662c0c7f455ae98976380f996ab1c70ac9f2f5fdd6876b8fa259539b4564f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche1/new.html.twig"));

        $__internal_b54ab9a28b475a251cfa11697e8381bc48e01a664b690633cc9f7ae12f99b1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54ab9a28b475a251cfa11697e8381bc48e01a664b690633cc9f7ae12f99b1b2->enter($__internal_b54ab9a28b475a251cfa11697e8381bc48e01a664b690633cc9f7ae12f99b1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche1/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2662c0c7f455ae98976380f996ab1c70ac9f2f5fdd6876b8fa259539b4564f81->leave($__internal_2662c0c7f455ae98976380f996ab1c70ac9f2f5fdd6876b8fa259539b4564f81_prof);

        
        $__internal_b54ab9a28b475a251cfa11697e8381bc48e01a664b690633cc9f7ae12f99b1b2->leave($__internal_b54ab9a28b475a251cfa11697e8381bc48e01a664b690633cc9f7ae12f99b1b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b6c42092b2bf6b421b886f9b754d532a3bbba60d427a76d986131cf91c2ab28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b6c42092b2bf6b421b886f9b754d532a3bbba60d427a76d986131cf91c2ab28->enter($__internal_2b6c42092b2bf6b421b886f9b754d532a3bbba60d427a76d986131cf91c2ab28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_807ae9d865aaac820887dc19298b7aabfc7ef897f097fa8cd996433ea300faba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807ae9d865aaac820887dc19298b7aabfc7ef897f097fa8cd996433ea300faba->enter($__internal_807ae9d865aaac820887dc19298b7aabfc7ef897f097fa8cd996433ea300faba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiche1 creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche1_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_807ae9d865aaac820887dc19298b7aabfc7ef897f097fa8cd996433ea300faba->leave($__internal_807ae9d865aaac820887dc19298b7aabfc7ef897f097fa8cd996433ea300faba_prof);

        
        $__internal_2b6c42092b2bf6b421b886f9b754d532a3bbba60d427a76d986131cf91c2ab28->leave($__internal_2b6c42092b2bf6b421b886f9b754d532a3bbba60d427a76d986131cf91c2ab28_prof);

    }

    public function getTemplateName()
    {
        return "fiche1/new.html.twig";
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
    <h1>Fiche1 creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('fiche1_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "fiche1/new.html.twig", "/var/www/html/Symfony/app/Resources/views/fiche1/new.html.twig");
    }
}
