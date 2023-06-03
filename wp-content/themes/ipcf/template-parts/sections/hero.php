<?php
$args = array(
    'post_type' => 'post',
    'posts_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 5
);

$getPosts = new WP_Query($args);

if($getPosts->have_posts()) {
    $posts = $getPosts->posts;
    $post1 = $posts[0];
    $posts2 = array_slice($posts, 1, 2);
    $posts3 = array_slice($posts, 3, 4);

    $numberOfRows = 4;
    $count = 1;
    ?>
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="hero-news">
                    <?php
                    foreach($posts as $key => $post) {
                        $postTitle = $post->post_title;
                        $postExcerpt = $post->post_excerpt;
                        $postDate = date_i18n('d F Y', strtotime($post->post_date), false, 'pt_BR');
                        $postImage = get_the_post_thumbnail_url($post->ID, 'full') != '' ? get_the_post_thumbnail_url($post->ID, 'full') : catch_that_image($post->ID);
                        $permalink = get_permalink($post->ID);
                        ?>
                        <div class="item-<?php echo $count++; ?>">
                            <a class="card text-bg-dark" href="<?php the_permalink(); ?>">
                                <img src="<?php echo $postImage; ?>" class="card-img" alt="<?php echo $postTilte; ?>">
                                <div class="card-img-overlay">
                                    <div class="card-box">
                                        <h5 class="card-title"><?php echo $postTitle; ?></h5>
                                        <p class="card-text"><small><?php echo $postDate; ?></small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } wp_reset_postdata(); ?>