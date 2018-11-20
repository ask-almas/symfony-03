<?php

/* base.html.twig */
class __TwigTemplate_73853c9787fb67f69eaa4514eff2e1a6062ff933f0909b275f9be59503f50022 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "</head>
<body class=\"bg-light\">

<nav class=\"navbar navbar-dark navbar-expand-md sticky-top bg-dark p-0\">
    <a class=\"navbar-brand col-sm-3 col-md-2 mr-0\"
       href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_index");
        echo "\">Micro Post App</a>
    <div class=\"w-100 order-1 order-md-0\">
        <ul class=\"navbar-nav px-3\">
            ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 20
            echo "                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\" href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_add");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new"), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        // line 24
        echo "        </ul>
    </div>

    <div class=\"order-2 order-md-1\">
        <ul class=\"navbar-nav px-3\">
            ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 30
            echo "                <li class=\"nav-item text-nowrap border-right border-secondary\">
                    <a class=\"nav-link\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_all");
            echo "\">
                        ";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notifications"), "html", null, true);
            echo "
                        <span class=\"badge badge-light\" id=\"notification-count\">
                            <i class=\"fa fa-circle fa-circle-o-notch fa-spin\"></i>
                        </span>
                    </a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"#\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->source); })()), "user", array()), "fullName", array()), "html", null, true);
            echo "</a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out"), "html", null, true);
            echo "</a>
                </li>
            ";
        } else {
            // line 47
            echo "                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign in"), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        // line 52
        echo "        </ul>
    </div>
</nav>

<main role=\"main\" class=\"container\">
    <div class=\"my-3 p-3 bg-white rounded box-shadow\">
            ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "    </div>
</main>
";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/app.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 64
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 65
            echo "    <script>
        function fetchNotificationCount() {
            fetch(
                '";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_unread");
            echo "',
                {'credentials': 'include'}
            ).then(function (response) {
                response.json().then(function (json) {
                    document.getElementById('notification-count').innerText = json.count;
                    setTimeout(fetchNotificationCount, 5000);
                });
            }).catch(function (reason) {

            });
        }

        fetchNotificationCount();
    </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  234 => 68,  229 => 65,  227 => 64,  222 => 63,  213 => 62,  203 => 59,  194 => 58,  179 => 7,  170 => 6,  152 => 5,  141 => 84,  139 => 62,  135 => 60,  133 => 58,  125 => 52,  117 => 49,  113 => 47,  105 => 44,  98 => 40,  87 => 32,  83 => 31,  80 => 30,  78 => 29,  71 => 24,  63 => 21,  60 => 20,  58 => 19,  52 => 16,  45 => 11,  43 => 6,  39 => 5,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
        <link rel=\"stylesheet\"
              href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    {% endblock %}
</head>
<body class=\"bg-light\">

<nav class=\"navbar navbar-dark navbar-expand-md sticky-top bg-dark p-0\">
    <a class=\"navbar-brand col-sm-3 col-md-2 mr-0\"
       href=\"{{ path('micro_post_index') }}\">Micro Post App</a>
    <div class=\"w-100 order-1 order-md-0\">
        <ul class=\"navbar-nav px-3\">
            {% if is_granted('ROLE_USER') %}
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\" href=\"{{ path('micro_post_add') }}\">{{ 'Add new'|trans }}</a>
                </li>
            {% endif %}
        </ul>
    </div>

    <div class=\"order-2 order-md-1\">
        <ul class=\"navbar-nav px-3\">
            {% if is_granted('ROLE_USER') %}
                <li class=\"nav-item text-nowrap border-right border-secondary\">
                    <a class=\"nav-link\" href=\"{{ path('notification_all') }}\">
                        {{ 'Notifications'|trans }}
                        <span class=\"badge badge-light\" id=\"notification-count\">
                            <i class=\"fa fa-circle fa-circle-o-notch fa-spin\"></i>
                        </span>
                    </a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"#\">{{ app.user.fullName }}</a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"{{ path('security_logout') }}\">{{ 'Sign out'|trans }}</a>
                </li>
            {% else %}
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"{{ path('security_login') }}\">{{ 'Sign in'|trans }}</a>
                </li>
            {% endif %}
        </ul>
    </div>
</nav>

<main role=\"main\" class=\"container\">
    <div class=\"my-3 p-3 bg-white rounded box-shadow\">
            {% block body %}
            {% endblock %}
    </div>
</main>
{% block javascripts %}
    <script src=\"{{ asset('build/js/app.js') }}\"></script>
    {% if is_granted('ROLE_USER') %}
    <script>
        function fetchNotificationCount() {
            fetch(
                '{{ path('notification_unread') }}',
                {'credentials': 'include'}
            ).then(function (response) {
                response.json().then(function (json) {
                    document.getElementById('notification-count').innerText = json.count;
                    setTimeout(fetchNotificationCount, 5000);
                });
            }).catch(function (reason) {

            });
        }

        fetchNotificationCount();
    </script>
    {% endif %}
{% endblock %}
</body>
</html>", "base.html.twig", "/home/almas/Downloads/Projects/Udemy/Symfony/symfony-02/templates/base.html.twig");
    }
}
