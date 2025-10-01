<?php get_header(); ?>
<main id="main">
    <section class="hero">
        <?php
        // Hero: featured image and title from a custom field or main page
        $hero_id = get_option('page_on_front');
        $hero_img = get_the_post_thumbnail_url($hero_id, 'full');
        $hero_title = get_the_title($hero_id);
        ?>
        <div class="hero-image" style="background-image:url('<?php echo esc_url($hero_img); ?>')"></div>
        <h1 class="hero-title"><?php echo esc_html($hero_title); ?></h1>
    </section>
    <section class="galleries">
        <?php
        $galleries = new WP_Query(['post_type' => 'gallery']);
        if ($galleries->have_posts()) :
            while ($galleries->have_posts()) : $galleries->the_post();
                ?>
                <article class="gallery">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('large'); ?>
                        <h2><?php the_title(); ?></h2>
                    </a>
                </article>
                <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>
