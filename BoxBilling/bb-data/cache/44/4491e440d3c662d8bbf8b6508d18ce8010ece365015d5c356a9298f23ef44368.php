<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partial_pending_messages.phtml */
class __TwigTemplate_9a34d5923111208dca782b6175c96ef7e2eb090242c4171331864e427948bdd6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["pending_messages"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_get_pending_messages", [], "any", false, false, false, 1);
        // line 2
        if (($context["pending_messages"] ?? null)) {
            // line 3
            echo "<script>
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pending_messages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 5
                echo "        bb.msg('";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "');
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_pending_messages.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  48 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set pending_messages = guest.system_get_pending_messages %}
{% if pending_messages %}
<script>
    {% for message in pending_messages %}
        bb.msg('{{message}}');
    {% endfor %}
</script>
{% endif %}", "partial_pending_messages.phtml", "/var/www/localhost/htdocs/bb-themes/boxbilling/html/partial_pending_messages.phtml");
    }
}
