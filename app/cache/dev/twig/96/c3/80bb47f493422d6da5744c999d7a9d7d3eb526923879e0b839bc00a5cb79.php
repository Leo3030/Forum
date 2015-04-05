<?php

/* ForumHomeBundle:AskQuestion:AskQuestion.html.twig */
class __TwigTemplate_96c380bb47f493422d6da5744c999d7a9d7d3eb526923879e0b839bc00a5cb79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ForumHomeBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ForumHomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/ask.css"), "html", null, true);
        echo "\" />
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - AskQuestion";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"main-body-container\">
        <form class=\"ask-question\" action=\"/askquestionajax\" type=\"post\">
            <h1>Ask Question</h1>
            <input class=\"input-question\" placehold=\"Please input question\">
            <button>submit</button>
        </form>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ForumHomeBundle:AskQuestion:AskQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  54 => 7,  48 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
