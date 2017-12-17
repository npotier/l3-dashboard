<?php

/* projet/index.html.twig */
class __TwigTemplate_0c911736fc962c70597ea878b6ca7189509f608b89a17559de57e4b9001b550d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projet/index.html.twig", 1);
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
        $__internal_67b35235d8b0e94ad3e978b2a9f9c1d5cd94366e0676746c54aa4db726e57d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b35235d8b0e94ad3e978b2a9f9c1d5cd94366e0676746c54aa4db726e57d45->enter($__internal_67b35235d8b0e94ad3e978b2a9f9c1d5cd94366e0676746c54aa4db726e57d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $__internal_1aa1c5eaac85cd65557b999c8264051821a98c50e24aaab1aa843665340baf95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa1c5eaac85cd65557b999c8264051821a98c50e24aaab1aa843665340baf95->enter($__internal_1aa1c5eaac85cd65557b999c8264051821a98c50e24aaab1aa843665340baf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67b35235d8b0e94ad3e978b2a9f9c1d5cd94366e0676746c54aa4db726e57d45->leave($__internal_67b35235d8b0e94ad3e978b2a9f9c1d5cd94366e0676746c54aa4db726e57d45_prof);

        
        $__internal_1aa1c5eaac85cd65557b999c8264051821a98c50e24aaab1aa843665340baf95->leave($__internal_1aa1c5eaac85cd65557b999c8264051821a98c50e24aaab1aa843665340baf95_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3152b901054f4c8038c7d999f9b3fcfaa8cf84b7eebd0191d099c156a2120d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3152b901054f4c8038c7d999f9b3fcfaa8cf84b7eebd0191d099c156a2120d5e->enter($__internal_3152b901054f4c8038c7d999f9b3fcfaa8cf84b7eebd0191d099c156a2120d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3640de0205c2a4a916134726523d6f860439fdf80223377c0584ad38844fccd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3640de0205c2a4a916134726523d6f860439fdf80223377c0584ad38844fccd0->enter($__internal_3640de0205c2a4a916134726523d6f860439fdf80223377c0584ad38844fccd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Projets list</h1>

    <table>
        <thead>
            <tr>
                <th>Projectname</th>
                <th>Datebegin</th>
                <th>Dateend</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "projectName", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["projet"], "dateBegin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateBegin", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["projet"], "dateEnd", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateEnd", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_edit", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_new");
        echo "\">Create a new projet</a>
        </li>
    </ul>
";
        
        $__internal_3640de0205c2a4a916134726523d6f860439fdf80223377c0584ad38844fccd0->leave($__internal_3640de0205c2a4a916134726523d6f860439fdf80223377c0584ad38844fccd0_prof);

        
        $__internal_3152b901054f4c8038c7d999f9b3fcfaa8cf84b7eebd0191d099c156a2120d5e->leave($__internal_3152b901054f4c8038c7d999f9b3fcfaa8cf84b7eebd0191d099c156a2120d5e_prof);

    }

    public function getTemplateName()
    {
        return "projet/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  114 => 35,  102 => 29,  96 => 26,  89 => 22,  83 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Projets list</h1>

    <table>
        <thead>
            <tr>
                <th>Projectname</th>
                <th>Datebegin</th>
                <th>Dateend</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for projet in projets %}
            <tr>
                <td><a href=\"{{ path('projet_show', { 'id': projet.id }) }}\">{{ projet.projectName }}</a></td>
                <td>{% if projet.dateBegin %}{{ projet.dateBegin|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if projet.dateEnd %}{{ projet.dateEnd|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ projet.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('projet_show', { 'id': projet.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('projet_edit', { 'id': projet.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('projet_new') }}\">Create a new projet</a>
        </li>
    </ul>
{% endblock %}
", "projet/index.html.twig", "/var/www/html/Symfony/app/Resources/views/projet/index.html.twig");
    }
}
