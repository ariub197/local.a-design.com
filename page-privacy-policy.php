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
    <h2 class="c-content__title c-content__title--long">個人情報保護方針</h2>
    <div class="c-content__body p-privacy">
      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>