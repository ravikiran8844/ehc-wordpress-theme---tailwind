<?php get_header(); ?>

<main class="container mx-auto p-4 min-h-screen">
    <h2 class="text-3xl font-bold mb-6 text-center">Latest Posts</h2>

    <?php if (have_posts()) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while (have_posts()) : the_post(); ?>
                <article class="bg-white shadow-lg rounded-lg overflow-hidden border">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover">
                        </a>
                    <?php endif; ?>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">
                            <a href="<?php the_permalink(); ?>" class="text-blue-600 hover:underline"><?php the_title(); ?></a>
                        </h3>
                        <p class="text-gray-700 text-sm"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="text-blue-500 text-sm font-semibold mt-2 inline-block">Read More →</a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            <?php 
                echo paginate_links([
                    'prev_text' => '← Previous',
                    'next_text' => 'Next →',
                    'class' => 'flex space-x-2',
                ]);
            ?>
        </div>
    <?php else : ?>
        <p class="text-center text-gray-600">No posts found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
