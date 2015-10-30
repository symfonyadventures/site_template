<?php

/* base.html.twig */
class __TwigTemplate_16e52c65fceaee1873379a60c327c4680e2bf4668fb9cfdf4eb7a46a9e9b69a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea9b07398c4e5856f58424791d769f7b0afa3b9d558767b7eac19e2b06502716 = $this->env->getExtension("native_profiler");
        $__internal_ea9b07398c4e5856f58424791d769f7b0afa3b9d558767b7eac19e2b06502716->enter($__internal_ea9b07398c4e5856f58424791d769f7b0afa3b9d558767b7eac19e2b06502716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ea9b07398c4e5856f58424791d769f7b0afa3b9d558767b7eac19e2b06502716->leave($__internal_ea9b07398c4e5856f58424791d769f7b0afa3b9d558767b7eac19e2b06502716_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_849c9472ca06bccb7b0f5ae35b3b40560566f492b791b7619839d40cce466d4d = $this->env->getExtension("native_profiler");
        $__internal_849c9472ca06bccb7b0f5ae35b3b40560566f492b791b7619839d40cce466d4d->enter($__internal_849c9472ca06bccb7b0f5ae35b3b40560566f492b791b7619839d40cce466d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_849c9472ca06bccb7b0f5ae35b3b40560566f492b791b7619839d40cce466d4d->leave($__internal_849c9472ca06bccb7b0f5ae35b3b40560566f492b791b7619839d40cce466d4d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7bb841c247adfacde7ffc9a8658ad0424c9f9a904c91f1507812b0b007efe896 = $this->env->getExtension("native_profiler");
        $__internal_7bb841c247adfacde7ffc9a8658ad0424c9f9a904c91f1507812b0b007efe896->enter($__internal_7bb841c247adfacde7ffc9a8658ad0424c9f9a904c91f1507812b0b007efe896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7bb841c247adfacde7ffc9a8658ad0424c9f9a904c91f1507812b0b007efe896->leave($__internal_7bb841c247adfacde7ffc9a8658ad0424c9f9a904c91f1507812b0b007efe896_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cf5103cf05717b14c5a5b3b9303e1fddc2d910e8d1994b69ee699c484585c46 = $this->env->getExtension("native_profiler");
        $__internal_7cf5103cf05717b14c5a5b3b9303e1fddc2d910e8d1994b69ee699c484585c46->enter($__internal_7cf5103cf05717b14c5a5b3b9303e1fddc2d910e8d1994b69ee699c484585c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7cf5103cf05717b14c5a5b3b9303e1fddc2d910e8d1994b69ee699c484585c46->leave($__internal_7cf5103cf05717b14c5a5b3b9303e1fddc2d910e8d1994b69ee699c484585c46_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_297ec62bf0c3db90b103f2e05502d294300e6d6d0a77c93809e027666a2ceae2 = $this->env->getExtension("native_profiler");
        $__internal_297ec62bf0c3db90b103f2e05502d294300e6d6d0a77c93809e027666a2ceae2->enter($__internal_297ec62bf0c3db90b103f2e05502d294300e6d6d0a77c93809e027666a2ceae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_297ec62bf0c3db90b103f2e05502d294300e6d6d0a77c93809e027666a2ceae2->leave($__internal_297ec62bf0c3db90b103f2e05502d294300e6d6d0a77c93809e027666a2ceae2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
