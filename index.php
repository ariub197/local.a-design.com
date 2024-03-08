<?php get_header(); ?>

<section id="top">
  <div class="l-top">
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <?php
      $slide_query = new WP_Query(
        array(
          'post_type' => 'post',
          'posts_per_page' => 6,
          'orderby' => 'date',
          'order' => 'DESC',
        ),
      );
    if ($slide_query->have_posts()):
        while ($slide_query->have_posts()):
        $slide_query->the_post(); ?>
        <div class="swiper-slide">
          <div class="swiper-slide-item"><?php the_post_thumbnail(); ?></div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section id=" catch">
  <div class="l-catch">
    <div class="l-catch__phrase">
      <div class="c-catch">
        <h2 class="c-catch__phrase">Less is More<span></span></h2>
        <p class="c-catch__phrase-accent">遊び心</p>
      </div>
      <div class="c-catch">
        <p class="c-catch__lead">WEBサイトはユーザーがいて<br>
          <span class="l-text-accent">初めて完成するもの</span>
        </p>
      </div>
    </div>
    <div class="l-catch__body">
      <div class="c-catch__img">
        <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/Portforio-my-imge.png"
          alt="arisumi-image">
      </div>
      <div class="c-catch__body">
        <p class="c-content__text">
          当サイトのデザイン・コーディングをはじめ、<br>ロゴデザインもすべて行いました。
        </p>
        <p class="c-content__text not-sp">
          このサイトでは、少しでも楽しんでもらえるよう<br>
          カーソルに合わせてサイトが<span class="l-text-accent">色づく</span>ようにしています。</p>
        <p class="c-content__text not-sp">
          え？カーソル？？<br>
          そうです。PC版だけです。
        </p>
      </div>
    </div>
  </div>
</section>
<section id="message">
  <div class="l-content l-inner">
    <h2 class="c-content__title">Message</h2>
    <div class="c-content__body">
      <h3 class="c-content__sub-title">はじめに</h3>
      <div class="c-content__text">
        Webフリーランスとして、制作会社や代理店を通して活動しております。<br>
        Webサイトは顧客が御社を知る重要なツールであり、<span class="l-text-accent">大切なコミュニケーションの懸け橋</span>です。<br>
        それを支え、御社のさらなる発展をサポートします。
      </div>
      <h3 class="c-content__sub-title">Webサイトは作成して終わりではない</h3>
      <div class="c-content__text">
        Webサイトもその時々に合わせた変化が必要になります。それはめまぐるしく技術が発展し、価値観も変化し続ける現代においてより顕著に現れます。<br>
        そのため、<span class="l-text-accent">保守・管理しやすく長期的に利用</span>していただけるようなものにするため<span
          class="l-text-accent">丁寧な対応</span>を心がけています。<br>
        半年後・1年後と時間をかけて反響あるサイトへ<span class="l-text-accent">成長させるお付き合いをさせて下さい。</span>
      </div>
    </div>
  </div>
</section>

<div class="l-content__bg">
  <section id="ido">
    <div class="l-inner">
      <h2 class="c-content__title">What I do</h2>
      <div class="c-content__body">
        <ul class="c-content__list">
          <li class="c-content__list-item">コーディング</li>
          <li class="c-content__list-item">デザイン</li>
          <li class="c-content__list-item">HTML/CSS</li>
          <li class="c-content__list-item">WordPress・CMSカスタマイズ</li>
          <li class="c-content__list-item">Gitでの共有作業</li>
        </ul>
      </div>
      <div class="c-content-button"><a href="/profile/" class="c-button-more"><span>more</span></a></div>
    </div>
  </section>
  <section id="activity">
    <div class="l-inner l-content">
      <h2 class="c-content__title">Activity time</h2>
      <div class="c-content__body">
        <dl>
          <dt class="c-content__name">稼働時間</dt>
          <dd class="c-content__text">平日 9:00 ~ 18:00</dd>
          <dt class="c-content__name">連絡可能時間</dt>
          <dd class="c-content__text">24時間（寝ている時間以外）対応いたします。<br>
            時間帯を気にせずご連絡ください</dd>
        </dl>
      </div>
    </div>
  </section>
</div>
<section id="work">
  <div class="l-content l-inner">
    <h2 class="c-content__title">Work</h2>
    <div class="l-work__card-list">
      <?php
      $works_query = new WP_Query(
        array(
          'post_type' => 'post',
          'posts_per_page' => 4,
          'orderby' => 'date',
          'order' => 'DESC',
        ),
      );
    if ($works_query->have_posts()) : ?>
      <?php while ($works_query->have_posts()) : ?>
      <?php $works_query->the_post(); ?>
      <div class="l-work__card">
        <a href="<?php the_permalink(); ?>" class="c-work__card-item">
          <div class="c-work__card-img">
            <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail(); ?>
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/No_image.png" alt="">
            <?php endif; ?>
          </div>
          <div class="c-work__card-tag"><?php my_the_post_category(false); ?></div>
          <div class="c-work__card-link">
            <i class="fas fa-external-link"></i>
            <?php echo wp_trim_words( get_field('work_url'), 27, '...' ); ?>
          </div>
        </a>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="c-content-button"><a href="/works/" class="c-button-more"><span>more</span></a></div>
  </div>
</section>

<section id="price">
  <div class="l-content l-inner">
    <h2 class="c-content__title">Price</h2>
    <table class="p-price__table">
      <tr>
        <th>LP制作</th>
        <td>2.5万円～ (ボリューム、ご要望により変動あり)</td>
      </tr>
      <tr>
        <th>Wordpress設置</th>
        <td>3万円～</td>
      </tr>
      <tr>
        <th>小規模サイト</th>
        <td>20万円～</td>
      </tr>
      <tr>
        <th>WEBデザイン</th>
        <td>10万円～</td>
      </tr>
      <tr>
        <th>ロゴデザイン</th>
        <td>5万円～</td>
      </tr>
    </table>
    <p class="p-price__text">※価格は目安となりますので規模により変動いたします。まずはご相談ください。</p>
  </div>
</section>



<?php get_footer(); ?>