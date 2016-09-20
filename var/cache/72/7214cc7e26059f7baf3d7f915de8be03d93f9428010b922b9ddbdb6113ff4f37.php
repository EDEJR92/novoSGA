<?php

/* login.html.twig */
class __TwigTemplate_7677c92d8e5c56a1e6d0702f465a0d729381b5d81edc0836ee93dddc6e1c7e20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\" />
        <title>Login | Novo SGA</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/images/favicon.png\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/bootstrap.min.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/login.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
        <!--[if lt IE 9]>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/html5shiv.js\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        <div class=\"container\">
            <form id=\"login-form\" action=\"login\" method=\"post\" class=\"form-signin\">
                <h2 id=\"logo\" class=\"form-signin-heading\">Novo SGA</h2>
                ";
        // line 18
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array(), "array")) {
            // line 19
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array(), "array"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 23
        echo "                <div id=\"login\">
                    <input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"";
        // line 24
        echo gettext("Nome Usuário");
        echo "\" autofocus>
                    <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"";
        // line 25
        echo gettext("Senha");
        echo "\">
                    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">";
        // line 26
        echo gettext("Entrar");
        echo "</button>
                </div>
            </form>
        </div>
        <script type=\"text/javascript\" src=\"js/jquery.js\"></script>
        <script type=\"text/javascript\" src=\"js/script.js\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#login').focus();
            });
        </script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  78 => 25,  74 => 24,  71 => 23,  65 => 20,  62 => 19,  60 => 18,  50 => 11,  46 => 10,  39 => 8,  33 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ lang }}">*/
/*     <head>*/
/*         <meta charset="utf-8" />*/
/*         <title>Login | Novo SGA</title>*/
/*         <link rel="shortcut icon" href="{{ baseUrl() }}/images/favicon.png" />*/
/*         <link rel="stylesheet" type="text/css" href="{{ baseUrl() }}/css/bootstrap.min.css?v={{ version }}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{ baseUrl() }}/css/login.css?v={{ version }}" />*/
/*         <!--[if lt IE 9]>*/
/*         <script src="{{ baseUrl() }}/js/html5shiv.js"></script>*/
/*         <script src="{{ baseUrl() }}/js/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/*             <form id="login-form" action="login" method="post" class="form-signin">*/
/*                 <h2 id="logo" class="form-signin-heading">Novo SGA</h2>*/
/*                 {% if flash['error'] %}*/
/*                     <div class="alert alert-danger">*/
/*                         {{ flash['error'] }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 <div id="login">*/
/*                     <input type="text" name="username" class="form-control" placeholder="{% trans %}Nome Usuário{% endtrans %}" autofocus>*/
/*                     <input type="password" name="password" class="form-control" placeholder="{% trans %}Senha{% endtrans %}">*/
/*                     <button class="btn btn-lg btn-primary btn-block" type="submit">{% trans %}Entrar{% endtrans %}</button>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*         <script type="text/javascript" src="js/jquery.js"></script>*/
/*         <script type="text/javascript" src="js/script.js"></script>*/
/*         <script type="text/javascript">*/
/*             $(document).ready(function() {*/
/*                 $('#login').focus();*/
/*             });*/
/*         </script>*/
/*     </body>*/
/* </html>*/
