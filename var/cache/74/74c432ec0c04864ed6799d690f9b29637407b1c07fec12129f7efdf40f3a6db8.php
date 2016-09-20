<?php

/* profile.html.twig */
class __TwigTemplate_26b75e2943a3f77cb0f52dbf959061192388c0247ee8778ceb4f537df4e854ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "profile.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"perfil\">
    <div class=\"module-content\">
        <div class=\"header\">
            <h2>";
        // line 6
        echo gettext("Perfil");
        echo "</h2>
            <p>";
        // line 7
        echo gettext("Visualize e atualize o seu perfil");
        echo "</p>
        </div>
        <form method=\"post\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/profile\">
            ";
        // line 10
        if ((isset($context["salvo"]) ? $context["salvo"] : null)) {
            // line 11
            echo "            <div class=\"alert alert-success\">
                ";
            // line 12
            echo gettext("Perfil atualizado com sucesso");
            // line 13
            echo "            </div>
            ";
        }
        // line 15
        echo "            <div class=\"form-group\">
                <label for=\"login\">";
        // line 16
        echo gettext("Login");
        echo "</label>
                <input id=\"login\" type=\"text\" class=\"w150 form-control\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "login", array()), "html", null, true);
        echo "\" disabled=\"true\" />
            </div>
            <div class=\"form-group\">
                <label for=\"nome\">";
        // line 20
        echo gettext("Nome");
        echo "</label>
                <input id=\"nome\" type=\"text\" name=\"nome\" class=\"w150 form-control\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nome", array()), "html", null, true);
        echo "\" />
            </div>
            <div class=\"form-group\">
                <label for=\"sobrenome\">";
        // line 24
        echo gettext("Sobrenome");
        echo "</label>
                <input id=\"sobrenome\" type=\"text\" name=\"sobrenome\" class=\"w300 form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "sobrenome", array()), "html", null, true);
        echo "\" />
            </div>
            ";
        // line 27
        if ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "senha", array())) {
            // line 28
            echo "            <div class=\"form-group\">
                <a href=\"#dialog-senha\"
                   class=\"btn btn-default\"
                   data-toggle=\"modal\">
                    <span class=\"glyphicon glyphicon-exclamation-sign\"></span> 
                    ";
            // line 33
            echo gettext("Alterar senha");
            // line 34
            echo "                </a>
            </div>
            ";
        }
        // line 37
        echo "            <div class=\"buttons\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    ";
        // line 39
        echo gettext("Salvar");
        // line 40
        echo "                </button>
            </div>
        </form>
    </div>
</div>

<div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 51
        echo gettext("Alterar senha");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <div id=\"dialog-message\" class=\"alert\" style=\"display:none\">
                </div>
                <div class=\"form-group required\">
                    <label for=\"senha_atual\" class=\"w150\">";
        // line 57
        echo gettext("Senha atual");
        echo "</label>
                    <input id=\"senha_atual\" type=\"password\" class=\"form-control\" />
                </div>
                <div class=\"form-group required\">
                    <label for=\"senha_nova\" class=\"w150\">";
        // line 61
        echo gettext("Nova senha");
        echo "</label>
                    <input id=\"senha_nova\" type=\"password\" class=\"form-control\" />
                </div>
                <div class=\"form-group required\">
                    <label for=\"senha_confirmacao\" class=\"w150\">";
        // line 65
        echo gettext("Confirmar nova senha");
        echo "</label>
                    <input id=\"senha_confirmacao\" type=\"password\" class=\"form-control\" />
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 70
        echo gettext("Fechar");
        echo "</button>
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"SGA.Perfil.alterarSenha()\">";
        // line 71
        echo gettext("Alterar");
        echo "</button>
            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
    SGA.Perfil.labelSenhaAlterada = \"";
        // line 78
        echo gettext("Senha alterada com sucesso");
        echo "\";
</script>
";
    }

    public function getTemplateName()
    {
        return "profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 78,  162 => 71,  158 => 70,  150 => 65,  143 => 61,  136 => 57,  127 => 51,  114 => 40,  112 => 39,  108 => 37,  103 => 34,  101 => 33,  94 => 28,  92 => 27,  87 => 25,  83 => 24,  77 => 21,  73 => 20,  67 => 17,  63 => 16,  60 => 15,  56 => 13,  54 => 12,  51 => 11,  49 => 10,  45 => 9,  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "main.html.twig" %}*/
/* {% block content %}*/
/* <div id="perfil">*/
/*     <div class="module-content">*/
/*         <div class="header">*/
/*             <h2>{% trans %}Perfil{% endtrans %}</h2>*/
/*             <p>{% trans %}Visualize e atualize o seu perfil{% endtrans %}</p>*/
/*         </div>*/
/*         <form method="post" action="{{ baseUrl() }}/profile">*/
/*             {% if salvo %}*/
/*             <div class="alert alert-success">*/
/*                 {% trans %}Perfil atualizado com sucesso{% endtrans %}*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="form-group">*/
/*                 <label for="login">{% trans %}Login{% endtrans %}</label>*/
/*                 <input id="login" type="text" class="w150 form-control" value="{{ usuario.login }}" disabled="true" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="nome">{% trans %}Nome{% endtrans %}</label>*/
/*                 <input id="nome" type="text" name="nome" class="w150 form-control" value="{{ usuario.nome }}" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="sobrenome">{% trans %}Sobrenome{% endtrans %}</label>*/
/*                 <input id="sobrenome" type="text" name="sobrenome" class="w300 form-control" value="{{ usuario.sobrenome }}" />*/
/*             </div>*/
/*             {% if usuario.senha %}*/
/*             <div class="form-group">*/
/*                 <a href="#dialog-senha"*/
/*                    class="btn btn-default"*/
/*                    data-toggle="modal">*/
/*                     <span class="glyphicon glyphicon-exclamation-sign"></span> */
/*                     {% trans %}Alterar senha{% endtrans %}*/
/*                 </a>*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="buttons">*/
/*                 <button type="submit" class="btn btn-primary">*/
/*                     {% trans %}Salvar{% endtrans %}*/
/*                 </button>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* */
/* <div id="dialog-senha" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                 <h4 class="modal-title">{% trans %}Alterar senha{% endtrans %}</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*                 <div id="dialog-message" class="alert" style="display:none">*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                     <label for="senha_atual" class="w150">{% trans %}Senha atual{% endtrans %}</label>*/
/*                     <input id="senha_atual" type="password" class="form-control" />*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                     <label for="senha_nova" class="w150">{% trans %}Nova senha{% endtrans %}</label>*/
/*                     <input id="senha_nova" type="password" class="form-control" />*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                     <label for="senha_confirmacao" class="w150">{% trans %}Confirmar nova senha{% endtrans %}</label>*/
/*                     <input id="senha_confirmacao" type="password" class="form-control" />*/
/*                 </div>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-default" data-dismiss="modal">{% trans %}Fechar{% endtrans %}</button>*/
/*                 <button type="button" class="btn btn-primary" onclick="SGA.Perfil.alterarSenha()">{% trans %}Alterar{% endtrans %}</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*     SGA.Perfil.labelSenhaAlterada = "{% trans %}Senha alterada com sucesso{% endtrans %}";*/
/* </script>*/
/* {% endblock %}*/
