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
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/layout.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/font-awesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/forumhome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "\t</head>
\t<body>
        <!-- Header -->
        ";
        // line 15
        $context["uId"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "u_id"), "method");
        // line 16
        echo "\t\t<div id=\"header\">
\t\t\t<div class=\"page-container\" id=\"nav\">
\t\t\t\t<div id=\"logo\" class=\"logo\">
\t\t\t\t\t<a href=\"/\" target=\"self\"></a>
\t\t\t\t</div>
\t\t\t\t<ul class=\"nav-item l\">
\t\t\t\t\t<li>
                        <a href=\"\">首页</a>    
                    </li>
\t\t\t\t\t<li>
                        <a href=\"/list\">列表</a>
                    </li>
\t\t\t\t</ul>
\t\t\t\t<div id=\"login-area\">
                    ";
        // line 30
        if ((null === (isset($context["uId"]) ? $context["uId"] : $this->getContext($context, "uId")))) {
            // line 31
            echo "\t\t\t\t\t<ul class=\"header-unlogin clearfix\">
\t\t\t\t\t\t<li class=\"header-signin\">
                            <a href=\"#\" id=\"js-signin-btn\">登录</a>
                        </li>
\t\t\t\t\t\t<li class=\"header-signup\">
                            <a href=\"#\" id=\"js-signup-btn\">注册</a>
                        </li>
\t\t\t\t\t</ul>
                    ";
        } else {
            // line 40
            echo "                    <a href=\"#\" class=\"user-center-icon\"><i class=\"fa fa-user\"></i></a>
                    ";
        }
        // line 42
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"search-area\">
\t\t\t\t\t<form action=\"/index/search\" name=\"search-form\" method=\"get\">
                \t<input class=\"js-input-keyword search-input\" placeholder=\"搜索内容\" type=\"text\" autocomplete=\"off\" name=\"words\" value=\"\">
                \t<input type=\"button\" class=\"btn_search js-btn-search fa fa-search\">
                \t<dl class=\"search-area-result\"></dl>
            </form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        <div class=\"course-nav\">
            <ul>
                <li><a class=\"ask-question\" href=\"/ask\">提出问题</a></li>
                <li><a class=\"answer-question\" href=\"/answer\">回答问题</a></li>
            </ul>
            
        </div>

        <!-- Main content -->
\t\t<div class=\"sf-reset\" id=\"main\">
\t\t\t";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "\t\t</div>
        <input type=\"hidden\" value=";
        // line 64
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
        // line 83
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

    // line 11
    public function block_head($context, array $blocks = array())
    {
    }

    // line 62
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
        return array (  164 => 62,  159 => 11,  154 => 5,  146 => 83,  124 => 64,  121 => 63,  119 => 62,  97 => 42,  93 => 40,  82 => 31,  80 => 30,  64 => 16,  62 => 15,  57 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
