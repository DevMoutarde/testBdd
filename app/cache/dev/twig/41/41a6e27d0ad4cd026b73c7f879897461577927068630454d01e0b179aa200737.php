<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ef91680d2e311fd58065d1b452579c39a02f250bfe47c9bdde1555207a4de641 extends Twig_Template
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
        $__internal_de6b1e9fad83bfe1f716fc188babab5cebd74763461dc6c22828a13862561382 = $this->env->getExtension("native_profiler");
        $__internal_de6b1e9fad83bfe1f716fc188babab5cebd74763461dc6c22828a13862561382->enter($__internal_de6b1e9fad83bfe1f716fc188babab5cebd74763461dc6c22828a13862561382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de6b1e9fad83bfe1f716fc188babab5cebd74763461dc6c22828a13862561382->leave($__internal_de6b1e9fad83bfe1f716fc188babab5cebd74763461dc6c22828a13862561382_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f05e00f79a8c81b2f838157c8938f3ba595de4c655a61a41fbf1723275878d9d = $this->env->getExtension("native_profiler");
        $__internal_f05e00f79a8c81b2f838157c8938f3ba595de4c655a61a41fbf1723275878d9d->enter($__internal_f05e00f79a8c81b2f838157c8938f3ba595de4c655a61a41fbf1723275878d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f05e00f79a8c81b2f838157c8938f3ba595de4c655a61a41fbf1723275878d9d->leave($__internal_f05e00f79a8c81b2f838157c8938f3ba595de4c655a61a41fbf1723275878d9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_53a4d9f3cf7ca8c62baa364604ece784920dd8ea3bf1c32c0f49c4af8987eb57 = $this->env->getExtension("native_profiler");
        $__internal_53a4d9f3cf7ca8c62baa364604ece784920dd8ea3bf1c32c0f49c4af8987eb57->enter($__internal_53a4d9f3cf7ca8c62baa364604ece784920dd8ea3bf1c32c0f49c4af8987eb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_53a4d9f3cf7ca8c62baa364604ece784920dd8ea3bf1c32c0f49c4af8987eb57->leave($__internal_53a4d9f3cf7ca8c62baa364604ece784920dd8ea3bf1c32c0f49c4af8987eb57_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f406c9ffef904387887b89715b8c942330be0da8f2078d518dc0dde221867bd = $this->env->getExtension("native_profiler");
        $__internal_1f406c9ffef904387887b89715b8c942330be0da8f2078d518dc0dde221867bd->enter($__internal_1f406c9ffef904387887b89715b8c942330be0da8f2078d518dc0dde221867bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f406c9ffef904387887b89715b8c942330be0da8f2078d518dc0dde221867bd->leave($__internal_1f406c9ffef904387887b89715b8c942330be0da8f2078d518dc0dde221867bd_prof);

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
