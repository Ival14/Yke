<?php get_header(); ?>

<main>
  <header class="frame">
    <h2 class="frame__title"><?php bloginfo('name'); ?></h2>
    <div class="frame__subline type-tiny">
      <span><?php bloginfo('description'); ?></span>
    </div>
  </header>

  <section class="content content--padded">
    <h4 class="type-tiny">Intro</h4>
    <p class="content__text"><?php echo get_post_meta(get_the_ID(), 'intro_text', true) ?: get_the_content(); ?></p>
  </section>

  <section class="content content--full content--padded">
    <div class="grid grid--spaced" data-grid-first>
      <?php
      $images = get_post_meta(get_the_ID(), 'grid_images', true);
      if ($images) :
        foreach ($images as $img_id) :
          $img_url = wp_get_attachment_image_url($img_id, 'large');
      ?>
        <div class="grid__img" style="background-image:url('<?php echo esc_url($img_url); ?>')"></div>
      <?php endforeach; endif; ?>
    </div>
    <div class="content__title">
      <h2 class="content__title-main"><?php echo get_post_meta(get_the_ID(), 'grid_title', true); ?></h2>
      <p class="type-tiny right end"><?php echo get_post_meta(get_the_ID(), 'grid_subtitle', true); ?></p>
    </div>
  </section>

  <!-- Add more grid sections as needed, following the Codrops structure -->

</main>
<?php get_footer(); ?>
