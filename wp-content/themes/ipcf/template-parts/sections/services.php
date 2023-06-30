<?php
$args = array(
    'post_type' => 'services',
    'posts_status' => 'publish',
    'order' => 'ASC',
);

$getPosts = new WP_Query($args);
if($getPosts->have_posts()) { ?>
    <section id="services">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php foreach($getPosts->posts as $key => $post) { ?>
                    <div class="col">
                        <a class="card h-100" href="<?php the_field("link_service"); ?>" target="_blank">
                            <div class="card-body text-center d-flex align-items-center justify-content-start">
                                <?php the_field("icon_service"); ?>
                                <h5 class="card-title m-0"><?php the_title(); ?></h5>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } wp_reset_postdata(); ?>