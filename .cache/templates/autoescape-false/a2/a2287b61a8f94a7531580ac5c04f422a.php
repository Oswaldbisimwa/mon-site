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

/* _default\feed.xsl.twig */
class __TwigTemplate_858bedadd7f1297bd27079b07c147276 extends Template
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
<xsl:stylesheet xmlns:xsl=\"http://www.w3.org/1999/XSL/Transform\" xmlns:atom=\"http://www.w3.org/2005/Atom\" version=\"3.0\">
  <xsl:output method=\"html\" version=\"1.0\" encoding=\"utf-8\" indent=\"yes\" />
  <xsl:template match=\"/\">
    <html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 5
        yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 5, $this->source); })()), "language", [], "any", false, false, false, 5);
        yield "\">
      <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"robots\" content=\"noindex\" />";
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()), "path", [], "any", false, false, false, 10) == "xsl/atom")) {
            yield "
        <title><xsl:value-of select=\"atom:feed/atom:title\" /> (feed)</title>";
        } else {
            // line 12
            yield "
        <title><xsl:value-of select=\"rss/channel/title\" /> (RSS)</title>";
        }
        // line 14
        yield "
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
          li + li {
            border-top: 1px solid var(--border);
          }
          li a {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: .5rem 1rem;
            padding: .9rem 1.25rem;
            transition: background-color .15s ease;
          }
          li a:hover {
            background: var(--bg);
            text-decoration: none;
          }
          li h3 {
            min-width: 0;
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
            flex: none;
            margin-left: auto;
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
            li a, .copy {
              transition: none;
            }
          }
        </style>
      </head>
      <body>
        <main>
          <header>
            <span class=\"badge\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\">
                <circle cx=\"6\" cy=\"18\" r=\"2.25\" />
                <path d=\"M3.75 10.5a9.75 9.75 0 0 1 9.75 9.75h-2.25a7.5 7.5 0 0 0-7.5-7.5z\" />
                <path d=\"M3.75 3.75a16.5 16.5 0 0 1 16.5 16.5H18A14.25 14.25 0 0 0 3.75 6z\" />
              </svg>";
        // line 247
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 247, $this->source); })()), "path", [], "any", false, false, false, 247) == "xsl/atom")) {
            yield "
              Atom";
        } else {
            // line 249
            yield "
              RSS";
        }
        // line 251
        yield "
            </span>";
        // line 253
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 253, $this->source); })()), "path", [], "any", false, false, false, 253) == "xsl/atom")) {
            yield "
            <h1><a><xsl:attribute name=\"href\"><xsl:value-of select=\"atom:feed/atom:link[@rel=\x27alternate\x27]/@href\" /></xsl:attribute><xsl:value-of select=\"atom:feed/atom:title\" /></a></h1>
            <xsl:if test=\"normalize-space(atom:feed/atom:subtitle)\">
              <p class=\"description\"><xsl:value-of select=\"atom:feed/atom:subtitle\" /></p>
            </xsl:if>";
        } else {
            // line 258
            yield "
            <h1><a><xsl:attribute name=\"href\"><xsl:value-of select=\"rss/channel/link\" /></xsl:attribute><xsl:value-of select=\"rss/channel/title\" /></a></h1>
            <xsl:if test=\"normalize-space(rss/channel/description)\">
              <p class=\"description\"><xsl:value-of select=\"rss/channel/description\" /></p>
            </xsl:if>";
        }
        // line 263
        yield "
            <div class=\"subscribe\">
              <p>";
        // line 265
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To subscribe to this web feed, copy its URL to your feed reader.", [], "messages");
        yield "</p>
              <label for=\"feed-url\">";
        // line 266
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Feed URL:", [], "messages");
        yield "</label>
              <div class=\"field\">
                <input id=\"feed-url\" onclick=\"this.select();\">
                  <xsl:attribute name=\"type\">url</xsl:attribute>
                  <xsl:attribute name=\"readonly\">readonly</xsl:attribute>
                  <xsl:attribute name=\"spellcheck\">false</xsl:attribute>";
        // line 272
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 272, $this->source); })()), "path", [], "any", false, false, false, 272) == "xsl/atom")) {
            yield "
                  <xsl:attribute name=\"value\"><xsl:value-of select=\"atom:feed/atom:link[@rel=\x27self\x27]/@href\" /></xsl:attribute>";
        } else {
            // line 274
            yield "
                  <xsl:attribute name=\"value\"><xsl:value-of select=\"rss/channel/atom:link[@rel=\x27self\x27]/@href\" /></xsl:attribute>";
        }
        // line 276
        yield "
                </input>
                <button type=\"button\" class=\"copy\" data-target=\"feed-url\" data-copied=\"";
        // line 278
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Copied!", [], "messages");
        yield "\">";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Copy", [], "messages");
        yield "</button>
              </div>
            </div>
          </header>
          <section>";
        // line 283
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 283, $this->source); })()), "path", [], "any", false, false, false, 283) == "xsl/atom")) {
            yield "
            <h2>";
            // line 284
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Feed’s entries", [], "messages");
            yield " <span class=\"count\"><xsl:value-of select=\"count(atom:feed/atom:entry)\" /></span></h2>
            <ol>
              <xsl:for-each select=\"atom:feed/atom:entry\">
              <li>
                <a>
                  <xsl:attribute name=\"href\"><xsl:value-of select=\"atom:link/@href\" /></xsl:attribute>
                  <h3><xsl:value-of select=\"atom:title\" /></h3>
                  <time><xsl:attribute name=\"datetime\"><xsl:value-of select=\"atom:published\" /></xsl:attribute><xsl:value-of select=\"substring(atom:published, 1, 10)\" /></time>
                </a>
              </li>
              </xsl:for-each>
            </ol>";
        } else {
            // line 296
            yield "
            <h2>";
            // line 297
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Feed’s entries", [], "messages");
            yield " <span class=\"count\"><xsl:value-of select=\"count(rss/channel/item)\" /></span></h2>
            <ol>
              <xsl:for-each select=\"rss/channel/item\">
              <li>
                <a>
                  <xsl:attribute name=\"href\"><xsl:value-of select=\"link\" /></xsl:attribute>
                  <h3><xsl:value-of select=\"title\" /></h3>
                  <time><xsl:attribute name=\"datetime\"><xsl:value-of select=\"substring(pubDate, 6, 11)\" /></xsl:attribute><xsl:value-of select=\"substring(pubDate, 6, 11)\" /></time>
                </a>
              </li>
              </xsl:for-each>
            </ol>";
        }
        // line 309
        yield "
          </section>
          <footer>";
        // line 312
        $context["generated_by"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 313
            yield "<a href=\"";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 313, $this->source); })()), "url", [], "any", false, false, false, 313);
            yield "\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 313, $this->source); })()), "poweredby", [], "any", false, false, false, 313);
            yield "</a>";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 314
        yield "
            <p>";
        // line 315
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Feed generated by %generated_by%", ["%generated_by%" => (isset($context["generated_by"]) || array_key_exists("generated_by", $context) ? $context["generated_by"] : (function () { throw new RuntimeError('Variable "generated_by" does not exist.', 315, $this->source); })())], "messages");
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
        return "_default\\feed.xsl.twig";
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
        return array (  419 => 315,  416 => 314,  408 => 313,  406 => 312,  402 => 309,  387 => 297,  384 => 296,  369 => 284,  365 => 283,  356 => 278,  352 => 276,  348 => 274,  343 => 272,  335 => 266,  331 => 265,  327 => 263,  320 => 258,  312 => 253,  309 => 251,  305 => 249,  300 => 247,  66 => 14,  62 => 12,  57 => 10,  50 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default\\feed.xsl.twig", "phar://C:/Users/TS/mon-site/cecil.phar/resources/layouts/_default/feed.xsl.twig");
    }
}
