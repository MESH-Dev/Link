<?php get_header('deep'); ?>

<main id="content">

	<div class="container">
		<div class="row">
			<div class="six columns offset-by-three">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>

				<?php endwhile; ?>
			</div>

		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer('deep'); ?>