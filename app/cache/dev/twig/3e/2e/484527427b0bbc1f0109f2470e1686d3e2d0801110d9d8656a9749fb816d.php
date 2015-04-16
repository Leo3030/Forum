<?php

/* ForumHomeBundle:List:list.html.twig */
class __TwigTemplate_3e2e484527427b0bbc1f0109f2470e1686d3e2d0801110d9d8656a9749fb816d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/list.css"), "html", null, true);
        echo "\" />
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Forum";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"main-body-container\">
\t\t<div class=\"question-list-container\">
\t\t\t<div class=\"row question-title\">
\t\t\t\t<div class=\"col-md-8\"><h3>Question</h3></div>
\t\t\t\t<div class=\"col-md-4\"><h3>Time</h3 ></div>
\t\t\t</div>
\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_questions"]) ? $context["arr_questions"] : $this->getContext($context, "arr_questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 15
            echo "\t\t\t<div class=\"question-container\">
\t\t\t\t<input type=\"hidden\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\"/>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<a href=\"/descquestion/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\" class=\"question-href-container\">
\t\t\t\t\t\t<div class=\"question-content-container col-md-8\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "content", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"question-time-container col-md-4\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "createTime", array()), "date", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t</a>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ForumHomeBundle:List:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  89 => 24,  83 => 21,  77 => 18,  72 => 16,  69 => 15,  65 => 14,  57 => 8,  54 => 7,  48 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
