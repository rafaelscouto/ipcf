<header>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-transparent" role="navigation">
                <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                ?> 
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-offcanvas" aria-controls="navbar-offcanvas" aria-label="<?php esc_attr_e( 'Toggle navigation', 'rctheme' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'menu-main',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'offcanvas offcanvas-start',
                    'container_id'      => 'navbar-offcanvas',
                    'menu_class'        => 'navbar-nav ms-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </nav>
        </div>
    </div>
</header>