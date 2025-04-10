<?php get_header(); ?>

<main>
<section class="hidden lg:block lg:h-24 bg-black">

</section>
<section class="container mx-auto px-4 lg:px-16 py-8 lg:pb-12 lg:pt-34">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Blog Post Card -->
        <div class="max-w-4xl mx-auto bg-white border border-gray-200 shadow-lg rounded-2xl overflow-hidden p-6">
            
            <!-- Blog Header -->
            <header class="text-center">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900"><?php the_title(); ?></h1>
                <div class="text-gray-500 mt-4 text-sm">
                    <span>By <?php the_author(); ?></span> | 
                    <span><?php echo get_the_date(); ?></span> | 
                    <span><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></span>
                </div>
            </header>

            <!-- Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="mt-6">
                    <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="w-full h-auto rounded-lg shadow-md">
                </div>
            <?php endif; ?>

            <!-- Blog Content -->
            <article class="mt-6 prose prose-lg">
                <?php the_content(); ?>
            </article>

            <!-- Post Navigation -->
            <div class="mt-12 flex justify-between text-[#F78D1E]">
                <div><?php previous_post_link('<strong>← %link</strong>', 'Previous Post'); ?></div>
                <div><?php next_post_link('<strong>%link →</strong>', 'Next Post'); ?></div>
            </div>

        </div>

        <!-- Comments Section -->
        <div class="max-w-4xl mx-auto mt-12 bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
            <?php if (comments_open() || get_comments_number()) : ?>
                <h3 class="text-xl font-bold mb-4">Leave a Comment</h3>
                <?php 
                    $comment_args = array(
                        'class_form' => 'space-y-4',
                        'class_submit' => 'px-6 py-2 bg-[#F78D1E] text-white rounded-full',
                        'comment_field' => '<textarea id="comment" name="comment" class="w-full p-3 border rounded-lg focus:ring-[#F78D1E] focus:border-[#F78D1E]" rows="4" placeholder="Write your comment..."></textarea>',
                        'fields' => array(
                            'author' => '<input id="author" name="author" type="text" class="w-full p-3 border rounded-lg focus:ring-[#F78D1E] focus:border-[#F78D1E]" placeholder="Your Name">',
                            'email' => '<input id="email" name="email" type="email" class="w-full p-3 border rounded-lg focus:ring-[#F78D1E] focus:border-[#F78D1E]" placeholder="Your Email">',
                        ),
                    );
                    comment_form($comment_args);
                ?>
                <div class="mt-8">
                    <?php wp_list_comments(array('style' => 'div', 'short_ping' => true)); ?>
                </div>
            <?php endif; ?>
        </div>

    <?php endwhile; endif; ?>
</section>
</main>

<?php get_footer(); ?>
