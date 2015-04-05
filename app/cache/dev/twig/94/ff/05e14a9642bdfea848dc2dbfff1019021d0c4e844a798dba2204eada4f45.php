<?php

/* ForumHomeBundle::layout.html.twig */
class __TwigTemplate_94ff05e14a9642bdfea848dc2dbfff1019021d0c4e844a798dba2204eada4f45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<! DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/js/layout.js"), "html", null, true);
        echo "\"></script>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/layout.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/font-awesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t";
        // line 12
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "\t</head>
\t<body>
        <!-- Header -->
        ";
        // line 16
        $context["uId"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "u_id"), "method");
        // line 17
        echo "\t\t<div id=\"header\">
\t\t\t<div class=\"page-container\" id=\"nav\">
\t\t\t\t<div id=\"logo\" class=\"logo\">
\t\t\t\t\t<a href=\"/\" target=\"self\"></a>
\t\t\t\t</div>
\t\t\t\t<ul class=\"nav-item l\">
\t\t\t\t\t<li>
                        <a href=\"/home\">首页</a>    
                    </li>
\t\t\t\t\t<li>
                        <a href=\"/list\">列表</a>
                    </li>
\t\t\t\t</ul>
\t\t\t\t<div id=\"login-area\">
                    ";
        // line 31
        if ((null === (isset($context["uId"]) ? $context["uId"] : $this->getContext($context, "uId")))) {
            // line 32
            echo "\t\t\t\t\t<ul class=\"header-unlogin clearfix\">
\t\t\t\t\t\t<li class=\"header-signin\">
                            <a href=\"/login\" id=\"js-signin-btn\">登录</a>
                        </li>
\t\t\t\t\t\t<li class=\"header-signup\">
                            <a href=\"/signin\" id=\"js-signup-btn\">注册</a>
                        </li>
\t\t\t\t\t</ul>
                    ";
        } else {
            // line 41
            echo "                        <a href=\"#\" class=\"user-center\" id=\"js-user-out\">退出登陆</a>
                    ";
        }
        // line 43
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"search-area\">
\t\t\t\t\t<form action=\"/search\" name=\"search-form\" method=\"post\">
                    \t<input class=\"js-input-keyword search-input\" placeholder=\"搜索内容\" type=\"text\" autocomplete=\"off\" name=\"words\" value=\"\">
                    \t<input type=\"button\" class=\"btn_search js-btn-search fa fa-search\">
                    </form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        // line 52
        if ((isset($context["uId"]) ? $context["uId"] : $this->getContext($context, "uId"))) {
            // line 53
            echo "            <div class=\"course-nav\">
                <ul>
                    <li><a class=\"ask-question\" href=\"/ask\">提出问题</a></li>
                    <li><a class=\"my-ask-question\" href=\"/myquestion\">我的问题</a></li>
                    <li><a class=\"my-answer-question\" href=\"/myanswer\">我的回答</a></li>
                </ul>
            </div
        ";
        }
        // line 61
        echo "        <!-- Main content -->
\t\t<div class=\"sf-reset\" id=\"main\">
\t\t\t";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "\t\t</div>
        <input type=\"hidden\" value=";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["uId"]) ? $context["uId"] : $this->getContext($context, "uId")), "html", null, true);
        echo " />
        <!-- Footer -->
        <div id=\"footer\">
            <div class=\"waper\">
                <div class=\"footerwaper clearfix\">
                    <div class=\"footer_intro\">
                        <p>This web was made by Leo Tang</p>
                    </div><!--
                 --><div class=\"followus\">
                        <a class=\"followus-weixin\" href=\"javascript:;\" target=\"_blank\" title=\"微信\">
                            <div class=\"flw-weixin-box\"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript -->
        <div class=\"js-container\">
            <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/js/layout.js"), "html", null, true);
        echo "\"></script>
        </div>
\t</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ForumHomeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 63,  168 => 12,  163 => 5,  155 => 84,  133 => 65,  130 => 64,  128 => 63,  124 => 61,  114 => 53,  112 => 52,  101 => 43,  97 => 41,  86 => 32,  84 => 31,  68 => 17,  66 => 16,  61 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
