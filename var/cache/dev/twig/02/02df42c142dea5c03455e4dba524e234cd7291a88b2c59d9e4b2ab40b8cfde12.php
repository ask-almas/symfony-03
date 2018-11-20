<?php

/* micro-post/user-posts.html.twig */
class __TwigTemplate_d3a279cf9af76e91dbbaa8546c693d09102e71c2fdf2ed880b0b65e07758cccd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "micro-post/user-posts.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "micro-post/user-posts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "micro-post/user-posts.html.twig"));

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
        echo "    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">
                    ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->source); })()), "fullName", array()), "html", null, true);
        echo "
                    <small class=\"text-muted\">· @";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->source); })()), "username", array()), "html", null, true);
        echo "</small>
                </h5>

                ";
        // line 12
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->source); })()) != twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "user", array())))) {
            // line 13
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->source); })()), "followers", array()), "contains", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->source); })()), "user", array())), "method") == false)) {
                // line 14
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("following_follow", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->source); })()), "id", array()))), "html", null, true);
                echo "\"
                           class=\"btn btn-outline-primary\">Follow</a>
                    ";
            } else {
                // line 17
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("following_unfollow", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 17, $this->source); })()), "id", array()))), "html", null, true);
                echo "\"
                           class=\"btn btn-outline-danger\">Unfollow</a>
                    ";
            }
            // line 20
            echo "                ";
        }
        // line 21
        echo "            </div>
        </div>
    </div>

    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("Followers", twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 28, $this->source); })()), "followers", array()))), "html", null, true);
        echo "</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 31, $this->source); })()), "followers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["follower"]) {
            // line 32
            echo "                    <li class=\"list-group-item\">
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_user", array("username" => twig_get_attribute($this->env, $this->source,             // line 34
$context["follower"], "username", array()))), "html", null, true);
            echo "\">
                            @";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["follower"], "username", array()), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['follower'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </ul>
        </div>
        <div class=\"card\">
            <div class=\"card-body\">
                <h5>";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("Following", twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 43, $this->source); })()), "following", array()))), "html", null, true);
        echo "</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 46, $this->source); })()), "following", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["following"]) {
            // line 47
            echo "                    <li class=\"list-group-item\">
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_user", array("username" => twig_get_attribute($this->env, $this->source,             // line 49
$context["following"], "username", array()))), "html", null, true);
            echo "\">
                            @";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["following"], "username", array()), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['following'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </ul>
        </div>
    </div>
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 57, $this->source); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 58
            echo "        ";
            echo twig_include($this->env, $context, "micro-post/raw-post.html.twig", array("post" => $context["post"]));
            echo "
        <small class=\"d-block text-right mt-3\">
            ";
            // line 60
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", $context["post"])) {
                // line 61
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", array()))), "html", null, true);
                echo "\">Edit</a>
            ";
            }
            // line 63
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", $context["post"])) {
                // line 64
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", array()))), "html", null, true);
                echo "\">Delete</a>
            ";
            }
            // line 66
            echo "        </small>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "micro-post/user-posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 66,  201 => 64,  198 => 63,  192 => 61,  190 => 60,  184 => 58,  167 => 57,  162 => 54,  152 => 50,  148 => 49,  147 => 48,  144 => 47,  140 => 46,  134 => 43,  128 => 39,  118 => 35,  114 => 34,  113 => 33,  110 => 32,  106 => 31,  100 => 28,  91 => 21,  88 => 20,  81 => 17,  74 => 14,  71 => 13,  69 => 12,  63 => 9,  59 => 8,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">
                    {{ user.fullName }}
                    <small class=\"text-muted\">· @{{ user.username }}</small>
                </h5>

                {% if is_granted('ROLE_USER') and user != app.user %}
                    {% if user.followers.contains(app.user) == false %}
                        <a href=\"{{ path('following_follow', {'id': user.id}) }}\"
                           class=\"btn btn-outline-primary\">Follow</a>
                    {% else %}
                        <a href=\"{{ path('following_unfollow', {'id': user.id}) }}\"
                           class=\"btn btn-outline-danger\">Unfollow</a>
                    {% endif %}
                {% endif %}
            </div>
        </div>
    </div>

    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5>{{ 'Followers'|transchoice(user.followers|length) }}</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                {% for follower in user.followers %}
                    <li class=\"list-group-item\">
                        <a href=\"{{ path('micro_post_user',
                            {'username': follower.username}) }}\">
                            @{{ follower.username }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
        <div class=\"card\">
            <div class=\"card-body\">
                <h5>{{ 'Following'|transchoice(user.following|length) }}</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                {% for following in user.following %}
                    <li class=\"list-group-item\">
                        <a href=\"{{ path('micro_post_user',
                            {'username': following.username}) }}\">
                            @{{ following.username }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
    </div>
    {% for post in posts %}
        {{ include('micro-post/raw-post.html.twig', {'post': post}) }}
        <small class=\"d-block text-right mt-3\">
            {% if is_granted('edit', post) %}
                <a href=\"{{ path('micro_post_edit', {'id':post.id}) }}\">Edit</a>
            {% endif %}
            {% if is_granted('delete', post) %}
                <a href=\"{{ path('micro_post_delete', {'id':post.id}) }}\">Delete</a>
            {% endif %}
        </small>
    {% endfor %}
{% endblock %}", "micro-post/user-posts.html.twig", "/home/almas/Downloads/Projects/Udemy/Symfony/symfony-02/templates/micro-post/user-posts.html.twig");
    }
}
