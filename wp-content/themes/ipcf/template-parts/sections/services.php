<?php
$args = array(
    'post_type' => 'services',
    'posts_status' => 'publish',
    'posts_per_page' => 5
);

$getPosts = new WP_Query($args);
if($getPosts->have_posts()) { ?>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="owl-carousel">
                    <?php foreach($getPosts->posts as $key => $post) { ?>
                        <div class="item">
                            <a class="card" href="<?php the_field("link_service"); ?>">
                                <div class="card-body text-center d-flex align-items-center justify-content-evenly">
                                    <?php the_field("icon_service"); ?>
                                    <h5 class="card-title m-0"><?php the_title(); ?></h5>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } wp_reset_postdata(); ?>