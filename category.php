<?php get_header(); ?>

<main class="min-h-screen bg-gray-50">

    <!-- Banner Section -->
    <section class="lg:py-12" style="background-image: url('<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/04/banner.jpg'); background-size: cover; background-position: center;">
        <div class="p-4 py-16 lg:p-20">
            <h2 class="text-3xl lg:text-5xl font-bold text-center text-white">
                <?php single_cat_title(); ?>

            </h2>
        </div>
    </section>

    <?php if (have_posts()) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 p-4 py-10 sm:p-8 md:p-12 xl:p-16">

            <?php while (have_posts()) : the_post(); ?>

                <?php
                // Get ACF thumbnail image (if available)
                $acf_thumbnail = get_field('blog_thumbnail');
                $thumbnail_url = $acf_thumbnail ? esc_url($acf_thumbnail['url']) : get_the_post_thumbnail_url(get_the_ID(), 'large');
                ?>

                <article class="bg-white shadow-md rounded-md overflow-hidden transition duration-300 group">
                    <?php if ($thumbnail_url) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        </a>
                    <?php endif; ?>

                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2 line-clamp-2">
                            <a href="<?php the_permalink(); ?>" class="hover:text-blue-600 transition"><?php the_title(); ?></a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="text-blue-500 font-medium text-sm hover:underline">Read More →</a>
                    </div>
                </article>

            <?php endwhile; ?>

        </div>

        <!-- Pagination -->
        <div class="mt-6 mb-12 flex justify-center">
            <?php
            echo paginate_links([
                'prev_text' => '← Previous',
                'next_text' => 'Next →',
                'class'     => 'space-x-2',
            ]);
            ?>
        </div>

    <?php else : ?>
        <p class="text-center text-gray-600 py-16 text-lg">No posts found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>