<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6919290e0450806ff6ebe7062141d24181c72f13d6af4b6148d15971460e3001 extends Twig_Template
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
        $__internal_fe7c26dc8199c92d403838cf8b83a96678c77f2e5bc2b613ac852a7b30dc3368 = $this->env->getExtension("native_profiler");
        $__internal_fe7c26dc8199c92d403838cf8b83a96678c77f2e5bc2b613ac852a7b30dc3368->enter($__internal_fe7c26dc8199c92d403838cf8b83a96678c77f2e5bc2b613ac852a7b30dc3368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe7c26dc8199c92d403838cf8b83a96678c77f2e5bc2b613ac852a7b30dc3368->leave($__internal_fe7c26dc8199c92d403838cf8b83a96678c77f2e5bc2b613ac852a7b30dc3368_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d75ce5ec01e70198b35f202fbc8e73b1046d03da319cff2671b5fc0021dcb62 = $this->env->getExtension("native_profiler");
        $__internal_4d75ce5ec01e70198b35f202fbc8e73b1046d03da319cff2671b5fc0021dcb62->enter($__internal_4d75ce5ec01e70198b35f202fbc8e73b1046d03da319cff2671b5fc0021dcb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4d75ce5ec01e70198b35f202fbc8e73b1046d03da319cff2671b5fc0021dcb62->leave($__internal_4d75ce5ec01e70198b35f202fbc8e73b1046d03da319cff2671b5fc0021dcb62_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04e4ed3af86a78ac9fac3b1935bf59d05726eb1af7fec29f9ead35d6ed3d5a27 = $this->env->getExtension("native_profiler");
        $__internal_04e4ed3af86a78ac9fac3b1935bf59d05726eb1af7fec29f9ead35d6ed3d5a27->enter($__internal_04e4ed3af86a78ac9fac3b1935bf59d05726eb1af7fec29f9ead35d6ed3d5a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04e4ed3af86a78ac9fac3b1935bf59d05726eb1af7fec29f9ead35d6ed3d5a27->leave($__internal_04e4ed3af86a78ac9fac3b1935bf59d05726eb1af7fec29f9ead35d6ed3d5a27_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23d533a13763ca08ef102bc0a1a8ab3590154381a2b04220ac2e074b181eb0af = $this->env->getExtension("native_profiler");
        $__internal_23d533a13763ca08ef102bc0a1a8ab3590154381a2b04220ac2e074b181eb0af->enter($__internal_23d533a13763ca08ef102bc0a1a8ab3590154381a2b04220ac2e074b181eb0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_23d533a13763ca08ef102bc0a1a8ab3590154381a2b04220ac2e074b181eb0af->leave($__internal_23d533a13763ca08ef102bc0a1a8ab3590154381a2b04220ac2e074b181eb0af_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
