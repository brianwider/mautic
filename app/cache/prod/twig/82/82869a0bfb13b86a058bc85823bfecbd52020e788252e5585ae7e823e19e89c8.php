<?php

/* FOSOAuthServerBundle::layout.html.twig */
class __TwigTemplate_e2d7a319460aa57265917a1ca2fbd5c85f8fe93671a69dd5d3a86c9672b463c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_oauth_server_content' => array($this, 'block_fos_oauth_server_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('fos_oauth_server_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
    }

    // line 8
    public function block_fos_oauth_server_content($context, array $blocks = array())
    {
        // line 9
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  38 => 8,  31 => 10,  29 => 8,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSOAuthServerBundle::layout.html.twig", "/var/www/html/mautic/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/layout.html.twig");
    }
}
