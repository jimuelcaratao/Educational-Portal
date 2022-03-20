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
        #carousel-3:checked~.control-3 {
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
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #2b6cb0;
            /*Set to match the Tailwind colour you want the active one to be */
        }

    </style>

    <div class="carousel relative shadow-2xl bg-white">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:100vh;">
                <div class="bg-cover bg-center block h-full w-full px-32 py-72 text-white object-fill"
                    style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                    <div class="md:w-1/2">
                        <p class="font-bold text-sm uppercase">Services</p>
                        <p class="text-3xl font-bold">Hello world</p>
                        <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                        <a href="#"
                            class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
                            us</a>
                    </div>
                </div>
            </div>
            <label for="carousel-3"
                class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2"
                class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:100vh;">
                <div class="bg-cover bg-center block h-full w-full px-32 py-72 text-white object-fill"
                    style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                    <div class="md:w-1/2">
                        <p class="font-bold text-sm uppercase">Services</p>
                        <p class="text-3xl font-bold">Hello world</p>
                        <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                        <a href="#"
                            class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
                            us</a>
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
                    <div class="md:w-1/2">
                        <p class="font-bold text-sm uppercase">Services</p>
                        <p class="text-3xl font-bold">Hello world</p>
                        <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                        <a href="#"
                            class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
                            us</a>
                    </div>
                </div>
            </div>
            <label for="carousel-2"
                class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1"
                class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

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
            </ol>

        </div>
    </div>

    <!-- hero -->
    <div class="hero bg-[#F7FCD0] py-24">
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
    </div>

    <!-- professors -->
    <div id="profs" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-16 md:py-28">
        <div class="text-center pb-12">
            <h1 class="font-bold text-3xl md:text-4xl font-heading text-[#FE6034]">
                Check our awesome Professors
            </h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36"
                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                        alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">Dany Bailey</p>
                    <p class="text-base text-gray-400 font-normal">Software Engineer</p>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36"
                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                        alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">Lucy Carter</p>
                    <p class="text-base text-gray-400 font-normal">Graphic Designer</p>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36"
                        src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1176&q=80"
                        alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">Jade Bradley</p>
                    <p class="text-base text-gray-400 font-normal">Dev Ops</p>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36"
                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                        alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">Dany Bailey</p>
                    <p class="text-base text-gray-400 font-normal">Software Engineer</p>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36"
                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                        alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">Lucy Carter</p>
                    <p class="text-base text-gray-400 font-normal">Graphic Designer</p>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36"
                        src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1176&q=80"
                        alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">Jade Bradley</p>
                    <p class="text-base text-gray-400 font-normal">Dev Ops</p>
                </div>
            </div>
        </div>
    </div>

    <!-- career oppurtunities -->
    <div class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 mb-12">
            <article>
                <div id="career" class="text-center pb-12">
                    <h1 class="font-bold text-3xl md:text-4xl font-heading text-[#FE6034]">
                        Career Opportunities
                    </h1>
                </div>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-x-6 gap-y-8">
                    <article
                        class="relative w-full h-64 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out"
                        style="background-image: url('https://images.unsplash.com/photo-1623479322729-28b25c16b011?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1740&q=80');">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out">
                        </div>
                        <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">
                            <h3 class="text-center">
                                <a class="text-white text-2xl font-bold text-center" href="#">
                                    <span class="absolute inset-0"></span>
                                    Doctor
                                </a>
                            </h3>
                        </div>
                    </article>
                    <article
                        class="relative w-full h-64 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out"
                        style="background-image: url('https://images.unsplash.com/photo-1569012871812-f38ee64cd54c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out">
                        </div>
                        <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">
                            <h3 class="text-center">
                                <a class="text-white text-2xl font-bold text-center" href="#">
                                    <span class="absolute inset-0"></span>
                                    Developer
                                </a>
                            </h3>
                        </div>
                    </article>
                    <article
                        class="relative w-full h-64 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out"
                        style="background-image: url('https://images.unsplash.com/photo-1511376777868-611b54f68947?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80');">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out">
                        </div>
                        <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">
                            <h3 class="text-center">
                                <a class="text-white text-2xl font-bold text-center" href="#">
                                    <span class="absolute inset-0"></span>
                                    Professor
                                </a>
                            </h3>
                        </div>
                    </article>
                </div>
            </article>
        </div>
    </div>

    <!-- organization -->
    <div id="org" class="px-4 xl:px-36 py-14">
        <div class="mx-auto container">
            <div id="career" class="text-center pb-8">
                <h1 class="font-bold text-3xl md:text-4xl font-heading text-[#FE6034]">
                    Organizations
                </h1>
            </div>
            </span>
            <div class="focus:outline-none mt-12 lg:mt-16">
                <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-8">
                    <div class="focus:outline-none" aria-label="card 1">
                        <img role="img" aria-label="code editor" class="focus:outline-none w-full"
                            src="https://cdn.tuk.dev/assets/components/111220/Blg-6/blog(1).png" alt="code editor" />
                        <div class="py-4 px-8 w-full flex justify-between bg-indigo-700">
                            <p class="focus:outline-none text-sm text-white font-semibold tracking-wide">Bruce Wayne
                            </p>
                            <p class="focus:outline-none text-sm text-white font-semibold tracking-wide">13TH Oct, 2020
                            </p>
                        </div>
                        <div class="bg-white px-10 py-6 rounded-bl-3xl rounded-br-3xl">
                            <h1 class="focus:outline-none text-4xl text-gray-900 font-semibold tracking-wider">
                                Transactions</h1>
                            <p
                                class="focus:outline-none text-gray-700 text-base lg:text-lg lg:leading-8 tracking-wide mt-6 w-11/12">
                                Find the latest events updates or create events, concerts, conferences, workshops,
                                exhibitions, and cultural events in all cities of the US. The aim of Eventistan is to
                                promote healthy and entertaining event.Find the latest events updates or create events,
                                concerts, conferences, workshops, exhibitions, and cultural events in all cities of the
                                US. The aim of Eventistan is to promote healthy and entertaining event.</p>
                            <div class="w-full flex justify-end">
                                <button
                                    class="focus:outline-none focus:ring-2 ring-offset-2 focus:ring-gray-600 hover:opacity-75 mt-4 justify-end flex items-center cursor-pointer">
                                    <span class=" text-base tracking-wide text-indigo-700">Read more</span>
                                    <svg class="ml-3 lg:ml-6 text-indigo-700" xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="18" viewBox="0 0 20 18" fill="none">
                                        <path d="M11.7998 1L18.9998 8.53662L11.7998 16.0732" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1 8.53662H19" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="h-5 w-2"></div>
                        </div>
                    </div>
                    <div>
                        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-8">
                            <div class="focus:outline-none " aria-label="card 2">
                                <img role="img" aria-label="gaming" class="focus:outline-none w-full"
                                    src="https://cdn.tuk.dev/assets/components/111220/Blg-6/blog(2).png" alt="games" />
                                <div class="py-2 px-4 w-full flex justify-between bg-indigo-700">
                                    <p class="focus:outline-none  text-sm text-white font-semibold tracking-wide">Bruce
                                        Wayne</p>
                                    <p class="focus:outline-none text-sm text-white font-semibold tracking-wide">13TH
                                        Oct, 2020</p>
                                </div>
                                <div class="bg-white px-3 lg:px-6 py-4 rounded-bl-3xl rounded-br-3xl">
                                    <h1 class="focus:outline-none text-lg text-gray-900 font-semibold tracking-wider">
                                        Transactions</h1>
                                    <p
                                        class="focus:outline-none text-gray-700 text-sm lg:text-base lg:leading-8 pr-4 tracking-wide mt-2">
                                        Find the latest events updates or create events, concerts, conferences,
                                        workshops...</p>
                                </div>
                            </div>
                            <div class="focus:outline-none" aria-label="card 3">
                                <img role="img" aria-label="gaming" class="focus:outline-none w-full"
                                    src="https://cdn.tuk.dev/assets/components/111220/Blg-6/blog(3).png" alt="notes" />
                                <div class="py-2 px-4 w-full flex justify-between bg-indigo-700">
                                    <p class="focus:outline-none text-sm text-white font-semibold tracking-wide">Bruce
                                        Wayne</p>
                                    <p class="focus:outline-none text-sm text-white font-semibold tracking-wide">13TH
                                        Oct, 2020</p>
                                </div>
                                <div class="bg-white px-3 lg:px-6 py-4 rounded-bl-3xl rounded-br-3xl">
                                    <h1 tabindex="0"
                                        class="focus:outline-none text-lg text-gray-900 font-semibold tracking-wider">
                                        Transactions</h1>
                                    <p tabindex="0"
                                        class="focus:outline-none text-gray-700 text-sm lg:text-base lg:leading-8 pr-4 tracking-wide mt-2">
                                        Find the latest events updates or create events, concerts, conferences,
                                        workshops...</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-8">
                            <div class="focus:outline-none " aria-label="card 4">
                                <img role="img" aria-label="laptop" class="focus:outline-none w-full"
                                    src="https://cdn.tuk.dev/assets/components/111220/Blg-6/blog(4).png" alt="laptop" />
                                <div class="py-2 px-4 w-full flex justify-between bg-indigo-700">
                                    <p class="focus:outline-none text-sm text-white font-semibold tracking-wide">Bruce
                                        Wayne</p>
                                    <p class="focus:outline-none text-sm text-white font-semibold tracking-wide">13TH
                                        Oct, 2020</p>
                                </div>
                                <div class="bg-white px-3 lg:px-6 py-4 rounded-bl-3xl rounded-br-3xl">
                                    <h1 class="focus:outline-none text-lg text-gray-900 font-semibold tracking-wider">
                                        Transactions</h1>
                                    <p
                                        class="focus:outline-none text-gray-700 text-sm lg:text-base lg:leading-8 pr-4 tracking-wide mt-2">
                                        Find the latest events updates or create events, concerts, conferences,
                                        workshops...</p>
                                </div>
                            </div>
                            <div class="focus:outline-none" aria-label="card 5">
                                <img role="img" aria-label="worker" class="focus:outline-none w-full"
                                    src="https://cdn.tuk.dev/assets/components/111220/Blg-6/blog(5).png" alt="worker" />
                                <div class="py-2 px-4 w-full flex justify-between bg-indigo-700">
                                    <p class="focus:outline-none text-sm text-white font-semibold tracking-wide">Bruce
                                        Wayne</p>
                                    <p class="focus:outline-none text-sm text-white font-semibold tracking-wide">13TH
                                        Oct, 2020</p>
                                </div>
                                <div class="bg-white px-3 lg:px-6 py-4 rounded-bl-3xl rounded-br-3xl">
                                    <h1 class="focus:outline-none  text-lg text-gray-900 font-semibold tracking-wider">
                                        Transactions</h1>
                                    <p
                                        class="focus:outline-none  text-gray-700 text-sm lg:text-base lg:leading-8 pr-4 tracking-wide mt-2">
                                        Find the latest events updates or create events, concerts, conferences,
                                        workshops...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tutorials -->
    <div id="tut" class="bg-white py-20">
        <div id="career" class="text-center pb-8">
            <h1 class="font-bold text-3xl md:text-4xl font-heading text-[#FE6034]">
                Tutorials
            </h1>
        </div>
        <div class="relative" style="padding-top: 56.25%">
            <iframe class="absolute inset-0 w-full h-full px-4 xl:px-36 md:py-14"
                src="https://www.youtube-nocookie.com/embed/FMrtSHAAPhM" frameborder="0" …></iframe>
        </div>
    </div>

    <!-- history -->
    <div id="history" class="container mx-auto px-4 py-28">
        <div id="history" class="text-center pb-8">
            <h1 class="font-bold text-3xl md:text-4xl font-heading text-[#FE6034]">
                Brief background of our course
            </h1>
        </div>
        <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-1 shadow-lg rounded-lg">
                    <div class="px-4 flex-auto">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                <h3 class="text-3xl mb-2 font-semibold leading-normal">
                    Working with us is a pleasure
                </h3>
                <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
                    Don't let your uses guess by attaching tooltips and popoves to
                    any element. Just make sure you enable them first via
                    JavaScript.
                </p>
                <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-blueGray-600">
                    The kit comes with three pre-built pages to help you get started
                    faster. You can change the text and images and you're good to
                    go. Just make sure you enable them first via JavaScript.
                </p>
            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-2 shadow-lg rounded-lg bg-pink-500">
                    <img alt="..."
                        src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                        class="w-full align-middle rounded-lg">
                </div>
            </div>
        </div>
    </div>

    <!-- footer for home page -->
    <footer class="relative bg-[#292A42] pt-8 pb-3">
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
    </footer>

    {{-- Scroll to top --}}

    <div x-data="topBtn">
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
    </script>


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
