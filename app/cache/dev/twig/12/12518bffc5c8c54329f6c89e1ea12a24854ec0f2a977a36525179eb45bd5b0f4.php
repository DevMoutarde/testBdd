<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9c992c1fe7f516459672303397c492aea6bb815f58c9413e2c5c15ec07d0029a extends Twig_Template
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
        $__internal_1c496aa69b61aa79edacc3fd4238dd5952d53f8dbea08ba6197e19451389862d = $this->env->getExtension("native_profiler");
        $__internal_1c496aa69b61aa79edacc3fd4238dd5952d53f8dbea08ba6197e19451389862d->enter($__internal_1c496aa69b61aa79edacc3fd4238dd5952d53f8dbea08ba6197e19451389862d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c496aa69b61aa79edacc3fd4238dd5952d53f8dbea08ba6197e19451389862d->leave($__internal_1c496aa69b61aa79edacc3fd4238dd5952d53f8dbea08ba6197e19451389862d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a395938365df7a564d7aec64c8241305e8da9cae795177d60ff442ce654d0e5 = $this->env->getExtension("native_profiler");
        $__internal_6a395938365df7a564d7aec64c8241305e8da9cae795177d60ff442ce654d0e5->enter($__internal_6a395938365df7a564d7aec64c8241305e8da9cae795177d60ff442ce654d0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6a395938365df7a564d7aec64c8241305e8da9cae795177d60ff442ce654d0e5->leave($__internal_6a395938365df7a564d7aec64c8241305e8da9cae795177d60ff442ce654d0e5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2d67d2da257ee79dd814e629d84f0df44f66987ea8e5e7b561496371ada8dca = $this->env->getExtension("native_profiler");
        $__internal_e2d67d2da257ee79dd814e629d84f0df44f66987ea8e5e7b561496371ada8dca->enter($__internal_e2d67d2da257ee79dd814e629d84f0df44f66987ea8e5e7b561496371ada8dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e2d67d2da257ee79dd814e629d84f0df44f66987ea8e5e7b561496371ada8dca->leave($__internal_e2d67d2da257ee79dd814e629d84f0df44f66987ea8e5e7b561496371ada8dca_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0fb7f0e00f4f377d6f94f374be72393c33f1c67bd982019d9872132ae6f9f85 = $this->env->getExtension("native_profiler");
        $__internal_d0fb7f0e00f4f377d6f94f374be72393c33f1c67bd982019d9872132ae6f9f85->enter($__internal_d0fb7f0e00f4f377d6f94f374be72393c33f1c67bd982019d9872132ae6f9f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d0fb7f0e00f4f377d6f94f374be72393c33f1c67bd982019d9872132ae6f9f85->leave($__internal_d0fb7f0e00f4f377d6f94f374be72393c33f1c67bd982019d9872132ae6f9f85_prof);

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
