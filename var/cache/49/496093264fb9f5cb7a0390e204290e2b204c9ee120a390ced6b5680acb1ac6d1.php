<?php

/* edit.html.twig */
class __TwigTemplate_e8ba50bc0f7c079ad2ee100ed3cec8ee7e2ac5d8c4709053203f3636c6ea0ed6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("crud/edit.html.twig", "edit.html.twig", 1);
        $this->blocks = array(
            'formContent' => array($this, 'block_formContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "crud/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_formContent($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"form-group required\">
        <label for=\"nome\" class=\"control-label\">";
        // line 4
        echo gettext("Nome");
        echo "</label>
        <input id=\"nome\" type=\"text\" name=\"nome\" class=\"form-control\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "nome", array()), "html", null, true);
        echo "\" maxlength=\"50\" />
    </div>
    <div class=\"form-group required\">
        <label for=\"descricao\" class=\"control-label\">";
        // line 8
        echo gettext("Descrição");
        echo "</label>
        <textarea id=\"descricao\" name=\"descricao\" class=\"form-control\" rows=\"5\" maxlength=\"150\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "descricao", array()), "html", null, true);
        echo "</textarea>
    </div>
    ";
        // line 11
        if ((($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()) == 0) || ($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "left", array()) != 1))) {
            // line 12
            echo "    <div class=\"form-group required\">
        <label for=\"pai\" class=\"control-label\">";
            // line 13
            echo gettext("Pai");
            echo "</label>
        <select id=\"pai\" name=\"id_pai\" class=\"form-control\">
            <option value=\"\">";
            // line 15
            echo gettext("Selecione");
            echo "</option>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pais"]) ? $context["pais"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["item"], "id", array()) == $this->getAttribute((isset($context["modelParent"]) ? $context["modelParent"] : null), "id", array()))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </select>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  71 => 17,  67 => 16,  63 => 15,  58 => 13,  55 => 12,  53 => 11,  48 => 9,  44 => 8,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "crud/edit.html.twig" %}*/
/* {% block formContent %}*/
/*     <div class="form-group required">*/
/*         <label for="nome" class="control-label">{% trans %}Nome{% endtrans %}</label>*/
/*         <input id="nome" type="text" name="nome" class="form-control" value="{{ model.nome }}" maxlength="50" />*/
/*     </div>*/
/*     <div class="form-group required">*/
/*         <label for="descricao" class="control-label">{% trans %}Descrição{% endtrans %}</label>*/
/*         <textarea id="descricao" name="descricao" class="form-control" rows="5" maxlength="150">{{ model.descricao }}</textarea>*/
/*     </div>*/
/*     {% if model.id == 0 or model.left != 1 %}*/
/*     <div class="form-group required">*/
/*         <label for="pai" class="control-label">{% trans %}Pai{% endtrans %}</label>*/
/*         <select id="pai" name="id_pai" class="form-control">*/
/*             <option value="">{% trans %}Selecione{% endtrans %}</option>*/
/*             {% for item in pais %}*/
/*             <option value="{{ item.id }}" {% if item.id == modelParent.id %}selected="selected"{% endif %}>{{ item }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*     </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
