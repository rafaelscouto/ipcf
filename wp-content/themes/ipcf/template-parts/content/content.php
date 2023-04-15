<article id="article" <?php post_class('article'); ?> id="post-<?php the_ID(); ?>">
	<div class="container">
		<h1 class="article-title"><?php the_title(); ?></h1>
		
		<?php if (has_post_thumbnail()) : ?>

			<figure class="">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			</figure>

		<?php endif; ?>

		<?php the_content(); ?>
	</div>
</article>
