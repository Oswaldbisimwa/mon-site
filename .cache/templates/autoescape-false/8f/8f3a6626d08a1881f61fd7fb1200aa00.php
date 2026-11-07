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

/* base.html.twig */
class __TwigTemplate_9de5a2c712414acc77c26bb30b2e329f extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6);
        yield " | ";
        yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6);
        yield "</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@600;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->asset("css/style.css");
        yield "\">
</head>
<body>
    <header class=\"navbar\">
        <div class=\"logo\">
            <a href=\"";
        // line 15
        yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, "/");
        yield "\">";
        yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15);
        yield "<span>.</span></a>
        </div>
        <nav class=\"menu\">
            <ul>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 19, $this->source); })()), "menus", [], "any", false, false, false, 19), "main", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            yield "                    <li><a href=\"";
            yield (string) $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 20));
            yield "\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 20);
            yield "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 22
        yield "            </ul>
        </nav>
    </header>

    <main class=\"content\">
        ";
        // line 27
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 28
        yield "    </main>

    <footer class=\"footer\">
        <p>&copy; ";
        // line 31
        yield (string) $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y");
        yield " ";
        yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 31, $this->source); })()), "author", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31);
        yield ". Développé avec passion.</p>
        <p>Me contacter : <a href=\"mailto:";
        // line 32
        yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 32, $this->source); })()), "author", [], "any", false, false, false, 32), "email", [], "any", false, false, false, 32);
        yield "\">";
        yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 32, $this->source); })()), "author", [], "any", false, false, false, 32), "email", [], "any", false, false, false, 32);
        yield "</a></p>
    </footer>
</body>
</html>";
        return; yield;
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  125 => 27,  114 => 32,  108 => 31,  103 => 28,  101 => 27,  94 => 22,  82 => 20,  78 => 19,  69 => 15,  61 => 10,  52 => 6,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "C:\\Users\\TS\\mon-site\\layouts\\base.html.twig");
    }
}
