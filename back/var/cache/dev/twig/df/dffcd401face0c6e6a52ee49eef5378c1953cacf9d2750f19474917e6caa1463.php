<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_f1c6fac1401d1a2ef4b0cedae02595baa12b10c512ea5ca37566e1368b943a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb38609fd98e956817bc339e23419b80b2b5b59c607ca206715ce13ae595bdd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb38609fd98e956817bc339e23419b80b2b5b59c607ca206715ce13ae595bdd5->enter($__internal_eb38609fd98e956817bc339e23419b80b2b5b59c607ca206715ce13ae595bdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d84f8fca69aa5ad5b0197df40a11ccda1bf0c991f10a7c22f7d94668bd2713d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84f8fca69aa5ad5b0197df40a11ccda1bf0c991f10a7c22f7d94668bd2713d7->enter($__internal_d84f8fca69aa5ad5b0197df40a11ccda1bf0c991f10a7c22f7d94668bd2713d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_eb38609fd98e956817bc339e23419b80b2b5b59c607ca206715ce13ae595bdd5->leave($__internal_eb38609fd98e956817bc339e23419b80b2b5b59c607ca206715ce13ae595bdd5_prof);

        
        $__internal_d84f8fca69aa5ad5b0197df40a11ccda1bf0c991f10a7c22f7d94668bd2713d7->leave($__internal_d84f8fca69aa5ad5b0197df40a11ccda1bf0c991f10a7c22f7d94668bd2713d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb9d392916ba998d43632f1cac08cc4ece9ac8abf3cb74f6716150e0e0147055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9d392916ba998d43632f1cac08cc4ece9ac8abf3cb74f6716150e0e0147055->enter($__internal_eb9d392916ba998d43632f1cac08cc4ece9ac8abf3cb74f6716150e0e0147055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51251bac5644fad23662abb8af3d81eac5190f33c3088642b492d9e83597ba0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51251bac5644fad23662abb8af3d81eac5190f33c3088642b492d9e83597ba0a->enter($__internal_51251bac5644fad23662abb8af3d81eac5190f33c3088642b492d9e83597ba0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_51251bac5644fad23662abb8af3d81eac5190f33c3088642b492d9e83597ba0a->leave($__internal_51251bac5644fad23662abb8af3d81eac5190f33c3088642b492d9e83597ba0a_prof);

        
        $__internal_eb9d392916ba998d43632f1cac08cc4ece9ac8abf3cb74f6716150e0e0147055->leave($__internal_eb9d392916ba998d43632f1cac08cc4ece9ac8abf3cb74f6716150e0e0147055_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d74f8b329558f26b7fa27d1bfcc5039bde2f6df7a74d03e4fc7651698b4c56b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d74f8b329558f26b7fa27d1bfcc5039bde2f6df7a74d03e4fc7651698b4c56b->enter($__internal_5d74f8b329558f26b7fa27d1bfcc5039bde2f6df7a74d03e4fc7651698b4c56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d10db7367ecb151f2bd9e8b8c3bd1e99565e72956306cb881bedf9fcd49b620b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10db7367ecb151f2bd9e8b8c3bd1e99565e72956306cb881bedf9fcd49b620b->enter($__internal_d10db7367ecb151f2bd9e8b8c3bd1e99565e72956306cb881bedf9fcd49b620b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d10db7367ecb151f2bd9e8b8c3bd1e99565e72956306cb881bedf9fcd49b620b->leave($__internal_d10db7367ecb151f2bd9e8b8c3bd1e99565e72956306cb881bedf9fcd49b620b_prof);

        
        $__internal_5d74f8b329558f26b7fa27d1bfcc5039bde2f6df7a74d03e4fc7651698b4c56b->leave($__internal_5d74f8b329558f26b7fa27d1bfcc5039bde2f6df7a74d03e4fc7651698b4c56b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_195d9ba1516a26ca71c754e56e65791b915b5dd7222b4bdd27e2c0ce5982e54b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195d9ba1516a26ca71c754e56e65791b915b5dd7222b4bdd27e2c0ce5982e54b->enter($__internal_195d9ba1516a26ca71c754e56e65791b915b5dd7222b4bdd27e2c0ce5982e54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e6e39b88a8b1e14a3a50305a335d60b5d9ee6bd22770019271ecb71a88a6245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e6e39b88a8b1e14a3a50305a335d60b5d9ee6bd22770019271ecb71a88a6245->enter($__internal_5e6e39b88a8b1e14a3a50305a335d60b5d9ee6bd22770019271ecb71a88a6245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5e6e39b88a8b1e14a3a50305a335d60b5d9ee6bd22770019271ecb71a88a6245->leave($__internal_5e6e39b88a8b1e14a3a50305a335d60b5d9ee6bd22770019271ecb71a88a6245_prof);

        
        $__internal_195d9ba1516a26ca71c754e56e65791b915b5dd7222b4bdd27e2c0ce5982e54b->leave($__internal_195d9ba1516a26ca71c754e56e65791b915b5dd7222b4bdd27e2c0ce5982e54b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/inavid/Practicas/prueba_clickbus/cashier_test/back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
