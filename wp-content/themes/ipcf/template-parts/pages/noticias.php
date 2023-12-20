<?php
$args = array(
    'post_type' => 'post',
    'posts_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 3,
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
);

$getPosts = new WP_Query($args);
if($getPosts->have_posts()) { ?>
    <section id="news">
        <div class="container">
            <h1 class="article-title"><?php the_title(); ?></h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach($getPosts->posts as $key => $post) { ?>
                    <div class="col">
                        <a class="card" href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url() != '' ? get_the_post_thumbnail_url($post->ID, 'full') : catch_that_image($post->ID) ?>" class="card-img-top" alt="<?php echo $post->post_title; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $post->post_title; ?></h5>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <ul class="pagination">
                    <?php
                        $big = 999999999; // need an unlikely integer
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $getPosts->max_num_pages,
                            'prev_text' => __('&laquo; Anterior', 'rctheme'),
                            'next_text' => __('Próximo &raquo;', 'rctheme')
                        ) );
                    ?>
                </ul>
            </div>
        </div>
    </section>
<?php } wp_reset_postdata(); ?>