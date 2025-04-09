<?php get_header(); ?>

<main>
    <section class="hidden lg:block lg:h-24 bg-black">

    </section>
<section class="max-w-4xl mx-auto px-4 py-10 text-black">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="prose lg:prose-xl">
      <h1 class="text-4xl font-bold text-gray-800 mb-4"><?php the_title(); ?></h1>
      <div class="text-gray-700">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>
</section>
</main>

<?php get_footer(); ?>
