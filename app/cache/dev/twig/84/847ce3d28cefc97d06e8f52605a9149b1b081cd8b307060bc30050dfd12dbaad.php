<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4aa3b6495c4ad8f14ef05f703d82f88a36ddbc67b4e8d7067c52582c8a8477e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd280a72fa4501e1005d4ff68a824f48f79934bb76ebe796cba2f7f2f979a332 = $this->env->getExtension("native_profiler");
        $__internal_dd280a72fa4501e1005d4ff68a824f48f79934bb76ebe796cba2f7f2f979a332->enter($__internal_dd280a72fa4501e1005d4ff68a824f48f79934bb76ebe796cba2f7f2f979a332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd280a72fa4501e1005d4ff68a824f48f79934bb76ebe796cba2f7f2f979a332->leave($__internal_dd280a72fa4501e1005d4ff68a824f48f79934bb76ebe796cba2f7f2f979a332_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff55797a81556561bc299396dc71f360d9e8e99ee2e670cbcbdeb1ba143e0e31 = $this->env->getExtension("native_profiler");
        $__internal_ff55797a81556561bc299396dc71f360d9e8e99ee2e670cbcbdeb1ba143e0e31->enter($__internal_ff55797a81556561bc299396dc71f360d9e8e99ee2e670cbcbdeb1ba143e0e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ff55797a81556561bc299396dc71f360d9e8e99ee2e670cbcbdeb1ba143e0e31->leave($__internal_ff55797a81556561bc299396dc71f360d9e8e99ee2e670cbcbdeb1ba143e0e31_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e9139f811e006c28f3a8e5f33ca12e57806fbf95c25e449cf82332cf83247cf = $this->env->getExtension("native_profiler");
        $__internal_0e9139f811e006c28f3a8e5f33ca12e57806fbf95c25e449cf82332cf83247cf->enter($__internal_0e9139f811e006c28f3a8e5f33ca12e57806fbf95c25e449cf82332cf83247cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0e9139f811e006c28f3a8e5f33ca12e57806fbf95c25e449cf82332cf83247cf->leave($__internal_0e9139f811e006c28f3a8e5f33ca12e57806fbf95c25e449cf82332cf83247cf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf4f758d1368e1a21ecc6fdb28d8a1a9784e21d161cc25c6deb54be78a219963 = $this->env->getExtension("native_profiler");
        $__internal_cf4f758d1368e1a21ecc6fdb28d8a1a9784e21d161cc25c6deb54be78a219963->enter($__internal_cf4f758d1368e1a21ecc6fdb28d8a1a9784e21d161cc25c6deb54be78a219963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cf4f758d1368e1a21ecc6fdb28d8a1a9784e21d161cc25c6deb54be78a219963->leave($__internal_cf4f758d1368e1a21ecc6fdb28d8a1a9784e21d161cc25c6deb54be78a219963_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
