<?php get_header(); ?>
<section id="banner">
            <div class="container">
                <div class="banner_headline">
                    <h1><?php bloginfo('name'); ?></h1>
                    <h2><?php bloginfo('description'); ?></h2>
                </div>

            </div>
        </section>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 maincontent">
                <h1>Pesquisou por: <?php echo get_search_query(); ?></h1>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>
                        <?php get_template_part('template_parts/post'); ?>

                    <?php endwhile; ?>

                    <div class="pagi">
                        <div class="previous_pag"><?php previous_posts_link('Página Anterior') ?></div>
                        <div class="next_pag"><?php next_posts_link('Próxima Página') ?></div>
                    </div>

                <?php endif; ?>
            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>