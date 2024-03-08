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
      <h3 class="c-content__sub-title">ゼネコンでの経験を活かし</h3>
      <p class="c-content__text">
        1人で現場すべてを管理してきたため、<span class="l-text-accent">徹底したスケジュール管理と納期・期限の遵守</span>します。<br>
        建築現場では日々想定外のことが起こる。そんな中培ってきた対応力で柔軟にお客様の問題に対処し、最善のご提案をさせていただきます。<br>
        また、当たり前のことではありますが、<span class="l-text-accent">素早いレスポンス</span>を徹底いたします。
      </p>
      <p class="c-content__text">現場では朝の30分がとても重要</p>
      <p class="c-content__text">その30分で数十社に対してその日の作業を的確に伝えなければなりません。<br>
        ご依頼いただく皆様もご多忙のことと思いますので、ヒアリングシートや納品のチェックリストなど、<span class="l-text-accent">こちらで事前に用意</span>いたします。<br>
        スムーズで意味のあるミーディングを心がけております。
      </p>
    </div>
  </div>
  <picture class="c-content__img">
    <source srcset="<?php echo get_template_directory_uri(); ?>/public/assets/img/Profile-image-sp.png"
      media="(max-width: 600px)">
    <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/Profile-image.png" class="c-content__img"
      alt="image画像">
  </picture>
</section>
<section id="overview">
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