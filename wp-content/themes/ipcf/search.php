<?php get_header(); ?>

<?php
global $post;
$s = get_search_query();
$args = array('s' => $s);
$the_query = new WP_Query( $args );

?>
<section id="search">
    <div class="container">
        <?php
        echo '<h2 class="title-page">Texto ou palavra pesquisada: <span class="fw-bold">' . get_search_query() . '</span></h3>';
        if ($the_query->have_posts()) {
            echo '<ul class="list-group list-group-flush">';
            while($the_query->have_posts()) {
                $the_query->the_post(); $slug = $post->post_name;
                echo '<li class="list-group-item py-3">';
                echo '<a href=""><i class="fa-solid fa-angles-right"></i> ' . get_the_title() . '</a>';
                echo '</li>';
            }
            echo '</ul>';
            wp_reset_query();
        } else {            
            get_template_part('template-parts/content/not-found');
        }
        ?>
    </div>
</section>

<?php get_footer(); ?>