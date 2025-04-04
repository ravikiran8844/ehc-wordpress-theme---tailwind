<?php
/*
Template Name: About Page
*/
get_header();
?>
<main class="min-h-screen">

    <section class="bg-[#F7F6F2]">
        <div class="p-4 py-8 lg:p-12">
            <div class="breadcrumbs text-sm mb-2">
                <ul class="flex justify-center">
                    <li><a href="/" class="text-black">Home</a></li>
                    <li class="text-black">About</li>
                </ul>
            </div>

            <div class="text-2xl lg:text-4xl font-bold text-center text-black ">
                About
            </div>
        </div>
    </section>


    <section class="p-4 py-8 lg:p-12 max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold text-gray-800">Krisha Charitable Trust (KCT)</h2>
        <p class="mt-4 text-gray-700">
            We believe in creating meaningful change through education, healthcare, sanitation, and women empowerment.
            As the CSR arm of Emerald Jewel Industry India Ltd, our mission is to uplift communities by addressing
            fundamental needs and fostering sustainable development.
        </p>

        <h3 class="mt-6 text-xl font-semibold text-gray-800">Our Commitment to Social Responsibility</h3>
        <p class="mt-2 text-gray-700">
            Corporate Social Responsibility (CSR) is our commitment to conducting business in an economically, socially,
            and
            environmentally responsible manner. We take responsibility for the impact of our activities, ensuring that
            they contribute
            to the well-being of society.
        </p>

        <h3 class="mt-6 text-xl font-semibold text-gray-800">Our Objectives</h3>
        <ul class="mt-4 space-y-3 text-gray-700">
            <li class="flex items-start gap-2">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12l4 4L19 7"></path>
                </svg>
                <span>Enhancing Education: Providing school infrastructure support, scholarships, and educational
                    materials to students in need.</span>
            </li>
            <li class="flex items-start gap-2">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12l4 4L19 7"></path>
                </svg>
                <span>Improving School Facilities: Upgrading sanitation and drinking water facilities in government
                    schools for a healthier learning environment.</span>
            </li>
            <li class="flex items-start gap-2">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12l4 4L19 7"></path>
                </svg>
                <span>Empowering Tribal Communities: Ensuring equal access to quality education for tribal students and
                    raising awareness about the importance of education.</span>
            </li>
            <li class="flex items-start gap-2">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12l4 4L19 7"></path>
                </svg>
                <span>Supporting Women Empowerment: Providing skill training programs to help women achieve financial
                    independence.</span>
            </li>
            <li class="flex items-start gap-2">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12l4 4L19 7"></path>
                </svg>
                <span>Rural Development Initiatives: Addressing critical community needs such as healthcare,
                    environmental sustainability, and livelihood support.</span>
            </li>
        </ul>

        <p class="mt-6 text-gray-700">
            Through Krisha Charitable Trust, we strive to empower lives, build stronger communities, and create a
            lasting impact. Join us in making a difference!
        </p>

        <p class="mt-4 font-semibold text-gray-800 flex items-center">
            📍 Together, we can shape a better future.
        </p>
    </section>



    <section class="bg-[#F7F6F2] py-12">
        <div class="p-4 py-8 lg:p-12 max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Text Content -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">MISSION</h2>
                    <p class="text-gray-600 text-lg">
                        Our mission is to provide <span class="font-semibold">Quality education for all</span>, ensure
                        better <span class="font-semibold">Health and Well-being</span> for the underprivileged, and
                        uplift <span class="font-semibold">Women</span> by offering <span class="font-semibold">Skill
                            Development programs</span> that support sustainable livelihoods. We focus on <span
                            class="font-semibold">Community Development</span>, enhancing the lives of marginalized
                        groups, and ensuring equal opportunities for tribal students through education.
                    </p>
                </div>
                <!-- Image Section -->
                <div>
                    <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/03/about-page-07.webp"
                        alt="Mission Image" class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="p-4 py-8 lg:px-12 lg:py-18 max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-4">
                <!-- Large main image (left side) -->
                <div class="md:row-span-2">
                    <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/03/about-grid-img1.webp"
                        alt="About Image" class="w-full h-full rounded-lg shadow-lg object-cover">
                </div>

                <!-- Top-right smaller image -->
                <div class="h-auto">
                    <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/03/about-grid-img2.webp"
                        alt="About Image 2" class="w-full h-full rounded-lg shadow-lg object-cover">
                </div>

                <!-- Bottom-right smaller image -->
                <div class="h-auto">
                    <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/03/about-grid-img3.webp"
                        alt="About Image 3" class="w-full h-full rounded-lg shadow-lg object-cover">
                </div>
            </div>
        </div>
    </section>


    <section class="bg-[#F7F6F2]">
        <div class="p-4 py-8 lg:p-12 max-w-7xl mx-auto">
            <div class="grid sm:grid-cols-2 gap-8">
                <div
                    class="card w-full bg-white shadow-2xl max-w-md mx-auto flex justify-center items-center flex-col p-6 space-y-2">
                    <div class="text-[#F78D1E] ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 0 1 1.037-.443 48.282 48.282 0 0 0 5.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>

                    </div>
                    <div class="card-body items-center text-center p-0">
                        <h2 class="card-title text-xl font-semibold text-black">Share Your Experience</h2>
                        <p class="text-lg">To Perform better</p>
                    </div>
                </div>


                <div
                    class="card w-full bg-white shadow-2xl max-w-md mx-auto flex justify-center items-center flex-col p-6 space-y-2">
                    <div class="text-[#F78D1E] ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </div>
                    <div class="card-body items-center text-center p-0">
                        <h2 class="card-title text-xl font-semibold text-black">Schedule Your Appointment
                        </h2>
                        <p class="text-lg">To know more
                    </div>
                </div>
            </div>


        </div>
    </section>




    <section class="relative my-16"
        style="background-image: url('<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/03/about-page-06.webp');background-size: cover;background-position: center;">
        <div class="p-4 py-6 lg:p-12 xl:p-16 max-w-7xl mx-auto relative z-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 justify-items-center">

                <div class="text-center space-y-4">
                    <div class="text-white font-bold text-4xl lg:text-5xl">
                        <span class="counter" data-target="27">27</span> Years
                    </div>
                    <div class="text-xl font-semibold text-white">Experience </div>
                </div>
                <div class="text-center space-y-4">
                    <div class="text-white font-bold text-4xl lg:text-5xl">
                        <span class="counter" data-target="100000">100000</span>+
                    </div>
                    <div class="text-xl font-semibold text-white">Beneficiaries
                    </div>
                </div>
            </div>
        </div>

    </section>




</main>


<?php get_footer(); ?>