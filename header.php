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

<body <?php body_class('antialiased'); ?>>



    <header id="sticky-header"
        class="sticky top-0 z-50 w-full max-lg:bg-black lg:absolute transition duration-300 ease-in-out">
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
                                <a href="/about" class="group relative py-2 text-md  text-white uppercase">
                                    About
                                    <span
                                        class="absolute left-0 bottom-0 h-[2px] w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                                </a>


                                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false"
                                    class="relative group">
                                    <div>
                                        <button @click="open = !open"
                                            class="p-2 text-md text-white uppercase cursor-pointer flex items-center gap-1 focus:outline-none">
                                            Services
                                            <svg class="w-4 h-4 transition-transform duration-300"
                                                :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>
                                    </div>

                                    <div x-show="open" x-cloak x-transition
                                        class="absolute left-0 w-48 bg-white rounded-md shadow-lg z-50 overflow-hidden">
                                        <a href="/services"
                                            class="block px-4 py-2 text-gray-800 hover:bg-gray-100">SERVICES</a>
                                        <a href="/services-details"
                                            class="block px-4 py-2 text-gray-800 hover:bg-gray-100">SERVICES DETAILS</a>
                                    </div>
                                </div>


                                <a href="/contact" class="group relative py-2 text-md  text-white uppercase">
                                    Contact
                                    <span
                                        class="absolute left-0 bottom-0 h-[2px] w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                                </a>


                            </div>
                            <div class="flex gap-2 items-center">
                                <a target="_blank" href="https://maps.app.goo.gl/ieCweotdAZWFBDAd6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41"
                                        fill="none">
                                        <rect y="0.901636" width="39.1967" height="39.1967" rx="19.5984"
                                            fill="#F78D1E" />
                                        <path
                                            d="M32 19.9791C32 20.0769 31.9548 20.1688 31.8795 20.2277L26.5828 24.3504C26.4889 24.4234 26.3638 24.4352 26.2584 24.3834C26.1519 24.3304 26.0858 24.2208 26.0847 24.1018V21.9526C24.9114 22.1306 23.8399 22.7303 23.0637 23.6423C22.2877 24.5554 21.8579 25.7195 21.8533 26.9262V31.083C21.8533 32.1422 21.0101 33 19.9688 33C18.9286 33 18.0854 32.1422 18.0854 31.083V26.9262C18.0831 24.7016 18.9054 22.5585 20.3881 20.9231C21.8707 19.2876 23.9045 18.2814 26.0845 18.1035V15.8577C26.0845 15.7375 26.1517 15.628 26.2583 15.5749C26.3591 15.5278 26.4772 15.5396 26.5664 15.6056L29.2293 17.6734L31.8795 19.7342C31.9548 19.7931 31.9988 19.8836 32 19.9791ZM19.5772 20.8816C18.0969 19.2686 16.0768 18.2777 13.9154 18.1033V15.8575C13.9154 15.7374 13.8482 15.6278 13.7417 15.5748C13.6409 15.5276 13.5228 15.5394 13.4336 15.6054L10.7706 17.6732L8.12048 19.7281C8.04404 19.7882 7.99886 19.8813 8.00002 19.9791C8.00002 20.0769 8.04519 20.1688 8.12048 20.2277L13.4173 24.3504C13.5111 24.4235 13.6362 24.4353 13.7416 24.3834C13.8482 24.3304 13.9142 24.2208 13.9153 24.1018V21.9527C15.5682 22.2036 16.987 23.2841 17.6892 24.8276C18.0031 23.3783 18.6494 22.0268 19.5772 20.8816ZM15.9472 14.0125H18.1097V18.861C18.8035 19.291 19.4383 19.8106 20.0001 20.4068C20.563 19.8 21.2012 19.2722 21.8996 18.8362V14.0125H24.0622C24.1803 14.0137 24.288 13.9453 24.3402 13.8369C24.3911 13.7297 24.3784 13.6013 24.3054 13.507L20.2445 8.12136C20.1855 8.04477 20.0951 8 20.0001 8C19.9052 8 19.8148 8.04477 19.7557 8.12136L15.7041 13.507C15.6334 13.6025 15.623 13.7309 15.6763 13.8369C15.7272 13.943 15.8314 14.0113 15.9472 14.0125Z"
                                            fill="white" />
                                    </svg>
                                </a>
                                <a target="_blank"
                                    href="https://api.whatsapp.com/send/?phone=918220017619&text=I+would+like+to+make+an+appointment+with+EHC"
                                    class="text-white px-6 py-2 text-md bg-[#F78D1E] rounded-full cursor-pointer flex items-center gap-1">
                                    Make an Appointment <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                    </svg>
                                </a>
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
                    <div x-data="{ open: false }" class="relative group">
                        <button @click="open = !open"
                            class="py-2 text-md text-white uppercase flex items-center gap-1 focus:outline-none">
                            Services
                            <svg class="w-4 h-4 transition-transform duration-300" :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <div x-show="open" x-transition x-cloak
                            class="relative left-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50"
                            @click.away="open = false">
                            <a href="/services" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">SERVICES </a>
                            <a href="/services-details" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">SERVICES
                                DETAILS
                            </a>
                        </div>
                    </div>


                    <!-- <a href="#" class="group relative py-2 text-md  text-white uppercase">
                        Services
                        <span
                            class="absolute left-0 bottom-0 h-[2px] w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                    </a> -->
                    <a href="/contact" class="group relative py-2 text-md  text-white uppercase">
                        Contact
                        <span
                            class="absolute left-0 bottom-0 h-[2px] w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <div class="flex gap-2 items-center">
                                <a target="_blank" href="https://maps.app.goo.gl/ieCweotdAZWFBDAd6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41"
                                        fill="none">
                                        <rect y="0.901636" width="39.1967" height="39.1967" rx="19.5984"
                                            fill="#F78D1E" />
                                        <path
                                            d="M32 19.9791C32 20.0769 31.9548 20.1688 31.8795 20.2277L26.5828 24.3504C26.4889 24.4234 26.3638 24.4352 26.2584 24.3834C26.1519 24.3304 26.0858 24.2208 26.0847 24.1018V21.9526C24.9114 22.1306 23.8399 22.7303 23.0637 23.6423C22.2877 24.5554 21.8579 25.7195 21.8533 26.9262V31.083C21.8533 32.1422 21.0101 33 19.9688 33C18.9286 33 18.0854 32.1422 18.0854 31.083V26.9262C18.0831 24.7016 18.9054 22.5585 20.3881 20.9231C21.8707 19.2876 23.9045 18.2814 26.0845 18.1035V15.8577C26.0845 15.7375 26.1517 15.628 26.2583 15.5749C26.3591 15.5278 26.4772 15.5396 26.5664 15.6056L29.2293 17.6734L31.8795 19.7342C31.9548 19.7931 31.9988 19.8836 32 19.9791ZM19.5772 20.8816C18.0969 19.2686 16.0768 18.2777 13.9154 18.1033V15.8575C13.9154 15.7374 13.8482 15.6278 13.7417 15.5748C13.6409 15.5276 13.5228 15.5394 13.4336 15.6054L10.7706 17.6732L8.12048 19.7281C8.04404 19.7882 7.99886 19.8813 8.00002 19.9791C8.00002 20.0769 8.04519 20.1688 8.12048 20.2277L13.4173 24.3504C13.5111 24.4235 13.6362 24.4353 13.7416 24.3834C13.8482 24.3304 13.9142 24.2208 13.9153 24.1018V21.9527C15.5682 22.2036 16.987 23.2841 17.6892 24.8276C18.0031 23.3783 18.6494 22.0268 19.5772 20.8816ZM15.9472 14.0125H18.1097V18.861C18.8035 19.291 19.4383 19.8106 20.0001 20.4068C20.563 19.8 21.2012 19.2722 21.8996 18.8362V14.0125H24.0622C24.1803 14.0137 24.288 13.9453 24.3402 13.8369C24.3911 13.7297 24.3784 13.6013 24.3054 13.507L20.2445 8.12136C20.1855 8.04477 20.0951 8 20.0001 8C19.9052 8 19.8148 8.04477 19.7557 8.12136L15.7041 13.507C15.6334 13.6025 15.623 13.7309 15.6763 13.8369C15.7272 13.943 15.8314 14.0113 15.9472 14.0125Z"
                                            fill="white" />
                                    </svg>
                                </a>
                                <a target="_blank"
                                    href="https://api.whatsapp.com/send/?phone=918220017619&text=I+would+like+to+make+an+appointment+with+EHC"
                                    class="text-white px-6 py-2 text-md bg-[#F78D1E] rounded-full cursor-pointer flex items-center gap-1">
                                    Make an Appointment <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                    </svg>
                                </a>
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