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
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/js/npm.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/js/layout.js"), "html", null, true);
        echo "\"></script>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/layout.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/font-awesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/bootstrap-theme.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/bootstrap-theme.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t";
        // line 21
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "\t</head>
\t<body>
        <!-- Header -->
        ";
        // line 25
        $context["uId"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "u_id"), "method");
        // line 26
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
        // line 40
        if ((null === (isset($context["uId"]) ? $context["uId"] : $this->getContext($context, "uId")))) {
            // line 41
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
            // line 50
            echo "                        <a href=\"#\" class=\"user-center\" id=\"js-user-out\">退出登陆</a>
                    ";
        }
        // line 52
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
        // line 61
        if ((isset($context["uId"]) ? $context["uId"] : $this->getContext($context, "uId"))) {
            // line 62
            echo "            <div class=\"course-nav\">
                <ul>
                    <li><a class=\"ask-question\" href=\"/ask\">提出问题</a></li>
                    <li><a class=\"my-ask-question\" href=\"/myquestion\">我的问题</a></li>
                    <li><a class=\"my-answer-question\" href=\"/myanswer\">我的回答</a></li>
                </ul>
            </div
        ";
        }
        // line 70
        echo "        <!-- Main content -->
\t\t
        <div class=\"sf-reset container\" id=\"main\">
\t\t\t";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "\t\t</div>
        <input type=\"hidden\" value=";
        // line 75
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
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/js/layout.js"), "html", null, true);
        echo "\"></script>
        </div>
\t</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 21
    public function block_head($context, array $blocks = array())
    {
    }

    // line 73
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
        return array (  208 => 73,  203 => 21,  198 => 6,  190 => 95,  167 => 75,  164 => 74,  162 => 73,  157 => 70,  147 => 62,  145 => 61,  134 => 52,  130 => 50,  119 => 41,  117 => 40,  101 => 26,  99 => 25,  94 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  27 => 4,  22 => 1,);
    }
}
