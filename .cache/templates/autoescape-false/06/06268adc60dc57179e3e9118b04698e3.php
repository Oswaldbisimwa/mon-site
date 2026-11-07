<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* _default\robots.txt.twig */
class __TwigTemplate_a96776d87823cfcd896f6772a939242e extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "# all user agents
User-agent: *
# allow all pages
Allow: /
# disallow redirects pages
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 6, $this->source); })()), "allpages", [], "any", false, false, false, 6), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "redirect", [], "any", true, true, false, 6) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 6, $this->source); })()), "type", [], "any", false, false, false, 6) == "page")); }));
        foreach ($context['_seq'] as $context["_key"] => $context["redirect"]) {
            // line 7
            yield "Disallow: ";
            yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["redirect"], ["canonical" => false]);
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['redirect'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "pages", [], "any", false, true, false, 9), 404, [], "any", true, true, false, 9)) {
            // line 10
            yield "# disallow 404 page
Disallow: ";
            // line 11
            yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 11, $this->source); })()), "pages", [], "any", false, false, false, 11), 404, [], "any", false, false, false, 11), ["canonical" => false]);
            // line 12
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "pages", [], "any", false, true, false, 12), 404, [], "any", false, true, false, 12), "translations", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 12, $this->source); })()), "pages", [], "any", false, false, false, 12), 404, [], "any", false, false, false, 12), "translations", [], "any", false, false, false, 12), [])) : ([]))) > 0)) {
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 13, $this->source); })()), "pages", [], "any", false, false, false, 13), 404, [], "any", false, false, false, 13), "translations", [], "any", false, false, false, 13));
                foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
                    yield "
Disallow: ";
                    // line 14
                    yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["translation"], ["canonical" => false]);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['translation'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
            }
            // line 16
            yield "
";
        }
        // line 18
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 18, $this->source); })()), "body", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "
# custom rules from robots.md page
";
            // line 21
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 21, $this->source); })()), "body", [], "any", false, false, false, 21);
            yield "
";
        }
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "pages", [], "any", false, true, false, 23), "sitemap", [], "any", true, true, false, 23)) {
            // line 24
            yield "
# sitemap
Sitemap: ";
            // line 26
            yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, "sitemap", ["canonical" => true]);
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_default\\robots.txt.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  109 => 26,  105 => 24,  103 => 23,  98 => 21,  94 => 19,  92 => 18,  88 => 16,  80 => 14,  74 => 13,  72 => 12,  70 => 11,  67 => 10,  65 => 9,  55 => 7,  51 => 6,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default\\robots.txt.twig", "phar://C:/Users/TS/mon-site/cecil.phar/resources/layouts/_default/robots.txt.twig");
    }
}
