<?php

get_header();

?>

		<?php while ( have_posts() ) : the_post(); ?>

			<!-- Featured Image -->
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100">

			<!-- Page Content -->
			<div class="container">
				<?php the_content(); ?>
			</div>

		<?php endwhile; ?>

<?php

get_footer();