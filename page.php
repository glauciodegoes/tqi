<?php get_header(); ?>

<section id="banner">
    <div class="container">
        <div class="banner_headline">
            <h1><?php the_title(); ?></h1>
        </div>

    </div>
</section>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 maincontent">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>
                        <div class="post_content"><?php the_content(); ?></div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>