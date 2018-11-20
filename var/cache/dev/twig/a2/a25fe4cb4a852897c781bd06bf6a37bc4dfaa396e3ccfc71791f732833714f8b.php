<?php

/* email/registration.html.twig */
class __TwigTemplate_2ec732cf942ff2da9692c38fa19950e68cf50ec9605fbfda96b49a02ae9e46da extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/registration.html.twig"));

        // line 1
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("email.registration", array("%name%" => twig_get_attribute($this->env, $this->source,         // line 2
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 2, $this->source); })()), "fullName", array()), "%confirm-link%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("security_confirm", array("token" => twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 3, $this->source); })()), "confirmationToken", array()))), "%login-link%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("security_login")));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  30 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ 'email.registration'|trans({
    '%name%': user.fullName,
    '%confirm-link%': url('security_confirm', {'token': user.confirmationToken}),
    '%login-link%': url('security_login')
})|raw }}", "email/registration.html.twig", "/home/almas/Downloads/Projects/Udemy/Symfony/symfony-02/templates/email/registration.html.twig");
    }
}
