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

/* _default\sitemap.xsl.twig */
class __TwigTemplate_349ded4081c628bfc3484569d32e5725 extends Template
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
        yield "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<xsl:stylesheet xmlns:xsl=\"http://www.w3.org/1999/XSL/Transform\" xmlns:sitemap=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\" xmlns:video=\"http://www.google.com/schemas/sitemap-video/1.1\" exclude-result-prefixes=\"sitemap xhtml video\" version=\"3.0\">
  <xsl:output method=\"html\" version=\"1.0\" encoding=\"utf-8\" indent=\"yes\" />
  <xsl:template match=\"/\">
    <html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 5
        yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 5, $this->source); })()), "language", [], "any", false, false, false, 5);
        yield "\">
      <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"robots\" content=\"noindex\" />
        <title>Sitemap - ";
        // line 10
        yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10);
        yield "</title>
        <style type=\"text/css\">
          :root {
            color-scheme: light dark;
            --bg: #F6F7F9;
            --surface: #FFFFFF;
            --text: #4B5563;
            --muted: #6B7280;
            --heading: #111827;
            --accent: #EA6A1A;
            --accent-soft: #FDEBDD;
            --link: #1D4ED8;
            --border: #E5E7EB;
            --shadow: 0 1px 2px rgb(0 0 0 / .04), 0 4px 16px rgb(0 0 0 / .04);
            --radius: .75rem;
          }
          @media (prefers-color-scheme: dark) {
            :root {
              --bg: #0F1115;
              --surface: #171A21;
              --text: #A7AFBC;
              --muted: #7D8590;
              --heading: #F0F3F6;
              --accent: #F5893D;
              --accent-soft: #3A2414;
              --link: #7AB0FF;
              --border: #262B34;
              --shadow: none;
            }
          }
          *, *::before, *::after {
            box-sizing: border-box;
          }
          html {
            -webkit-text-size-adjust: 100%;
            text-size-adjust: 100%;
          }
          body {
            margin: 0;
            padding: clamp(1rem, 4vw, 3rem) 1rem;
            background: var(--bg);
            color: var(--text);
            font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif;
            font-size: 1rem;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
          }
          main {
            max-width: 44rem;
            margin: 0 auto;
          }
          a {
            color: var(--link);
            text-decoration: none;
          }
          a:hover {
            text-decoration: underline;
            text-underline-offset: .2em;
          }
          a:focus-visible, input:focus-visible, button:focus-visible {
            outline: 2px solid var(--accent);
            outline-offset: 2px;
          }
          header {
            margin-bottom: 2rem;
          }
          .badge {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            padding: .2rem .65rem .2rem .45rem;
            border-radius: 999px;
            background: var(--accent-soft);
            color: var(--accent);
            font-size: .8125rem;
            font-weight: 600;
            letter-spacing: .02em;
          }
          .badge svg {
            width: 1rem;
            height: 1rem;
          }
          h1 {
            margin: .75rem 0 .25rem;
            color: var(--heading);
            font-size: clamp(1.75rem, 5vw, 2.25rem);
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -.02em;
          }
          h1 a {
            color: inherit;
          }
          .description {
            margin: 0;
            color: var(--muted);
            font-size: 1.0625rem;
          }
          .subscribe {
            margin-top: 1.5rem;
            padding: 1.25rem;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            background: var(--surface);
            box-shadow: var(--shadow);
          }
          .subscribe p {
            margin: 0 0 .75rem;
          }
          .subscribe label {
            display: block;
            margin-bottom: .35rem;
            color: var(--heading);
            font-size: .875rem;
            font-weight: 600;
          }
          .field {
            display: flex;
            gap: .5rem;
          }
          .subscribe input {
            flex: 1;
            min-width: 0;
            padding: .6rem .75rem;
            border: 1px solid var(--border);
            border-radius: .5rem;
            background: var(--bg);
            color: var(--heading);
            font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
            font-size: .875rem;
          }
          .copy {
            flex: none;
            padding: .6rem 1rem;
            border: 0;
            border-radius: .5rem;
            background: var(--accent);
            color: #FFFFFF;
            font: inherit;
            font-size: .875rem;
            font-weight: 600;
            cursor: pointer;
            transition: filter .15s ease;
          }
          .copy:hover {
            filter: brightness(1.08);
          }
          .copy.copied {
            background: #16A34A;
          }
          h2 {
            display: flex;
            align-items: center;
            gap: .5rem;
            margin: 0 0 .75rem;
            color: var(--heading);
            font-size: 1.125rem;
            font-weight: 600;
          }
          .count {
            padding: 0 .5rem;
            border-radius: 999px;
            background: var(--border);
            color: var(--muted);
            font-size: .75rem;
            font-weight: 600;
            line-height: 1.5rem;
          }
          ol {
            margin: 0;
            padding: 0;
            list-style: none;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            background: var(--surface);
            box-shadow: var(--shadow);
            overflow: hidden;
          }
          .entry + .entry {
            border-top: 1px solid var(--border);
          }
          .entry {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: .5rem 1rem;
            padding: .9rem 1.25rem;
            transition: background-color .15s ease;
          }
          .entry:hover {
            background: var(--bg);
          }
          li h3 {
            margin: 0;
            color: var(--heading);
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.4;
          }
          li a:hover h3 {
            color: var(--link);
          }
          li time {
            display: block;
            margin-top: .15rem;
            color: var(--muted);
            font-size: .8125rem;
            font-variant-numeric: tabular-nums;
          }
          footer {
            margin-top: 2rem;
            color: var(--muted);
            font-size: .8125rem;
            text-align: center;
          }
          @media (prefers-reduced-motion: reduce) {
            .entry, .copy {
              transition: none;
            }
          }
          li .loc {
            min-width: 0;
            color: var(--heading);
            font-size: .9375rem;
            overflow-wrap: anywhere;
          }
          li .loc::after {
            content: \"\";
            position: absolute;
            inset: 0;
          }
          .entry:hover .loc {
            color: var(--link);
            text-decoration: none;
          }
          li time {
            flex: none;
            margin-top: 0;
            margin-left: auto;
          }
          .alternates {
            display: flex;
            flex-wrap: wrap;
            gap: .375rem;
            margin: 0;
            padding: 0;
            list-style: none;
          }
          .pill {
            position: relative;
            z-index: 1;
            display: inline-flex;
            align-items: center;
            gap: .25rem;
            padding: 0 .5rem;
            border: 1px solid var(--border);
            border-radius: 999px;
            color: var(--muted);
            font-size: .75rem;
            font-weight: 600;
            line-height: 1.375rem;
          }
          .pill:hover {
            border-color: var(--link);
            color: var(--link);
            text-decoration: none;
          }
          .pill svg {
            width: .75rem;
            height: .75rem;
          }
          .pill-video {
            border-color: transparent;
            background: var(--accent-soft);
            color: var(--accent);
          }
        </style>
      </head>
      <body>
        <main>
          <header>
            <span class=\"badge\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\">
                <rect x=\"9\" y=\"3\" width=\"6\" height=\"5\" rx=\"1\" />
                <rect x=\"3\" y=\"16\" width=\"6\" height=\"5\" rx=\"1\" />
                <rect x=\"15\" y=\"16\" width=\"6\" height=\"5\" rx=\"1\" />
                <path d=\"M12 8v4M6 16v-4h12v4\" />
              </svg>
              Sitemap
            </span>
            <h1><a href=\"";
        // line 301
        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 301, $this->source); })()), "home", [], "any", false, false, false, 301), ["canonical" => true]);
        yield "\">";
        yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 301, $this->source); })()), "title", [], "any", false, false, false, 301);
        yield "</a></h1>";
        // line 302
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "description", [], "any", true, true, false, 302)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 302, $this->source); })()), "description", [], "any", false, false, false, 302))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
            <p class=\"description\">";
            // line 303
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 303, $this->source); })()), "description", [], "any", false, false, false, 303);
            yield "</p>";
        }
        // line 304
        yield "
            <div class=\"subscribe\">
              <label for=\"sitemap-url\">";
        // line 306
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sitemap URL:", [], "messages");
        yield "</label>
              <div class=\"field\">
                <input id=\"sitemap-url\" onclick=\"this.select();\">
                  <xsl:attribute name=\"type\">url</xsl:attribute>
                  <xsl:attribute name=\"readonly\">readonly</xsl:attribute>
                  <xsl:attribute name=\"spellcheck\">false</xsl:attribute>
                  <xsl:attribute name=\"value\">";
        // line 312
        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, "sitemap.xml", ["canonical" => true]);
        yield "</xsl:attribute>
                </input>
                <button type=\"button\" class=\"copy\" data-target=\"sitemap-url\" data-copied=\"";
        // line 314
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Copied!", [], "messages");
        yield "\">";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Copy", [], "messages");
        yield "</button>
              </div>
            </div>
          </header>
          <section>
            <h2>";
        // line 319
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of URLs", [], "messages");
        yield " <span class=\"count\"><xsl:value-of select=\"count(sitemap:urlset/sitemap:url)\" /></span></h2>
            <ol>
              <xsl:for-each select=\"sitemap:urlset/sitemap:url\">
              <li class=\"entry\">
                <a class=\"loc\">
                  <xsl:attribute name=\"href\"><xsl:value-of select=\"sitemap:loc\" /></xsl:attribute>
                  <xsl:value-of select=\"sitemap:loc\" />
                </a>
                <xsl:variable name=\"loc\" select=\"sitemap:loc\" />
                <xsl:if test=\"xhtml:link[@rel=\x27alternate\x27][@href != \$loc]\">
                  <ul class=\"alternates\" aria-label=\"";
        // line 329
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Translations", [], "messages");
        yield "\">
                    <xsl:for-each select=\"xhtml:link[@rel=\x27alternate\x27][@href != \$loc]\">
                    <li>
                      <a class=\"pill\">
                        <xsl:attribute name=\"href\"><xsl:value-of select=\"@href\" /></xsl:attribute>
                        <xsl:attribute name=\"hreflang\"><xsl:value-of select=\"@hreflang\" /></xsl:attribute>
                        <xsl:attribute name=\"title\"><xsl:value-of select=\"@href\" /></xsl:attribute>
                        <xsl:value-of select=\"@hreflang\" />
                      </a>
                    </li>
                    </xsl:for-each>
                  </ul>
                </xsl:if>
                <xsl:for-each select=\"video:video\">
                  <a class=\"pill pill-video\">
                    <xsl:attribute name=\"href\">
                      <xsl:choose>
                        <xsl:when test=\"video:player_loc\"><xsl:value-of select=\"video:player_loc\" /></xsl:when>
                        <xsl:otherwise><xsl:value-of select=\"video:content_loc\" /></xsl:otherwise>
                      </xsl:choose>
                    </xsl:attribute>
                    <xsl:attribute name=\"title\"><xsl:value-of select=\"video:title\" /></xsl:attribute>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\">
                      <path d=\"M7 4.5v15a1 1 0 0 0 1.5.86l12.5-7.5a1 1 0 0 0 0-1.72L8.5 3.64A1 1 0 0 0 7 4.5z\" />
                    </svg>
                    ";
        // line 354
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Video", [], "messages");
        // line 355
        yield "                  </a>
                </xsl:for-each>
                <xsl:if test=\"sitemap:lastmod\">
                  <time><xsl:attribute name=\"datetime\"><xsl:value-of select=\"sitemap:lastmod\" /></xsl:attribute><xsl:value-of select=\"substring(sitemap:lastmod, 1, 10)\" /></time>
                </xsl:if>
              </li>
              </xsl:for-each>
            </ol>
          </section>
          <footer>";
        // line 365
        $context["generated_by"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 366
            yield "<a href=\"";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 366, $this->source); })()), "url", [], "any", false, false, false, 366);
            yield "\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 366, $this->source); })()), "poweredby", [], "any", false, false, false, 366);
            yield "</a>";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 367
        yield "
            <p>";
        // line 368
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sitemap generated by %generated_by%", ["%generated_by%" => (isset($context["generated_by"]) || array_key_exists("generated_by", $context) ? $context["generated_by"] : (function () { throw new RuntimeError('Variable "generated_by" does not exist.', 368, $this->source); })())], "messages");
        yield "</p>
          </footer>
        </main>
        <script>
          <![CDATA[
          document.querySelectorAll(\x27.copy\x27).forEach(function (button) {
            var label = button.textContent;
            button.addEventListener(\x27click\x27, function () {
              var input = document.getElementById(button.dataset.target);
              var done = function () {
                button.textContent = button.dataset.copied;
                button.classList.add(\x27copied\x27);
                setTimeout(function () {
                  button.textContent = label;
                  button.classList.remove(\x27copied\x27);
                }, 2000);
              };
              if (navigator.clipboard) {
                navigator.clipboard.writeText(input.value).then(done);
              } else {
                input.select();
                document.execCommand(\x27copy\x27);
                done();
              }
            });
          });
          // localized dates
          if (window.Intl) {
            var format = new Intl.DateTimeFormat(document.documentElement.lang || undefined, { dateStyle: \x27medium\x27, timeZone: \x27UTC\x27 });
            document.querySelectorAll(\x27time[datetime]\x27).forEach(function (time) {
              var value = time.getAttribute(\x27datetime\x27);
              var iso = value.match(/^(\\d{4})-(\\d{2})-(\\d{2})/);
              var date = iso ? new Date(Date.UTC(iso[1], iso[2] - 1, iso[3])) : new Date(value + \x27 UTC\x27);
              if (!isNaN(date)) {
                time.textContent = format.format(date);
              }
            });
          }
          ]]>
        </script>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_default\\sitemap.xsl.twig";
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
        return array (  460 => 368,  457 => 367,  449 => 366,  447 => 365,  436 => 355,  434 => 354,  406 => 329,  393 => 319,  383 => 314,  378 => 312,  369 => 306,  365 => 304,  361 => 303,  357 => 302,  352 => 301,  58 => 10,  50 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default\\sitemap.xsl.twig", "phar://C:/Users/TS/mon-site/cecil.phar/resources/layouts/_default/sitemap.xsl.twig");
    }
}
