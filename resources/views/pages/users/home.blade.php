<x-guest-layout>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3,
        #carousel-4:checked~.control-4,
        #carousel-5:checked~.control-5,
        #carousel-6:checked~.control-6,
        #carousel-7:checked~.control-7 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet,
        #carousel-4:checked~.control-4~.carousel-indicators li:nth-child(4) .carousel-bullet,
        #carousel-5:checked~.control-5~.carousel-indicators li:nth-child(5) .carousel-bullet,
        #carousel-6:checked~.control-6~.carousel-indicators li:nth-child(6) .carousel-bullet,
        #carousel-7:checked~.control-7~.carousel-indicators li:nth-child(7) .carousel-bullet {
            color: #2b6cb0;
            /*Set to match the Tailwind colour you want the active one to be */
        }

    </style>

    <div class="carousel relative shadow-2xl bg-white">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:100vh;">
                <div class="bg-cover bg-center block h-full w-full px-32 py-72 text-white object-fill"
                    style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                    <div class="md:w-1/2 relative">
                        <p class="font-bold text-sm uppercase">E-Portal</p>
                        <p class="text-3xl font-bold">Professors Profile</p>
                        <p class="text-2xl mb-10 leading-none">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
                        <a href="{{ route('professors') }}" class="bg-[#FE6034] py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Access</a>
                    </div>
                </div>
            </div>
            <label for="carousel-7"
                class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2"
                class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:100vh;">
                <div class="bg-cover bg-center block h-full w-full px-32 py-72 text-white object-fill"
                    style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                    <div class="md:w-1/2 relative">
                        <p class="font-bold text-sm uppercase">E-Portal</p>
                        <p class="text-3xl font-bold">Career Opportunities</p>
                        <p class="text-2xl mb-10 leading-none">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
                        <a href="{{ route('careers') }}" class="bg-[#FE6034] py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Access</a>
                    </div>
                </div>
            </div>
            <label for="carousel-1"
                class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3"
                class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:100vh;">
                <div class="bg-cover bg-center block h-full w-full px-32 py-72 text-white object-fill"
                    style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                    <div class="md:w-1/2 relative">
                        <p class="font-bold text-sm uppercase">E-Portal</p>
                        <p class="text-3xl font-bold">Organization</p>
                        <p class="text-2xl mb-10 leading-none">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
                        <a href="{{ route('organizations') }}"
                            class="bg-[#FE6034] py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Access
                            </a>
                    </div>
                </div>
            </div>
            <label for="carousel-2"
                class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-4"
                class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 4-->
            <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:100vh;">
                <div class="bg-cover bg-center block h-full w-full px-32 py-72 text-white object-fill"
                    style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                    <div class="md:w-1/2 relative">
                        <p class="font-bold text-sm uppercase">E-Portal</p>
                        <p class="text-3xl font-bold">Tutorials</p>
                        <p class="text-2xl mb-10 leading-none">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
                        <a href="{{ route('tutorials') }}"
                            class="bg-[#FE6034] py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Access
                            </a>
                    </div>
                </div>
            </div>
            <label for="carousel-3"
                class="prev control-4 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-5"
                class="next control-4 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 5-->
            <input class="carousel-open" type="radio" id="carousel-5" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:100vh;">
                <div class="bg-cover bg-center block h-full w-full px-32 py-72 text-white object-fill"
                    style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                    <div class="md:w-1/2 relative">
                        <p class="font-bold text-sm uppercase">E-Portal</p>
                        <p class="text-3xl font-bold">History</p>
                        <p class="text-2xl mb-10 leading-none">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
                        <a href="{{ route('history') }}"
                            class="bg-[#FE6034] py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Access
                            </a>
                    </div>
                </div>
            </div>
            <label for="carousel-4"
                class="prev control-5 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-6"
                class="next control-5 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 6-->
            <input class="carousel-open" type="radio" id="carousel-6" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:100vh;">
                <div class="bg-cover bg-center block h-full w-full px-32 py-72 text-white object-fill"
                    style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                    <div class="md:w-1/2 relative">
                        <p class="font-bold text-sm uppercase">E-Portal</p>
                        <p class="text-3xl font-bold">Academic Achievers</p>
                        <p class="text-2xl mb-10 leading-none">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
                        <a href="{{ route('academic-achievers') }}"
                            class="bg-[#FE6034] py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Access
                            </a>
                    </div>
                </div>
            </div>
            <label for="carousel-5"
                class="prev control-6 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-7"
                class="next control-6 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 7-->
            <input class="carousel-open" type="radio" id="carousel-7" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:100vh;">
                <div class="bg-cover bg-center block h-full w-full px-32 py-72 text-white object-fill"
                    style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                    <div class="md:w-1/2 relative">
                        <p class="font-bold text-sm uppercase">E-Portal</p>
                        <p class="text-3xl font-bold">Thesis</p>
                        <p class="text-2xl mb-10 leading-none">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
                        <a href="{{ route('thesis') }}"
                            class="bg-[#FE6034] py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Access
                            </a>
                    </div>
                </div>
            </div>
            <label for="carousel-6"
                class="prev control-7 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1"
                class="next control-7 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>


            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1"
                        class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2"
                        class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3"
                        class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-4"
                        class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-5"
                        class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-6"
                        class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-7"
                        class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
            </ol>

        </div>
    </div>

    <!-- hero -->
    {{-- <div class="hero bg-[#F7FCD0] py-24">
        <div class="container px-7 sm:px-1 lg:px-10 xl:px-12 mx-auto">
            <div class="hero-wrapper grid grid-cols-1 md:grid-cols-12 gap-8 items-center">

                <div class="hero-text col-span-6">
                    <h1 class=" font-bold text-4xl md:text-5xl max-w-xl text-gray-900" style="line-height: 1.375;"
                        data-aos="zoom-in">Help students stay updated at Educational Portal</h1>
                    <hr class=" w-12 h-1 bg-[#717052] rounded-full mt-8" data-aos="zoom-in">
                    <p class="text-gray-800 text-base leading-relaxed mt-8 font-semibold" data-aos="zoom-in">Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Donec posuere, massa in ornare tempus, lacus lacus
                        aliquam diam, nec eleifend urna orci et justo.</p>
                    <div class="get-app flex space-x-5 mt-10 justify-center md:justify-start">
                    </div>
                </div>

                <div class="hero-image col-span-6" data-aos="zoom-in">
                    <img class="w-full h-full mx-auto lg:max-w-2xl" src="img/educ3.png" alt="glasses photo">
                </div>
            </div>
        </div>
    </div> --}}

    <!-- footer for home page -->
    {{-- <footer class="relative bg-[#292A42] pt-8 pb-3">
        <div class="max-w-2xl mx-auto py-10">
            <div class="text-center">
                <h3 class="text-3xl text-white font-semibold leading-normal mb-3"> EDUCATIONAL PORTAL </h3>
                <p class="text-white"> Stay updated. All day, every day. </p>
            </div>
            <hr class="border-white mt-8" />
            <div class="mt-8 flex flex-col text-center text-sm text-white">
                <p class="order-2 md:order-1 mt-8 md:mt-0"> &copy; Educational Portal, <span id="date"></span>. </p>
            </div>
        </div>
    </footer> --}}

    {{-- Scroll to top --}}

    {{-- <div x-data="topBtn">
        <button @click="scrolltoTop" id="topButton"
            class="fixed z-10 hidden p-3 text-white bg-[#FE6034] rounded-full shadow-md bottom-10 right-10"
            data-aos="zoom-in">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18">
                </path>
            </svg>
        </button>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('topBtn', () => ({
                scrolltoTop() {
                    $('html, body').animate({
                        scrollTop: 0
                    }, 'slow');
                }
            }));
        });

        var topBtn = document.getElementById("topButton");
        window.onscroll = function() {
            (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) ?
            topBtn.classList.remove("hidden"): topBtn.classList.add("hidden");

        }
    </script>

    <script>
        const d = new Date();
        document.getElementById("date").innerHTML = d.getFullYear();
    </script> --}}


    <script>
        // You can also pass an optional settings object
        // below listed default settings
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 400, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    </script>
    </x-user-layout>
