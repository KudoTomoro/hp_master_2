@extends('layouts.app')

@section('title', 'PRODUCT - 株式会社techtec')
@section('description','株式会社techtecでは、ブロックチェーンの学習サービス「PoL(ポル)」や仮想通貨・ブロックチェーンに特化した記事発注サービス「techtec(テックテク)」、ブロックチェーンメディア「Hi
Blockchain」を運営しています。')

@section('content')
    <div class='p-product'>
        <section>
            <div class='c-body__title'>
                <h2 class='c-body__heading'>PRODUCT</h2>
                <p class='c-body__subhead'>創っているもの</p>
            </div>
            <div class='p-product__content'>
                <div class='p-product__content__cell'>
                    <div class='p-product__content__image'>
                        <img alt="PoL(ポル)"
                            src="{{ asset('images/img_product_pol.png') }}" />
                    </div>
                    <div class='p-product__content__text'>
                        <h2 class='p-product__content__title'>PoL</h2>
                        <p class='p-product__content__smtitle'>(ポル)</p>
                        <h3 class='p-product__content__subtitle'>"学習するほどトークンがもらえる"<br />全く新しい形の総合学習プラットフォーム</h3>
                        <!-- <div class='p-product__content__link'>
                            <a class="c-line__button__text" target="_blank" href="https://pol.techtec.world/">サービスサイトへ</a>
                        </div> -->
                        <div class='l-contact__button c-line__button'>
                            <a class="c-line__button__text" href="https://pol.techtec.world/">サービスサイトへ</a>
                        </div>
                    </div>
                </div>

                <div class='p-product__content__cell'>
                    <div class='p-product__content__image'>
                        <img alt="PoL(ポル)"
                            src="{{ asset('images/02_PRODUCT/english.png') }}" />
                    </div>
                    <div class='p-product__content__text'>
                        <h2 class='p-product__content__title'>English Course</h2>
                        <p class='p-product__content__smtitle'>(PoL英語コース)</p>
                        <h3 class='p-product__content__subtitle'>ブロックチェーン業界特化の英語コーチングサービス</h3>
                        <!-- <div class='p-product__content__link'>
                            <a class="c-line__button__text" target="_blank" href="https://www.techtec.site/">サービスサイトへ</a>
                        </div> -->
                        <div class='l-contact__button c-line__button'>
                            <a class="c-line__button__text" href="https://www.techtec.site/">サービスサイトへ</a>
                        </div>
                    </div>
                </div>

                <div class='p-product__content__cell'>
                    <div class='p-product__content__image'>
                        <img alt="PoL(ポル)"
                            src="{{ asset('images/02_PRODUCT/writer.png') }}" />
                    </div>
                    <div class='p-product__content__text'>
                        <h2 class='p-product__content__title'>Writer Course</h2>
                        <p class='p-product__content__smtitle'>(PoLライターコース)</p>
                        <h3 class='p-product__content__subtitle'>暗号資産・ブロックチェーン業界でライターになるための学習プラットフォーム</h3>
                        <!-- <div class='p-product__content__link'>
                            <a class="c-line__button__text" target="_blank" href="https://www.techtec.site/">サービスサイトへ</a>
                        </div> -->
                        <div class='l-contact__button c-line__button'>
                            <a class="c-line__button__text" href="https://www.techtec.site/">サービスサイトへ</a>
                        </div>
                    </div>
                </div>

                <div class='p-product__content__cell'>
                    <div class='p-product__content__image'>
                        <img alt="Hi Blockchain(ハイ ブロックチェーン )"
                            src="{{ asset('images/img_hb.png') }}" />
                    </div>
                    <div class='p-product__content__text'>
                        <h2 class='p-product__content__title'>Hi Blockchain</h2>
                        <p class='p-product__content__smtitle'>(ハイ ブロックチェーン )</p>
                        <h3 class='p-product__content__subtitle'>ブロックチェーンに特化したwebメディア</h3>
                        <!-- <div class='p-product__content__link'>
                            <a class="c-line__button__text" target="_blank" href="https://hi-blockchain.world/">サービスサイトへ</a>
                        </div> -->
                        <div class='l-contact__button c-line__button'>
                            <a class="c-line__button__text" href="https://hi-blockchain.world/">サービスサイトへ</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
