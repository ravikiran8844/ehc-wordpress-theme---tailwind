<?php get_header(); ?>

<main class="min-h-screen flex flex-col items-center justify-center text-center bg-gray-100 p-6">
    <div class="max-w-md">
        <h1 class="text-6xl font-bold text-red-500 mb-4">404</h1>
        <h2 class="text-2xl font-semibold text-gray-800 mb-2">Oops! Page Not Found</h2>
        <p class="text-gray-600 mb-6">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        <a href="<?php echo home_url(); ?>" class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 transition">
            Go Back Home
        </a>
    </div>
</main>

<?php get_footer(); ?>
