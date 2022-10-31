<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <?php if (is_home()) {
                        echo 'Seja bem vindo ao Medical Center';
                    } else {
                        the_title();
                    }
                    ?>
                </h1>
                <h2><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></h2>
            </div>
        </div>
    </div>
</section>