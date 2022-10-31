<footer>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                    if (has_nav_menu('primary')) {
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'fallback_cb' => false,
                            'menu_class' => 'nav navbar-nav'
                        ));
                    }
                    ?>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
            <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    }
                    ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>