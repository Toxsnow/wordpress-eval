<?php
get_header();
?>

    <main id="primary" class="site-main">
        <header class="page-header">
            <h1 class="page-title">Mes Réalisations</h1>
        </header>

        <?php if (have_posts()) : ?>
            <div class="portfolio-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item'); ?>>
                        <a href="<?php the_permalink(); ?>" class="portfolio-link">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="portfolio-thumbnail">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>
                            <h2 class="portfolio-title"><?php the_title(); ?></h2>

                            <?php if (function_exists('get_field') && get_field('client')) : ?>
                                <div class="portfolio-client">
                                    <?php echo esc_html(get_field('client')); ?>
                                </div>
                            <?php endif; ?>
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>

            <?php the_posts_navigation(); ?>
        <?php else : ?>
            <p>Aucune réalisation trouvée.</p>
        <?php endif; ?>
    </main>

<?php
get_footer();