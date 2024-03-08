<?php get_header(); ?>

<!-- breadcrumb -->
<?php if ( function_exists( 'bcn_display' ) ) : ?>
<div class="breadcrumb">
  <?php bcn_display(); ?>
</div><!-- /breadcrumb -->
<?php endif; ?>

<div class="c-content-bg">News</div>
<section id="profile" class="l-content">
  <div class="l-inner">
    <h2 class="c-content__title">お知らせ</h2>
    <div class="c-content__body">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
      <?php the_post(); ?>
      <?php if(has_post_thumbnail()): ?>
      <?php the_post_thumbnail(); ?>
      <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/No_image.png" alt="">
      <?php endif; ?>
      <h3 class="p-works__title"><?php the_title(); ?></h3>
      <div class="p-works__meta">
        <p class="p-works__date" datetime="<?php the_time("c"); ?>"><?php the_time("Y/n/j"); ?></p>
        <a href="<?php the_field('work_url'); ?>" class="p-works__link"><i class="fas fa-external-link"></i>
          <?php the_field('work_url'); ?></a>
      </div>
      <?php if(get_field('work_id')): ?>
      <div class="p-works__basic">
        <div class="p-works__basic-title">
          <p class="p-works__basic-text">Basic 認証ID</p>
          <p class="p-works__basic-pas"><?php the_field('work_id'); ?></p>
        </div>
        <div class="p-works__basic-title">
          <p class="p-works__basic-text">Basic 認証Pas</p>
          <p><?php the_field('work_pas'); ?></p>
        </div>
      </div>
      <?php else: ?>
      <div></div>
      <?php endif; ?>
      <?php if(get_field('work_description')): ?>
      <div class="c-work__body">
        <?php (the_field('work_description')); ?>
        <?php else: ?>
        <p class="p-works__description">現在こちらのコンテンツは作成中です。</p>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>