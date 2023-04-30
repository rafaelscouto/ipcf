<head>
    <!-- HTML 4 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- HTML5 -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="<?php bloginfo('name'); ?>">
    <meta description="<?php bloginfo('description'); ?>">
    <title><?php wp_title(); ?></title>
    
    <!-- Share -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo get_bloginfo(); ?>" />
    <meta property="og:description" content="<?php echo the_title();?>">
    <meta property="og:image" content="<?php echo get_the_post_thumbnail_url()?>"/>

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo get_bloginfo('name'); ?>" />
    <meta name="twitter:description" content="<?php echo the_title();?>" />
    <meta name="twitter:image:src" content="<?php echo get_the_post_thumbnail_url();?>" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_template_part('template-parts/header/header'); ?>
    <?php get_template_part('template-parts/nav/menu'); ?>
    <?php show_custom_breadcrumbs(); ?>