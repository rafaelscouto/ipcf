<?php
$args = array(
    'post_type' => 'beneficiaries',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC'
);

$getPosts = new WP_Query($args);

if($getPosts->have_posts()) { ?>
<section id="birthdays">
    <div class="container">
        <h4 class="sec-title">Aniversariantes do mês <i class="fa-solid fa-cake-candles"></i></h4>
        <div class="row">
            <div class="owl-carousel owl-theme">
                <?php
                foreach($getPosts->posts as $key => $post) {
                    $birthdate = get_field("birthdate", $post->ID);
                    $date = new DateTime($birthdate);
                    $month = $date->format('m'); /* get beneficiaries month field */
                    $day = $date->format('d');
                    if($month == date('m')) { /* show only beneficiaries for the current month */
                ?>
                        <div class="item">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php the_title(); ?>
                                    </h5>
                                    <h6 class="card-subtitle">
                                        <?php echo $day . '/' . $month; ?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php } wp_reset_postdata(); ?>