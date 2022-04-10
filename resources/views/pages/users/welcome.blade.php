<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Educational Portal</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</head>

<body class="antialiased bg-[#F7FCD0]">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 whitespace-nowrap uppercase text-white"
                    href="{{ route('welcome') }}">
                    <img class="w-16 md:w-24" src="img/eportal.png" alt="logo"></a>
                <button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="{{ route('about') }}"><i
                                class="lg:text-gray-300 text-gray-500 fas fa-file-alt text-lg leading-lg mr-2"></i>
                            About</a>
                    </li>
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="{{ route('help') }}"><i
                                class="lg:text-gray-300 text-gray-500 fas fa-info-circle text-lg leading-lg mr-2"></i>
                            Help</a>
                    </li>
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="{{ route('contact-us') }}"><i class="lg:text-gray-300 text-gray-500 fas fa-phone text-lg leading-lg mr-2"></i>
                            Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url(https://images.unsplash.com/photo-1514894780887-121968d00567?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1173&q=80);'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-[#000]"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <h1 class="text-white font-semibold text-4xl md:text-5xl w-full" data-aos="zoom-in-up">
                            EDUCATIONAL PORTAL
                        </h1>
                        <p class="mt-4 md:mt-8 text-md md:text-lg text-gray-300" data-aos="zoom-in-up">
                            This Educational portal is the output of the study which comprises different areas that
                            can influence and gives impact to the motivation and competence of students in Bachelor
                            of Science in Office Administration.
                        </p>
                        <div class="mt-8 flex justify-center items-center">
                            <a href="{{ route('home') }}" data-aos="zoom-in-up">
                                <button
                                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FE6034] bg-[#FE6034] transition duration-150 ease-in-out hover:bg-[#fa4917] lg:text-lg lg:font-semibold rounded-lg text-white px-10 sm:px-10 border border-[#FE6034] py-4 text-sm">Get
                                    Started</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                style="height: 70px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-20 bg-white -mt-20">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                </div>
                <div class="text-center mx-auto mt-52 mb-[60px] lg:mb-20 max-w-[510px]" data-aos="fade-up">
                    <h2
                       class="
                       font-bold
                       text-3xl
                       sm:text-4xl
                       md:text-[40px]
                       text-dark
                       mb-4
                       "
                       >
                       Mission and Vission
                    </h2>
                    <p class="text-base text-body-color">
                       There are many variations of passages of Lorem Ipsum available
                       but the majority have suffered alteration in some form.
                    </p>
                 </div>
                <div class="flex flex-wrap items-center mt-24">
                    {{-- <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                        <div class="text-[#292A42] p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100"
                            data-aos="fade-right">
                            <i class="fas fa-hands text-xl"></i>
                        </div>
                        <h3 class="text-3xl text-[#FE6034] mb-2 font-semibold leading-normal" data-aos="fade-right">
                            Our Mission
                        </h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700" data-aos="fade-right">
                            The University calls to develop God-loving. people-driven, patriotic, industry sensitive,
                            environmentally conscious, globally competitive and resilient graduates.
                        </p>
                    </div> --}}
                    <div class="w-full md:w-4/12 ml-auto mr-auto px-4 mb-20" data-aos="fade-up">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg"
                            src="https://images.unsplash.com/photo-1521316730702-829a8e30dfd0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" />
                    </div>
                    <div class="w-full md:w-4/12 ml-auto mr-auto px-4 mb-20" data-aos="fade-up">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg"
                            src="https://images.unsplash.com/photo-1521316730702-829a8e30dfd0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" />
                    </div>
                </div>
            </div>
        </section>

        <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
        <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
        <div class="container">
            <div class="flex flex-wrap justify-center -mx-4" data-aos="fade-up">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                    <h2
                        class="
                        font-bold
                        text-3xl
                        sm:text-4xl
                        md:text-[40px]
                        text-dark
                        mb-4
                        "
                        >
                        Our Recent News
                    </h2>
                    <p class="text-base text-body-color">
                        There are many variations of passages of Lorem Ipsum available
                        but the majority have suffered alteration in some form.
                    </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4" data-aos="fade-up">
                    <div class="max-w-[370px] mx-auto mb-10">
                    <div class="rounded overflow-hidden mb-8">
                        <img
                            src="https://cdn.tailgrids.com/1.0/assets/images/blogs/blog-01/image-01.jpg"
                            alt="image"
                            class="w-full"
                            />
                    </div>
                    <div>
                        <span
                            class="
                            bg-[#FE6034]
                            rounded
                            inline-block
                            text-center
                            py-1
                            px-4
                            text-xs
                            leading-loose
                            font-semibold
                            text-white
                            mb-5
                            "
                            >
                        Dec 22, 2023
                        </span>
                        <h3>
                            <a
                                href="javascript:void(0)"
                                class="
                                font-semibold
                                text-xl
                                sm:text-2xl
                                lg:text-xl
                                xl:text-2xl
                                mb-4
                                inline-block
                                text-dark
                                "
                                >
                            Meet AutoManage, the best AI management tools
                            </a>
                        </h3>
                        <p class="text-base text-body-color">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.
                        </p>
                        <div class="w-full text-right mt-4">
                            <a class="text-gray-500 uppercase font-bold text-sm" href="#">Read More</a>
                          </div>
                    </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4" data-aos="fade-up">
                    <div class="max-w-[370px] mx-auto mb-10">
                    <div class="rounded overflow-hidden mb-8">
                        <img
                            src="https://cdn.tailgrids.com/1.0/assets/images/blogs/blog-01/image-02.jpg"
                            alt="image"
                            class="w-full"
                            />
                    </div>
                    <div>
                        <span
                            class="
                            bg-[#FE6034]
                            rounded
                            inline-block
                            text-center
                            py-1
                            px-4
                            text-xs
                            leading-loose
                            font-semibold
                            text-white
                            mb-5
                            "
                            >
                        Mar 15, 2023
                        </span>
                        <h3>
                            <a
                                href="javascript:void(0)"
                                class="
                                font-semibold
                                text-xl
                                sm:text-2xl
                                lg:text-xl
                                xl:text-2xl
                                mb-4
                                inline-block
                                text-dark
                                "
                                >
                            How to earn more money as a wellness coach
                            </a>
                        </h3>
                        <p class="text-base text-body-color">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.
                        </p>
                        <div class="w-full text-right mt-4">
                            <a class="text-gray-500 uppercase font-bold text-sm" href="#">Read More</a>
                          </div>
                    </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4" data-aos="fade-up">
                    <div class="max-w-[370px] mx-auto mb-10">
                    <div class="rounded overflow-hidden mb-8">
                        <img
                            src="https://cdn.tailgrids.com/1.0/assets/images/blogs/blog-01/image-03.jpg"
                            alt="image"
                            class="w-full"
                            />
                    </div>
                    <div>
                        <span
                            class="
                            bg-[#FE6034]
                            rounded
                            inline-block
                            text-center
                            py-1
                            px-4
                            text-xs
                            leading-loose
                            font-semibold
                            text-white
                            mb-5
                            "
                            >
                        Jan 05, 2023
                        </span>
                        <h3>
                            <a
                                href="javascript:void(0)"
                                class="
                                font-semibold
                                text-xl
                                sm:text-2xl
                                lg:text-xl
                                xl:text-2xl
                                mb-4
                                inline-block
                                text-dark
                                "
                                >
                            The no-fuss guide to upselling and cross selling
                            </a>
                        </h3>
                        <p class="text-base text-body-color">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.
                        </p>
                        <div class="w-full text-right mt-4">
                            <a class="text-gray-500 uppercase font-bold text-sm" href="#">Read More</a>
                          </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <section class="relative pb-20 bg-white">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                </div>
                <div class="flex flex-wrap items-center mt-20">
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                        <div data-aos="fade-right"
                            class="text-[#292A42] p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                            <i class="fas fa-user text-xl"></i>
                        </div>
                        <h3 class="text-3xl mb-2 font-semibold leading-normal text-[#FE6034]" data-aos="fade-right">
                            Dr. Shirley V. Saragcon
                        </h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700" data-aos="fade-right">
                            Dean, College of Business and Accountancy
                        </p>
                    </div>
                    <div class="w-full md:w-3/12 px-4 mr-auto ml-auto" data-aos="fade-up">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6">
                            <img alt="dean" src="img/dean.png" class="w-full align-middle rounded-lg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="relative bg-[#292A42] pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-[#292A42] fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="max-w-2xl mx-auto py-10">

            <div class="flex justify-center items-center m-auto py-4">
                <div class="flex justify-between gap-6">
                    <img class="w-20" src="img/ucc.png" alt="ucc-logo">
                    <img class="w-20" src="img/course.png" alt="ucc-logo">
                </div>
            </div>

            <div class="text-center">
                <h3 class="text-3xl font-semibold leading-normal mb-3 text-white"> Ready to get started at E-Portal?
                </h3>
                <p class="text-white"> Stay updated. All day, every day. </p>
                <div class="flex justify-center my-10">
                    <div class="flex justify-center items-center">
                        <a href="{{ route('home') }}" data-aos="zoom-in-up">
                            <button
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FE6034] bg-[#FE6034] transition duration-150 ease-in-out hover:bg-[#fa4917] lg:text-lg lg:font-semibold rounded-lg text-white px-10 sm:px-10 border border-[#FE6034] py-4 text-sm">Get
                                Started</button>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="border-white" />
            <div class="mt-16 flex flex-col text-center text-sm text-white">
                <p class="order-2 md:order-1 mt-8 md:mt-0"> &copy; Educational Portal, <span id="date"></span>. </p>
            </div>
        </div>
    </footer>
</body>

<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
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

</html>
