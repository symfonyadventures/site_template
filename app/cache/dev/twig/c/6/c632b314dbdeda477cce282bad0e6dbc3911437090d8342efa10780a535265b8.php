<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d84a050697cf45b859635910eb2ed163fd312e46511e0614770e924f0a73b7ed extends Twig_Template
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
        $__internal_3dd56723d533a6d3ce295d12aa4bcd6d22c4cade493347b43df4be291d104db3 = $this->env->getExtension("native_profiler");
        $__internal_3dd56723d533a6d3ce295d12aa4bcd6d22c4cade493347b43df4be291d104db3->enter($__internal_3dd56723d533a6d3ce295d12aa4bcd6d22c4cade493347b43df4be291d104db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dd56723d533a6d3ce295d12aa4bcd6d22c4cade493347b43df4be291d104db3->leave($__internal_3dd56723d533a6d3ce295d12aa4bcd6d22c4cade493347b43df4be291d104db3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3729e3ff8717cd009e368b7c34dc66848557feefca5ad79696a359b4a1fc0093 = $this->env->getExtension("native_profiler");
        $__internal_3729e3ff8717cd009e368b7c34dc66848557feefca5ad79696a359b4a1fc0093->enter($__internal_3729e3ff8717cd009e368b7c34dc66848557feefca5ad79696a359b4a1fc0093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3729e3ff8717cd009e368b7c34dc66848557feefca5ad79696a359b4a1fc0093->leave($__internal_3729e3ff8717cd009e368b7c34dc66848557feefca5ad79696a359b4a1fc0093_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e57ea3a53fcd81d0d9d55e536a2c25a568cad6fca97d0c2a30b1d6ee77960ec4 = $this->env->getExtension("native_profiler");
        $__internal_e57ea3a53fcd81d0d9d55e536a2c25a568cad6fca97d0c2a30b1d6ee77960ec4->enter($__internal_e57ea3a53fcd81d0d9d55e536a2c25a568cad6fca97d0c2a30b1d6ee77960ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e57ea3a53fcd81d0d9d55e536a2c25a568cad6fca97d0c2a30b1d6ee77960ec4->leave($__internal_e57ea3a53fcd81d0d9d55e536a2c25a568cad6fca97d0c2a30b1d6ee77960ec4_prof);

    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09a51b607e8107f78e41f529d2758f085fb3b8e45d93c77f97cbeca7824ce36a = $this->env->getExtension("native_profiler");
        $__internal_09a51b607e8107f78e41f529d2758f085fb3b8e45d93c77f97cbeca7824ce36a->enter($__internal_09a51b607e8107f78e41f529d2758f085fb3b8e45d93c77f97cbeca7824ce36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09a51b607e8107f78e41f529d2758f085fb3b8e45d93c77f97cbeca7824ce36a->leave($__internal_09a51b607e8107f78e41f529d2758f085fb3b8e45d93c77f97cbeca7824ce36a_prof);

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
        return array (  70 => 14,  64 => 13,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve"><g><path fill="#3F3F3F" d="M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z"/><path fill="#3F3F3F" d="M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z"/><path fill="#3F3F3F" d="M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z"/><path fill="#3F3F3F" d="M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z"/></g></svg></span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', {'token': token})) }}*/
/* {% endblock %}*/
/* */
