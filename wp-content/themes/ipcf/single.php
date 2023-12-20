<?php get_header(); ?>
<article id="article" <?php post_class('article'); ?> id="post-<?php the_ID(); ?>">
    <div class="container">
        <div class="article-post">
            <h1 class="article-title"><?php the_title(); ?></h1>
            <?php if (has_post_thumbnail()) : ?>
                <figure class="article-img">
                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                </figure>
            <?php endif; ?>
            <?php the_content(); ?>
        </div>
	</div>
</article>
<?php get_footer(); ?>