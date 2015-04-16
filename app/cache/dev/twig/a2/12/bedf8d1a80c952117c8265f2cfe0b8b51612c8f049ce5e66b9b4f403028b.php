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
        echo "Symfony - Home";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"main-body-container\">
\t\t<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t  <!-- Indicators -->
\t\t  <ol class=\"carousel-indicators\">
\t\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
\t\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
\t\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
\t\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>
\t\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\"></li>
\t\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"5\"></li>
\t\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"6\"></li>
\t\t  </ol>

\t\t  <!-- Wrapper for slides -->
\t\t  <div class=\"carousel-inner\" role=\"listbox\">
\t\t    <div class=\"item active\">
\t\t      ";
        // line 25
        echo "\t\t      <div class=\"carousel-caption\">
\t\t        <h3>MVC</h3>
\t\t        <p>What is MVC?</p>
\t\t        <p>MVC全名是Model View Controller，是模型(model)－视图(view)－控制器(controller)的缩写，一种软件设计典范，用一种业务逻辑、数据、界面显示分离的方法组织代码，将业务逻辑聚集到一个部件里面，在改进和个性化定制界面及用户交互的同时，不需要重新编写业务逻辑。MVC被独特的发展起来用于映射传统的输入、处理和输出功能在一个逻辑的图形化用户界面的结构中。</p>
\t\t      </div>
\t\t    </div>
\t\t    <div class=\"item\">
\t\t      ";
        // line 33
        echo "\t\t      <div class=\"carousel-caption\">
\t\t        <h3>Route</h3>
\t\t        <p>What is route?</p>
\t\t        <p></p>
\t\t      </div>
\t\t    </div>
\t\t    <div class=\"item\">
\t\t      ";
        // line 41
        echo "\t\t      <div class=\"carousel-caption\">
\t\t        <h3>Controller</h3>
\t\t        <p>通常控制器负责从视图读取数据，控制用户输入，并向模型发送数据。</p>
\t\t      </div>
\t\t    </div>
\t\t    <div class=\"item\">
\t\t      ";
        // line 48
        echo "\t\t      <div class=\"carousel-caption\">
\t\t        <h3>Model</h3>
\t\t        <p>通常模型对象负责在数据库中存取数据。</p>
\t\t      </div>
\t\t    </div>
\t\t    <div class=\"item\">
\t\t      ";
        // line 55
        echo "\t\t      <div class=\"carousel-caption\">
\t\t        <h3>View</h3>
\t\t        <p>通常视图是依据模型数据创建的。</p>
\t\t      </div>
\t\t    </div>
\t\t    <div class=\"item\">
\t\t      <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/images/symfony_black_01.png"), "html", null, true);
        echo "\" alt=\"pic6\" width=\"800\">
\t\t      <div class=\"carousel-caption\">
\t\t        <h3>Symfony</h3>
\t\t        <p>What is Symfony?</p>
\t\t      </div>
\t\t    </div>
\t\t    <div class=\"item\">
\t\t      <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/images/the-end.png"), "html", null, true);
        echo "\" alt=\"pic6\">
\t\t      <div class=\"carousel-caption\">
\t\t        <h3>The End</h3>
\t\t        <p>Then i will show how Symfony work.</p>
\t\t      </div>
\t\t    </div>
\t\t  </div>

\t\t  <!-- Controls -->
\t\t  <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
\t\t    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t    <span class=\"sr-only\">Previous</span>
\t\t  </a>
\t\t  <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
\t\t    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t    <span class=\"sr-only\">Next</span>
\t\t  </a>
\t\t</div>
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
        return array (  127 => 68,  117 => 61,  109 => 55,  101 => 48,  93 => 41,  84 => 33,  75 => 25,  57 => 8,  54 => 7,  48 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
