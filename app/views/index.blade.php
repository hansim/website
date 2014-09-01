@extends('layouts.master')

@section('body_opening')
<body id="index" class="page home">
@show

@section('content')
<header id="header" role="header">
    <div class="boxed">
        <div id="tagline" class="animated bounceInUp">
            <h1>为网页艺术家创造的 PHP 框架</h1>
            <h2>Laravel China 带你进入神奇的 Laravel 世界</h2>
        </div>

        <div id="callto" class="animated bounceInLeft">
            <a href="docs/quick" class="button large animated shake">Laravel4.2 文档</a>
            <a href="http://phphub.org" class="button large animated shake" target="_blank">PHPhub 中文社区</a>
        </div>

        <div class="animated fadeIn sublime-header" id="header_image"></div>
    </div>
</header>

<nav id="primary">
    <div class="boxed">
        <div id="logo-head">
           <a href="//laravel.com"><img src="assets/img/logo-head.png" alt="Laravel"></a>
        </div>
        <ul class="primary-nav-ul">
            <li class="current-item"><a href="#">首页</a></li>
            <li><a href="docs" title="文档">文档</a></li>
            <li><a href="http://laravel.com/api/4.2/" title="Laravel Framework API"  target="_blank">API</a></li>
            <li><a href="http://phphub.org" title="Laravel Forums"  target="_blank">中文社区</a></li>
            <li><a href="https://github.com/laravel-china/docs" target="_blank">纠错</a></li>
        </ul>
        <a href="#" class="show-primary-nav">菜单</a>
    </div>
</nav>

<div id="content">

    <section id="page">
        <article class="boxed">
            <ul class="feature-box nolist">
                <li class="feature-box__item">
                    <h2><i class="icon-random"></i> <a title="RESTful Routing" href="docs/routing">REST风格的路由</a></h2>
                    <p>透过简单的闭包就能回应 HTTP 请求，它能更简单的帮你快速开始构建非凡的应用程式</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-graph"></i> <a title="Command Your Data" href="docs/eloquent">操控数据</a></h2>
                    <p>Laravel 内建惊人的 Eloquent ORM 和强大的迁移系统。能够完美的与 MySQL、Postgres、SQL Server 和 SQLite 协同工作。</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-pencil-alt"></i> <a title="Beautiful Templating" href="docs/templates">优雅的模板引擎</a></h2>
                    <p>PHP 原生代码或是轻量级的 Blade 模板引擎都能无缝衔接。Blade 提供了很强大的模板继承孤能和极快的解析速度。相信你会爱上它.</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-time"></i> <a title="Ready For Tomorrow" href="docs/routing">为明天做准备</a></h2>
                    <p>建立庞大的企业应用或是简单的 JSON API。建构强大的控制器或是简洁的 REST 风格路由。Laravel 适用于所有规模的开发作业.</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-cog"></i> <a title="Proven Foundation" href="http://www.symfony.com">可靠的基础</a></h2>
                    <p>Laravel 是由数个 Symfony 元件所构建而成，让你的应用拥有一个千锤百炼且可靠的基石</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-star"></i> <a title="Composer Powered" href="http://getcomposer.org">基于 Composer</a></h2>
                    <p>Composer 是一套第三方套件的套件管理工具。能快速在 Packagist 上找到需要的套件。</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-group"></i> <a title="Great Community" href="http://laravel.io/forum">强大的社群</a></h2>
                    <p>无论你是 PHP 新手或者是经验丰富的架构师，你都能在社群内有所获。你可以在 IRC 讨论灵感，或者是在论坛提出问题。</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-wrench"></i> <a title="Red, Green, Refactor" href="docs/testing">测试、重构</a></h2>
                    <p>Laravel 从开始就将测试作为重点功能。我们提供了灵活的 IoC 容器，集成了 PHPUnit 测试工具。不用担心，这些都比你想象的要简单多了.</p>
                </li>
            </ul>
        </article>
    </section>

</div>

<section id="quotes">
   <article class="boxed">
       <ul id="quote" class="nolist textcenter aligncenter">
           <li class="animated flipInX">
               <div class="quote"><p>Laravel 改变了我的生命. 开发上的高效, 让我拥有一个瞬间把 idea 转化成产品的能力. </p></div>
               <div class="person">Maksim Surguy</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel 重新燃起了我开发的激情, 让我能更有深度的理解 MVC, 是 TA 让我重新找回了编程的乐趣.</p></div>
               <div class="person">Jozef Maxted</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel 改变了我对 PHP 的看法.</p></div>
               <div class="person">Michael Hasselbring</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel 让我不在重复的去创造车轮. </p></div>
               <div class="person">Ryan McDonough</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel 的高效让人惊讶, 我用业余时间两个星期不到就完成了 <a href="https://github.com/summerblue/phphub" style="color:white;text-decoration: underline;">PHPhub</a> 的编码.</p></div>
               <div class="person">Summer</div>
           </li>
       </ul>
   </article>
</section>

<footer id="foot" class="textcenter">
    <div class="boxed">

        <nav id="secondary">
            <div id="logo-foot">
	           <a href="//laravel.com"><img src="{{ cdn('assets/img/logo-foot.png') }}" alt="Laravel"></a>
	        </div>
            <ul>
                <li><a href="http://laravel.com">官网</a></li>
                <li><a href="https://forge.laravel.com">Hosting</a></li>
                <li><a href="http://laravel.com/docs" title="Documentation">英文文档</a></li>
                <li><a href="//github.com/laravel/laravel" title="Github">Laravel at Github</a></li>
                <li><a href="http://laravel.io/forum" title="Laravel Forums">英文论坛</a></li>
                <li><a href="//twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
            </ul>
        </nav>

    </div>
</footer>

<div id="top">
    <a href="#index" title="Back to the top">
        <i class="icon-chevron-up"></i>
    </a>
</div>
@endsection
