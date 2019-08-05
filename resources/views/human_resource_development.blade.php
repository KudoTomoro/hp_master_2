@extends('layouts.app')

@section('title', '人材育成事業 - 株式会社techtec')
@section('description',
'世界最大の仮想通貨市場を誇る日本は、ブロックチェーンにおいては世界に遅れをとっています。これからの社会では、ブロックチェーンだけでなく英語や中国語といったグローバルな能力が必要になります。人材育成事業では、そんなグローバルな環境で活躍できる人材の育成プログラムを提供していきます。')

@section('content')
<div class='c-body'>
    <section class='inner'>
        <div class='s-top'>
            <div class='s-top__text'>
                <h1 class='s-top__title'>人材育成事業</h1>
                <p class='s-top__desc'>
                    世界最大の仮想通貨市場を誇る日本は、ブロックチェーンにおいては世界に遅れをとっています。<br />これからの社会では、ブロックチェーンだけでなく英語や中国語といったグローバルな能力が必要になります。
                </p>
            </div>
            <div class='s-top__image'>
                <img alt="人材育成事業"
                    src="{{ asset('images/ic_service_pr_lg.png') }}" />
            </div>
        </div>
        <div class='s-help'>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="ブロックチェーン人材の育成"
                        src="{{ asset('images/ic_service_pr_feat_01.png') }}" />
                </div>
                <h3 class='s-help__title'>ブロックチェーン人材の育成</h3>
                <p class='s-help__desc'>Web3.0の根幹を支えるブロックチェーン人材を社内で確保するために、充実の研修プログラムを提供します。</p>
            </div>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="英語・中国語研修"
                        src="{{ asset('images/ic_service_pr_feat_02.png') }}" />
                </div>
                <h3 class='s-help__title'>英語・中国語研修</h3>
                <p class='s-help__desc'>今後より一層グローバル化が進む中で、世界で活躍するための人材を生み出すために、英語と中国語の語学研修を提供しています。</p>
            </div>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="海外リサーチツアー"
                        src="{{ asset('images/ic_service_pr_feat_03.png') }}" />
                </div>
                <h3 class='s-help__title'>海外リサーチツアー</h3>
                <p class='s-help__desc'>実際にグローバルを経験することで、意識の変革を根本から促します。海外からトッププレイヤーを招いたミートアップも開催しています。</p>
            </div>
            <div class='s-help__cell'>
                <div class='s-help__image'>
                    <img alt="規制についてレクチャー"
                        src="{{ asset('images/ic_service_pr_feat_04.png') }}" />
                </div>
                <h3 class='s-help__title'>規制についてレクチャー</h3>
                <p class='s-help__desc'>日本だけでなく海外の規制についても理解することで、より実践的な能力を鍛えることができます。</p>
            </div>
        </div>

        <div class='voice'>
          <div class='l-body__title'>
              <h2 class='l-body__heading'>VOICE</h2>
              <p class='l-body__subhead'>お客様紹介</p>
          </div>
          <div class='voice__content'>
            <div class="voice__content__img voice_img_pc">
              <img alt="経済産業省調査事業"
                  src="{{ asset('images/01_SERVICE/voice_reserch.png') }}" />
            </div>
            <div class='voice__content__interview'>
              <div class="voice__content__title"><h3>経済産業省調査事業を実施</h3></div>
              <p>ブロックチェーンの本格的な台頭を受け、経済産業省が主導となり「平成30年度産業技術調査事業（国内外の人材流動化促進や研究成果の信頼性確保等に向けた大学・研究機関へのブロックチェーン技術の適用及びその標準獲得に関する調査）を行いました。</p>
              <p>
                主管を務めた株式会社リクルート様と共同で、国内外のブロックチェーン動向や活用事例を調査し、118ページからなる調査報告書にまとめ公表しております。
              </p>
              
              <div class="voice__content__img voice_img_sp">
                <img alt="経済産業省調査事業"
                    src="{{ asset('images/01_SERVICE/voice_reserch.png') }}" />
              </div>
              <a class="c-line__button__text" target="_blank"
                  href="https://www.meti.go.jp/press/2019/04/20190423002/20190423001-1.pdf">「平成30年度産業技術調査事業（国内外の人材流動化促進や研究成果の信頼性確保等に向けた大学・研究機関へのブロックチェーン技術の適用及びその標準獲得に関する調査）報告書」</a>

            </div>
          </div>
        </div>

        <div class='l-contact'>
            <section class='inner'>
                <div class='l-body__title'>
                    <h2 class='l-body__heading'>CONTACT</h2>
                    <p class='l-body__subhead'>一緒にできること</p>
                </div>
                <div class='l-contact__content'>
                    まずはお気軽にお問い合わせください。
                    <div class='l-contact__button c-line__button'>
                        <a class="c-line__button__text" href="/contact">お問い合わせ</a>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>
@endsection
