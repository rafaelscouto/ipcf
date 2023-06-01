<?php
$args = array(
    'post_type' => 'beneficiaries',
    'posts_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'rand'
);

$getPosts = new WP_Query($args);
if($getPosts->have_posts()) { ?>
    <section id="benefits">
        <div class="container">
            <h4 class="sec-title">Beneficiarios</h4>
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <?php foreach($getPosts->posts as $key => $post) { 
                        $birthdate = date("d", strtotime(get_field("birthdate"))) . " de " . date("F", strtotime(get_field("birthdate")));
                        switch(date("F", strtotime(get_field("birthdate")))) {
                            case "January":
                                $birthdate = date("d", strtotime(get_field("birthdate"))) . " de Janeiro";
                                break;
                            case "February":
                                $birthdate = date("d", strtotime(get_field("birthdate"))) . " de Fevereiro";
                                break;
                            case "March":
                                $birthdate = date("d", strtotime(get_field("birthdate"))) . " de Março";
                                break;
                            case "April":
                                $birthdate = date("d", strtotime(get_field("birthdate"))) . " de Abril";
                                break;
                            case "May":
                                $birthdate = date("d", strtotime(get_field("birthdate"))) . " de Maio";
                                break;
                            case "June":
                                $birthdate = date("d", strtotime(get_field("birthdate"))) . " de Junho";
                                break;
                            case "July":
                                $birthdate = date("d", strtotime(get_field("birthdate"))) . " de Julho";
                                break;
                            case "August":
                                $birthdate = date("d", strtotime(get_field("birthdate"))) . " de Agosto";
                                break;
                            case "September":
                                $birthdate = date("d", strtotime(get_field("birthdate"))) . " de Setembro";
                                break;
                            case "October":
                                $birthdate = date("d", strtotime(get_field("birthdate"))) . " de Outubro";
                                break;
                            case "November":
                                $birthdate = date("d", strtotime(get_field("birthdate"))) . " de Novembro";
                                break;
                            case "December":
                                $birthdate = date("d", strtotime(get_field("birthdate"))) . " de Dezembro";
                                break;
                        }
                        ?>
                        <div class="item">
                            <p><?php the_field("type"); ?></p>
                            <p><?php echo $birthdate; ?></p>
                            <p><?php the_title(); ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } wp_reset_postdata(); ?>