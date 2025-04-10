<?php
/*
Template Name: Services Page
*/
get_header();
?>
<main>
    <section class="lg:py-12" style="background-image: url('<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/04/banner.jpg');background-size: cover;background-position: center;">
        <div class="p-4 py-16 lg:p-18 space-y-2">


            <div class="text-2xl lg:text-4xl font-bold text-center text-white ">
            Services
            </div>
            <div class="breadcrumbs text-sm">
                <ul class="flex justify-center">
                    <li><a href="/" class="text-white">Home</a></li>
                    <li class="text-white">Services</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="bg-white">
        <div class="p-4 py-8 sm:p-8 md:p-12 xl:p-16">
           <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="bg-blue-100 shadow-lg p-6 rounded-lg flex flex-col gap-4 group">
                    <div class="flex items-center gap-4">
                        <div class="bg-white rounded-full size-14 p-3 flex items-center justify-center transition group-hover:ring group-hover:ring-blue-500 group">
                            <img  loading="lazy" src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/04/services-icon-1.png" alt="" class="transition-transform duration-300 group-hover:rotate-3d-animation">
                        </div>
                        <div class="text-xl font-semibold text-blue-900 group-hover:text-blue-500">Couple Therapy
                        </div>
                    </div>
                    <div class="flex-grow">
                        <div>Professional mision capital without enterps medical users pros value added e-enabled creative technology via team.</div>
                    </div>
                    <hr class="border-white border-1 group-hover:border-blue-500">
                    <div>
                        <a href="#" class="text-blue-900 uppercase group-hover:text-blue-500 font-medium">Read More</a>
                    </div>
                </div>

                <div class="bg-blue-100 shadow-lg p-6 rounded-lg flex flex-col gap-4 group">
                    <div class="flex items-center gap-4">
                        <div class="bg-white rounded-full size-14 p-3 flex items-center justify-center transition group-hover:ring group-hover:ring-blue-500 group">
                            <img  loading="lazy" src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/04/services-icon-1.png" alt="" class="transition-transform duration-300 group-hover:rotate-3d-animation">
                        </div>
                        <div class="text-xl font-semibold text-blue-900 group-hover:text-blue-500">Couple Therapy
                        </div>
                    </div>
                    <div class="flex-grow">
                        <div>Professional mision capital without enterps medical users pros value added e-enabled creative technology via team.</div>
                    </div>
                    <hr class="border-white border-1 group-hover:border-blue-500">
                    <div>
                        <a href="#" class="text-blue-900 uppercase group-hover:text-blue-500 font-medium">Read More</a>
                    </div>
                </div>


                <div class="bg-blue-100 shadow-lg p-6 rounded-lg flex flex-col gap-4 group">
                    <div class="flex items-center gap-4">
                        <div class="bg-white rounded-full size-14 p-3 flex items-center justify-center transition group-hover:ring group-hover:ring-blue-500 group">
                            <img  loading="lazy" src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/04/services-icon-1.png" alt="" class="transition-transform duration-300 group-hover:rotate-3d-animation">
                        </div>
                        <div class="text-xl font-semibold text-blue-900 group-hover:text-blue-500">Couple Therapy
                        </div>
                    </div>
                    <div class="flex-grow">
                        <div>Professional mision capital without enterps medical users pros value added e-enabled creative technology via team.</div>
                    </div>
                    <hr class="border-white border-1 group-hover:border-blue-500">
                    <div>
                        <a href="#" class="text-blue-900 uppercase group-hover:text-blue-500 font-medium">Read More</a>
                    </div>
                </div>
           </div>
        </div>
    </section>


    <section>
        <div class="p-4 py-8 sm:p-8 md:p-12 xl:p-16">
            <div class="text-center space-y-4 mb-12">
                <div class="text-[#F78D1E] bg-[#FEEEDD] border border-[#F78D1E] py-1 px-4 inline-block rounded-full text-sm">
                    Our Blog
                </div>
                <div class="text-2xl md:text-3xl font-bold text-black">
                    Latest News Updates
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $latest_posts = new WP_Query([
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                ]);

                if ($latest_posts->have_posts()) :
                    while ($latest_posts->have_posts()) : $latest_posts->the_post();

                        // Get ACF image field (returns an array)
                        $acf_thumbnail = get_field('blog_thumbnail');

                        // Extract the image URL
                        $thumbnail_url = $acf_thumbnail ? esc_url($acf_thumbnail['url']) : get_the_post_thumbnail_url(get_the_ID(), 'large');
                ?>
                <div class="bg-white shadow-md rounded-md overflow-hidden">
                    <a href="<?php the_permalink(); ?>">
                        <img  loading="lazy" src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>"
                            class="w-full h-60 object-cover">
                    </a>
                    <div class="p-4">
                        <div class="text-xs text-gray-500 flex justify-between">
                            <span>Posted by <?php the_author(); ?></span>
                            <span><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></span>
                        </div>
                        <h3 class="text-lg font-bold mt-2 truncate">
                            <a href="<?php the_permalink(); ?>" class="text-black hover:text-[#F78D1E]">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <div class="mt-3">
                            <a href="<?php the_permalink(); ?>" class="text-[#F78D1E] font-semibold">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-center text-gray-500">No posts found.</p>';
                endif;
                ?>

            </div>
    </div>
    </section>

</main>



<?php get_footer(); ?>