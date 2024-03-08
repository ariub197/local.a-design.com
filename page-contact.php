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
    <h2 class="c-content__title c-content__title--long">ご依頼・お問い合わせ</h2>
    <!-- <div class="c-content__body">
      <p class="c-content__text">お仕事のご依頼やお問い合わせ、ご感想等は、下記フォームよりご連絡いただけますと幸いです。</p>
      <p class="c-content__text">ご連絡には遅くとも1営業日以内にご返信いたします。</p>
      <div class="c-content"> -->
    <?php the_content(); ?>
    <!-- </div> -->
    <!-- </div> -->
  </div>
</section>



<?php get_footer(); ?>