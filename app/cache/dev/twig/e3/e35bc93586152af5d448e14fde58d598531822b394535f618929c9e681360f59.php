<?php

/* ADMCCoreBundle::layout.html.twig */
class __TwigTemplate_cc7b23f58620534a8a8af3947bfe8e0f3e90e009c8283ce054783bc57b950ff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c45b7fcf9d72e25e8d6af9f8504be208f5bf5610589fe7276a0a4f7482e1465 = $this->env->getExtension("native_profiler");
        $__internal_6c45b7fcf9d72e25e8d6af9f8504be208f5bf5610589fe7276a0a4f7482e1465->enter($__internal_6c45b7fcf9d72e25e8d6af9f8504be208f5bf5610589fe7276a0a4f7482e1465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ADMCCoreBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>

<head>
    
    <meta charset =\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    ";
        // line 10
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 14
        echo "    
    <title>ADMC</title>
    
</head>


<body>
    
    ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "    
    
</body>
";
        
        $__internal_6c45b7fcf9d72e25e8d6af9f8504be208f5bf5610589fe7276a0a4f7482e1465->leave($__internal_6c45b7fcf9d72e25e8d6af9f8504be208f5bf5610589fe7276a0a4f7482e1465_prof);

    }

    // line 10
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_871d6c1eecc712a422770ffabf8cb5583ba7df769efe75d00f50ad773d04008a = $this->env->getExtension("native_profiler");
        $__internal_871d6c1eecc712a422770ffabf8cb5583ba7df769efe75d00f50ad773d04008a->enter($__internal_871d6c1eecc712a422770ffabf8cb5583ba7df769efe75d00f50ad773d04008a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 11
        echo "        
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
    ";
        
        $__internal_871d6c1eecc712a422770ffabf8cb5583ba7df769efe75d00f50ad773d04008a->leave($__internal_871d6c1eecc712a422770ffabf8cb5583ba7df769efe75d00f50ad773d04008a_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_11a53669e858794a77ba6b2828d650be9bb9314155a5ad4c87e35aab2f006516 = $this->env->getExtension("native_profiler");
        $__internal_11a53669e858794a77ba6b2828d650be9bb9314155a5ad4c87e35aab2f006516->enter($__internal_11a53669e858794a77ba6b2828d650be9bb9314155a5ad4c87e35aab2f006516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "        <h1>Page principale</h1>
        
        
    ";
        
        $__internal_11a53669e858794a77ba6b2828d650be9bb9314155a5ad4c87e35aab2f006516->leave($__internal_11a53669e858794a77ba6b2828d650be9bb9314155a5ad4c87e35aab2f006516_prof);

    }

    public function getTemplateName()
    {
        return "ADMCCoreBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  73 => 22,  64 => 11,  58 => 10,  48 => 27,  46 => 22,  36 => 14,  34 => 10,  24 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* <!DOCTYPE html>*/
/* */
/* <head>*/
/*     */
/*     <meta charset ="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     */
/*     {% block stylesheet %}*/
/*         */
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*     {% endblock %}*/
/*     */
/*     <title>ADMC</title>*/
/*     */
/* </head>*/
/* */
/* */
/* <body>*/
/*     */
/*     {% block body %}*/
/*         <h1>Page principale</h1>*/
/*         */
/*         */
/*     {% endblock %}*/
/*     */
/*     */
/* </body>*/
/* */
