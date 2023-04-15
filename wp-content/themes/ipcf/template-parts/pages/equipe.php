<?php
$args = array(
    'post_type' => 'squad',
    'posts_status' => 'publish',
    'order' => 'ASC',
    'orderby' => 'date'
);

$getPosts = new WP_Query($args);
if($getPosts->have_posts()) { ?>
    <section id="squad">
        <div class="container">
            <h1 class="article-title"><?php the_title(); ?></h1>
            <div class="row">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <?php foreach($getPosts->posts as $key => $post) { ?>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?php echo $key == 0 ? 'active' : ''; ?>" id="pills-<?php echo $post->ID; ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?php echo $post->ID; ?>" role="tab" aria-controls="pills-<?php echo $post->ID; ?>" aria-selected="true">
                                <div class="tabs-box">
                                    <img src="<?php the_field("foto_perfil"); ?>" alt="" class="tabs-box-img">
                                    <!-- <h3 class="tabs-box-title"><?php echo $post->post_title; ?></h3>
                                    <span class="tabs-box-occupation"><?php the_field("cargo_funcao"); ?></span> -->
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <?php foreach($getPosts->posts as $key => $post) { ?>
                        <div class="tab-pane fade <?php echo $key == 0 ? 'show active' : ''; ?>" id="pills-<?php echo $post->ID; ?>" role="tabpanel" aria-labelledby="pills-<?php echo $post->ID; ?>-tab" tabindex="0">
                            <?php echo $post->post_content; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } wp_reset_postdata(); ?>