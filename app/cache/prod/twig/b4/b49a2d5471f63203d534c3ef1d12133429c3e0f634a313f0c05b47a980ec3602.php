<?php

/* BazingaOAuthServerBundle::authorize.html.twig */
class __TwigTemplate_919ab04d672852192716ef1cb002fc15d806b035e0ea6e0d9edde0c804fbe93e extends Twig_Template
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
        echo "<div>
    <p>Do you want to authorize <strong>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["consumer"] ?? null), "name", array()), "html", null, true);
        echo "</strong> access your informations ?</p>

    <form action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bazinga_oauth_server_authorize");
        echo "\" method=\"POST\">
        <input type=\"hidden\" name=\"oauth_token\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["oauth_token"] ?? null), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"oauth_callback\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["oauth_callback"] ?? null), "html", null, true);
        echo "\" />

        <input type=\"submit\" name=\"submit_true\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("authorize.accept", array(), "BazingaOAuthServerBundle"), "html", null, true);
        echo "\" />
        <input type=\"submit\" name=\"submit_false\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("authorize.reject", array(), "BazingaOAuthServerBundle"), "html", null, true);
        echo "\" />
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "BazingaOAuthServerBundle::authorize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  40 => 8,  35 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BazingaOAuthServerBundle::authorize.html.twig", "/var/www/html/mautic/vendor/willdurand/oauth-server-bundle/Resources/views/authorize.html.twig");
    }
}
