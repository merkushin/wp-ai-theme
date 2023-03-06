<?php get_header(); ?>

<main class="container mx-auto p-4">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1 class="text-4xl font-bold text-gray-900"><?php the_title(); ?></h1>
    <p class="text-lg text-gray-700 mt-2">By <?php the_author(); ?> on <?php the_date(); ?></p>
    <?php if ( has_post_thumbnail() ) : ?>
      <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?>" class="w-full h-auto mt-4 rounded-lg shadow-lg">
    <?php endif; ?>
    <div class="prose prose-lg mt-8">
      <?php the_content(); ?>
    </div>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>

