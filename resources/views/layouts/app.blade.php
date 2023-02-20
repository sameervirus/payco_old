<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-black">
        <div class="min-h-screen">

            <div id="content-warp" class="" >
                <div id="bg-colors">
                    <div>
                        <img src="/images/rectangle_9535.png" alt="" class="absolute right-0 top-0 -z-10 ">
                    </div>
                    <div>
                        <img src="/images/rectangle_9534.png" alt="" class="absolute top-40 -z-10 ">
                    </div>
                    <div>
                        <img src="/images/rectangle_9532.png" alt="" class="absolute right-0 top-52 -z-10 ">
                    </div>
                    <div></div>
                </div>
                <div class="absolute left-0 top-0 min-h-[1290px] w-full -z-10 bg-cover" style="background-image: url('/images/1060_1.png')"></div>
                <header class="py-0 px-0 lg:py-6 lg:px-8">
                    <div>
                        <div class="lg:hidden flex items-center justify-between py-2 bg-[#4b4b4b] border-solid border-b-2 border-primary">
                            <div class="lg:hidden">
                                <span class="text-white pl-2">Jane Albert</span>
                            </div>
                            <div class="px-3 py-1 rounded-full border-solid border-2 border-primary text-primary backdrop-blur-[20px] hover:text-white hover:bg-primary">
                                <a href="" class="uppercase text-sm ">Invest With Payco</a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between 2xl:px-20 lg:px-8 md:px-6 mx-auto px-4 py-6 md:py-8 lg:py-10 bg-[#4b4b4b] lg:rounded-[40px] backdrop-blur-[2px]">
                            <div class="inline-flex focus:outline-none logo ps-3 md:ps-0 lg:mx-0 h-8 lg:h-14">
                                <img src="/images/logo.png" alt="Payco" />
                            </div>
                            <button type="button" class="mobile-menu-button inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:bg-primary focus:text-white" aria-controls="navbar-default" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div class="hidden lg:flex content-between justify-between h-5 lg:min-w-[565px] text-white ">
                                <a href="#" class="hover:text-primary">Home</a>
                                <a href="#" class="hover:text-primary">About Us</a>
                                <a href="#" class="hover:text-primary">Products</a>
                                <a href="#" class="hover:text-primary">blog</a>
                                <a href="#" class="hover:text-primary">Contact Us</a>
                            </div>
                            <div class="hidden lg:block px-6 py-4 rounded-full border-solid border-2 border-primary text-primary backdrop-blur-[20px] hover:text-white hover:bg-primary">
                                <a href="" class="uppercase font-medium text-lg ">Invest With Payco</a>
                            </div>
                            <div class="hidden lg:flex items-center justify-between">
                                <img src="/images/ic_baseline-account-circle.png" alt="avatar" class="">
                                <span class="text-white pl-2">Jane Albert</span>
                            </div>
                        </div>
                        <div class="flex flex-col lg:hidden mobile-menu text-white bg-primary">
                            <a href="#" class="py-2 px-4 border-b-2 border-b-white">Home</a>
                            <a href="#" class="py-2 px-4 border-b-2 border-b-white">About Us</a>
                            <a href="#" class="py-2 px-4 border-b-2 border-b-white">Products</a>
                            <a href="#" class="py-2 px-4 border-b-2 border-b-white">blog</a>
                            <a href="#" class="py-2 px-4">Contact Us</a>
                        </div>
                    </div>
                </header>
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
        <script>
            // Grab HTML Elements
            const btn = document.querySelector("button.mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");

            // Add Event Listeners
            btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
            });
        </script>
    </body>
</html>
