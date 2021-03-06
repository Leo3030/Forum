<?php

/* ForumHomeBundle:Home:home.html.twig */
class __TwigTemplate_a212bedf8d1a80c952117c8265f2cfe0b8b51612c8f049ce5e66b9b4f403028b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/home.css"), "html", null, true);
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
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_questions"]) ? $context["arr_questions"] : $this->getContext($context, "arr_questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 11
            echo "\t\t\t<div class=\"question-container\">
\t\t\t\t<input type=\"hidden\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\"/>
\t\t\t\t<div>
\t\t\t\t\t<p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t<p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "createTime", array()), "date", array()), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ForumHomeBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  77 => 15,  73 => 14,  68 => 12,  65 => 11,  61 => 10,  57 => 8,  54 => 7,  48 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
