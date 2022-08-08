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

/* mod_order_index.phtml */
class __TwigTemplate_24c1064898f3c68e887081699a64c1b412ff9bd99bc99282d8f40ab08e46c550 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
            'sidebar2' => [$this, 'block_sidebar2'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_order_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_order_index.phtml", 2)->unwrap();
        // line 5
        $context["periods"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_periods", [], "any", false, false, false, 5);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Order");
    }

    // line 7
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $this->loadTemplate("partial_steps.phtml", "mod_order_index.phtml", 8)->display(twig_array_merge($context, ["selected" => 1]));
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"number\">1</span></div>
        <h2>";
        // line 16
        echo gettext("Select Product");
        echo "</h2>
        <p>";
        // line 17
        echo gettext("Choose products we offer for selling");
        echo "</p>
    </div>
    <div class=\"block\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "product_category_get_list", [], "any", false, false, false, 20), "list", [], "any", false, false, false, 20));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 21
            echo "    <div class=\"product-category";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 21)) {
                echo " last";
            }
            echo "\" id=\"pc-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
        <div class=\"show-products\">
            ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["category"], "icon_url", [], "any", false, false, false, 23)) {
                // line 24
                echo "            <div style=\"float: left; margin: 20px;\">
                ";
                // line 25
                echo twig_img_tag(twig_get_attribute($this->env, $this->source, $context["category"], "icon_url", [], "any", false, false, false, 25));
                echo "
            </div>
            ";
            }
            // line 28
            echo "            <div class=\"block product-pricing\" style=\"float: right;\">
                <span class=\"starting_from\">";
            // line 29
            echo gettext("Starting from:");
            echo "</span>
                <div class=\"currency\">";
            // line 30
            echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "price_starting_from", [], "any", false, false, false, 30));
            echo "</div>
                <a class=\"bb-button\" href=\"#\">";
            // line 31
            echo gettext("View products");
            echo "</a>
            </div>
            <div class=\"block\">
                <h2>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 34), "html", null, true);
            echo "</h2>
                ";
            // line 35
            echo twig_bbmd_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 35));
            echo "
            </div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"products\" style=\"display:none; position: relative;\">
            <div class=\"fader\" style=\"width: 100%;margin-right: 0;height: 8px;position: absolute;top: 0;left: 0;opacity: 0.75;border-top: 1px solid rgba(0, 0, 0, 0.4);background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .2)), to(transparent));-webkit-mask-box-image: -webkit-gradient(linear, left top, right top, color-stop(0.0, rgba(0,0,0,0)), color-stop(0.5, rgba(0,0,0,.8)), color-stop(1.0, rgba(0,0,0,0)));\"></div>
            ";
            // line 41
            $context["listing_template"] = (("mod_service" . twig_get_attribute($this->env, $this->source, $context["category"], "type", [], "any", false, false, false, 41)) . "_listing.phtml");
            // line 42
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_template_exists", [0 => ["file" => ($context["listing_template"] ?? null)]], "method", false, false, false, 42)) {
                // line 43
                echo "                <div class=\"mod_service";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "type", [], "any", false, false, false, 43), "html", null, true);
                echo "\">";
                $this->loadTemplate(($context["listing_template"] ?? null), "mod_order_index.phtml", 43)->display($context);
                echo "</div>
            ";
            } else {
                // line 45
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 45));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 46
                    echo "            <div class=\"product";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 46)) {
                        echo " first";
                    }
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 46)) {
                        echo " last";
                    }
                    echo "\">
                <div class=\"block\" style=\"position: relative;\">
                    <div class=\"product-pricing\" style=\"float:right; text-align: right; margin: 0 0 20px 20px;\">
                        <span class=\"starting_from\">";
                    // line 49
                    echo gettext("Starting from:");
                    echo "</span>
                        <div class=\"currency\">";
                    // line 50
                    echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price_starting_from", [], "any", false, false, false, 50));
                    echo "</div>
                        ";
                    // line 51
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "pricing", [], "any", false, false, false, 51), "type", [], "any", false, false, false, 51) == "recurrent")) {
                        // line 52
                        echo "                        <form method=\"get\" action=\"\">
                        <p>
                        <input type=\"hidden\" name=\"_url\" value=\"/order/";
                        // line 54
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 54), "html", null, true);
                        echo "\"/>
                        <select name=\"period\" id=\"period-selector\">
                        ";
                        // line 56
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "pricing", [], "any", false, false, false, 56), "recurrent", [], "any", false, false, false, 56));
                        foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                            // line 57
                            echo "                            ";
                            if (twig_get_attribute($this->env, $this->source, $context["prices"], "enabled", [], "any", false, false, false, 57)) {
                                // line 58
                                echo "                            <option value=\"";
                                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                                echo "\" data-bb-price=\"";
                                echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 58));
                                echo "\">";
                                echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["periods"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["code"]] ?? null) : null), "html", null, true);
                                echo "</option>
                            ";
                            }
                            // line 60
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 61
                        echo "                        </select>
                        </p>
                        <button class=\"bb-button bb-button-submit\" type=\"submit\">";
                        // line 63
                        echo gettext("Order now");
                        echo "</button>
                        </form>
                        ";
                    } else {
                        // line 66
                        echo "                        <p><button class=\"bb-button bb-button-submit\" type=\"button\" onclick=\"parent.location='";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 66), "html", null, true);
                        echo "'\">";
                        echo gettext("Order now");
                        echo "</button></p>
                        ";
                    }
                    // line 68
                    echo "                    </div>

                    ";
                    // line 70
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "icon_url", [], "any", false, false, false, 70)) {
                        // line 71
                        echo "                    <div style=\"display: block;float:left; margin:0 20px 20px 0;\">
                        ";
                        // line 72
                        echo twig_img_tag(twig_get_attribute($this->env, $this->source, $context["product"], "icon_url", [], "any", false, false, false, 72));
                        echo "
                    </div>
                    ";
                    }
                    // line 75
                    echo "                    
                    <h2>";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 76), "html", null, true);
                    echo "</h2>

                    ";
                    // line 78
                    echo twig_bbmd_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 78));
                    echo "
                    <div class=\"clear\"></div>
                </div>
                <div class=\"clear\"></div>
            </div>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "            ";
            }
            // line 85
            echo "            <div class=\"clear\"></div>
        </div>
    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "    <div class=\"clear\"></div>
    </div>
</div>
";
    }

    // line 94
    public function block_sidebar2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "    ";
        $this->loadTemplate("partial_currency.phtml", "mod_order_index.phtml", 95)->display($context);
    }

    // line 98
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('.show-products').click(function(){
        if(\$(this).parents('.product-category').hasClass('selected')) {
            \$(this).parents('.product-category').find('.products').slideUp();
            \$(this).parents('.product-category').removeClass('selected');
        } else {
            \$('.product-category').removeClass('selected');
            \$(this).parents('.product-category').addClass('selected');
            \$('.product-category .products').slideUp('fast');
            \$(this).parents('.product-category').find('.products').slideToggle();
        }
        return false;
    });
    
    var open = '";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "show", [], "any", false, false, false, 116), "js", null, true);
        echo "';
    if(open) {
        \$('#pc-' + open + ' .show-products').trigger('click');
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_order_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 116,  345 => 100,  341 => 98,  336 => 95,  332 => 94,  325 => 89,  308 => 85,  305 => 84,  285 => 78,  280 => 76,  277 => 75,  271 => 72,  268 => 71,  266 => 70,  262 => 68,  252 => 66,  246 => 63,  242 => 61,  236 => 60,  226 => 58,  223 => 57,  219 => 56,  214 => 54,  210 => 52,  208 => 51,  204 => 50,  200 => 49,  188 => 46,  170 => 45,  162 => 43,  159 => 42,  157 => 41,  148 => 35,  144 => 34,  138 => 31,  134 => 30,  130 => 29,  127 => 28,  121 => 25,  118 => 24,  116 => 23,  106 => 21,  89 => 20,  83 => 17,  79 => 16,  73 => 12,  69 => 11,  65 => 8,  61 => 7,  54 => 3,  50 => 1,  48 => 5,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Order' %}{% endblock %}

{% set periods = guest.system_periods %}

{% block content_before %}
{% include \"partial_steps.phtml\" with {'selected': 1} %}
{% endblock %}

{% block content %}

<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"number\">1</span></div>
        <h2>{% trans 'Select Product' %}</h2>
        <p>{% trans 'Choose products we offer for selling' %}</p>
    </div>
    <div class=\"block\">
    {% for i, category in guest.product_category_get_list.list %}
    <div class=\"product-category{% if loop.last %} last{% endif %}\" id=\"pc-{{category.id}}\">
        <div class=\"show-products\">
            {% if category.icon_url %}
            <div style=\"float: left; margin: 20px;\">
                {{ category.icon_url | img_tag }}
            </div>
            {% endif %}
            <div class=\"block product-pricing\" style=\"float: right;\">
                <span class=\"starting_from\">{% trans 'Starting from:' %}</span>
                <div class=\"currency\">{{ category.price_starting_from | money_convert }}</div>
                <a class=\"bb-button\" href=\"#\">{% trans 'View products' %}</a>
            </div>
            <div class=\"block\">
                <h2>{{ category.title }}</h2>
                {{ category.description|bbmd }}
            </div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"products\" style=\"display:none; position: relative;\">
            <div class=\"fader\" style=\"width: 100%;margin-right: 0;height: 8px;position: absolute;top: 0;left: 0;opacity: 0.75;border-top: 1px solid rgba(0, 0, 0, 0.4);background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .2)), to(transparent));-webkit-mask-box-image: -webkit-gradient(linear, left top, right top, color-stop(0.0, rgba(0,0,0,0)), color-stop(0.5, rgba(0,0,0,.8)), color-stop(1.0, rgba(0,0,0,0)));\"></div>
            {% set listing_template = 'mod_service'~category.type~'_listing.phtml' %}
            {% if guest.system_template_exists({\"file\":listing_template}) %}
                <div class=\"mod_service{{category.type}}\">{% include listing_template %}</div>
            {% else %}
            {% for product in category.products %}
            <div class=\"product{% if loop.first %} first{% endif %}{% if loop.last %} last{% endif %}\">
                <div class=\"block\" style=\"position: relative;\">
                    <div class=\"product-pricing\" style=\"float:right; text-align: right; margin: 0 0 20px 20px;\">
                        <span class=\"starting_from\">{% trans 'Starting from:' %}</span>
                        <div class=\"currency\">{{ product.price_starting_from | money_convert }}</div>
                        {% if product.pricing.type == 'recurrent' %}
                        <form method=\"get\" action=\"\">
                        <p>
                        <input type=\"hidden\" name=\"_url\" value=\"/order/{{ product.slug }}\"/>
                        <select name=\"period\" id=\"period-selector\">
                        {% for code,prices in product.pricing.recurrent %}
                            {% if prices.enabled %}
                            <option value=\"{{code}}\" data-bb-price=\"{{ prices.price | money_convert }}\">{{ periods[code] }}</option>
                            {% endif %}
                        {% endfor %}
                        </select>
                        </p>
                        <button class=\"bb-button bb-button-submit\" type=\"submit\">{% trans 'Order now' %}</button>
                        </form>
                        {% else %}
                        <p><button class=\"bb-button bb-button-submit\" type=\"button\" onclick=\"parent.location='{{ '/order'|link }}/{{ product.slug }}'\">{% trans 'Order now' %}</button></p>
                        {% endif %}
                    </div>

                    {% if product.icon_url %}
                    <div style=\"display: block;float:left; margin:0 20px 20px 0;\">
                        {{ product.icon_url | img_tag }}
                    </div>
                    {% endif %}
                    
                    <h2>{{ product.title }}</h2>

                    {{ product.description|bbmd }}
                    <div class=\"clear\"></div>
                </div>
                <div class=\"clear\"></div>
            </div>
            {% endfor %}
            {% endif %}
            <div class=\"clear\"></div>
        </div>
    </div>
    {% endfor %}
    <div class=\"clear\"></div>
    </div>
</div>
{% endblock %}

{% block sidebar2 %}
    {% include 'partial_currency.phtml' %}
{% endblock %}

{% block js %}
{% autoescape \"js\" %}
<script type=\"text/javascript\">
\$(function() {

    \$('.show-products').click(function(){
        if(\$(this).parents('.product-category').hasClass('selected')) {
            \$(this).parents('.product-category').find('.products').slideUp();
            \$(this).parents('.product-category').removeClass('selected');
        } else {
            \$('.product-category').removeClass('selected');
            \$(this).parents('.product-category').addClass('selected');
            \$('.product-category .products').slideUp('fast');
            \$(this).parents('.product-category').find('.products').slideToggle();
        }
        return false;
    });
    
    var open = '{{request.show}}';
    if(open) {
        \$('#pc-' + open + ' .show-products').trigger('click');
    }
});
</script>
{% endautoescape %}
{% endblock %}", "mod_order_index.phtml", "/var/www/localhost/htdocs/bb-themes/boxbilling/html/mod_order_index.phtml");
    }
}
