<?php

/* base.html.twig */
class __TwigTemplate_168373775b7e98459a42141fd891efc60f474d7d95f56672954e55245650c7c8 extends Twig_Template
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
        $__internal_360f0f5c1846cde088cbc81323e08c779ba9236f58a612d6981d8cc65c563ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360f0f5c1846cde088cbc81323e08c779ba9236f58a612d6981d8cc65c563ad2->enter($__internal_360f0f5c1846cde088cbc81323e08c779ba9236f58a612d6981d8cc65c563ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_15178e3945617cabeb6f3be6ae0ea3be16b81f985560963b6db825ac2521d501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15178e3945617cabeb6f3be6ae0ea3be16b81f985560963b6db825ac2521d501->enter($__internal_15178e3945617cabeb6f3be6ae0ea3be16b81f985560963b6db825ac2521d501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js\">
</script>

</html>
";
        
        $__internal_360f0f5c1846cde088cbc81323e08c779ba9236f58a612d6981d8cc65c563ad2->leave($__internal_360f0f5c1846cde088cbc81323e08c779ba9236f58a612d6981d8cc65c563ad2_prof);

        
        $__internal_15178e3945617cabeb6f3be6ae0ea3be16b81f985560963b6db825ac2521d501->leave($__internal_15178e3945617cabeb6f3be6ae0ea3be16b81f985560963b6db825ac2521d501_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3644f5872c0356372d4bace3a4c6cdbddaac93728c6efbae0aba1af56dbda18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3644f5872c0356372d4bace3a4c6cdbddaac93728c6efbae0aba1af56dbda18->enter($__internal_c3644f5872c0356372d4bace3a4c6cdbddaac93728c6efbae0aba1af56dbda18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2fb8190b42b60f072ecc5a8ea74f11e4980db11d6cf20e99b265e15afd8b8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2fb8190b42b60f072ecc5a8ea74f11e4980db11d6cf20e99b265e15afd8b8de->enter($__internal_f2fb8190b42b60f072ecc5a8ea74f11e4980db11d6cf20e99b265e15afd8b8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f2fb8190b42b60f072ecc5a8ea74f11e4980db11d6cf20e99b265e15afd8b8de->leave($__internal_f2fb8190b42b60f072ecc5a8ea74f11e4980db11d6cf20e99b265e15afd8b8de_prof);

        
        $__internal_c3644f5872c0356372d4bace3a4c6cdbddaac93728c6efbae0aba1af56dbda18->leave($__internal_c3644f5872c0356372d4bace3a4c6cdbddaac93728c6efbae0aba1af56dbda18_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6890370243b3cc099846475c17add8d2e4887608c63b3f7eac02a3e3c4d9183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6890370243b3cc099846475c17add8d2e4887608c63b3f7eac02a3e3c4d9183->enter($__internal_b6890370243b3cc099846475c17add8d2e4887608c63b3f7eac02a3e3c4d9183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cb28c91b273a70bf4f579f13c6260202b756b0fcde5fe7f68bf294abc7f5aaa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb28c91b273a70bf4f579f13c6260202b756b0fcde5fe7f68bf294abc7f5aaa7->enter($__internal_cb28c91b273a70bf4f579f13c6260202b756b0fcde5fe7f68bf294abc7f5aaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cb28c91b273a70bf4f579f13c6260202b756b0fcde5fe7f68bf294abc7f5aaa7->leave($__internal_cb28c91b273a70bf4f579f13c6260202b756b0fcde5fe7f68bf294abc7f5aaa7_prof);

        
        $__internal_b6890370243b3cc099846475c17add8d2e4887608c63b3f7eac02a3e3c4d9183->leave($__internal_b6890370243b3cc099846475c17add8d2e4887608c63b3f7eac02a3e3c4d9183_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_07fb5b7c2db798007e3aeb46a3aa3a4128bc27a86d1dee9c199e477c529e17e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07fb5b7c2db798007e3aeb46a3aa3a4128bc27a86d1dee9c199e477c529e17e9->enter($__internal_07fb5b7c2db798007e3aeb46a3aa3a4128bc27a86d1dee9c199e477c529e17e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b5e38b1f1d7c4786cfe0f9666f02b0df50577b971c25f8c9f8c17cee62ba763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5e38b1f1d7c4786cfe0f9666f02b0df50577b971c25f8c9f8c17cee62ba763->enter($__internal_1b5e38b1f1d7c4786cfe0f9666f02b0df50577b971c25f8c9f8c17cee62ba763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1b5e38b1f1d7c4786cfe0f9666f02b0df50577b971c25f8c9f8c17cee62ba763->leave($__internal_1b5e38b1f1d7c4786cfe0f9666f02b0df50577b971c25f8c9f8c17cee62ba763_prof);

        
        $__internal_07fb5b7c2db798007e3aeb46a3aa3a4128bc27a86d1dee9c199e477c529e17e9->leave($__internal_07fb5b7c2db798007e3aeb46a3aa3a4128bc27a86d1dee9c199e477c529e17e9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_69e821e6ddcd30bb68bc0d483c004411901df0e1a8e98ee5ee4abd847329d848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e821e6ddcd30bb68bc0d483c004411901df0e1a8e98ee5ee4abd847329d848->enter($__internal_69e821e6ddcd30bb68bc0d483c004411901df0e1a8e98ee5ee4abd847329d848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1b08437c8b9371aa0af4ce3c633ac5e4d12b68be4ff32e8344dc6135aee96575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b08437c8b9371aa0af4ce3c633ac5e4d12b68be4ff32e8344dc6135aee96575->enter($__internal_1b08437c8b9371aa0af4ce3c633ac5e4d12b68be4ff32e8344dc6135aee96575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1b08437c8b9371aa0af4ce3c633ac5e4d12b68be4ff32e8344dc6135aee96575->leave($__internal_1b08437c8b9371aa0af4ce3c633ac5e4d12b68be4ff32e8344dc6135aee96575_prof);

        
        $__internal_69e821e6ddcd30bb68bc0d483c004411901df0e1a8e98ee5ee4abd847329d848->leave($__internal_69e821e6ddcd30bb68bc0d483c004411901df0e1a8e98ee5ee4abd847329d848_prof);

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
        return array (  123 => 11,  106 => 10,  89 => 6,  71 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js\">
</script>

</html>
", "base.html.twig", "/var/www/html/Symfony/app/Resources/views/base.html.twig");
    }
}
