<?php

/* default/dashboard.html.twig */
class __TwigTemplate_2733f4e2f5bac9328827f091f25426c51750abd0e4262ea6d36091549274103c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/dashboard.html.twig", 1);
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
        $__internal_5bc82d4ffdc419bb716342b5f489a3255d06468da961a07d62ebf707a2dac56b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc82d4ffdc419bb716342b5f489a3255d06468da961a07d62ebf707a2dac56b->enter($__internal_5bc82d4ffdc419bb716342b5f489a3255d06468da961a07d62ebf707a2dac56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $__internal_7ab960308470bda0203068f98c6b5502326b3167c715171100414b44b1fd4bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab960308470bda0203068f98c6b5502326b3167c715171100414b44b1fd4bfa->enter($__internal_7ab960308470bda0203068f98c6b5502326b3167c715171100414b44b1fd4bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bc82d4ffdc419bb716342b5f489a3255d06468da961a07d62ebf707a2dac56b->leave($__internal_5bc82d4ffdc419bb716342b5f489a3255d06468da961a07d62ebf707a2dac56b_prof);

        
        $__internal_7ab960308470bda0203068f98c6b5502326b3167c715171100414b44b1fd4bfa->leave($__internal_7ab960308470bda0203068f98c6b5502326b3167c715171100414b44b1fd4bfa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_840024a0be23b4ef7282575319fbe4f5a05e411890f64c8534a1d1cf94ef2e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_840024a0be23b4ef7282575319fbe4f5a05e411890f64c8534a1d1cf94ef2e72->enter($__internal_840024a0be23b4ef7282575319fbe4f5a05e411890f64c8534a1d1cf94ef2e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00f7da08d646f8cc5312e255a0da373922584e1f98fdcec818a258da6e0a8fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f7da08d646f8cc5312e255a0da373922584e1f98fdcec818a258da6e0a8fc3->enter($__internal_00f7da08d646f8cc5312e255a0da373922584e1f98fdcec818a258da6e0a8fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Projets list</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Projectname</th>
                <th>Datebegin</th>
                <th>Dateend</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projets"] ?? $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "projectName", array()), "html", null, true);
            echo "</td>
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
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 28
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
        // line 34
        echo "        </tbody>
    </table>


    <h1>Managers list</h1>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Title</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["managers"] ?? $this->getContext($context, "managers")));
        foreach ($context['_seq'] as $context["_key"] => $context["manager"]) {
            // line 51
            echo "            <tr>
                <td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manager_show", array("id" => $this->getAttribute($context["manager"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["manager"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["manager"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["manager"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["manager"], "title", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manager_show", array("id" => $this->getAttribute($context["manager"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manager_edit", array("id" => $this->getAttribute($context["manager"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manager'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </tbody>
    </table>


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
        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fiches"] ?? $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 88
            echo "            <tr>
                <td><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "projet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 91
            if ($this->getAttribute($context["fiche"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "nbjoursFait", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "nbjoursVendus", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "avancementProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "createdBy", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 102
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
        // line 108
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_new");
        echo "\">Create a new projet</a>
        </li>
        <li>
            <a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_new");
        echo "\">Create a new fiche</a>
        </li>
        <li>
            <a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manager_new");
        echo "\">Create a new manager</a>
        </li>
    </ul>

    <a href=\"/logout\" class=\"btn\">disconnect</a>
";
        
        $__internal_00f7da08d646f8cc5312e255a0da373922584e1f98fdcec818a258da6e0a8fc3->leave($__internal_00f7da08d646f8cc5312e255a0da373922584e1f98fdcec818a258da6e0a8fc3_prof);

        
        $__internal_840024a0be23b4ef7282575319fbe4f5a05e411890f64c8534a1d1cf94ef2e72->leave($__internal_840024a0be23b4ef7282575319fbe4f5a05e411890f64c8534a1d1cf94ef2e72_prof);

    }

    public function getTemplateName()
    {
        return "default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 119,  271 => 116,  265 => 113,  258 => 108,  246 => 102,  240 => 99,  233 => 95,  229 => 94,  225 => 93,  221 => 92,  215 => 91,  211 => 90,  205 => 89,  202 => 88,  198 => 87,  177 => 68,  165 => 62,  159 => 59,  152 => 55,  148 => 54,  144 => 53,  138 => 52,  135 => 51,  131 => 50,  113 => 34,  101 => 28,  95 => 25,  86 => 21,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
                <th>Id</th>
                <th>Projectname</th>
                <th>Datebegin</th>
                <th>Dateend</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for projet in projets %}
            <tr>
                <td><a href=\"{{ path('projet_show', { 'id': projet.id }) }}\">{{ projet.id }}</a></td>
                <td>{{ projet.projectName }}</td>
                <td>{% if projet.dateBegin %}{{ projet.dateBegin|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if projet.dateEnd %}{{ projet.dateEnd|date('Y-m-d H:i:s') }}{% endif %}</td>
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


    <h1>Managers list</h1>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Title</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for manager in managers %}
            <tr>
                <td><a href=\"{{ path('manager_show', { 'id': manager.id }) }}\">{{ manager.id }}</a></td>
                <td>{{ manager.firstName }}</td>
                <td>{{ manager.lastName }}</td>
                <td>{{ manager.title }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('manager_show', { 'id': manager.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('manager_edit', { 'id': manager.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


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
            <a href=\"{{ path('projet_new') }}\">Create a new projet</a>
        </li>
        <li>
            <a href=\"{{ path('fiche_new') }}\">Create a new fiche</a>
        </li>
        <li>
            <a href=\"{{ path('manager_new') }}\">Create a new manager</a>
        </li>
    </ul>

    <a href=\"/logout\" class=\"btn\">disconnect</a>
{% endblock %}", "default/dashboard.html.twig", "/mnt/Data1/SiteWeb/symfony/prj1/app/Resources/views/default/dashboard.html.twig");
    }
}
