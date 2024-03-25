<?php get_header(); ?>

<!-- breadcrumb -->
<?php if ( function_exists( 'bcn_display' ) ) : ?>
<div class="breadcrumb">
  <?php bcn_display(); ?>
</div><!-- /breadcrumb -->
<?php endif; ?>

<div class="c-content-bg"><?php the_title(); ?></div>
<section id="profile" class="l-content">
  <div class="l-inner">
    <h2 class="c-content__title">Profile</h2>
    <div class="c-content__body l-profile">
      <p class="c-content__text">
        有住 兼寿 | Arisumi Kenju<br>
        芸術大学建築学科を卒業後、ゼネコンで3年務めIT・Web業界へ。<br>
        仕事をしながらデイトラWEB制作コースで600時間を積み上げフリーランスとして独立。
      </p>
      <p class="c-content__text">
        現在はフリーランスとして活動しているため、<span class="l-text-accent">ご連絡は24時間365日対応</span>させていただきます。<br>
        ご連絡には遅くとも1営業日以内に返信いたします。<br>
        営業日以外の休日・祝日にも制作しますので、他の作業者が活動していない時間でも<span class="l-text-accent">圧倒的なスピード納品にも対応</span>いたします。
      </p>
      <h3 class="c-content__sub-title"></h3>
      <p class="c-content__text">
        ご依頼いただく皆様もご多忙のことと思いますので、ヒアリングシートや納品のチェックリストなど、<span class="l-text-accent">こちらで事前に用意</span>いたします。<br>
        スムーズで意味のあるミーディングを心がけております。
      </p>
      <p class="c-content__text">
        WordPressをはじめとしたCMSサイト作成の際にはお客様の方でサイトの更新やコンテンツの変更が行いるようマニュアルの作成・操作方法の指導などもしております。
      </p>
      <p class="c-content__text">
        お気軽にご相談ください。
      </p>
      <h3 class="c-content__sub-title">経歴</h3>
      <!-- c-timeline start -->
      <ul class="c-timeline">
        <li class="c-timeline__list">
          <p class="c-timeline__date">2019.03</p>
          <div class="c-timeline__content">
            <p class="c-timeline__head">芸術大学卒業</p>
            <p class="c-timeline__text">ワーホリビザで渡加。アクセサリーショップ等でバイト。カナダ生活を満喫。</p>
          </div>
        </li>
        <li class="c-timeline__list">
          <p class="c-timeline__date">2019.04</p>
          <div class="c-timeline__content">
            <p class="c-timeline__head">建設会社入社</p>
            <p class="c-timeline__text">施工管理として1人で現場すべてを管理。スケジュール管理をしながら作業員とも密にコミュニケーションをとり納期を厳守。</p>
          </div>
        </li>
        <li class="c-timeline__list">
          <p class="c-timeline__date">2022.05</p>
          <div class="c-timeline__content">
            <p class="c-timeline__head">IT業界へ転職</p>
            <p class="c-timeline__text">自分が作るサービスをより多くの人に届けたいと考え、IT業界に転職。<br>
            SEの業務をしながらHTML、CSS、JavaScript、PHP等のコーディングやWebデザインの基礎を学ぶ。
          </p>
          </div>
        </li>
        <li class="c-timeline__list">
          <p class="c-timeline__date">2023.04</p>
          <div class="c-timeline__content">
            <p class="c-timeline__head">Web制作フリーランスとして独立</p>
            <p class="c-timeline__text"></p>
          </div>
        </li>
      </ul>
      <!-- c-timeline end -->
    </div>
  </div>

  <picture class="c-content__img">
    <source srcset="<?php echo get_template_directory_uri(); ?>/src/assets/img/Profile-image-sp.png"
      media="(max-width: 600px)">
    <img src="<?php echo get_template_directory_uri(); ?>/src/assets/img/Profile-image.png" class="c-content__img"
      alt="image画像">
  </picture>
</section>

<section id="offer" class="l-offer">
  <div class="l-inner">
    <h2 class="c-content__title c-content__title--long">What we can offer</h2>
    <div class="c-content__body l-offer">
      <ul class="c-content__list">
        <li class="c-content__list-item">HTML、CSS、JavaScriptを使用して、使いやすいWebインターフェースの構築。</li>
        <li class="c-content__list-item">PHPを活用してサーバーサイドのロジックを実装し、データベースとの連携を確立。</li>
        <li class="c-content__list-item">Node.js(gulp,yarn,npm)を使用して、プロジェクトの依存関係を管理し、開発プロセスを最適化。</li>
        <li class="c-content__list-item">wordpressでのオリジナルテーマの作成やswellでのサイト実装。</li>
        <li class="c-content__list-item">Gitを活用して、PullRequestを通じたコードレビューでチームメンバーとの協力開発を円滑に進め、ファイル管理 やコードチェックをし品質を維持。</li>
        <li class="c-content__list-item">レスポンシブでクロスブラウザ対応なフロントエンドを構築し、UX向上に貢献。 JavaScriptフレームワークを使用して、動的でインタラクティブなウェブサイトを実装。</li>
        <li class="c-content__list-item">XDを使用したUI/UXデザインの作成。</li>
      </ul>
    </div>
  </div>
</section>

<section id="overview" class="l-content">
  <div class="l-overview-inner l-inner">
    <h2 class="c-content__title c-content__title--long">Arisumi Design Overview</h2>
    <div class="c-content__overview">
      <div class="c-overview">
        <dl>
          <dt>所在地</dt>
          <dd>東京都大田区<br>(詳細はご契約時にお伝えいたします。)</dd>
        </dl>
        <dl>
          <dt>営業時間</dt>
          <dd>平日9:00 ~ 18:00<br>(ご連絡は24時間受けております)</dd>
        </dl>
        <dl>
          <dt>定休日</dt>
          <dd>土日祝</dd>
        </dl>
        <dl>
          <dt>事業内容</dt>
          <dd>
            <ul>
              <li>ホームページ制作、更新、運用、ローカルSEO対策</li>
              <li>コーディング、WordPressオリジナルテーマ作成</li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>スキル</dt>
          <dd>
            <ul>
              <li>■コーディング
                <ul>
                  <li>
                    HTML5/CSS3, Sass, Bootstlap, Pug, ejs, JavaScript, jQuery, Gulp, node.js,
                    PHP, SQL, WordPress, python, Git, GitHub(プルリクエストなど)
                  </li>
                </ul>
              </li>
              <li class="c-overvirew__work">■仕様ツール
                <ul>
                  <li>
                    Photoshop, Illustrator, AdobeXD, Figma
                  </li>
                </ul>
              </li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>
    <!-- c-skill start -->
    <div class="u-margin-top--narrow"></div>
    <?php get_template_part('/template-parts/skill'); ?>
    <!-- c-skill end -->
    <a href="/contact/" class="c-button-contact-profile">お気軽にご相談ください</a>
  </div>
</section>
<section id="sns">
  <div class="l-inner">
    <h2 class="c-content__title">SNS</h2>
    <div class="c-content__body">
      <p class="c-content__text">Twitterにて日々の記録を発信しております。</p>
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>