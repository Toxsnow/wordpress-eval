<?php

get_header();
?>

    <main id="primary" class="site-main homepage">
        <section class="hero-section">
            <div class="container">
                <?php if (function_exists('get_field') && get_field('photo_de_profil')) : ?>
                    <div class="profile-image">
                        <img src="<?php echo esc_url(get_field('photo_de_profil')['url']); ?>" alt="Photo de profil">
                    </div>
                <?php endif; ?>

                <div class="hero-content">
                    <h1><?php bloginfo('name'); ?></h1>

                    <?php if (function_exists('get_field') && get_field('presentation')) : ?>
                        <div class="presentation">
                            <?php echo wp_kses_post(get_field('presentation')); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <?php if (function_exists('get_field') && have_rows('competences')) : ?>
            <section class="skills-section">
                <div class="container">
                    <h2>Mes compétences</h2>
                    <div class="skills-grid">
                        <?php while (have_rows('competences')) : the_row(); ?>
                            <div class="skill-item">
                                <?php echo wp_kses_post(get_sub_field('competence')); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if (function_exists('get_field') && get_field('meilleurs_projets')) :
            $featured_projects = get_field('meilleurs_projets');
            if ($featured_projects) : ?>
                <section class="featured-projects">
                    <div class="container">
                        <h2>Mes meilleures réalisations</h2>
                        <div class="portfolio-grid">
                            <?php foreach ($featured_projects as $post) :
                                setup_postdata($post); ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item'); ?>>
                                    <a href="<?php the_permalink(); ?>" class="portfolio-link">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="portfolio-thumbnail">
                                                <?php the_post_thumbnail('medium'); ?>
                                            </div>
                                        <?php endif; ?>
                                        <h3 class="portfolio-title"><?php the_title(); ?></h3>
                                        <?php if (function_exists('get_field') && get_field('client')) : ?>
                                            <div class="portfolio-client">
                                                <?php echo esc_html(get_field('client')); ?>
                                            </div>
                                        <?php endif; ?>
                                    </a>
                                </article>
                            <?php endforeach;
                            wp_reset_postdata(); ?>
                        </div>
                        <div class="view-all">
                            <a href="<?php echo esc_url(get_post_type_archive_link('portfolio')); ?>" class="button">
                                Voir toutes mes réalisations
                            </a>
                        </div>
                    </div>
                </section>
            <?php endif;
        endif; ?>
    </main>

<?php get_footer(); ?>