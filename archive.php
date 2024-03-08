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
    <div class="l-work__card-list">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
      <?php the_post(); ?>
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
  </div>
  </div>
</section>

<?php get_footer(); ?>