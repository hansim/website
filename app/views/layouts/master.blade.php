<!doctype html>

<html lang="en">

<head>
    <title>Laravel 中文文档</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
    <meta name="author" content="Laravel 中国">
    <meta name="description" content="Laravel 中文文档, 致力于推动 Laravel, php-fig 等国外 PHP 新技术, 新理念在中国的发展.">
    <meta name="keywords" content="laravel中国,laravel中文, laravel框架中文, laravel框架中国, php, framework, web, artisans, taylor otwell">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ cdn('favicon.png') }}">

    <link href="{{ cdn('assets/css/styles.css') }}" rel="stylesheet">

    <!--[if IE]><link href="{{ cdn('assets/css/ie.css') }}" rel="stylesheet" type="text/css"><![endif]-->

    <!-- HTML5 elements in less than IE9, yes please! -->
    <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <!-- If less than IE8 add some JS for the webfont icons -->
    <!--[if lt IE 8]><script src="{{ cdn('assets/js/ie_font.js') }}"></script><![endif]-->

    @if (App::environment() == 'production')
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-53903425-2', 'auto');
      ga('send', 'pageview');
    </script>
    @endif

    <style>
#documentation nav#docs ul li ul li a {
font-weight: 600;
font-size: 13px;
}
nav#primary.fixed {
opacity: .9;
 position: inherit; 
top: 0;
}

p {
font-size: inherit;
line-height: 1.4em;
margin: 0 0 .8em;
}
html, body {
height: 100%;
font-size: 14px;
color: #333333;
font-family: "Heiti SC Light", "Helvetica Neue", Verdana, 微软雅黑, Arial, sans-serif;
background: #e5e5e5;
}
#documentation nav#docs {
    width: 250px;
}
code, kbd, pre, samp {
    font-size: inherit;
}
code {
background: #F1F1F1;
color: #f4645f;
padding: 0 5px;
border-radius: 3px;
}
    </style>
</head>

@section('body_opening')
<body id="index" class="page">
@show

    <!--[if lt IE 7]>
        <p>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
    <![endif]-->

    <div id="wrapper">

    @yield('content')

    </div>

    <section id="copyright" class="textcenter">
        <div class="boxed">
            <div class="animated slideInLeft">
                Laravel is a trademark of Taylor Otwell.<br class="br-mobile--footer">
                Copyright &copy; <a href="http://twitter.com/taylorotwell" title="Taylor Otwell" target="_blank">Taylor Otwell</a>.<br class="br-mobile--footer">
                Website built with &hearts; <a href="//ikreativ.com" title="iKreativ" target="_blank">iKreativ</a>;<br class="br-mobile--footer">
                responsive by <a href="//tighten.co" title="Tighten Co." target="_blank">Tighten Co.</a>
            </div>
        </div>
    </section>

	<script src="{{ cdn('assets/js/bundle.js') }}"></script>

</body>
</html>
