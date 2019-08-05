@extends('layouts.app')

@section('title', 'メディアサポート事業 - 株式会社techtec')
@section('description',
'メディアサポート事業では、仮想通貨・ブロックチェーン領域におけるメディアの立ち上げからグロースまで、幅広くサポートします。まだまだ黎明期である仮想通貨・ブロックチェーン業界は、正しい情報を入手する難しさや入手した情報を発信できる人材不足が、長年の課題となっています。')

@section('content')
<div class='c-body'>
    <section class='inner'>
        <div class='s-top'>
            <div class='s-top__text'>
                <h1 class='s-top__title'>メディアサポート事業</h1>
                <p class='s-top__desc'>
                    仮想通貨メディアの立ち上げからグロースまで幅広くサポートします。</br>まだまだ黎明期である仮想通貨・ブロックチェーン業界は、正しい情報を入手する難しさや入手した情報を発信できる人材不足が長年の課題となっています。
                </p>
            </div>
            <div class='s-top__image'>
                <img alt="メディアサポート事業"
                    src="{{ asset('/images/ic_service_media_lg.png') }}" />
            </div>
        </div>
        <div class='s-help'>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="著名人の紹介"
                        src="{{ asset('/images/ic_service_media_feat_01.png') }}" />
                </div>
                <h3 class='s-help__title'>著名人の紹介</h3>
                <p class='s-help__desc'>まだまだ狭い業界のインサイダーとなるべく、業界の最前線で活躍する著名人を紹介します。<br />インタビュー記事などにご活用ください。</p>
            </div>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="社内ライターの研修"
                        src="{{ asset('/images/ic_service_media_feat_02.png') }}" />
                </div>
                <h3 class='s-help__title'>社内ライターの研修</h3>
                <p class='s-help__desc'>社内のライターに対して、業界の知識だけでなくSEOやライティングの知識も身に付く研修プログラムを用意しています。</p>
            </div>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="記事広告の斡旋"
                        src="{{ asset('/images/ic_service_media_feat_03.png') }}" />
                </div>
                <h3 class='s-help__title'>記事広告の斡旋</h3>
                <p class='s-help__desc'>海外プロジェクトの紹介記事やイベントの告知記事など、良質なネタを提供します。</p>
            </div>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="業界分析レポートの作成"
                        src="{{ asset('/images/ic_service_media_feat_04.png') }}" />
                </div>
                <h3 class='s-help__title'>業界分析レポートの作成</h3>
                <p class='s-help__desc'>techtecリサーチチームによる、全世界の出来事を網羅した業界分析レポートを定期的にお届けします。</p>
            </div>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="海外速報の配信"
                        src="{{ asset('/images/ic_service_media_feat_05.png') }}" />
                </div>
                <h3 class='s-help__title'>海外速報の配信</h3>
                <p class='s-help__desc'>仮想通貨・ブロックチェーン業界のニュースはスピードが命です。海外で起こった出来事を海外の生データで収集し、日本語に翻訳して速報配信します。</p>
            </div>
        </div>
    </section>
</div>
@endsection
