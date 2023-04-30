<?php
/*
Template Name: Archives
*/
get_header(); ?>

<section id="archive">
    <div class="container">
        <div class="row">
            <?php
            // get the current taxonomy term and show all posts associated with it
            $taxonomy = get_queried_object();

            // show the list of taxonomies terms linked to the taxonomy
            $terms = get_terms( array(
                'taxonomy' => $taxonomy->taxonomy,
                'hide_empty' => false,
            ) );

            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                // show the taxonomy name, if is post_tag use Tags otherwise use Categories, if author use Author in portuguese brazilian
                if ( $taxonomy->taxonomy == 'post_tag' ) {
                    $taxonomy_name = 'Tag';
                } elseif ( $taxonomy->taxonomy == 'author' ) {
                    $taxonomy_name = 'Autor';
                } else {
                    $taxonomy_name = 'Categoria';
                }

                echo '<h2 class="title-page">' . $taxonomy_name . ': ' . $taxonomy->name . '</h2>';
                echo '<ul class="list-group list-group-flush">';
                foreach ( $terms as $term ) {
                    echo '<li class="list-group-item py-3">';
                    echo '<a href="' . get_term_link( $term ) . '"><i class="fa-solid fa-angles-right"></i> ' . $term->name . '</a>';
                    echo '</li>';
                }
                echo '</ul>';
            }

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => $taxonomy->taxonomy,
                        'field' => 'slug',
                        'terms' => $taxonomy->slug,
                    )
                )
            );

            $query = new WP_Query( $args );

            if ( $query->have_posts() ) {
                echo '<h2 class="title-page">Posts relacionados</h2>';
                echo '<ul class="list-group list-group-flush">';
                while ( $query->have_posts() ) {
                    $query->the_post(); $slug = $post->post_name;
                    echo '<li class="list-group-item py-3">';
                    echo '<a href="' . get_the_permalink() . '"><i class="fa-solid fa-angles-right"></i> ' . get_the_title() . '</a>';
                    echo '</li>';
                }
                echo '</ul>';
            }
            ?>
        </div>
	</div>
</section>

<?php get_footer(); ?>
