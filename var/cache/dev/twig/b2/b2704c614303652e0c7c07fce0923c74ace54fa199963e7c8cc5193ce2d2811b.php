<?php

/* micro-post/post.html.twig */
class __TwigTemplate_e399bcff00dc193d4ec01f8333e9f50d509b24a901578b2a7c87bd341bd8966a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "micro-post/post.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "micro-post/post.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "micro-post/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "micro-post/raw-post.html.twig", array("post" => (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 4, $this->source); })())));
        echo "

    ";
        // line 6
        $context["isLiked"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 6, $this->source); })()), "getLikedBy", array()), "contains", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "user", array())), "method");
        // line 7
        echo "
    <div class=\"pt-2\">
        <button style=\"display: ";
        // line 9
        if ( !(isset($context["isLiked"]) || array_key_exists("isLiked", $context) ? $context["isLiked"] : (function () { throw new Twig_Error_Runtime('Variable "isLiked" does not exist.', 9, $this->source); })())) {
            echo "block";
        } else {
            echo "none";
        }
        echo "\"
                class=\"btn btn-outline-secondary btn-sm\" id=\"like\">Like
            <span class=\"badge badge-light\" id=\"likes-like\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 11, $this->source); })()), "getLikedBy", array()), "count", array()), "html", null, true);
        echo "</span>
        </button>

        <button style=\"display: ";
        // line 14
        if ((isset($context["isLiked"]) || array_key_exists("isLiked", $context) ? $context["isLiked"] : (function () { throw new Twig_Error_Runtime('Variable "isLiked" does not exist.', 14, $this->source); })())) {
            echo "block";
        } else {
            echo "none";
        }
        echo "\"
                class=\"btn btn-outline-danger btn-sm\" id=\"unlike\">Unlike
            <span class=\"badge badge-light\" id=\"likes-unlike\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 16, $this->source); })()), "getLikedBy", array()), "count", array()), "html", null, true);
        echo "</span>
        </button>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        var likeButton = document.getElementById('like');
        var unlikeButton = document.getElementById('unlike');

        addOnClick(
            likeButton,
            unlikeButton,
            document.getElementById('likes-unlike'),
            '";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("likes_like", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 32, $this->source); })()), "id", array()))), "html", null, true);
        echo "'
        );

        addOnClick(
            unlikeButton,
            likeButton,
            document.getElementById('likes-like'),
            '";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("likes_unlike", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 39, $this->source); })()), "id", array()))), "html", null, true);
        echo "'
        );

        function addOnClick(button, oppositeButton, likeCount, path){
            button.addEventListener('click', function (event) {
                ";
        // line 44
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 44, $this->source); })()), "user", array())) {
            // line 45
            echo "                    return window.location.replace('";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_register");
            echo "');
                ";
        }
        // line 47
        echo "
                button.disabled = true;

                fetch(path, {'credentials':'include'}).then(function (response) {
                    response.json().then(function (json) {
                        likeCount.innerText = json.count;
                        switchButtons(button, oppositeButton);
                    })
                }).catch(function () {
                    switchButtons(button, oppositeButton);
                });
                event.preventDefault();
            });
        }
        
        function switchButtons(button, oppositeButton) {
            button.disabled = false;
            button.style.display = 'none';
            oppositeButton.style.display = 'block';
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "micro-post/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 47,  147 => 45,  145 => 44,  137 => 39,  127 => 32,  113 => 22,  104 => 21,  90 => 16,  81 => 14,  75 => 11,  66 => 9,  62 => 7,  60 => 6,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ include('micro-post/raw-post.html.twig', {'post':post}) }}

    {% set isLiked = post.getLikedBy.contains(app.user) %}

    <div class=\"pt-2\">
        <button style=\"display: {% if not isLiked %}block{% else %}none{% endif %}\"
                class=\"btn btn-outline-secondary btn-sm\" id=\"like\">Like
            <span class=\"badge badge-light\" id=\"likes-like\">{{ post.getLikedBy.count }}</span>
        </button>

        <button style=\"display: {% if isLiked %}block{% else %}none{% endif %}\"
                class=\"btn btn-outline-danger btn-sm\" id=\"unlike\">Unlike
            <span class=\"badge badge-light\" id=\"likes-unlike\">{{ post.getLikedBy.count }}</span>
        </button>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        var likeButton = document.getElementById('like');
        var unlikeButton = document.getElementById('unlike');

        addOnClick(
            likeButton,
            unlikeButton,
            document.getElementById('likes-unlike'),
            '{{ path('likes_like', {'id':post.id}) }}'
        );

        addOnClick(
            unlikeButton,
            likeButton,
            document.getElementById('likes-like'),
            '{{ path('likes_unlike', {'id':post.id}) }}'
        );

        function addOnClick(button, oppositeButton, likeCount, path){
            button.addEventListener('click', function (event) {
                {% if not app.user %}
                    return window.location.replace('{{ path('user_register') }}');
                {% endif %}

                button.disabled = true;

                fetch(path, {'credentials':'include'}).then(function (response) {
                    response.json().then(function (json) {
                        likeCount.innerText = json.count;
                        switchButtons(button, oppositeButton);
                    })
                }).catch(function () {
                    switchButtons(button, oppositeButton);
                });
                event.preventDefault();
            });
        }
        
        function switchButtons(button, oppositeButton) {
            button.disabled = false;
            button.style.display = 'none';
            oppositeButton.style.display = 'block';
        }
    </script>
{% endblock %}", "micro-post/post.html.twig", "/home/almas/Downloads/Projects/Udemy/Symfony/symfony-02/templates/micro-post/post.html.twig");
    }
}
