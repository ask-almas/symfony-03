<?php

/* notification/notifications.html.twig */
class __TwigTemplate_09c20a6a993a52d63ef955390bc93ec42abbe619425b7c0029443431209479c7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "notification/notifications.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notification/notifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notification/notifications.html.twig"));

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
        echo "    <div class=\"card\">
        ";
        // line 5
        if (twig_length_filter($this->env, (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new Twig_Error_Runtime('Variable "notifications" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "            <div class=\"card-body\">
                <h5>Unread notifications</h5>
            </div>

            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">
                    <a class=\"btn btn-block btn-default btn-link btn-outline-info\"
                       href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_acknowledge_all");
            echo "\">
                        Mark all as read
                    </a>
                </li>
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new Twig_Error_Runtime('Variable "notifications" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 18
                echo "                    <li class=\"list-group-item\">
                        <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_acknowledge", array("id" => twig_get_attribute($this->env, $this->source, $context["notification"], "id", array()))), "html", null, true);
                echo "\"
                           class=\"btn btn-sm btn-primary float-right\">
                            OK
                        </a>
                        ";
                // line 23
                if (call_user_func_array($this->env->getTest('like')->getCallable(), array($context["notification"]))) {
                    // line 24
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_user", array("username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notification"], "likedBy", array()), "username", array()))), "html", null, true);
                    echo "\">
                                ";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notification"], "likedBy", array()), "username", array()), "html", null, true);
                    echo "</a>
                            likes your
                            <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_post", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notification"], "microPost", array()), "id", array()))), "html", null, true);
                    echo "\">post</a>
                        ";
                }
                // line 29
                echo "                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            </ul>
        ";
        } else {
            // line 33
            echo "            <div class=\"card-body\">
                You have not notifications
            </div>
        ";
        }
        // line 37
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "notification/notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 37,  116 => 33,  112 => 31,  105 => 29,  100 => 27,  95 => 25,  90 => 24,  88 => 23,  81 => 19,  78 => 18,  74 => 17,  67 => 13,  58 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"card\">
        {% if notifications|length %}
            <div class=\"card-body\">
                <h5>Unread notifications</h5>
            </div>

            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">
                    <a class=\"btn btn-block btn-default btn-link btn-outline-info\"
                       href=\"{{ path('notification_acknowledge_all') }}\">
                        Mark all as read
                    </a>
                </li>
                {% for notification in notifications %}
                    <li class=\"list-group-item\">
                        <a href=\"{{ path('notification_acknowledge', {'id': notification.id}) }}\"
                           class=\"btn btn-sm btn-primary float-right\">
                            OK
                        </a>
                        {% if notification is like %}
                            <a href=\"{{ path('micro_post_user', {'username': notification.likedBy.username}) }}\">
                                {{ notification.likedBy.username }}</a>
                            likes your
                            <a href=\"{{ path('micro_post_post', {'id': notification.microPost.id}) }}\">post</a>
                        {% endif %}
                    </li>
                {% endfor %}
            </ul>
        {% else %}
            <div class=\"card-body\">
                You have not notifications
            </div>
        {% endif %}
    </div>
{% endblock %}", "notification/notifications.html.twig", "/home/almas/Downloads/Projects/Udemy/Symfony/symfony-02/templates/notification/notifications.html.twig");
    }
}
