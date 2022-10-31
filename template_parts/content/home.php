<div class="container posts-grid">
    <div class="row">
        <?php if (have_posts()) :  while (have_posts()) : the_post();
                get_template_part('template_parts/content/post');
            endwhile;
            echo '<div class="nav-links">';
            posts_nav_link(' · ', '← Página Anterior', 'Próxima Página →');
            echo '</div>';
        endif; ?>
    </div>
</div>