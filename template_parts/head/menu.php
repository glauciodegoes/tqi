<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12">
                <div class="logo">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <nav>
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
                </nav>
            </div>
        </div>
    </div>
</header>