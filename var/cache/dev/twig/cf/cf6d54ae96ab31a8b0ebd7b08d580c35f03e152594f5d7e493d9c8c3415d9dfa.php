<?php

/* fiche/show.html.twig */
class __TwigTemplate_0d136bb5046a7569907a7aa40f78272e6269a40bef8936822043dd0a56a2dbdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche/show.html.twig", 1);
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
        $__internal_c0f1c51887f4e1e70ed5eef302bbf6d690aa5de5a70b14c4a8a139a487a3519b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f1c51887f4e1e70ed5eef302bbf6d690aa5de5a70b14c4a8a139a487a3519b->enter($__internal_c0f1c51887f4e1e70ed5eef302bbf6d690aa5de5a70b14c4a8a139a487a3519b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/show.html.twig"));

        $__internal_9c8614f76a0cdbae44b333194aae808aa0054113a44f700b8f75cb108d29624c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8614f76a0cdbae44b333194aae808aa0054113a44f700b8f75cb108d29624c->enter($__internal_9c8614f76a0cdbae44b333194aae808aa0054113a44f700b8f75cb108d29624c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0f1c51887f4e1e70ed5eef302bbf6d690aa5de5a70b14c4a8a139a487a3519b->leave($__internal_c0f1c51887f4e1e70ed5eef302bbf6d690aa5de5a70b14c4a8a139a487a3519b_prof);

        
        $__internal_9c8614f76a0cdbae44b333194aae808aa0054113a44f700b8f75cb108d29624c->leave($__internal_9c8614f76a0cdbae44b333194aae808aa0054113a44f700b8f75cb108d29624c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5596388a92a15430ab852cd6db39f8c026d2983e912f6ce6bafa426cb9a35b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5596388a92a15430ab852cd6db39f8c026d2983e912f6ce6bafa426cb9a35b5->enter($__internal_a5596388a92a15430ab852cd6db39f8c026d2983e912f6ce6bafa426cb9a35b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62bf09cbc5f5a3360b9f36f492d5aa845ba56c9434fd02acd435286582059e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62bf09cbc5f5a3360b9f36f492d5aa845ba56c9434fd02acd435286582059e6c->enter($__internal_62bf09cbc5f5a3360b9f36f492d5aa845ba56c9434fd02acd435286582059e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiche</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fiche"] ?? $this->getContext($context, "fiche")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Projet</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fiche"] ?? $this->getContext($context, "fiche")), "projet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["fiche"] ?? $this->getContext($context, "fiche")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["fiche"] ?? $this->getContext($context, "fiche")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Nbjoursfait</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fiche"] ?? $this->getContext($context, "fiche")), "nbjoursFait", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbjoursvendus</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fiche"] ?? $this->getContext($context, "fiche")), "nbjoursVendus", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Avancementprojet</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fiche"] ?? $this->getContext($context, "fiche")), "avancementProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdby</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fiche"] ?? $this->getContext($context, "fiche")), "createdBy", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_edit", array("id" => $this->getAttribute(($context["fiche"] ?? $this->getContext($context, "fiche")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_62bf09cbc5f5a3360b9f36f492d5aa845ba56c9434fd02acd435286582059e6c->leave($__internal_62bf09cbc5f5a3360b9f36f492d5aa845ba56c9434fd02acd435286582059e6c_prof);

        
        $__internal_a5596388a92a15430ab852cd6db39f8c026d2983e912f6ce6bafa426cb9a35b5->leave($__internal_a5596388a92a15430ab852cd6db39f8c026d2983e912f6ce6bafa426cb9a35b5_prof);

    }

    public function getTemplateName()
    {
        return "fiche/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  123 => 47,  117 => 44,  111 => 41,  101 => 34,  94 => 30,  87 => 26,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Fiche</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ fiche.id }}</td>
            </tr>
            <tr>
                <th>Projet</th>
                <td>{{ fiche.projet }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if fiche.date %}{{ fiche.date|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Nbjoursfait</th>
                <td>{{ fiche.nbjoursFait }}</td>
            </tr>
            <tr>
                <th>Nbjoursvendus</th>
                <td>{{ fiche.nbjoursVendus }}</td>
            </tr>
            <tr>
                <th>Avancementprojet</th>
                <td>{{ fiche.avancementProjet }}</td>
            </tr>
            <tr>
                <th>Createdby</th>
                <td>{{ fiche.createdBy }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fiche_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('fiche_edit', { 'id': fiche.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "fiche/show.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/app/Resources/views/fiche/show.html.twig");
    }
}
