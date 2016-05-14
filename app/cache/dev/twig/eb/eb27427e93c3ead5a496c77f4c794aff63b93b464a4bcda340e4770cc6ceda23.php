<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_adb7f87eb83682bc2ac68770a8cef4bce95d2354e00bc9a3604413c5ac14b9af extends Twig_Template
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
        $__internal_4e7d7505cc337bd6b83d98d7c839b83c5d8be6c37022f41cdc21a06e5b905e60 = $this->env->getExtension("native_profiler");
        $__internal_4e7d7505cc337bd6b83d98d7c839b83c5d8be6c37022f41cdc21a06e5b905e60->enter($__internal_4e7d7505cc337bd6b83d98d7c839b83c5d8be6c37022f41cdc21a06e5b905e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e7d7505cc337bd6b83d98d7c839b83c5d8be6c37022f41cdc21a06e5b905e60->leave($__internal_4e7d7505cc337bd6b83d98d7c839b83c5d8be6c37022f41cdc21a06e5b905e60_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8215f2712a7f317cae001f3ac13cde18decdfec969b5b4cfa0948b48e6353344 = $this->env->getExtension("native_profiler");
        $__internal_8215f2712a7f317cae001f3ac13cde18decdfec969b5b4cfa0948b48e6353344->enter($__internal_8215f2712a7f317cae001f3ac13cde18decdfec969b5b4cfa0948b48e6353344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8215f2712a7f317cae001f3ac13cde18decdfec969b5b4cfa0948b48e6353344->leave($__internal_8215f2712a7f317cae001f3ac13cde18decdfec969b5b4cfa0948b48e6353344_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_310e2114dcbb0bc86ca706fb58bec3817688c819d342d67528741699e6fb3c68 = $this->env->getExtension("native_profiler");
        $__internal_310e2114dcbb0bc86ca706fb58bec3817688c819d342d67528741699e6fb3c68->enter($__internal_310e2114dcbb0bc86ca706fb58bec3817688c819d342d67528741699e6fb3c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_310e2114dcbb0bc86ca706fb58bec3817688c819d342d67528741699e6fb3c68->leave($__internal_310e2114dcbb0bc86ca706fb58bec3817688c819d342d67528741699e6fb3c68_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b35bf30bbe2c42f21f6d7c80d5c3a4b28a1f51d29e47334f48ee35ed5911a91 = $this->env->getExtension("native_profiler");
        $__internal_9b35bf30bbe2c42f21f6d7c80d5c3a4b28a1f51d29e47334f48ee35ed5911a91->enter($__internal_9b35bf30bbe2c42f21f6d7c80d5c3a4b28a1f51d29e47334f48ee35ed5911a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9b35bf30bbe2c42f21f6d7c80d5c3a4b28a1f51d29e47334f48ee35ed5911a91->leave($__internal_9b35bf30bbe2c42f21f6d7c80d5c3a4b28a1f51d29e47334f48ee35ed5911a91_prof);

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
