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

/* quiz/dist/index.html */
class __TwigTemplate_7416944a99aa8841ab192ea566a883d88526f32a2c494b92be669a8b860d8ab5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/dist/index.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/dist/index.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" >
<head>
  <meta charset=\"UTF-8\">
  <title>CodePen - Simple JavaScript Quiz With Pagination</title>
  <link rel=\"stylesheet\" href=\"./style.css\">

</head>
<body>
<!-- partial:index.partial.html -->
<h1>Quiz on Important Facts</h1>
<div class=\"quiz-container\">
  <div id=\"quiz\"></div>
</div>
<button id=\"previous\">Previous Question</button>
<button id=\"next\">Next Question</button>
<button id=\"submit\">Submit Quiz</button>
<div id=\"results\"></div>
<!-- partial -->
  <script  src=\"./script.js\"></script>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "quiz/dist/index.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" >
<head>
  <meta charset=\"UTF-8\">
  <title>CodePen - Simple JavaScript Quiz With Pagination</title>
  <link rel=\"stylesheet\" href=\"./style.css\">

</head>
<body>
<!-- partial:index.partial.html -->
<h1>Quiz on Important Facts</h1>
<div class=\"quiz-container\">
  <div id=\"quiz\"></div>
</div>
<button id=\"previous\">Previous Question</button>
<button id=\"next\">Next Question</button>
<button id=\"submit\">Submit Quiz</button>
<div id=\"results\"></div>
<!-- partial -->
  <script  src=\"./script.js\"></script>

</body>
</html>
", "quiz/dist/index.html", "/app/templates/quiz/dist/index.html");
    }
}
