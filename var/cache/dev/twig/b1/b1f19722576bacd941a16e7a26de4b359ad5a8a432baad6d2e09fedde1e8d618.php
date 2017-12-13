<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b5bebf519e9dc135642201173c2d8419e8dd5c591718d4d3526fb016307df25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5bebf519e9dc135642201173c2d8419e8dd5c591718d4d3526fb016307df25->enter($__internal_5b5bebf519e9dc135642201173c2d8419e8dd5c591718d4d3526fb016307df25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_39a757b26abdeb30d7d2cf5dc139ca0aaa9b571e6915f8bc82e1718527762564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a757b26abdeb30d7d2cf5dc139ca0aaa9b571e6915f8bc82e1718527762564->enter($__internal_39a757b26abdeb30d7d2cf5dc139ca0aaa9b571e6915f8bc82e1718527762564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\"
              integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
                integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

    </head>
    <body>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
        
        $__internal_5b5bebf519e9dc135642201173c2d8419e8dd5c591718d4d3526fb016307df25->leave($__internal_5b5bebf519e9dc135642201173c2d8419e8dd5c591718d4d3526fb016307df25_prof);

        
        $__internal_39a757b26abdeb30d7d2cf5dc139ca0aaa9b571e6915f8bc82e1718527762564->leave($__internal_39a757b26abdeb30d7d2cf5dc139ca0aaa9b571e6915f8bc82e1718527762564_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7e7535830c4eba1795acbb1f1a4df2b778dc6c81e917df7e23e42875e025074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e7535830c4eba1795acbb1f1a4df2b778dc6c81e917df7e23e42875e025074->enter($__internal_f7e7535830c4eba1795acbb1f1a4df2b778dc6c81e917df7e23e42875e025074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4ee6e478291d0c25ddd9bad616b0973f68b5583f44ea7a7f5827fde673adf10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ee6e478291d0c25ddd9bad616b0973f68b5583f44ea7a7f5827fde673adf10->enter($__internal_e4ee6e478291d0c25ddd9bad616b0973f68b5583f44ea7a7f5827fde673adf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e4ee6e478291d0c25ddd9bad616b0973f68b5583f44ea7a7f5827fde673adf10->leave($__internal_e4ee6e478291d0c25ddd9bad616b0973f68b5583f44ea7a7f5827fde673adf10_prof);

        
        $__internal_f7e7535830c4eba1795acbb1f1a4df2b778dc6c81e917df7e23e42875e025074->leave($__internal_f7e7535830c4eba1795acbb1f1a4df2b778dc6c81e917df7e23e42875e025074_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd5e4f3f8fe02917f747a0e9d267a5f68e5c59db1dee03ac3163ba755101312c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd5e4f3f8fe02917f747a0e9d267a5f68e5c59db1dee03ac3163ba755101312c->enter($__internal_fd5e4f3f8fe02917f747a0e9d267a5f68e5c59db1dee03ac3163ba755101312c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_698d7f2677f13bec9089e8ea62453a164f55be50bd3d77560ad720223fadb4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698d7f2677f13bec9089e8ea62453a164f55be50bd3d77560ad720223fadb4e0->enter($__internal_698d7f2677f13bec9089e8ea62453a164f55be50bd3d77560ad720223fadb4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_698d7f2677f13bec9089e8ea62453a164f55be50bd3d77560ad720223fadb4e0->leave($__internal_698d7f2677f13bec9089e8ea62453a164f55be50bd3d77560ad720223fadb4e0_prof);

        
        $__internal_fd5e4f3f8fe02917f747a0e9d267a5f68e5c59db1dee03ac3163ba755101312c->leave($__internal_fd5e4f3f8fe02917f747a0e9d267a5f68e5c59db1dee03ac3163ba755101312c_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_624844973dd201c9cefd4c6eaef81cbef6f78973659f9330f8a07f80c1251425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624844973dd201c9cefd4c6eaef81cbef6f78973659f9330f8a07f80c1251425->enter($__internal_624844973dd201c9cefd4c6eaef81cbef6f78973659f9330f8a07f80c1251425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a500cb1d98336d3e2b2269236d8a3c89b130f8866eb241981db33fd5b49012d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a500cb1d98336d3e2b2269236d8a3c89b130f8866eb241981db33fd5b49012d0->enter($__internal_a500cb1d98336d3e2b2269236d8a3c89b130f8866eb241981db33fd5b49012d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a500cb1d98336d3e2b2269236d8a3c89b130f8866eb241981db33fd5b49012d0->leave($__internal_a500cb1d98336d3e2b2269236d8a3c89b130f8866eb241981db33fd5b49012d0_prof);

        
        $__internal_624844973dd201c9cefd4c6eaef81cbef6f78973659f9330f8a07f80c1251425->leave($__internal_624844973dd201c9cefd4c6eaef81cbef6f78973659f9330f8a07f80c1251425_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_54236f822c1ef2323509571c3762cf03062d6f90873308a541dda0ea817545f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54236f822c1ef2323509571c3762cf03062d6f90873308a541dda0ea817545f8->enter($__internal_54236f822c1ef2323509571c3762cf03062d6f90873308a541dda0ea817545f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0297f2e3a58607f42d7496f3f02d59bd4060ce944967f2278ff0fb6bae424738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0297f2e3a58607f42d7496f3f02d59bd4060ce944967f2278ff0fb6bae424738->enter($__internal_0297f2e3a58607f42d7496f3f02d59bd4060ce944967f2278ff0fb6bae424738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0297f2e3a58607f42d7496f3f02d59bd4060ce944967f2278ff0fb6bae424738->leave($__internal_0297f2e3a58607f42d7496f3f02d59bd4060ce944967f2278ff0fb6bae424738_prof);

        
        $__internal_54236f822c1ef2323509571c3762cf03062d6f90873308a541dda0ea817545f8->leave($__internal_54236f822c1ef2323509571c3762cf03062d6f90873308a541dda0ea817545f8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 23,  112 => 22,  95 => 6,  77 => 5,  65 => 24,  62 => 23,  60 => 22,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\"
              integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
                integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/app/Resources/views/base.html.twig");
    }
}
