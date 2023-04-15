<nav id="nav" class="navbar navbar-expand-lg sticky-top navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
            wp_nav_menu(
                array(
                    'theme_location'        => 'menu-main',
                    'menu_id'               => 'menu-main',
                    'menu_class'            => 'navbar-nav justify-content-center',
                    'container'             => 'div',
                    'container_class'       => 'offcanvas offcanvas-end ',
                    'container_id'          => 'navbarNavDropdown',
                    'container_aria_label'  => 'navbarNavDropdownLabel',
                    'items_wrap'            => '<ul id="%1$s" class="%2$s offcanvas-body"><div class="offcanvas-header px-0 mt-2"><h5 class="offcanvas-title" id="navbarNavDropdownLabel">Menu</h5><button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>%3$s</ul>',

                )
            );
        ?>
    </div>
</nav>
<section id="busca">
    <div class="container">
        <div class="row">
            <form method="get" class="form-search" action="<?php echo home_url(); ?>">
                <div class="input-group">
                    <input type="text" id="search-input" class="form-control" name="s" placeholder="Buscar..." aria-label="Buscar..." aria-describedby="button-search-addon">
                    <button class="btn btn-outline-secondary" type="button-search-addon">Buscar</button>
                </div>
            </form>
        </div>
    </div>
</section>