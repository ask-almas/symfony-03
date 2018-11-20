<?php

/* micro-post/raw-post.html.twig */
class __TwigTemplate_63764cbf82ed96c62c77c691795a36601ca2eb9088e9e1503b2be03950d0ed39 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "micro-post/raw-post.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "micro-post/raw-post.html.twig"));

        // line 1
        echo "<div class=\"media text-muted pt-3\">
    ";
        // line 2
        $context["initials"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 2, $this->source); })()), "user", array()), "fullName", array()), " ");
        // line 3
        echo "    <img data-src=\"holder.js/32x32?text=";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new Twig_Error_Runtime('Variable "initials" does not exist.', 3, $this->source); })()), 0)), "html", null, true);
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new Twig_Error_Runtime('Variable "initials" does not exist.', 3, $this->source); })()), 1)), "html", null, true);
        echo "
        &bg=e83e8c&fg=fff&size=8\" alt=\"\" class=\"mr-2 rounded\">
    <p class=\"media-body pb-3 mb-0 small lh-125 border-bottom border-gray\">
        <span class=\"d-block\">
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_user", array("username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 7, $this->source); })()), "user", array()), "username", array()))), "html", null, true);
        echo "\">
                <strong class=\"text-gray-dark\">@";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 8, $this->source); })()), "user", array()), "username", array()), "html", null, true);
        echo "</strong>
            </a>
            <small> ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 10, $this->source); })()), "time", array()), "d/m/Y"), "html", null, true);
        echo " </small>
        </span>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_post", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 12, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 13, $this->source); })()), "text", array()), "html", null, true);
        echo "
        </a>
    </p>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "micro-post/raw-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  57 => 12,  52 => 10,  47 => 8,  43 => 7,  34 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"media text-muted pt-3\">
    {% set initials = post.user.fullName|split(' ') %}
    <img data-src=\"holder.js/32x32?text={{ attribute(initials, 0)|first }}{{ attribute(initials, 1)|first }}
        &bg=e83e8c&fg=fff&size=8\" alt=\"\" class=\"mr-2 rounded\">
    <p class=\"media-body pb-3 mb-0 small lh-125 border-bottom border-gray\">
        <span class=\"d-block\">
            <a href=\"{{ path('micro_post_user', {'username':post.user.username}) }}\">
                <strong class=\"text-gray-dark\">@{{ post.user.username }}</strong>
            </a>
            <small> {{ post.time|date(\"d/m/Y\") }} </small>
        </span>
        <a href=\"{{ path('micro_post_post', {'id':post.id}) }}\">
            {{ post.text }}
        </a>
    </p>
</div>", "micro-post/raw-post.html.twig", "/home/almas/Downloads/Projects/Udemy/Symfony/symfony-02/templates/micro-post/raw-post.html.twig");
    }
}
