@extends('layouts.app')

@section('title', 'メディアサポート事業 - 株式会社techtec')
@section('description',
'メディアサポート事業では、仮想通貨・ブロックチェーン領域におけるメディアの立ち上げからグロースまで、幅広くサポートします。まだまだ黎明期である仮想通貨・ブロックチェーン業界は、正しい情報を入手する難しさや入手した情報を発信できる人材不足が、長年の課題となっています。')

@section('content')
<div class='c-body'>
    <section class='inner'>
        <div class='s-top'>
            <!-- <div class='s-top__text'> -->
                <h1 class='s-top__title'>メディアサポート事業</h1>
                <p class='s-top__desc'>
                    仮想通貨メディアの立ち上げからグロースまで幅広くサポートします。まだまだ黎明期である仮想通貨・ブロックチェーン業界は、正しい情報を入手する難しさや入手した情報を発信できる人材不足が長年の課題となっています。
                </p>
            <!-- </div> -->
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
                <h2 class='s-help__title'>著名人の紹介</h2>
                <p class='s-help__desc'>まだまだ狭い業界のインサイダーとなるべく、業界の最前線で活躍する著名人を紹介します。インタビュー記事などにご活用ください。</p>
            </div>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="社内ライターの研修"
                        src="{{ asset('/images/ic_service_media_feat_02.png') }}" />
                </div>
                <h2 class='s-help__title'>社内ライターの研修</h2>
                <p class='s-help__desc'>社内のライターに対して、業界の知識だけでなくSEOやライティングの知識も身に付く研修プログラムを用意しています。</p>
            </div>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="記事広告の斡旋"
                        src="{{ asset('/images/ic_service_media_feat_03.png') }}" />
                </div>
                <h2 class='s-help__title'>記事広告の斡旋</h2>
                <p class='s-help__desc'>海外プロジェクトの紹介記事やイベントの告知記事など、良質なネタを提供します。</p>
            </div>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="業界分析レポートの作成"
                        src="{{ asset('/images/ic_service_media_feat_04.png') }}" />
                </div>
                <h2 class='s-help__title'>業界分析レポートの作成</h2>
                <p class='s-help__desc'>techtecリサーチチームによる、全世界の出来事を網羅した業界分析レポートを定期的にお届けします。</p>
            </div>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="海外速報の配信"
                        src="{{ asset('/images/ic_service_media_feat_05.png') }}" />
                </div>
                <h2 class='s-help__title'>海外速報の配信</h2>
                <p class='s-help__desc'>仮想通貨・ブロックチェーン業界のニュースはスピードが命です。海外で起こった出来事を海外の生データで収集し、日本語に翻訳して速報配信します。</p>
            </div>
        </div>

        <div class='voice'>
          <div class='l-body__title'>
              <h2 class='l-body__heading'>VOICE</h2>
              <p class='l-body__subhead'>お客様紹介</p>
          </div>
          <div class='voice__content'>
            <div class="voice__content__img voice_img_pc">
              <img alt="ハーチ株式会社 加藤様"
                  src="{{ asset('images/01_SERVICE/voice_media.jpg') }}" />
            </div>
            <div class='voice__content__interview'>
              <div class="voice__content__title"><h3>ALISのCEO安様をご紹介</h3></div>
              <p>ハーチ株式会社でメディア事業部の責任者を務める加藤様。日本のブロックチェーン業界でメディア事業を展開していきたいというご相談を受け、業界の著名人をご紹介させていただきました。</p>
              <p>
                紹介先は、ICOで日本初の億越え資金調達を成功させたブロックチェーンプロジェクト「ALIS」のCEOを務める安様。
              </p>
              <p>
                今回は、安様と弊社CEOの田上との共同インタビューをご希望いただいたため、インタビューの設計から編集までをサポートさせていただきました。
              </p>
              <div class="voice__content__img voice_img_sp">
                <img alt="ハーチ株式会社 加藤様"
                    src="{{ asset('images/01_SERVICE/voice_media.jpg') }}" />
              </div>
              <a class="c-line__button__text" target="_blank"
                  href="https://hedge.guide/feature/alis-techtec.html">「仮想通貨はコミュニティのハブになる」<br>ALIS × PoL対談、代表2人が語るブロックチェーン業界の未来</a>

                  <img alt="harch" class="voice__content__img_client"
                  src="{{ asset('images/01_SERVICE/client_harch.png') }}" />
                  <p class="voice__content__img_client_name">− ハーチ株式会社 加藤様</p>
            </div>
          </div>
        </div>

        <div class='l-contact'>
            <section class='inner'>
                <div class='l-body__title'>
                    <h2 class='l-body__heading'>CONTACT</h2>
                    <p class='l-body__subhead'>まずはお気軽にお問い合わせください。</p>
                </div>
                <div class='l-contact__content'>

                    <div class='l-contact__button c-line__button'>
                        <a class="c-line__button__text" href="/contact">お問い合わせ</a>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>
@endsection
