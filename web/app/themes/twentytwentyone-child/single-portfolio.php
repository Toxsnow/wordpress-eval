<?php
get_header();
?>

    <main id="primary" class="site-main">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-single'); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="portfolio-featured-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="portfolio-details">
                    <?php if (function_exists('get_field')) : ?>
                        <div class="portfolio-meta">
                            <?php if (get_field('client')) : ?>
                                <div class="portfolio-client">
                                    <strong>Client:</strong> <?php echo esc_html(get_field('client')); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (get_field('completion_date')) : ?>
                                <div class="portfolio-date">
                                    <strong>Date de réalisation:</strong> <?php echo esc_html(get_field('completion_date')); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (get_field('project_url')) : ?>
                                <div class="portfolio-url">
                                    <strong>Lien du projet:</strong>
                                    <a href="<?php echo esc_url(get_field('project_url')); ?>" target="_blank">
                                        Voir le projet
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <div class="portfolio-images">
                    <?php
                    if (function_exists('get_field')) :
                        $main_image = get_field('project_image_main');
                        $image_1 = get_field('project_image_1');
                        $image_2 = get_field('project_image_2');

                        if ($main_image) : ?>
                            <div class="additional-image main-image">
                                <img src="<?php echo esc_url($main_image['url']); ?>" alt="<?php echo esc_attr($main_image['alt']); ?>">
                            </div>
                        <?php endif;

                        if ($image_1) : ?>
                            <div class="additional-image">
                                <img src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1['alt']); ?>">
                            </div>
                        <?php endif;

                        if ($image_2) : ?>
                            <div class="additional-image">
                                <img src="<?php echo esc_url($image_2['url']); ?>" alt="<?php echo esc_attr($image_2['alt']); ?>">
                            </div>
                        <?php endif;
                    endif; ?>
                </div>
            </article>
        <?php endwhile; ?>
    </main>

<?php
get_footer();