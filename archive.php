<?php get_header(); ?>

<!-- breadcrumb -->
<?php if ( function_exists( 'bcn_display' ) ) : ?>
<div class="breadcrumb">
  <?php bcn_display(); ?>
</div><!-- /breadcrumb -->
<?php endif; ?>

<div class="c-content-bg">Works</div>
<section id="profile" class="l-content">
  <div class="l-inner">
    <h2 class="c-content__title">制作実績</h2>

    <div class="u-width-fit u-margin-auto">
      <a href="https://frequent-impulse-981.notion.site/3d75baf0a955414a98f31b59cef27194?v=a46a2bc5ba184482955646d250e71de0&pvs=4" class="c-button-svg">
        <svg><rect x="2" y="2" rx="0" fill="none" width="260" height="54"></rect></svg>
        <span>企業制作実績はこちら</span>
      </a>
    </div>
    <div class="u-margin-top"></div>

    <div class="l-work--triple">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
      <?php the_post(); ?>
      <div class="c-work-card">
        <a href="<?php the_permalink(); ?>" class="c-work-card__item">
          <div class="c-work-card__img">
            <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail(); ?>
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/src/assets/img/No_image.png" alt="">
            <?php endif; ?>
          </div>
          <div class="c-work-card__tag"><?php my_the_post_category(false); ?></div>
          <div class="c-work-card__link">
            <i class="fas fa-external-link"></i>
            <?php echo wp_trim_words( get_field('work_url'), 27, '...' ); ?>
          </div>
        </a>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  </div>
</section>

<?php get_footer(); ?>