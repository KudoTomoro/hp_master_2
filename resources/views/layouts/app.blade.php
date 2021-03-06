<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'techtec'))</title>
    <meta name="description"
        content="@yield('description', '株式会社techtecのコーポレートサイトです。プロダクトやサービス、採用情報、チームメンバーなどを紹介します。「個人の成長をサポートし、誰もが自由に生きていける世界を作る。」をミッションに、より良い社会の実現を目指します。')">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fabicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <!-- ogp -->
    <meta property="og:title" content="株式会社techtec">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://techtec.co.jp/">
    <meta property="og:image" content="https://techtec.co.jp/images/ogp.png">
    <meta property="og:site_name" content="techtec">
    <meta property="og:description" content="株式会社techtecのHPです。">
    <!-- facebook&twitter  -->
    <meta property="fb:app_id" content="[app_id]" />
    <meta name="twitter:card" content="summary_large_image">
    
</head>

<body>
    <div id="app">
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://www.promisejs.org/polyfills/promise-7.0.4.min.js"></script>
</body>

</html>
