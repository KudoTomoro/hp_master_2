@extends('layouts.app')

@section('title', 'RECRUIT - 株式会社techtec')

@section('content')
<div class='i-recruit'>
    <section>
        <div class='c-body__title c-body__title recruit_title'>
            <h2 class='c-body__heading c-body__heading_bg'>VISION</h2>
            <p class='c-body__subhead c-body__subhead_bg'>目指す世界</p>
        </div>
        <div class='i-recruit__eyecatch'>
              <img class="i-recruit__eyecatch_img" alt="recruitのアイキャッチ"
              src="{{ asset('images/bg_vision.png') }}" />
        </div>
        
        <div class='i-top'>
        <div class='i-recruit__vision'>
            <h3 class='i-recruit__vision__title'>好きな事を、好きな時に、好きな場所で、好きな人と、好きなやり方で。</h3>
            <p class='i-recruit__vision__text'>
                全てを自分の意思のままに、自由に決めることができる世界を作れたら、どれ程の笑顔を見ることができるだろうか、どんなに幸せだろうか。そんな理想の世界を作りたい、きっと作れる、我々はそう信じています。
            </p>
        </div>
      </div>


          <div class='i-recruit__value'>
            <div class='l-body__title i-recruit__value_title recruit__title_large'>
              <h2 class='l-body__heading l-body__heading_bg i-recruit__heading'>
                VALUE
                <span class='l-body__subhead l-body__subhead_bg i-recruit__subhead'>
                  価値観・行動指針
                </span>
              </h2>
            </div>

            <!-- max-width:768px -->
            <div class='l-body__title i-recruit__value_title recruit_title_middle'>
              <h2 class='l-body__heading l-body__heading i-recruit__heading'>
                VALUE
              </h2>
              <span class='l-body__subhead l-body__subhead i-recruit__subhead'>
                価値観・行動指針
              </span>
            </div>
            <!-- ここまで -->

            <!-- <section> -->
            <div class='i-recruit__value__composes'>
              <div class='i-recruit__value__composes_list'>
                <h3 class='i-recruit__value__composes_list_title'>"Challenge Growth"</h3>
                <p class='i-recruit__value__composes_list_text'>どんなときも限界に挑み続けよう。貪欲に、大胆に、成長を第一に。</p>
                <!-- <span class='i-recruit__value__composes_list_bg'>"CHALLENGE GROWTH”</span> -->
              </div>
              <div class='i-recruit__value__composes_list'>
                <h3 class='i-recruit__value__composes_list_title'>"Think Simple"</h3>
                <p class='i-recruit__value__composes_list_text'>何事もシンプルに考えよう。重要なことはただ一つ、選択と集中。</p>
                <!-- <span class='i-recruit__value__composes_list_bg'>"THINK SIMPLE”</span> -->
              </div>
              <div class='i-recruit__value__composes_list'>
                <h3 class='i-recruit__value__composes_list_title'>"Be Yourself"</h3>
                <p class='i-recruit__value__composes_list_text'>自分自身を、まわりを、そして世界を明るくしよう。笑顔と素直がキーワード。</p>
                <!-- <span class='i-recruit__value__composes_list_bg'>"BE YOURSELF”</span> -->
              </div>
              <div class='i-recruit__value__composes_list'>
                <h3 class='i-recruit__value__composes_list_title'>"One for all, all for one"</h3>
                <p class='i-recruit__value__composes_list_text'>1人はみんなのために、みんなでユーザーのために。</p>
                <!-- <span class='i-recruit__value__composes_list_bg'>"BE YOURSELF”</span> -->
              </div>
              <div class='i-recruit__value__composes_list'>
                <h3 class='i-recruit__value__composes_list_title'> "Go Global"</h3>
                <p class='i-recruit__value__composes_list_text'>世界に目を向けよう。世界を意識しよう。テクノロジーは国境を越えていく。</p>
                <!-- <span class='i-recruit__value__composes_list_bg'>"BE YOURSELF”</span> -->
              </div>
              <div class="blank"></div>
            </div>
          </div>


        <div class='i-recruit__introduction'>
          <div class='l-body__title i-recruit_title'>
              <h2 class='l-body__heading i-recruit__heading'>INTRODUCTION</h2>
              <p class='l-body__subhead i-recruit__subhead'>会社紹介資料</p>
          </div>
          <div class='i-recruit__introduction__content'>
            <div style="max-width: 800px">
              <script async class="speakerdeck-embed" data-id="1236a727e29e44b29e9610140cba64fd" data-ratio="1.77777777777778" src="//speakerdeck.com/assets/embed.js"></script>
            </div>
          </div>
        </div>



        <div class='i-recruit__technologystack'>
          <div class='l-body__title i-recruit_title'>
              <h2 class='l-body__heading i-recruit__heading'>TECHNOLOGY STACK</h2>
              <p class='l-body__subhead i-recruit__subhead'>テクノロジースタック</p>
          </div>

          <div class='i-recruit__technologystack__content'>

            <div class="i-recruit__technologystack__category development">
              <h3 class="i-recruit__technologystack__category_title development_title">開発</h3>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="sass"
                src="{{ asset('images/technologystack/sass.png') }}" />
                <p class="i-recruit__technologystack__item__name">Sass</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="vue"
                src="{{ asset('images/technologystack/vue.png') }}" />
                <p class="i-recruit__technologystack__item__name">Vue.js</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="node.js"
                src="{{ asset('images/technologystack/nodejs.png') }}" />
                <p class="i-recruit__technologystack__item__name">Node.js</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="serverless"
                src="{{ asset('images/technologystack/serverless.png') }}" />
                <p class="i-recruit__technologystack__item__name">Serverless</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="laravel"
                src="{{ asset('images/technologystack/laravel.png') }}" />
                <p class="i-recruit__technologystack__item__name">Laravel</p>
              </div>
            </div>

            <div class="i-recruit__technologystack__category support">
              <h3 class="i-recruit__technologystack__category_title support_title">開発支援</h3>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="bulma"
                src="{{ asset('images/technologystack/bulma.png') }}" />
                <p class="i-recruit__technologystack__item__name">Bulma</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="gitbub"
                src="{{ asset('images/technologystack/github.png') }}" />
                <p class="i-recruit__technologystack__item__name">GitHub</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="laravel forge"
                src="{{ asset('images/technologystack/laravel forge.png') }}" />
                <!-- <p class="i-recruit__technologystack__item__name lf_pc">Laravel Forge</p> -->
                <p class="i-recruit__technologystack__item__name lf_sp">Laravel<br>Forge</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="circleci"
                src="{{ asset('images/technologystack/circleci.png') }}" />
                <p class="i-recruit__technologystack__item__name">Circleci</p>
              </div>

            </div>
            <div class="i-recruit__technologystack__category infra">
              <h3 class="i-recruit__technologystack__category_title infra_title">インフラ</h3>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="ec2"
                src="{{ asset('images/technologystack/amazon-ec2.png') }}" />
                <p class="i-recruit__technologystack__item__name">EC2</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="rds"
                src="{{ asset('images/technologystack/amazon-rds.png') }}" />
                <p class="i-recruit__technologystack__item__name">RDS</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="DynamoDB"
                src="{{ asset('images/technologystack/dynamoDB.png') }}" />
                <!-- <p class="i-recruit__technologystack__item__name DynamoDB_pc">DynamoDB</p> -->
                <p class="i-recruit__technologystack__item__name DynamoDB_sp">Dynamo<br>DB</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="s3"
                src="{{ asset('images/technologystack/amazon-s3.png') }}" />
                <p class="i-recruit__technologystack__item__name">S3</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="lambda"
                src="{{ asset('images/technologystack/amazon-lambda.png') }}" />
                <p class="i-recruit__technologystack__item__name">Lambda</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="Gateway"
                src="{{ asset('images/technologystack/Gateway.png') }}" />
                <!-- <p class="i-recruit__technologystack__item__name Gateway_pc">API Gateway</p> -->
                <p class="i-recruit__technologystack__item__name Gateway_sp">API<br>Gateway</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="cloudwatch"
                src="{{ asset('images/technologystack/amazon-cloudwatch.png') }}" />
                <!-- <p class="i-recruit__technologystack__item__name cloudwatch_pc">Cloud Watch</p> -->
                <p class="i-recruit__technologystack__item__name cloudwatch_sp">Cloud<br>Watch</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="elb"
                src="{{ asset('images/technologystack/amazon-elb.png') }}" />
                <p class="i-recruit__technologystack__item__name">ELB</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="CloudFront"
                src="{{ asset('images/technologystack/CloudFront.png') }}" />
                <!-- <p class="i-recruit__technologystack__item__name cloudfront_pc">CloudFront</p> -->
                <p class="i-recruit__technologystack__item__name cloudfront_sp">Cloud<br>Front</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="Cognito"
                src="{{ asset('images/technologystack/Cognito.png') }}" />
                <p class="i-recruit__technologystack__item__name">Cognito</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="route53"
                src="{{ asset('images/technologystack/amazon-route53.png') }}" />
                <p class="i-recruit__technologystack__item__name">Route53</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="ses"
                src="{{ asset('images/technologystack/amazon-ses.png') }}" />
                <p class="i-recruit__technologystack__item__name">SES</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="Elasticsearch"
                src="{{ asset('images/technologystack/Elasticsearch.png') }}" />
                <!-- <p class="i-recruit__technologystack__item__name Elasticsearch_pc">Elasticsearch</p> -->
                <p class="i-recruit__technologystack__item__name Elasticsearch_sp">Elastic<br>search</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="redis"
                src="{{ asset('images/technologystack/redis.png') }}" />
                <p class="i-recruit__technologystack__item__name">Redis</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="mysql"
                src="{{ asset('images/technologystack/mysql.png') }}" />
                <p class="i-recruit__technologystack__item__name">MySQL</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="nginx"
                src="{{ asset('images/technologystack/nginx.png') }}" />
                <p class="i-recruit__technologystack__item__name">Nginx</p>
              </div>

            </div>

            <div class="i-recruit__technologystack__category business_design">
              <h3 class="i-recruit__technologystack__category_title business_design_title">ビジネス・デザイン</h3>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="google drive"
                src="{{ asset('images/technologystack/google drive.png') }}" />
                <!-- <p class="i-recruit__technologystack__item__name gd_pc">Google Drive</p> -->
                <p class="i-recruit__technologystack__item__name gd_sp">Google<br>Drive</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="slack"
                src="{{ asset('images/technologystack/slakc.png') }}" />
                <p class="i-recruit__technologystack__item__name">Slack</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="trello"
                src="{{ asset('images/technologystack/trello.png') }}" />
                <p class="i-recruit__technologystack__item__name">Trello</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="cacoo"
                src="{{ asset('images/technologystack/cacoo.png') }}" />
                <p class="i-recruit__technologystack__item__name">Cacoo</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="sketch"
                src="{{ asset('images/technologystack/sketch.png') }}" />
                <p class="i-recruit__technologystack__item__name">Sketch</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="zeplin"
                src="{{ asset('images/technologystack/zeplin.png') }}" />
                <p class="i-recruit__technologystack__item__name">Zeplin</p>
              </div>
            </div>




          </div>
        </div>


        <div class='i-recruit__team'>
            <div class='l-body__title i-recruit_title'>
                <h2 class='l-body__heading i-recruit__heading'>TEAM</h2>
                <p class='l-body__subhead i-recruit__subhead'>チームメンバー</p>
            </div>
            <div class='i-recruit__team__content'>
              <!-- <div class='i-recruit__team__content__members'> -->
                <div class='i-recruit__team__list' data-id='1'>
                  <img class="i-recruit__team__thumb" alt="Tomohiro Tagami | CEO / Product Manager"
                  src="{{ asset('images/04_RECRUIT/team_tagami.jpg') }}" />
                  <h3 class='i-recruit__team__name'>Tomohiro Tagami</h3>
                  <p class='i-recruit__team__role'>CEO / Product Manager</p>
                </div>
                <div class='i-recruit__team__list' data-id='2'>
                  <img class="i-recruit__team__thumb" alt="Ryosuke Hashimoto | Engineer"
                  src="{{ asset('images/member_ryosuke_hashimoto.png') }}" />
                  <h3 class='i-recruit__team__name'>Ryosuke Hashimoto</h3>
                  <p class='i-recruit__team__role'>Engineer</p>
                </div>
                <div class='i-recruit__team__list' data-id='3'>
                  <img class="i-recruit__team__thumb" alt="Ayaka Ei | Engineer"
                  src="{{ asset('images/member_ayaka_ei.png') }}" />
                  <h3 class='i-recruit__team__name'>Ayaka Ei</h3>
                  <p class='i-recruit__team__role'>Engineer</p>
                </div>

                <div class='i-recruit__team__list' data-id='5'>
                  <img class="i-recruit__team__thumb" alt="Masa Cho | Global Alliance Director"
                  src="{{ asset('images/member_masa_cho.png') }}" />
                  <h3 class='i-recruit__team__name'>Masa Cho</h3>
                  <p class='i-recruit__team__role'>Global Alliance Director</p>
                </div>
                <div class='i-recruit__team__list' data-id='6'>
                  <img class="i-recruit__team__thumb" alt="Maya Sause | English Conversation Specialist"
                  src="{{ asset('images/member_maya_sause.png') }}" />
                  <h3 class='i-recruit__team__name'>Maya Sause</h3>
                  <p class='i-recruit__team__role'>English Conversation <br/>Specialist</p>
                </div>

                <div class='i-recruit__team__list' data-id='8'>
                  <img class="i-recruit__team__thumb" alt="Li Li | Tech Adviser"
                  src="{{ asset('images/04_RECRUIT/team_lili.jpg') }}" />
                  <h3 class='i-recruit__team__name'>Li Li</h3>
                  <p class='i-recruit__team__role'>Tech Adviser</p>
                </div>
                <div class='i-recruit__team__list' data-id='9'>
                  <img class="i-recruit__team__thumb" alt="Takuya Watahiki | Engineer"
                  src="{{ asset('images/04_RECRUIT/team_watahiki.jpg') }}" />
                  <h3 class='i-recruit__team__name'>Takuya Watahiki</h3>
                  <p class='i-recruit__team__role'>Engineer</p>
                </div>
                <div class='i-recruit__team__list' data-id='10'>
                  <img class="i-recruit__team__thumb" alt="Leon Watanabe | Blockchain Researcher"
                  src="{{ asset('images/04_RECRUIT/team_watanabe.jpg') }}" />
                  <h3 class='i-recruit__team__name'>Leon Watanabe</h3>
                  <p class='i-recruit__team__role'>Blockchain Researcher</p>
                </div>
                <div class='i-recruit__team__list' data-id='11'>
                  <img class="i-recruit__team__thumb" alt="Tomoro Kudo | Designer"
                  src="{{ asset('images/04_RECRUIT/team_kudo.jpg') }}" />
                  <h3 class='i-recruit__team__name'>Tomoro Kudo</h3>
                  <p class='i-recruit__team__role'>Designer</p>
                </div>
                <div class='i-recruit__team__list' data-id='12'>
                  <img class="i-recruit__team__thumb" alt="PoL Community | Ambassador"
                  src="{{ asset('images/04_RECRUIT/team_pol-community.png') }}" />
                  <h3 class='i-recruit__team__name'>PoL Community</h3>
                  <p class='i-recruit__team__role'>Ambassador</p>
                </div>
                <div class='i-recruit__team__list' data-id='13'>
                  <img class="i-recruit__team__thumb" alt="Elice"
                  src="{{ asset('images/04_RECRUIT/team_elice.png') }}" />
                  <h3 class='i-recruit__team__name'>Elice</h3>
                  <p class='i-recruit__team__role'>Brand Artist</p>
                </div>
                <div class='i-recruit__team__list' data-id='14'>
                  <img class="i-recruit__team__thumb" alt="You"
                  src="{{ asset('images/04_RECRUIT/team_you.png') }}" />
                  <h3 class='i-recruit__team__name'>and You...</h3>
                  <!-- <p class='i-recruit__team__role'>You</p> -->
                </div>
              <!-- </div> -->
            </div>
        </div>
        <div class='i-recruit__message'>
            <div class='l-body__title i-recruit_title'>
                <h2 class='l-body__heading i-recruit__heading'>MESSAGE</h2>
                <p class='l-body__subhead i-recruit__subhead'>共にできること</p>
            </div>
            <div class='i-recruit__message__content'>

              <div class="i-recruit__message__content_img message_pc">
                <img alt="CEO 田上智裕" class="i-recruit__message__content_img_picture"
                src="{{ asset('images/team_tagami.jpg') }}" />
                <p class='i-recruit__message__ceo'>代表取締役 CEO</p>
                <p class='i-recruit__message__tagami'>田上智裕</p>
                <p class='i-recruit__message__name'>TAGAMI TOMOHIRO</p>
              </div>

              <div class='i-recruit__message__content__text'>
                <h3 class='i-recruit__message__heading'>個人の時代はさらに加速する</h3>
                <div class='i-recruit__message__desc'>
                  <p>インターネット、とりわけブロックチェーンが普及した時代では、ボーダレスが益々加速します。国境だけでなくあらゆるものの境目が消滅する中で、求められるのは個人のアイデンティティです。</p>
                  <p>techtecでは、「個人の成長をサポートし、誰もが自由に生きていける世界を作る。」というミッションの元、あらゆる人材が個人として活躍できる社会の実現を目指します。そんな理想の社会では、誰もが自分の好きなこと・得意なことだけで生きていけるようになるはずです。</p>
                  <p>動画配信するだけで、ゲームするだけで、そして学習するだけで報酬がもらえる...<br>そんな世界を創るために、我々は全力でコミットしていきます。</p>

                </div>
                <!-- <p class='i-recruit__message__name'>代表取締役 田上智裕</p> -->
              </div>

              <div class='message_sp'>
                <div class="i-recruit__message_img">
                  <img alt="CEO 田上智裕" class="i-recruit__message_img_picture"
                  src="{{ asset('images/team_tagami.jpg') }}" />
                </div>
                <p class='i-recruit__message__ceo'>代表取締役 CEO</p>
                <p class='i-recruit__message__tagami'>田上智裕</p>
                <p class='i-recruit__message__name'>TAGAMI TOMOHIRO</p>
              </div>

            </div>
        </div>

        <div class='i-recruit__feature'>
          <section>
            <div class='l-body__title i-recruit_title feature_title'>
                <h2 class='l-body__heading i-recruit__heading'>FEATURE</h2>
                <p class='l-body__subhead i-recruit__subhead'>techtecらしさ</p>
            </div>
            <ul class='i-recruit__feature__content'>

              <li class='i-recruit__feature__item'>
                <div class='growth'>
                  <div class='i-recruit__feature__item__thumb'>
                    <img class='i-recruit__feature__item__img' alt="growth_1"
                    src="{{ asset('images/04_RECRUIT/feature01.jpg') }}" />
                    <img class='i-recruit__feature__item__img growth_2' alt="growth_2"
                    src="{{ asset('images/04_RECRUIT/feature02.jpg') }}" />
                  </div>
                  <div class='i-recruit__feature__item__title'>
                    <h3>成長をサポート</h3>
                  </div>
                  <div class='i-recruit__feature__item__desc'>
                    <p>techtecチームのミッションである「個人の成長」をサポートするために、まずはチームの成長を何よりも優先して考えます。</p>
                    <p>特に、グローバルを前提に事業を展開するために必要な英語力の学習機会には力を入れており、PoLの英語コースを無料で解放しています。また、書籍の購入やイベント参加費の負担だけでなく、社内での勉強会も定期開催しています。</p>
                  </div>
                </div>
              </li>

              <li class='i-recruit__feature__item'>
                <div class='environment'>
                  <img class='i-recruit__feature__item__img' alt="environment_1"
                  src="{{ asset('images/04_RECRUIT/feature03.jpg') }}" />
                  <img class='i-recruit__feature__item__img environment_2' alt="environment_2"
                  src="{{ asset('images/04_RECRUIT/feature04.jpeg') }}" />
                  <div class='i-recruit__feature__item__title'>
                    <h3>働きやすさを重視</h3>
                  </div>
                  <div class='i-recruit__feature__item__desc'>
                    <p>次世代のテクノロジーファーストな事業を展開しているため、働きやすさも”モダン”にアップデートが進んでいます。具体的には、フレックスタイム制の導入やお昼寝推奨の社風などがあげられます。</p><p>また、休日働く替わりに平日休む「振替休暇」の制度も実施しています。もちろん服装は自由です。</p>
                  </div>
                </div>
              </li>

              <li class='i-recruit__feature__item'>
                <div class='office'>
                  <img class='i-recruit__feature__item__img' alt="office_1"
                  src="{{ asset('images/04_RECRUIT/feature05.jpg') }}" />
                  <img class='i-recruit__feature__item__img office_2' alt="office_2"
                  src="{{ asset('images/04_RECRUIT/feature06.jpg') }}" />
                  <div class='i-recruit__feature__item__title'>
                    <h3>快適なオフィス環境</h3>
                  </div>
                  <div class='i-recruit__feature__item__desc'>
                    <p>毎日でも来たくなる会社を目指して、1日の大部分を過ごすオフィス環境も充実させています。1Fには健康食に定評のある社食が、作業スペースにはウォーターサーバーとオフィスコンビニがあります。</p><p>また、宅配物もオフィスに届けてOKです。50名以上が着席可能なイベントスペースもあるため、社内外でのイベント開催も自由に行うことができます。</p>
                  </div>
                </div>
              </li>

              <li class='i-recruit__feature__item'>
                <div class='guest'>
                  <img class='i-recruit__feature__item__img' alt="guest_1"
                  src="{{ asset('images/04_RECRUIT/feature07.jpg') }}" />
                  <img class='i-recruit__feature__item__img guest_2' alt="guest_2"
                  src="{{ asset('images/04_RECRUIT/feature08.png') }}" />
                  <div class='i-recruit__feature__item__title'>
                    <h3>業界の著名人に話が聞ける</h3>
                  </div>
                  <div class='i-recruit__feature__item__desc'>
                    <p>techtecチームの運営するオンライン学習サービス「PoL(ポル)」は、独自トークンを組み込んだ日本初の学習サービスです。</p><p>ブロックチェーン業界での認知度は非常に高く、techtecチームの横の繋がりが広いことが特徴的です。業界のキーパーソンを紹介する社内ブログでは、毎回豪華な方々に登場してもらっています。</p>
                  </div>
                </div>
              </li>

            </ul>
          </section>
        </div>




        <div class='i-recruit__position'>
          <div class='l-body__title i-recruit_title'>
              <h2 class='l-body__heading i-recruit__heading'>RECRUIT</h2>
              <p class='l-body__subhead i-recruit__subhead'>採用情報</p>
          </div>
            <div class='i-recruit__position__content'>
                <div class='i-recruit__position__list'>
                    <h3 class='i-recruit__position__list__title'>エンジニアリング</h3>
                    <ul>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10347">webエンジニア</a>
                        </li>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10356">ブロックチェーンエンジニア</a>
                        </li>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10357">VPoE（CTO候補）</a>
                        </li>
                    </ul>
                </div>
                <div class='i-recruit__position__list'>
                    <h3 class='i-recruit__position__list__title'>プロダクト</h3>
                    <ul>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10359">UI/UXデザイナー</a>
                        </li>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10360">グロースハッカー（マーケター）</a>
                        </li>

                    </ul>
                </div>
                <div class='i-recruit__position__list'>
                    <h3 class='i-recruit__position__list__title'>コミュニティ</h3>
                    <ul>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10362">コミュニティマネージャー</a>
                        </li>

                    </ul>
                </div>
                <div class='i-recruit__position__list'>
                    <h3 class='i-recruit__position__list__title'>経営企画</h3>
                    <ul>


                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10384">セールスマネージャー</a>
                        </li>
                    </ul>
                </div>
                <div class='i-recruit__position__list'>
                    <h3 class='i-recruit__position__list__title'>グローバル</h3>
                    <ul>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10385">グローバル（欧米）</a>
                        </li>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10386">グローバル（アジア）</a>
                        </li>

                    </ul>
                </div>
                <div class='i-recruit__position__list'>
                    <h3 class='i-recruit__position__list__title'>コンテンツ</h3>
                    <ul>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/12715">ブロックチェーンリサーチャー</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
<div class='i-recruit__team__modal' data-id='1'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Tomohiro Tagami | CEO / Product Manager"
                src="{{ asset('images/team_tagami.jpg') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>CEO / Product Manager</p>
            <h3 class='i-recruit__team__modal_name'>Tomohiro Tagami</h3>
            <ul class='i-recruit__team__modal_sns'>
                <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://twitter.com/tomohiro_tagami' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Tomohiro Tagami | Twitter"
                            src="{{ asset('images/ic_twitter.svg') }}" />
                    </a>
                </li>
                <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://www.linkedin.com/in/tomohiro-tagami/' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Tomohiro Tagami | LinkedIn"
                            src="{{ asset('images/ic_linkedin.svg') }}" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            チームラボでアプリ開発を経験後、リクルートホールディングスでブロックチェーンのR&DやSUUMOのマーケティングを担当。未だ可視化されていない価値を正しく評価するために、techtecを創業。ブロックチェーンの未来を確信し、事業を推進する。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='2'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Ryosuke Hashimoto | Engineer"
                src="{{ asset('images/member_ryosuke_hashimoto.png') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Engineer</p>
            <h3 class='i-recruit__team__modal_name'>Ryosuke Hashimoto</h3>
            <ul class='i-recruit__team__modal_sns'>
                <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://twitter.com/pylori_Twi' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Ryosuke Hashimoto | Twitter"
                            src="{{ asset('images/ic_twitter.svg') }}" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            C言語による組込系開発企業で、太陽光発電システムの電力モニタや産業用ロボットのFA、IP電話システムの開発を経験。変化と刺激を求めWebエンジニアへ転身後、モダンな技術の積極採用やメンバーの成長を重視する文化に惹かれ、techtecにジョイン。AWSを使用したインフラ設計からLaravelによるサーバサイド、Vue.jsによるフロントエンドまで幅広くこなす。Ethereumを使用したDApps開発にも着手。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='3'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Ayaka Ei | Engineer"
                src="{{ asset('images/member_ayaka_ei.png') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Engineer</p>
            <h3 class='i-recruit__team__modal_name'>Ayaka Ei</h3>
            <ul class='i-recruit__team__modal_sns'>
                <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://twitter.com/Eeedotweb' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Ayaka Ei | Twitter"
                            src="{{ asset('images/ic_twitter.svg') }}" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            化学系の大学を卒業後、Web制作やマーケティング、サーバサイド開発まで幅広く業務を経験。Webの経験を積むにつれて、時間と場所に縛られない生き方に憧れを抱くようになりフリーランスとなる。PoLの開発着手に伴い、田上に誘われたことがきっかけでtechtecにジョイン。Hi
            Blockchainの開発全般も担当。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='4'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Ryo Suzuki | Engineer"
                src="{{ asset('images/ryo_suzuki.jpg') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Engineer</p>
            <h3 class='i-recruit__team__modal_name'>Ryo Suzuki</h3>
            <ul class='i-recruit__team__modal_sns'>
                <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://twitter.com/siosu_pu' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Ryo Suzuki | Twitter"
                            src="{{ asset('images/ic_twitter.svg') }}" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            ”大学へ進学するよりも社会人になった方が実力が付く。”エンジニアとしての経験を積むために、高校卒業と同時に即エンジニアとして活躍。クローラ開発からインフラ・アーキテクチャ設計まで幅広くこなすサーバサイドエンジニア。最近は、サーバレスやコンテナ設計などに強い関心を持つ。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='5'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Masa Cho | Global Alliance Director"
                src="{{ asset('images/member_masa_cho.png') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Global Alliance Director</p>
            <h3 class='i-recruit__team__modal_name'>Masa Cho</h3>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            英・中・日の言葉をネイティブレベルで使いこなすトリリンガル。日本の大学でMBAの取得を目指す傍ら、techtecのグローバル担当としてジョイン。Blockchain
            Englishのネイティブスピーカーも務める。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='6'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Maya Sause | English Conversation Specialist"
                src="{{ asset('images/member_maya_sause.png') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>English Conversation Specialist</p>
            <h3 class='i-recruit__team__modal_name'>Maya Sause</h3>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            アメリカ出身の英会話スペシャリスト。フリーランスで数十名の日本人生徒に英語を教える 傍ら、Blockchain Englishのネイティブスピーカーも務める。田上も”Maya English”の生徒の一人。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='7'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Shinji Yamasaki | Engineer"
                src="{{ asset('images/member_shinji_yamasaki.png') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Engineer</p>
            <h3 class='i-recruit__team__modal_name'>Shinji Yamasaki</h3>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            サーバサイドからフロントエンドまでマルチにこなす万能型エンジニア。UXや機能性を意識した設計・企画提案に長け、techtecでは主にフロントエンドに従事している。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='8'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Li Li | Tech Adviser"
                src="{{ asset('images/04_RECRUIT/team_lili.jpg') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Tech Adviser</p>
            <h3 class='i-recruit__team__modal_name'>Li Li</h3>
            <ul class='i-recruit__team__modal_sns'>
                <!-- <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://www.linkedin.com/in/yumi-fujisawa/' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Yumi Fujisawa | LinkedIn"
                            src="{{ asset('images/ic_linkedin.svg') }}" />
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            2015年に中国より来日。OSSの普及に貢献すべく、Vue.jsのコミッターを務めた後、現在はReact Native Communityのメンバーとして活動している。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='9'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Takuya Watahiki | Engineer"
                src="{{ asset('images/04_RECRUIT/team_watahiki.jpg') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Engineer</p>
            <h3 class='i-recruit__team__modal_name'>Takuya Watahiki</h3>
            <ul class='i-recruit__team__modal_sns'>
                <!-- <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://www.linkedin.com/in/yumi-fujisawa/' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Takuya Watahiki"
                            src="{{ asset('images/ic_linkedin.svg') }}" />
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            マレーシアでAndoid/iOSアプリの開発を経験後、帰国してLaravelやVue.jsを使ったWeb開発に従事。
            ブロックチェーンの台頭に興味を抱き、SolidityでのDapps開発を趣味で始めたことからより深く知見を溜めたいと思い始め、techtecにジョイン。サーバサイドからフロントエンドまで幅広くこなしている。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='10'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Leon Watanabe | Blockchain Researcher"
                src="{{ asset('images/04_RECRUIT/team_watanabe.jpg') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Blockchain Researcher</p>
            <h3 class='i-recruit__team__modal_name'>Leon Watanabe</h3>
            <ul class='i-recruit__team__modal_sns'>
                <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://twitter.com/nabe_leo' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Leon Watanabe | Twitter"
                            src="{{ asset('images/ic_twitter.svg') }}" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            高校在学時よりブロックチェーンに興味を持ち始め、大学進学と同時に早稲田大学のブロックチェーンサークルBitBearsに身を置く。
            本格的にブロックチェーンにコミットしていきたいという想いから、techtecでブロックチェーンリサーチャーとしてのインターンを開始した。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='11'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Tomoro Kudo | Designer"
                src="{{ asset('images/04_RECRUIT/team_kudo.jpg') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Designer</p>
            <h3 class='i-recruit__team__modal_name'>Tomoro Kudo</h3>
            <ul class='i-recruit__team__modal_sns'>
                <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://twitter.com/tomoro_2' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Tomoro Kudo | Twitter"
                            src="{{ asset('images/ic_twitter.svg') }}" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            中国への留学中にブロックチェーンに興味を持つ。
            デザイナーとしてブロックチェーンに関わるサービスを作りたいという想いから、techtecでデザイナーとしてのインターンを開始した。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='12'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="PoL Community | Ambassador"
                src="{{ asset('images/04_RECRUIT/team_pol-community.png') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Ambassador</p>
            <h3 class='i-recruit__team__modal_name'>PoL Community</h3>
            <ul class='i-recruit__team__modal_sns'>
                <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://medium.com/techtec' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="PoL Community | LinkedIn"
                            src="{{ asset('images/ic_medium.png') }}" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            Web3.0の世界では、Webサービスの運営とユーザーの垣根は完全に消滅し、共にサービスの成長にコミットするようになります。
            PoLでは、次世代の運営スタイルに先駆けて挑戦していきます。PoLはユーザーを代表するアンバサダーの成長に全力でコミットします。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='13'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Elice"
                src="{{ asset('images/04_RECRUIT/team_elice.png') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Brand Artist</p>
            <h3 class='i-recruit__team__modal_name'>Elice</h3>
            <ul class='i-recruit__team__modal_sns'>
                <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://twitter.com/PoL_techtec' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Leon Watanabe | LinkedIn"
                            src="{{ asset('images/ic_twitter.svg') }}" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            「学習するほどトークンがもらえる」全く新しいオンライン学習サービス「PoL(ポル)」のブランド担当。本名は「ジェームズ・エリス」。
            性別はオス。得意なプログラミング言語はJavaScript。尻尾がブロックチェーンになっているのが特徴。先端の黒いブロック「Genesis Block」には50BTC入っているらしい。
        </p>
    </div>
</div>
@endsection
