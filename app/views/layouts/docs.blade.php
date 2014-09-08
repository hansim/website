@extends('layouts.master')

@section('content')
<header id="header" role="header">
    <div class="boxed">
        <div id="tagline">
            <h1><a href="{{ Config::get('app.url') }}" style="color:white; font-wight:bold;">Laravel China</a></h1>
        </div>

        <div id="version">
            <ul class="nolist">
                @foreach ($docs_versions as $doc_key => $doc_version)
                    <li class="{{{ DOCS_VERSION == $doc_key ? 'current' : '' }}}">
                        <a href="{{ url('docs/' . $doc_version['url_key']) }}" title="{{ $doc_version['title'] }}">{{ $doc_version['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>

<nav id="primary">
    <div class="boxed">
        <div id="logo-head">
            <a href="/"><img src="{{ cdn('assets/img/logo-head.png') }}" alt="Laravel"></a>
        </div>
        <ul class="primary-nav-ul">
            <li class="current-item"><a href="docs" title="Documentation">文档</a></li>
            <li><a href="http://phphub.org" title="PHPhub"  target="_blank">论坛</a></li>
            <li><a href="https://github.com/laravel-china/docs"  target="_blank">纠错</a></li>
            <li><a href="http://laravel.com/api/4.2/" title="Laravel Framework API"  target="_blank">API</a></li>
        </ul>
        <a href="#" class="show-primary-nav">菜单</a>
    </div>
</nav>

<div id="content">

    <section id="documentation">
        <article class="boxed">

            <ul class="version-picker--mobile nolist">
                @foreach ($docs_versions as $doc_key => $doc_version)
                <li class="{{{ DOCS_VERSION == $doc_key ? 'current' : '' }}}">
                    <a href="{{ url('docs/' . $doc_version['url_key']) }}" title="{{ $doc_version['title'] }}">{{ $doc_version['title'] }}</a>
                </li>
                @endforeach
            </ul>
            <a href="#" class="docs-show" data-show-text="Navigate" data-hide-text="Close">Navigate</a>

            <nav id="docs">
                {{ $index }}
            </nav>

            <div id="docs-content">
                {{ $contents }}
            </div>

        </article>
    </section>

</div>

<footer id="foot" class="textcenter">
    <div class="boxed">

        <nav id="secondary">
            <div id="logo-foot">
                <a href="//laravel.com"><img src="{{ cdn('assets/img/logo-foot.png') }}" alt="Laravel"></a>
            </div>
            <ul>
                <li><a href="http://laravel.com"  target="_blank">官网</a></li>
                <li><a href="https://forge.laravel.com"  target="_blank">Hosting</a></li>
                <li><a href="http://laravel.com/docs" title="Documentation"  target="_blank">英文文档</a></li>
                <li><a href="//github.com/laravel/laravel" title="Github"  target="_blank">Laravel at Github</a></li>
                <li><a href="http://laravel.io/forum" title="Laravel Forums"  target="_blank">英文论坛</a></li>
                <li><a href="//twitter.com/laravelphp" title="Laravel on Twitter"  target="_blank">Twitter</a></li>
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

@section('script')
<script>
    $(document).ready(function(){
        var currentDoc = document.URL.substr(document.URL.lastIndexOf('/') + 1);
        var feedbackHtml = '<a href="https://github.com/laravel-china/docs/edit/4.2/'+currentDoc+'.md" class="button " target="_blank" style="background: #FA837F;padding-top: 7px;">纠 错 - 优化此文档</a>'
        jQuery( feedbackHtml ).insertAfter( "#docs-content h1" );    
    });
</script>
@endsection