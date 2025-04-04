<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet"> <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



    <header id="sticky-header" class="sticky top-0 z-50 w-full max-lg:bg-black lg:absolute">
        <nav class="p-4 lg:px-12 xl:px-16">
            <div>
                <div class="relative flex h-16 items-center justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                        <button id="mobile-menu-button"
                            class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-none">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" id="menu-icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg class="hidden h-6 w-6" id="close-icon" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-1 items-center justify-center md:items-center md:justify-between">
                        <div class="flex shrink-0 items-center">
                            <a href="/">
                                <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/04/logo.svg" alt="logo"
                                    class="h-16">
                            </a>
                        </div>
                        <div class="hidden md:flex md:ml-6  w-full justify-center">
                            <div class="flex space-x-8 justify-center flex-grow">
                                <a href="/" class="group relative py-2 text-md  text-white uppercase">
                                    Home
                                    <span
                                        class="absolute left-0 bottom-0 h-[2px] w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                                </a>
                                <a href="#" class="group relative py-2 text-md  text-white uppercase">
                                    About
                                    <span
                                        class="absolute left-0 bottom-0 h-[2px] w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                                </a>
                                <a href="#" class="group relative py-2 text-md  text-white uppercase">
                                    Services
                                    <span
                                        class="absolute left-0 bottom-0 h-[2px] w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                                </a>
                                <a href="#" class="group relative py-2 text-md  text-white uppercase">
                                    Contact
                                    <span
                                        class="absolute left-0 bottom-0 h-[2px] w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                                </a>


                            </div>
                            <div>
                                <button class="text-white px-6 py-2 text-md bg-[#F78D1E] rounded-full cursor-pointer flex items-center gap-1">
                                    Make an Appointment  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:hidden" id="mobile-menu">
                <div class="flex flex-col gap-2 py-2">
                    <a href="/" class="group relative py-2 text-md  text-white uppercase">
                        Home
                        <span
                            class="absolute left-0 bottom-0 h-[2px] w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="group relative py-2 text-md  text-white uppercase">
                        About
                        <span
                            class="absolute left-0 bottom-0 h-[2px] w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="group relative py-2 text-md  text-white uppercase">
                        Services
                        <span
                            class="absolute left-0 bottom-0 h-[2px] w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="group relative py-2 text-md  text-white uppercase">
                        Contact
                        <span
                            class="absolute left-0 bottom-0 h-[2px] w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <div>
                        <button class="text-white px-6 py-2 text-md bg-[#F78D1E] rounded-full cursor-pointer flex items-center gap-1">
                            Make an Appointment
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>

                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <script>
    window.addEventListener("scroll", function() {
        const header = document.getElementById("sticky-header");

        if (window.scrollY > 200) {
            header.classList.add("lg:bg-black");
            header.classList.remove("lg:absolute");
            header.classList.add("sticky");

        } else {
            header.classList.remove("lg:bg-black");
            header.classList.add("lg:absolute");
            header.classList.remove("sticky");
        }
    });

    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        menu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });
    </script>