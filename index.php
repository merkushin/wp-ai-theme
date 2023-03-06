<?php get_header(); ?>

<main class="container mx-auto px-4 mt-8">
	<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				?>
				<div class="bg-white shadow-lg rounded-lg overflow-hidden">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url( 'medium_large' ); ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover"></a>
					<?php else : ?>
						<img src="https://via.placeholder.com/640x360" alt="<?php the_title(); ?>" class="w-full h-48 object-cover">
					<?php endif; ?>
					<div class="p-6">
						<h3 class="font-bold text-gray-900 text-xl mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="text-gray-700 text-base"><?php the_excerpt(); ?></p>
						<div class="flex items-center mt-4">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 32, '', '', array( 'class' => 'w-8 h-8 rounded-full mr-2' ) ); ?>
							<span class="text-gray-600 text-sm">By <?php the_author(); ?></span>
						</div>
					</div>
				</div>
				<?php
			endwhile;
		else :
			_e( 'Sorry, no posts were found.', 'my-custom-theme' );
		endif;
		?>
	</div>
</main>

<?php get_footer(); ?>

