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
                    <div class="item">1</div>
                    <div class="item">2</div>
                    <div class="item">3</div>
                </div>
            </div>
        </div>
    </section>
<?php } wp_reset_postdata(); ?>