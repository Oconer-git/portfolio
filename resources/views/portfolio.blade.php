<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>• Portfolio | Donell Oconer</title>
    <!-- tailwind -->
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{asset('/images/peace-sign.png')}}">
    <!-- css for carousel -->
    @vite('resources/css/slick.css')
    @vite('resources/css/slick-theme.css')
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite('resources/js/jquery-type-char.min.js')
    <!-- crousel js -->
    @vite('/resources/js/slick.js')
    @vite('/resources/js/slick.min.js')
    <!-- portfolio js, all call our functions from plugins are here-->
    @vite('/resources/js/portfolio.js')
    <!-- font poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
        rel="stylesheet"/>
</head>
 
<body class="bg-white font-custom overflow-x-hidden">
    <main class="h-screen py-12 pt-32 px-0 sm:px-4 bg-gradient-to-br from-white to-stone-200">
        <img src="{{asset('/images/tailwind_effect.png')}}" class="absolute top-0" alt="tailwind effect">
        <div class="mx-auto w-12/12 md:w-7/12 p-0 md:p-4 group">
            <section id="face">
                <img src="{{asset('/images/donell_transparent.png')}}" class="bg_color w-[180px] rounded-full relative mx-auto group-hover:scale-105 ease-in-out duration-300" alt="emoji picture">
            </section>
            <h1 id="introduction" class="font-bold text-5xl md:text-6xl text-slate-600 text-center">
                Hi, I'm 
                <span class="color text-lime-600 drop-shadow-md text-5xl md:text-6xl group-hover:text-extrabold ease-in-out duration-300">Donell</span> 
                Oconer.
            </h1>
            <div class="mx-auto w-fit mt-3">
                <div class="inline-block">
                    <div class="container text-center text-lg relative rounded-sm px-6 mx-auto">
                    </div>
                </div>
                <img src="{{asset('/images/flag.png')}}" class="w-8 inline-block align-middle mb-2 -ml-4 group-hover:scale-110 ease-in-out duration-300" alt="emoji picture">
            </div>
            <div class="mt-12">
                <p class="text-gray-500 text-sm text-center">Scroll down</p>
                <img src="{{asset('/images/scroll-down.gif')}}" alt="scroll" class="w-4 mx-auto">
            </div>
        </div>
    </main>
    <!-- about me -->
    <div class=" pb-6 pt-12 px-18 md:pt-18 bg-white">
        <div class="w-10/12 sm:w-1/2 mx-auto mb-12 text-center">
            <img src="{{asset('/images/chameleon.png')}}" class="absolute w-[270px] opacity-30 z-0 left-1" alt="">
            <p class="font-light text-3xl text-gray-700 inline relative">About me</p>
            <p class="text-gray-700 text-pretty relative">
                Hey there!
                Think of me as a coding <span class="color">chameleon</span>. I adapt and blend into whatever technology, I’m working with—<em>Laravel</em>, <em>CodeIgniter</em>, or just plain <strong>PHP</strong>. I’m constantly evolving, picking up new colors (or skills) to stay in the game ;)
            </p>
        </div>
        <div class="flex mx-auto justify-center px-0 w-9/12 relative">
            <article class="mb-24">
                <section class="pl-4 border-l-2 border-l-green-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-10 text-slate-700 inline" viewBox="0 -960 960 960"><path d="M840-280v-276L480-360 40-600l440-240 440 240v320h-80ZM480-120 200-272v-200l280 152 280-152v200L480-120Z"/></svg>
                    <h2 class="font-bold inline text-2xl text-gray-700 align-middle">Education</h2>
                </section>
                <section class="ml-[22px] sm:ml-[55px]">
                    <p class="text-gray-600 font-semibold text-lg">BS in Information Technology</p>
                    <a href="https://www.dmmmsu.edu.ph/" target="_blank" class="text-gray-600 hover:text-cyan-500">Don Mariano Marcos Memorial State University</a>
                </section>
            </article>
            <article class="mb-2 ml-12">
                <section class="pl-4 border-l-2 border-l-green-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-10 text-slate-700 inline" viewBox="0 -960 960 960"><path d="M0-240v-63q0-43 44-70t116-27q13 0 25 .5t23 2.5q-14 21-21 44t-7 48v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-26-6.5-49T754-397q11-2 22.5-2.5t23.5-.5q72 0 116 26.5t44 70.5v63H780ZM160-440q-33 0-56.5-23.5T80-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Z"/></svg>
                    <h3 class="font-bold inline text-2xl text-gray-700 align-middle">Bootcamp</h3>
                </section>
                <section class="ml-[22px] sm:ml-[55px]">
                    <p class="text-gray-600 font-semibold text-lg">Village88 Training Program</p>
                    <a href="https://village88.com/" target="_blank" class="text-gray-600 hover:text-cyan-500">457 Avenue, Inc. (Village 88 Philippines)</a>
                </section>
            </article>
        </div>
    </div>
    <!-- technical skills -->
    <div class="h-fit pt-12 pb-12 md:pt-20 md:pb-20 px-4 bg-gradient-to-br from-gray-200 to-white">
        <p class="font-light text-3xl text-center text-slate-700">TECH STACK</p>
        <article class="mx-auto w-full md:w-8/12 px-4 text-center">
            <figure class="inline-block text-center group">
                <img src="{{asset('/images/tech/laravel.svg')}}" alt="laravel" class="m-2 rounded-lg border shadow-sm drop-shadow-sm w-24 hover:scale-110 ease-in-out duration-300">
                <p class="text-xs group-hover:text-orange-600">Laravel</p>
            </figure>
            <figure class="inline-block text-center group">
                <img src="{{asset('/images/tech/code_igniter.svg')}}" alt="code igniter" class="m-2 rounded-lg border shadow-sm drop-shadow-sm w-24 hover:scale-110 ease-in-out duration-300">
                <p class="text-xs group-hover:text-red-500">Code Igniter</p>
            </figure>
            <figure class="inline-block text-center group">
                <img src="{{asset('/images/tech/html.svg')}}" alt="html" class="m-2 rounded-lg border shadow-sm drop-shadow-sm w-24 hover:scale-110 ease-in-out duration-300">
                <p class="text-xs group-hover:text-orange-700">HTML</p>
            </figure>
            <figure class="inline-block text-center group">
                <img src="{{asset('/images/tech/css.svg')}}" alt="css" class="m-2 rounded-lg border shadow-sm drop-shadow-sm w-24 hover:scale-110 ease-in-out duration-300">
                <p class="text-xs group-hover:text-blue-500">CSS</p>
            </figure>
            <figure class="inline-block text-center group">
                <img src="{{asset('/images/tech/js.svg')}}" alt="javascript" class="m-2 rounded-lg border shadow-sm drop-shadow-sm w-24 hover:scale-110 ease-in-out duration-300">
                <p class="text-xs group-hover:text-amber-500">Javascript</p>
            </figure>
            <figure class="inline-block text-center group">
                <img src="{{asset('/images/tech/php.svg')}}" alt="php" class="m-2 rounded-lg border shadow-sm drop-shadow-sm w-24 hover:scale-110 ease-in-out duration-300">
                <p class="text-xs group-hover:text-indigo-500">PHP</p>
            </figure>
            <figure class="inline-block text-center group">
                <img src="{{asset('/images/tech/mysql.svg')}}" alt="mysql" class="m-2 rounded-lg border shadow-sm drop-shadow-sm w-24 hover:scale-110 ease-in-out duration-300">
                <p class="text-xs group-hover:text-yellow-500">MySQL</p>
            </figure>
            <figure class="inline-block text-center group">
                <img src="{{asset('/images/tech/tailwind.svg')}}" alt="tailwind" class="m-2 rounded-lg border shadow-sm drop-shadow-sm w-24 hover:scale-110 ease-in-out duration-300">
                <p class="text-xs group-hover:text-cyan-400">Tailwind</p>
            </figure>
            <figure class="inline-block text-center group">
                <img src="{{asset('/images/tech/livewire.svg')}}" alt="livewire" class="m-2 rounded-lg border shadow-sm drop-shadow-sm w-24 hover:scale-110 ease-in-out duration-300">
                <p class="text-xs group-hover:text-rose-400">Livewire</p>
            </figure>
            <figure class="inline-block text-center group">
                <img src="{{asset('/images/tech/jquery.svg')}}" alt="jquery" class="m-2 rounded-lg border shadow-sm drop-shadow-sm w-24 hover:scale-110 ease-in-out duration-300">
                <p class="text-xs group-hover:text-indigo-500">Jquery</p>
            </figure>
            <figure class="inline-block text-center group">
                <img src="{{asset('/images/tech/bootstrap.svg')}}" alt="bootstrap" class="m-2 rounded-lg border shadow-sm drop-shadow-sm w-24 hover:scale-110 ease-in-out duration-300">
                <p class="text-xs group-hover:text-purple-500">Bootstrap</p>
            </figure>
            <figure class="inline-block text-center group">
                <img src="{{asset('/images/tech/c_sharp.svg')}}" alt="c#" class="m-2 rounded-lg border shadow-sm drop-shadow-sm w-24 hover:scale-110 ease-in-out duration-300">
                <p class="text-xs group-hover:text-fuchsia-600">C#</p>
            </figure>
        </article>
    </div>
      <!-- projects -->
    <div class="pt-12 pb-12 md:pb-28 md:pt-18 px-4 sm:px-24 bg-gradient-to-br bg-white">
        <div class="w-10/12 sm:w-1/2 mx-auto mb-12 text-center">
            <p class="font-light text-3xl text-gray-700 inline relative">Projects</p>
            <p class="text-gray-400 text-pretty relative text-sm">
            Here are some projects I've worked on that showcase my skills and creativity. Each one gave me the opportunity to solve challenges and learn new tech.
            </p>
        </div>
        <!-- chamelelon2 -->
        <img src="{{asset('/images/chameleon2.png')}}" class="absolute w-[400px] opacity-5 z-0 right-0" alt="">
        <!-- fellowdevs project -->
        <article class="w-full sm:w-10/12 mx-auto relative">
            <img src="{{asset('images/fellowdevs.png')}}" class="inline align-middle w-8 sm:w-14" alt="">
            <p class="font-bold text-xl sm:text-3xl inline align-middle text-cyan-800 drop-shadow-sm">Fellowdevs</p>
            <section class="inline align-middle">
            <a href="https://www.youtube.com/watch?v=fmh7Ruk6yRU" target="_blank" class="w-12 border border-gray-700 h-12 inline align-middle rounded-md ml-1 text-gray-600 bg-gray-200 p-1 sm:p-2 text-xs group hover:bg-gray-300 hover:text-blue-700">
                vid demo
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 inline align-middle fill-current text-red-600 group-hover:text-red-800" viewBox="0 -960 960 960"><path d="M320-200v-560l440 280-440 280Z"/></svg>
            </a>
            <a href="https://fellowdevs.io/" target="_blank" class="w-12 ml-1 border border-gray-700 h-12 inline align-middle rounded-md text-gray-600 bg-gray-200 p-1 sm:p-2 text-xs group hover:bg-gray-300 hover:text-blue-700">
                site
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 inline align-middle fill-current group-hover:text-blue-800" viewBox="0 -960 960 960"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h280v280h-80v-144L388-332Z"/></svg>
            </a>
            </section>
            <p class="text-teal-800 text-wrap ml-9 sm:ml-16">A dynamic <strong>social media platform</strong> crafted for developers to share insights, spark meaningful discussions, and build a thriving community. Developed with <strong>Laravel</strong>, Tailwind, PHP, JavaScript, jQuery, Livewire, and SQL.</p>
            <section class="regular slider ml-6 sm:ml-24 relative w-full sm:w-8/12 inline-block">
                <div>
                    <img src="{{asset('images/fellowdevs.io/laptop1.png')}}" class="w-full" alt="">
                </div>
                <div>
                    <img src="{{asset('images/fellowdevs.io/laptop2.png')}}" class="w-full" alt="">
                </div>
                <div>
                    <img src="{{asset('images/fellowdevs.io/laptop3.png')}}" class="w-full" alt="">
                </div>
                <div>
                    <img src="{{asset('images/fellowdevs.io/fliptablet.png')}}" class="w-9/12" alt="">
                </div>
                <div>
                    <img src="{{asset('images/fellowdevs.io/phone1.png')}}" class="w-5/12" alt="">
                </div>
                <div>
                    <img src="{{asset('images/fellowdevs.io/phone2.png')}}" class="w-5/12" alt="">
                </div>
                <div>
                    <img src="{{asset('images/fellowdevs.io/phone3.png')}}" class="w-5/12" alt="">
                </div>  
            </section>
        </article>
        <!-- orgo shop project -->
        <article class="w-full sm:w-10/12 mx-auto relative -mt-17">
            <img src="{{asset('images/orgo_shop_svg.svg')}}" class="inline align-middle w-8 sm:w-14" alt="">
            <p class="font-bold text-xl sm:text-3xl inline align-middle text-orange-800 drop-shadow-sm">Orgo Shop</p>
            <a href="https://youtu.be/jQJ6_KJgHX4" target="_blank" class="w-12 border border-gray-700 h-12 inline align-middle rounded-md ml-3 text-gray-600 bg-gray-200 p-1 sm:p-2 text-xs group hover:bg-gray-300 hover:text-blue-700">
                vid demo
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 inline align-middle fill-current text-red-600 group-hover:text-red-800" viewBox="0 -960 960 960"><path d="M320-200v-560l440 280-440 280Z"/></svg>
            </a>
            <!-- <a href="https://fellowdevs.io/" target="_blank" class="w-12 border border-gray-700 h-12 inline align-middle rounded-md ml-3 text-gray-600 bg-gray-200 p-1 sm:p-2 text-xs group hover:bg-gray-300 hover:text-blue-700">
                website link
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 inline align-middle fill-current group-hover:text-cyan-500" viewBox="0 -960 960 960"><path d="M320-200v-560l440 280-440 280Z"/></svg>
            </a> -->
            <p class="text-teal-800 text-wrap ml-9 sm:ml-16">An <strong>e-commerce platform</strong> dedicated to offering a wide range of natural and organic foods, providing customers with a healthy and sustainable shopping experience. Developed using <strong>CodeIgniter</strong>, HTML/CSS, PHP, JavaScript, jQuery, and SQL.</p>
            <section class="regular slider ml-6 sm:ml-24 relative w-full sm:w-8/12 inline-block">
                <div>
                    <img src="{{asset('images/orgoshop/orgoshop1.png')}}" class="w-full" alt="">
                </div>
                <div>
                    <img src="{{asset('images/orgoshop/orgoshop2.png')}}" class="w-full" alt="">
                </div>
                <div>
                    <img src="{{asset('images/orgoshop/orgoshop3.png')}}" class="w-full" alt="">
                </div>
                <div>
                    <img src="{{asset('images/orgoshop/orgoshop4.png')}}" class="w-full" alt="">
                </div>
                <div>
                    <img src="{{asset('images/orgoshop/orgoshop5.png')}}" class="w-full" alt="">
                </div>
                <div>
                    <img src="{{asset('images/orgoshop/orgoshop6.png')}}" class="w-full" alt="">
                </div>  
            </section>
        </article>
    </div>
    <!-- contact me section -->
    <div class="h-fit pt-12 pb-12 md:pt-12 md:pb-20 px-4 bg-gradient-to-b from-stone-300 to-slate-300">
        <img src="{{asset('/images/chameleon_logos.png')}}" class="absolute w-[180px] opacity-70 z-0 right-80" alt="">

        <article class="text-center w-[400px] mx-auto">
            <p class="font-bold text-3xl text-slate-700">Contact me</p>
            <p class="text-slate-700 font-light text-pretty relative">
                If you believe I would be a good fit for your team and its needs, please feel free to reach out!
            </p>
            <button id="copyEmailButton" class="bg-gray-100 rounded-sm px-2 py-[4px] border mt-3 text-sm hover:scale-95 ease-in-out duration-300 shadow-md">
                oconer@fellowdevs.io
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 align-middle inline text-slate-500 " viewBox="0 -960 960 960"><path d="M360-240q-33 0-56.5-23.5T280-320v-480q0-33 23.5-56.5T360-880h360q33 0 56.5 23.5T800-800v480q0 33-23.5 56.5T720-240H360ZM200-80q-33 0-56.5-23.5T120-160v-560h80v560h440v80H200Z"/></svg>
            </button>
            <p class="text-xs text-gray-500" id="message">
                copy this email by clicking
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current text-slate-600 inline align-middle" viewBox="0 -960 960 960"><path d="M551-80 406-392 240-160v-720l560 440H516l144 309-109 51Z"/></svg>
            </p>
        </article>
    </div>
</body>
</html>