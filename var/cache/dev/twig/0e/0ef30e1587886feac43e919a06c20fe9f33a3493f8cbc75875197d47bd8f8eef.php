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

/* quiz/quiz.html.twig */
class __TwigTemplate_c86cec05d1893efbd34c9d641c7afe905a53e3a41718c1cb0fd275a10fd55ea9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/quiz.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/quiz.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/quiz.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <head>
        <meta charset=\"UTF-8\">
        <title>CodePen - Simple JavaScript Quiz With Pagination</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
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
    <script>
        (function(){
            // Functions
            function buildQuiz(){
                // variable to store the HTML output
                const output = [];

                // for each question...
                myQuestions.forEach(
                    (currentQuestion, questionNumber) => {

                        // variable to store the list of possible answers
                        const answers = [];

                        // and for each available answer...
                        for(letter in currentQuestion.answers){

                            // ...add an HTML radio button
                            answers.push(
                                `<label>
              <input type=\"radio\" name=\"question\${questionNumber}\" value=\"\${letter}\">
              \${letter} :
              \${currentQuestion.answers[letter]}
            </label>`
                            );
                        }

                        // add this question and its answers to the output
                        output.push(
                            `<div class=\"slide\">
            <div class=\"question\"> \${currentQuestion.question} </div>
            <div class=\"answers\"> \${answers.join(\"\")} </div>
          </div>`
                        );
                    }
                );

                // finally combine our output list into one string of HTML and put it on the page
                quizContainer.innerHTML = output.join('');
            }

            function showResults(){

                // gather answer containers from our quiz
                const answerContainers = quizContainer.querySelectorAll('.answers');

                // keep track of user's answers
                let numCorrect = 0;

                // for each question...
                myQuestions.forEach( (currentQuestion, questionNumber) => {

                    // find selected answer
                    const answerContainer = answerContainers[questionNumber];
                    const selector = `input[name=question\${questionNumber}]:checked`;
                    const userAnswer = (answerContainer.querySelector(selector) || {}).value;

                    // if answer is correct
                    if(userAnswer === currentQuestion.correctAnswer){
                        // add to the number of correct answers
                        numCorrect++;

                        // color the answers green
                        answerContainers[questionNumber].style.color = 'lightgreen';
                    }
                    // if answer is wrong or blank
                    else{
                        // color the answers red
                        answerContainers[questionNumber].style.color = 'red';
                    }
                });

                // show number of correct answers out of total
                resultsContainer.innerHTML = `\${numCorrect} out of \${myQuestions.length}`;
            }

            function showSlide(n) {
                slides[currentSlide].classList.remove('active-slide');
                slides[n].classList.add('active-slide');
                currentSlide = n;
                if(currentSlide === 0){
                    previousButton.style.display = 'none';
                }
                else{
                    previousButton.style.display = 'inline-block';
                }
                if(currentSlide === slides.length-1){
                    nextButton.style.display = 'none';
                    submitButton.style.display = 'inline-block';
                }
                else{
                    nextButton.style.display = 'inline-block';
                    submitButton.style.display = 'none';
                }
            }

            function showNextSlide() {
                showSlide(currentSlide + 1);
            }

            function showPreviousSlide() {
                showSlide(currentSlide - 1);
            }

            // Variables
            const quizContainer = document.getElementById('quiz');
            const resultsContainer = document.getElementById('results');
            const submitButton = document.getElementById('submit');

            let myQuestions = [];
            ";
        // line 135
        $context["x"] = 0;
        // line 136
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 136, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            // line 137
            echo "                myQuestions.push({
                    question: \"";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quest"], "title", [], "any", false, false, false, 138), "html", null, true);
            echo "\",
                    answers: {
                        1: \"";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new RuntimeError('Variable "answers" does not exist.', 140, $this->source); })()), (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 140, $this->source); })()), [], "array", false, false, false, 140), "title", [], "any", false, false, false, 140), "html", null, true);
            echo "\",
                        2: \"Sheryl Sandberg\",
                        3: \"Brendan Eicr\"
                    },
                    correctAnswer: \"2\"
                });
            ";
            // line 146
            $context["x"] = ((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 146, $this->source); })()) + 1);
            // line 147
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "

            // Kick things off
            buildQuiz();

            // Pagination
            const previousButton = document.getElementById(\"previous\");
            const nextButton = document.getElementById(\"next\");
            const slides = document.querySelectorAll(\".slide\");
            let currentSlide = 0;

            // Show the first slide
            showSlide(currentSlide);

            // Event listeners
            submitButton.addEventListener('click', showResults);
            previousButton.addEventListener(\"click\", showPreviousSlide);
            nextButton.addEventListener(\"click\", showNextSlide);
        })();
    </script>

    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quiz/quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 10,  266 => 9,  234 => 148,  228 => 147,  226 => 146,  217 => 140,  212 => 138,  209 => 137,  204 => 136,  202 => 135,  77 => 12,  75 => 9,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body%}

    <head>
        <meta charset=\"UTF-8\">
        <title>CodePen - Simple JavaScript Quiz With Pagination</title>
        {% block stylesheets %}
            <link href=\"{{ asset('css/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}

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
    <script>
        (function(){
            // Functions
            function buildQuiz(){
                // variable to store the HTML output
                const output = [];

                // for each question...
                myQuestions.forEach(
                    (currentQuestion, questionNumber) => {

                        // variable to store the list of possible answers
                        const answers = [];

                        // and for each available answer...
                        for(letter in currentQuestion.answers){

                            // ...add an HTML radio button
                            answers.push(
                                `<label>
              <input type=\"radio\" name=\"question\${questionNumber}\" value=\"\${letter}\">
              \${letter} :
              \${currentQuestion.answers[letter]}
            </label>`
                            );
                        }

                        // add this question and its answers to the output
                        output.push(
                            `<div class=\"slide\">
            <div class=\"question\"> \${currentQuestion.question} </div>
            <div class=\"answers\"> \${answers.join(\"\")} </div>
          </div>`
                        );
                    }
                );

                // finally combine our output list into one string of HTML and put it on the page
                quizContainer.innerHTML = output.join('');
            }

            function showResults(){

                // gather answer containers from our quiz
                const answerContainers = quizContainer.querySelectorAll('.answers');

                // keep track of user's answers
                let numCorrect = 0;

                // for each question...
                myQuestions.forEach( (currentQuestion, questionNumber) => {

                    // find selected answer
                    const answerContainer = answerContainers[questionNumber];
                    const selector = `input[name=question\${questionNumber}]:checked`;
                    const userAnswer = (answerContainer.querySelector(selector) || {}).value;

                    // if answer is correct
                    if(userAnswer === currentQuestion.correctAnswer){
                        // add to the number of correct answers
                        numCorrect++;

                        // color the answers green
                        answerContainers[questionNumber].style.color = 'lightgreen';
                    }
                    // if answer is wrong or blank
                    else{
                        // color the answers red
                        answerContainers[questionNumber].style.color = 'red';
                    }
                });

                // show number of correct answers out of total
                resultsContainer.innerHTML = `\${numCorrect} out of \${myQuestions.length}`;
            }

            function showSlide(n) {
                slides[currentSlide].classList.remove('active-slide');
                slides[n].classList.add('active-slide');
                currentSlide = n;
                if(currentSlide === 0){
                    previousButton.style.display = 'none';
                }
                else{
                    previousButton.style.display = 'inline-block';
                }
                if(currentSlide === slides.length-1){
                    nextButton.style.display = 'none';
                    submitButton.style.display = 'inline-block';
                }
                else{
                    nextButton.style.display = 'inline-block';
                    submitButton.style.display = 'none';
                }
            }

            function showNextSlide() {
                showSlide(currentSlide + 1);
            }

            function showPreviousSlide() {
                showSlide(currentSlide - 1);
            }

            // Variables
            const quizContainer = document.getElementById('quiz');
            const resultsContainer = document.getElementById('results');
            const submitButton = document.getElementById('submit');

            let myQuestions = [];
            {% set x = 0  %}
            {%   for quest in question %}
                myQuestions.push({
                    question: \"{{ quest.title }}\",
                    answers: {
                        1: \"{{answers[x].title}}\",
                        2: \"Sheryl Sandberg\",
                        3: \"Brendan Eicr\"
                    },
                    correctAnswer: \"2\"
                });
            {% set x = x + 1%}
            {% endfor %}


            // Kick things off
            buildQuiz();

            // Pagination
            const previousButton = document.getElementById(\"previous\");
            const nextButton = document.getElementById(\"next\");
            const slides = document.querySelectorAll(\".slide\");
            let currentSlide = 0;

            // Show the first slide
            showSlide(currentSlide);

            // Event listeners
            submitButton.addEventListener('click', showResults);
            previousButton.addEventListener(\"click\", showPreviousSlide);
            nextButton.addEventListener(\"click\", showNextSlide);
        })();
    </script>

    </body>
{% endblock %}", "quiz/quiz.html.twig", "/app/templates/quiz/quiz.html.twig");
    }
}
