<?php

/* ForumHomeBundle:Default:index.html.twig */
class __TwigTemplate_652f9c6e1dd9e319caa88cc818bf684464a4b217d9f8b2d76d8d9aafe23c1331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 4
        echo "


<div class=\"test\">
\tHello ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
</div>";
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/*.css"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "ForumHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,  34 => 1,  28 => 8,  22 => 4,  20 => 1,);
    }
}
