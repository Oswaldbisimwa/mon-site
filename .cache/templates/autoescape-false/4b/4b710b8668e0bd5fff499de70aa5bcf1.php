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

/* _default\sitemap.xml.twig */
class __TwigTemplate_7ea2a3fc8364ace52ef6d9ed74424de2 extends Template
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
        yield "<?xml version=\"1.0\" encoding=\"utf-8\" standalone=\"yes\"?>";
        // line 2
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "page", ["xsl/sitemap"], "method", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
<?xml-stylesheet type=\"text/xsl\" href=\"";
            // line 3
            yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, "xsl/sitemap", ["canonical" => true]);
            yield "\" media=\"all\"?>";
        }
        // line 4
        yield "
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
  xmlns:xhtml=\"http://www.w3.org/1999/xhtml\"
  xmlns:video=\"http://www.google.com/schemas/sitemap-video/1.1\"
>";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Cecil\Renderer\Extension\Collection']->sortByDate(Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "allpages", [], "any", false, false, false, 9), "showable", [], "any", false, false, false, 9), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "canonical", [], "any", false, true, false, 9), "url", [], "any", true, true, false, 9) && !CoreExtension::inFilter("noindex", Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "metatags", [], "any", false, true, false, 9), "robots", [], "any", true, true, false, 9) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 9, $this->source); })()), "metatags", [], "any", false, false, false, 9), "robots", [], "any", false, false, false, 9)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 9, $this->source); })()), "metatags", [], "any", false, false, false, 9), "robots", [], "any", false, false, false, 9)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 9), "robots", [], "any", true, true, false, 9) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "metatags", [], "any", false, false, false, 9), "robots", [], "any", false, false, false, 9)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "metatags", [], "any", false, false, false, 9), "robots", [], "any", false, false, false, 9)) : (""))))))); })));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            yield "
  <url>
    <loc>";
            // line 11
            yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["page"], ["canonical" => true]);
            yield "</loc>
    <lastmod>";
            // line 12
            yield (string) $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "date", [], "any", false, false, false, 12), "Y-m-d");
            yield "</lastmod>
    <changefreq>";
            // line 13
            yield (string) ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, true, false, 13), "changefreq", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, false, false, 13), "changefreq", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "pages", [], "any", false, false, false, 13), "default", [], "any", false, false, false, 13), "sitemap", [], "any", false, false, false, 13), "changefreq", [], "any", false, false, false, 13))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "pages", [], "any", false, false, false, 13), "default", [], "any", false, false, false, 13), "sitemap", [], "any", false, false, false, 13), "changefreq", [], "any", false, false, false, 13)));
            yield "</changefreq>
    <priority>";
            // line 14
            yield (string) ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, true, false, 14), "priority", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, false, false, 14), "priority", [], "any", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "pages", [], "any", false, false, false, 14), "default", [], "any", false, false, false, 14), "sitemap", [], "any", false, false, false, 14), "priority", [], "any", false, false, false, 14))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "pages", [], "any", false, false, false, 14), "default", [], "any", false, false, false, 14), "sitemap", [], "any", false, false, false, 14), "priority", [], "any", false, false, false, 14)));
            yield "</priority>";
            // line 16
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["page"], "translations", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "translations", [], "any", false, false, false, 16), [])) : ([]))) >= 1) && CoreExtension::getAttribute($this->env, $this->source, $context["page"], "language", [], "any", true, true, false, 16))) {
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "translations", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["alternate"]) {
                    yield "
    <xhtml:link rel=\"alternate\" hreflang=\"";
                    // line 18
                    yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "language", [], "any", false, false, false, 18);
                    yield "\" href=\"";
                    yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["alternate"], ["canonical" => true]);
                    yield "\"/>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['alternate'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 19
                yield "
    <xhtml:link rel=\"alternate\" hreflang=\"";
                // line 20
                yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["page"], "language", [], "any", false, false, false, 20);
                yield "\" href=\"";
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["page"], ["canonical" => true]);
                yield "\"/>";
                // line 22
                $context["defaultLanguage"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "language", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "language", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 22, $this->source); })()), "language", [], "any", false, false, false, 22))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 22, $this->source); })()), "language", [], "any", false, false, false, 22)));
                // line 23
                $context["defaultPage"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["page"], "language", [], "any", false, false, false, 23) == (isset($context["defaultLanguage"]) || array_key_exists("defaultLanguage", $context) ? $context["defaultLanguage"] : (function () { throw new RuntimeError('Variable "defaultLanguage" does not exist.', 23, $this->source); })()))) ? ($context["page"]) : (Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, $context["page"], "translations", [], "any", false, false, false, 23), function ($__translation__) use ($context, $macros) { $context["translation"] = $__translation__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 23, $this->source); })()), "language", [], "any", false, false, false, 23) == (isset($context["defaultLanguage"]) || array_key_exists("defaultLanguage", $context) ? $context["defaultLanguage"] : (function () { throw new RuntimeError('Variable "defaultLanguage" does not exist.', 23, $this->source); })())); }))));
                // line 24
                if ((($tmp = (isset($context["defaultPage"]) || array_key_exists("defaultPage", $context) ? $context["defaultPage"] : (function () { throw new RuntimeError('Variable "defaultPage" does not exist.', 24, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "
    <xhtml:link rel=\"alternate\" hreflang=\"x-default\" href=\"";
                    // line 25
                    yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["defaultPage"]) || array_key_exists("defaultPage", $context) ? $context["defaultPage"] : (function () { throw new RuntimeError('Variable "defaultPage" does not exist.', 25, $this->source); })()), ["canonical" => true]);
                    yield "\"/>";
                }
            }
            // line 29
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["page"], "videos", [], "any", true, true, false, 29) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["page"], "videos", [], "any", false, false, false, 29)) > 0)) && CoreExtension::getAttribute($this->env, $this->source, $context["page"], "image", [], "any", true, true, false, 29))) {
                yield "
    <video:video>
      <video:title><![CDATA[";
                // line 31
                yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 31);
                yield "]]></video:title>
      <video:description><![CDATA[";
                // line 32
                yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["page"], "description", [], "any", false, false, false, 32);
                yield "]]></video:description>
      <video:thumbnail_loc>";
                // line 33
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $this->extensions['Cecil\Renderer\Extension\Core']->asset(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "image", [], "any", false, false, false, 33)), ["canonical" => true]);
                yield "</video:thumbnail_loc>
      <video:content_loc>";
                // line 34
                yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $this->extensions['Cecil\Renderer\Extension\Core']->asset(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "videos", [], "any", false, false, false, 34), 0, [], "array", false, false, false, 34)), ["canonical" => true]);
                yield "</video:content_loc>";
                // line 35
                if (CoreExtension::inFilter("embed", CoreExtension::getAttribute($this->env, $this->source, $context["page"], "output", [], "any", false, false, false, 35))) {
                    yield "
      <video:player_loc>";
                    // line 36
                    yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["page"], ["canonical" => true, "format" => "embed"]);
                    yield "</video:player_loc>";
                }
                // line 37
                yield "
      <video:duration>";
                // line 38
                yield (string) Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Cecil\Renderer\Extension\Core']->asset(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "videos", [], "any", false, false, false, 38), 0, [], "array", false, false, false, 38)), "video", [], "any", false, false, false, 38), "duration", [], "any", false, false, false, 38));
                yield "</video:duration>
      <video:publication_date>";
                // line 39
                yield (string) $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "date", [], "any", false, false, false, 39), "c");
                yield "</video:publication_date>
    </video:video>";
            }
            // line 41
            yield "
  </url>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 43
        yield "
</urlset>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_default\\sitemap.xml.twig";
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
        return array (  169 => 43,  161 => 41,  156 => 39,  152 => 38,  149 => 37,  145 => 36,  141 => 35,  138 => 34,  134 => 33,  130 => 32,  126 => 31,  121 => 29,  116 => 25,  112 => 24,  110 => 23,  108 => 22,  103 => 20,  100 => 19,  90 => 18,  84 => 17,  82 => 16,  79 => 14,  75 => 13,  71 => 12,  67 => 11,  60 => 9,  54 => 4,  50 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default\\sitemap.xml.twig", "phar://C:/Users/TS/mon-site/cecil.phar/resources/layouts/_default/sitemap.xml.twig");
    }
}
