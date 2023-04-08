<style>
    .parent {
display: grid;
grid-template-columns: repeat(4, 1fr);
grid-template-rows: repeat(4, 1fr);
grid-column-gap: 10px;
grid-row-gap: 10px;
}

.div1 { grid-area: 1 / 1 / 5 / 3; }
.div2 { grid-area: 1 / 3 / 3 / 4; }
.div3 { grid-area: 3 / 3 / 5 / 4; }
.div4 { grid-area: 1 / 4 / 3 / 5; }
.div5 { grid-area: 3 / 4 / 5 / 5; }
</style>
<?php
$args = array(
    'post_type' => 'post',
    'posts_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 5
);

$getPosts = new WP_Query($args);
$posts = $getPosts->posts;
$post1 = $posts[0];
$posts2 = array_slice($posts, 1, 2);
$posts3 = array_slice($posts, 3, 4);

$numberOfRows = 4;
$count = 1;

if($getPosts->have_posts()) { ?>
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="parent">
                    <?php
                    foreach($posts as $key => $post) {
                        $postTitle = $post->post_title;
                        $postImage = get_the_post_thumbnail_url($post->ID, 'full') != '' ? get_the_post_thumbnail_url($post->ID, 'full') : catch_that_image($post->ID);
                        ?>
                        <div class="div<?php echo $count++; ?>">
                            <div class="card text-bg-dark">
                                <img src="<?php echo $postImage; ?>" class="card-img" alt="<?php echo $postTilte; ?>">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } wp_reset_postdata(); ?>