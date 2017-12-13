<?php

/* fiche/index.html.twig */
class __TwigTemplate_7f1b6e7251976bcd4334265bff808b88f780f783ba1fc4f8d87ce0ec90deb8f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche/index.html.twig", 1);
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
        $__internal_f8627fd5c96e1005b2b06ff4588e25e0f97bc3eac47479b972e5a09cb22e0bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8627fd5c96e1005b2b06ff4588e25e0f97bc3eac47479b972e5a09cb22e0bee->enter($__internal_f8627fd5c96e1005b2b06ff4588e25e0f97bc3eac47479b972e5a09cb22e0bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index.html.twig"));

        $__internal_e0d0f5534386360e56c0d3ae949c9d462f8d2519bd286867038914b2d5f77662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d0f5534386360e56c0d3ae949c9d462f8d2519bd286867038914b2d5f77662->enter($__internal_e0d0f5534386360e56c0d3ae949c9d462f8d2519bd286867038914b2d5f77662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8627fd5c96e1005b2b06ff4588e25e0f97bc3eac47479b972e5a09cb22e0bee->leave($__internal_f8627fd5c96e1005b2b06ff4588e25e0f97bc3eac47479b972e5a09cb22e0bee_prof);

        
        $__internal_e0d0f5534386360e56c0d3ae949c9d462f8d2519bd286867038914b2d5f77662->leave($__internal_e0d0f5534386360e56c0d3ae949c9d462f8d2519bd286867038914b2d5f77662_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0db113f60412a7b4dd108d541740c1485272f829db47d4bd06e72d0094b00bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0db113f60412a7b4dd108d541740c1485272f829db47d4bd06e72d0094b00bf->enter($__internal_d0db113f60412a7b4dd108d541740c1485272f829db47d4bd06e72d0094b00bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9d7f100f7757ae516f067e54c458723b88bf4cbe0c0af6cb613778c2654c458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d7f100f7757ae516f067e54c458723b88bf4cbe0c0af6cb613778c2654c458->enter($__internal_e9d7f100f7757ae516f067e54c458723b88bf4cbe0c0af6cb613778c2654c458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiches list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Projet</th>
                <th>Date</th>
                <th>Nbjoursfait</th>
                <th>Nbjoursvendus</th>
                <th>Avancementprojet</th>
                <th>Createdby</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fiches"] ?? $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "projet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["fiche"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "nbjoursFait", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "nbjoursVendus", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "avancementProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "createdBy", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_edit", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_new");
        echo "\">Create a new fiche</a>
        </li>
    </ul>
";
        
        $__internal_e9d7f100f7757ae516f067e54c458723b88bf4cbe0c0af6cb613778c2654c458->leave($__internal_e9d7f100f7757ae516f067e54c458723b88bf4cbe0c0af6cb613778c2654c458_prof);

        
        $__internal_d0db113f60412a7b4dd108d541740c1485272f829db47d4bd06e72d0094b00bf->leave($__internal_d0db113f60412a7b4dd108d541740c1485272f829db47d4bd06e72d0094b00bf_prof);

    }

    public function getTemplateName()
    {
        return "fiche/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 46,  127 => 41,  115 => 35,  109 => 32,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  84 => 24,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Fiches list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Projet</th>
                <th>Date</th>
                <th>Nbjoursfait</th>
                <th>Nbjoursvendus</th>
                <th>Avancementprojet</th>
                <th>Createdby</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fiche in fiches %}
            <tr>
                <td><a href=\"{{ path('fiche_show', { 'id': fiche.id }) }}\">{{ fiche.id }}</a></td>
                <td>{{ fiche.projet }}</td>
                <td>{% if fiche.date %}{{ fiche.date|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ fiche.nbjoursFait }}</td>
                <td>{{ fiche.nbjoursVendus }}</td>
                <td>{{ fiche.avancementProjet }}</td>
                <td>{{ fiche.createdBy }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('fiche_show', { 'id': fiche.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('fiche_edit', { 'id': fiche.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fiche_new') }}\">Create a new fiche</a>
        </li>
    </ul>
{% endblock %}
", "fiche/index.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/app/Resources/views/fiche/index.html.twig");
    }
}
