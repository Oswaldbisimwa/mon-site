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

/* _default\list.atom.twig */
class __TwigTemplate_6ab949b963c6d26ed21459dd2eb5c55b extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->blocks = [
            'feed' => [$this, 'block_feed'],
            'entry' => [$this, 'block_entry'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->parent ??= $this->load("extended/feed.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["author_name"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, true, false, 1), "name", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 1, $this->source); })()), "author", [], "any", false, false, false, 1), "name", [], "any", false, false, false, 1), CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 1, $this->source); })()), "title", [], "any", false, false, false, 1))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 1, $this->source); })()), "title", [], "any", false, false, false, 1)));
        // line 2
        $context["author_uri"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, true, false, 2), "url", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "author", [], "any", false, false, false, 2), "url", [], "any", false, false, false, 2), CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "baseurl", [], "any", false, false, false, 2))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "baseurl", [], "any", false, false, false, 2)));
        // line 4
        $this->parent = $this->load("extended/feed.twig", 4);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_feed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "page", ["xsl/atom"], "method", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
<?xml-stylesheet type=\"text/xsl\" href=\"";
            // line 9
            yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, "xsl/atom", ["canonical" => true]);
            yield "\" media=\"all\"?>";
        }
        // line 10
        yield "
<feed xmlns=\"http://www.w3.org/2005/Atom\" xml:lang=\"";
        // line 11
        yield (string) (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 11, $this->source); })());
        yield "\">
  <id>";
        // line 12
        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 12, $this->source); })()), ["canonical" => true]);
        yield "</id>
  <title>";
        // line 13
        yield (string) $this->escaper->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })()));
        yield "</title>
  <subtitle><![CDATA[";
        // line 14
        yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14);
        yield "]]></subtitle>
  <link href=\"";
        // line 15
        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 15, $this->source); })()), ["canonical" => true, "format" => "atom"]);
        yield "\" rel=\"self\" type=\"application/atom+xml\" />
  <link href=\"";
        // line 16
        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 16, $this->source); })()), ["canonical" => true, "format" => "html"]);
        yield "\" rel=\"alternate\" type=\"text/html\" />
  <updated>";
        // line 17
        yield (string) $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["updated"]) || array_key_exists("updated", $context) ? $context["updated"] : (function () { throw new RuntimeError('Variable "updated" does not exist.', 17, $this->source); })()), "c");
        yield "</updated>
  <author>
    <name>";
        // line 19
        yield (string) (isset($context["author_name"]) || array_key_exists("author_name", $context) ? $context["author_name"] : (function () { throw new RuntimeError('Variable "author_name" does not exist.', 19, $this->source); })());
        yield "</name>
    <uri>";
        // line 20
        yield (string) (isset($context["author_uri"]) || array_key_exists("author_uri", $context) ? $context["author_uri"] : (function () { throw new RuntimeError('Variable "author_uri" does not exist.', 20, $this->source); })());
        yield "</uri>
  </author>";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 22, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            yield "
  <entry xml:lang=\"";
            // line 23
            yield (string) (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 23, $this->source); })());
            yield "\">";
            // line 24
            yield from $this->unwrap()->yieldBlock('entry', $context, $blocks);
            // line 41
            yield "
  </entry>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 43
        yield "
</feed>
";
        return; yield;
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entry(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "
    <id>";
        // line 25
        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), ["canonical" => true]);
        yield "</id>
    <title>";
        // line 26
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26));
        yield "</title>
    <published>";
        // line 27
        yield (string) $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "date", [], "any", false, false, false, 27), "c");
        yield "</published>";
        // line 28
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "updated", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 28, $this->source); })()), "updated", [], "any", false, false, false, 28))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
    <updated>";
            // line 29
            yield (string) $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 29, $this->source); })()), "updated", [], "any", false, false, false, 29), "c");
            yield "</updated>";
        }
        // line 30
        yield "
    <link href=\"";
        // line 31
        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), ["canonical" => true]);
        yield "\" rel=\"alternate\" type=\"text/html\" />";
        // line 32
        if (CoreExtension::inFilter("txt", ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "output", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 32, $this->source); })()), "output", [], "any", false, false, false, 32), "html")) : ("html")))) {
            yield "
    <content type=\"text\">
      <![CDATA[";
            // line 34
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "content", [], "any", false, false, false, 34);
            yield "]]>
    </content>";
        } else {
            // line 36
            yield "
    <content type=\"html\">
      <![CDATA[";
            // line 38
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "content", [], "any", false, false, false, 38);
            yield "]]>
    </content>";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_default\\list.atom.twig";
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
        return array (  214 => 38,  210 => 36,  205 => 34,  200 => 32,  197 => 31,  194 => 30,  190 => 29,  186 => 28,  183 => 27,  179 => 26,  175 => 25,  166 => 24,  159 => 43,  143 => 41,  141 => 24,  138 => 23,  119 => 22,  115 => 20,  111 => 19,  106 => 17,  102 => 16,  98 => 15,  94 => 14,  90 => 13,  86 => 12,  82 => 11,  79 => 10,  75 => 9,  71 => 8,  69 => 7,  62 => 6,  57 => 4,  55 => 2,  53 => 1,  46 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default\\list.atom.twig", "phar://C:/Users/TS/mon-site/cecil.phar/resources/layouts/_default/list.atom.twig");
    }
}
