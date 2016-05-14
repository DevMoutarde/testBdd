<?php

/* ADMCCoreBundle:Base:index.html.twig */
class __TwigTemplate_5c326ce1e56a8ecddced4de6746ca6d18bae68ef2470119ecbaa869989d5493e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("ADMCCoreBundle::layout.html.twig", "ADMCCoreBundle:Base:index.html.twig", 5);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ADMCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da8ea20f9182f6770e2fe7b68b786805636e7453a86be2732cedd442136e7311 = $this->env->getExtension("native_profiler");
        $__internal_da8ea20f9182f6770e2fe7b68b786805636e7453a86be2732cedd442136e7311->enter($__internal_da8ea20f9182f6770e2fe7b68b786805636e7453a86be2732cedd442136e7311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ADMCCoreBundle:Base:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da8ea20f9182f6770e2fe7b68b786805636e7453a86be2732cedd442136e7311->leave($__internal_da8ea20f9182f6770e2fe7b68b786805636e7453a86be2732cedd442136e7311_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_25c0d8da089fefae98333f16fd92f0875f0cb8d47105e7989d8a6b256fa1c2db = $this->env->getExtension("native_profiler");
        $__internal_25c0d8da089fefae98333f16fd92f0875f0cb8d47105e7989d8a6b256fa1c2db->enter($__internal_25c0d8da089fefae98333f16fd92f0875f0cb8d47105e7989d8a6b256fa1c2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    ";
        // line 10
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h2>Page d'accueil</h2>
    
    <a  href=\"  ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "  \" >Ajout d'un élément</a>
    
    
    <h3> Liste des baltringues</h3>
    <ul>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "        
        <li> <a href=\"  ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admc_core_view", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"   > ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo " </a> </li>
        
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "        rien à afficher
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>
    
";
        
        $__internal_25c0d8da089fefae98333f16fd92f0875f0cb8d47105e7989d8a6b256fa1c2db->leave($__internal_25c0d8da089fefae98333f16fd92f0875f0cb8d47105e7989d8a6b256fa1c2db_prof);

    }

    public function getTemplateName()
    {
        return "ADMCCoreBundle:Base:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 25,  75 => 23,  65 => 20,  62 => 19,  57 => 18,  49 => 13,  43 => 10,  40 => 9,  34 => 8,  11 => 5,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* */
/* {% extends 'ADMCCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*     */
/*     {{ parent() }}*/
/*     <h2>Page d'accueil</h2>*/
/*     */
/*     <a  href="  {{ url }}  " >Ajout d'un élément</a>*/
/*     */
/*     */
/*     <h3> Liste des baltringues</h3>*/
/*     <ul>*/
/*     {% for user in users %}*/
/*         */
/*         <li> <a href="  {{ path('admc_core_view', {'id': user.id}) }}"   > {{ user.nom }} </a> </li>*/
/*         */
/*     {% else %}*/
/*         rien à afficher*/
/*     {% endfor %}*/
/*     </ul>*/
/*     */
/* {% endblock %}*/
