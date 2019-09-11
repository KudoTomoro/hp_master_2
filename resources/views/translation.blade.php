@extends('layouts.app')

@section('title', '翻訳・プロジェクトPR事業 - 株式会社techtec')
@section('description',
'仮想通貨・ブロックチェーンに限らず、近年はグローバル対応が当たり前の時代となりました。翻訳・採用事業ホームページの全面翻訳からイベントの通訳、社内のビジネス英会話研修、外国人採用まで、グローバル展開を幅広くサポートします。英語だけでなく中国語にも対応可能です。')

@section('content')
<div class='c-body'>
    <section class='inner'>
        <div class='s-top'>

                <h1 class='s-top__title'>翻訳・プロジェクトPR事業</h1>
                <p class='s-top__desc translate_text'>
                    仮想通貨・ブロックチェーンに限らず、近年はグローバル対応が当たり前の時代となりました。ホームページの全面翻訳からイベントの通訳、社内のビジネス英会話研修、外国人採用まで、グローバル展開を幅広くサポートします。英語だけでなく中国語やインドネシア語にも対応可能です。
                </p>

            <div class='s-top__image'>
                <img alt="翻訳・採用事業"
                    src="{{ asset('images/ic_service_trans_lg.png') }}" />
            </div>
        </div>
        <div class='s-help'>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="ホームページの多言語対応"
                        src="{{ asset('images/ic_service_trans_feat_01.png') }}" />
                </div>
                <h3 class='s-help__title'>ホームページの多言語対応</h3>
                <p class='s-help__desc'>
                    マーケティングだけでなく海外人材の採用のためにも、ホームページの多言語対応は必須です。</br>単なるテキストの翻訳だけでなく、翻訳サイトの開発についてもサポートします。</p>
            </div>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="オウンドメディアの多言語対応"
                        src="{{ asset('images/ic_service_trans_feat_02.png') }}" />
                </div>
                <h3 class='s-help__title'>オウンドメディアの多言語対応</h3>
                <p class='s-help__desc'>ホームページの翻訳だけでなく、定期的な多言語コンテンツの配信も欠かせません。オウンドメディアや社内コンテンツの多言語対応もサポートします。</p>
            </div>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="イベントへの通訳派遣"
                        src="{{ asset('images/ic_service_trans_feat_03.png') }}" />
                </div>
                <h3 class='s-help__title'>イベントへの通訳派遣</h3>
                <p class='s-help__desc'>社内イベントなどで海外からスピーカーを招待する場合の通訳をサポートします。</br>日本語を外国語へ通訳する場合もお任せください。</p>
            </div>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="ビジネス英会話研修"
                        src="{{ asset('images/ic_service_trans_feat_04.png') }}" />
                </div>
                <h3 class='s-help__title'>ビジネス英会話研修</h3>
                <p class='s-help__desc'>近年は、社内公用語を英語にする企業も増えてきました。ビジネスの現場で使用するための英会話研修を提供します。</p>
            </div>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="外国人採用"
                        src="{{ asset('images/ic_service_trans_feat_05.png') }}" />
                </div>
                <h3 class='s-help__title'>ローカライズ対応・各地でのマーケティング</h3>
                <p class='s-help__desc'>
                    国内を中心に展開する事業の海外展開をサポートします。各地へのローカライズ対応だけでなく、その後のマーケティング支援一気通貫で行なっています。
                </p>
            </div>
        </div>

        <div class='voice'>
          <div class='l-body__title'>
              <h2 class='l-body__heading'>VOICE</h2>
              <p class='l-body__subhead'>お客様紹介</p>
          </div>
          <div class='voice__content'>
            <div class="voice__content__img voice_img_pc">
              <img alt="産業技術調査事業"
                  src="{{ asset('images/01_SERVICE/voice_translation.jpg') }}" />
            </div>
            <div class='voice__content__interview'>
              <div class="voice__content__title"><h3>ブロックチェーンの海外事例を翻訳、レポートの作成をサポート</h3></div>
              <p>経済産業省主導の「平成30年度産業技術調査事業」において、主管を務めたリクルート様と共同で調査レポートを作成しました。弊社は主に、ブロックチェーンを活用した海外プロジェクトの調査を担当し、論文やオウンドメディアの翻訳を行っております。</p>
              <p>
                今回は、学位や研究データの不正を防止するための方法としてブロックチェーンの活用が期待されました。ヨーロッパを中心に東南アジアでも積極的な活動が見つかり、日本国内からも取り組みが登場することが予想される分野です。
              </p>

              <div class="voice__content__img voice_img_sp">
                <img alt="産業技術調査事業"
                    src="{{ asset('images/01_SERVICE/voice_translation.jpg') }}" />
              </div>
              <a class="c-line__button__text" target="_blank"
                  href="https://www.meti.go.jp/press/2019/04/20190423002/20190423001-1.pdf">「平成30年度産業技術調査事業（国内外の人材流動化促進や研究成果の信頼性確保等に向けた大学・研究機関へのブロックチェーン技術の適用及びその標準獲得に関する調査）報告書」</a>

                  <img alt="recruit" class="voice__content__img_client"
                  src="{{ asset('images/01_SERVICE/client_recruit.png') }}" />
                  <p class="voice__content__img_client_name">− 株式会社リクルート　キム様　田中様</p>

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
