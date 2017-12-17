<?php

/* CamilleAppBundle:Default:index.html.twig */
class __TwigTemplate_744c469f02be28aef723edc92925f108c8c046828cf51fd03a4fb3a32054379d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_126e34c82e93fda5f2ad74d1e2f7976b0ced8fb999c8cb6815feaa722d9f7f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126e34c82e93fda5f2ad74d1e2f7976b0ced8fb999c8cb6815feaa722d9f7f17->enter($__internal_126e34c82e93fda5f2ad74d1e2f7976b0ced8fb999c8cb6815feaa722d9f7f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CamilleAppBundle:Default:index.html.twig"));

        $__internal_c294a553fc7e88ac54b32b086e512cd47cdfedaf2569bac6b15e51583b34f689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c294a553fc7e88ac54b32b086e512cd47cdfedaf2569bac6b15e51583b34f689->enter($__internal_c294a553fc7e88ac54b32b086e512cd47cdfedaf2569bac6b15e51583b34f689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CamilleAppBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_126e34c82e93fda5f2ad74d1e2f7976b0ced8fb999c8cb6815feaa722d9f7f17->leave($__internal_126e34c82e93fda5f2ad74d1e2f7976b0ced8fb999c8cb6815feaa722d9f7f17_prof);

        
        $__internal_c294a553fc7e88ac54b32b086e512cd47cdfedaf2569bac6b15e51583b34f689->leave($__internal_c294a553fc7e88ac54b32b086e512cd47cdfedaf2569bac6b15e51583b34f689_prof);

    }

    public function getTemplateName()
    {
        return "CamilleAppBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "CamilleAppBundle:Default:index.html.twig", "/var/www/html/Symfony/src/Camille/AppBundle/Resources/views/Default/index.html.twig");
    }
}
