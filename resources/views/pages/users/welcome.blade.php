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

<body class="antialiased bg-[#F1DBC4]">
    <main>
        <div
          class="relative pt-16 pb-32 flex content-center items-center justify-center"
          style="min-height: 75vh;"
        >
          <div
            class="absolute top-0 w-full h-full bg-center bg-cover"
            style='background-image: url(https://images.unsplash.com/photo-1514894780887-121968d00567?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1173&q=80);'
          >
            <span
              id="blackOverlay"
              class="w-full h-full absolute opacity-75 bg-black"
            ></span>
          </div>
          <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
              <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                  <h1 class="text-white font-semibold text-4xl md:text-5xl w-full" data-aos="zoom-in-up">
                    EDUCATIONAL PORTAL
                  </h1>
                  <p class="mt-4 md:mt-8 text-md md:text-lg text-gray-300" data-aos="zoom-in-up">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nulla pretium accumsan elementum. Maecenas feugiat quam ut lorem vulputate vulputate.
                    Maecenas feugiat quam ut lorem vulputate vulputate.
                  </p>
                  <div class="mt-8 flex justify-center items-center">
                      <a href="{{ route('home') }}" data-aos="zoom-in-up">
                    <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#717052] bg-[#717052] transition duration-150 ease-in-out hover:bg-[#7E8057] lg:text-xl lg:font-bold rounded-lg text-white px-10 sm:px-10 border border-[#717052] py-4 text-sm">Get Started</button>
                      </a>
                  </div>
              </div>
            </div>
          </div>
          <div
            class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
            style="height: 70px;"
          >
            <svg
              class="absolute bottom-0 overflow-hidden"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="none"
              version="1.1"
              viewBox="0 0 2560 100"
              x="0"
              y="0"
            >
              <polygon
                class="text-white fill-current"
                points="2560 0 2560 100 0 100"
              ></polygon>
            </svg>
          </div>
        </div>
        <section class="pb-20 bg-white -mt-20">
          <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
            </div>
            <div class="flex flex-wrap items-center mt-44">
              <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                <div
                  class="text-[#717052] p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100" data-aos="fade-right"
                >
                  <i class="fas fa-hands text-xl"></i>
                </div>
                <h3 class="text-3xl mb-2 font-semibold leading-normal" data-aos="fade-right">
                  Our Mission
                </h3>
                <p
                  class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700" data-aos="fade-right"
                >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nulla pretium accumsan elementum. Maecenas feugiat quam ut lorem vulputate vulputate.
                </p>
                <p
                  class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700" data-aos="fade-right"
                >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nulla pretium accumsan elementum. Maecenas feugiat quam ut lorem vulputate vulputate.
                Maecenas feugiat quam ut lorem vulputate vulputate.
                </p>
              </div>
              <div class="w-full md:w-4/12 ml-auto mr-auto px-4 mb-20" data-aos="fade-up">
                <img
                  alt="..."
                  class="max-w-full rounded-lg shadow-lg"
                  src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
                />
              </div>
            </div>
          </div>
        </section>
        <section class="relative py-20">
          <div
            class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;"
          >
            <svg
              class="absolute bottom-0 overflow-hidden"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="none"
              version="1.1"
              viewBox="0 0 2560 100"
              x="0"
              y="0"
            >
              <polygon
                class="text-[#F1DBC4] fill-current"
                points="2560 0 2560 100 0 100"
              ></polygon>
            </svg>
          </div>
          <div class="container mx-auto px-4">
            <div class="items-center flex flex-wrap">
              <div class="w-full md:w-4/12 ml-auto mr-auto px-4 mb-8" data-aos="fade-up">
                <img
                  alt="..."
                  class="max-w-full rounded-lg shadow-lg"
                  src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
                />
              </div>
              <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                <div class="md:pr-12">
                  <div
                  data-aos="fade-left" class="text-[#717052] p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100"
                  >
                    <i class="fas fa-eye text-xl"></i>
                  </div>
                  <h3 class="text-3xl font-semibold" data-aos="fade-left">Our Vision</h3>
                  <p
                  class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700" data-aos="fade-left"
                >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nulla pretium accumsan elementum. Maecenas feugiat quam ut lorem vulputate vulputate.
                </p>
                <p
                  class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700" data-aos="fade-left"
                >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nulla pretium accumsan elementum. Maecenas feugiat quam ut lorem vulputate vulputate.
                Maecenas feugiat quam ut lorem vulputate vulputate.
                </p>

                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="relative pb-20 bg-white">
            <div
            class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;"
          >
            <svg
              class="absolute bottom-0 overflow-hidden"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="none"
              version="1.1"
              viewBox="0 0 2560 100"
              x="0"
              y="0"
            >
              <polygon
                class="text-white fill-current"
                points="2560 0 2560 100 0 100"
              ></polygon>
            </svg>
          </div>
            <div class="container mx-auto px-4">
              <div class="flex flex-wrap">
              </div>
              <div class="flex flex-wrap items-center mt-20">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                  <div
                  data-aos="fade-right" class="text-[#717052] p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100"
                  >
                    <i class="fas fa-user text-xl"></i>
                  </div>
                  <h3 class="text-3xl mb-2 font-semibold leading-normal" data-aos="fade-right">
                    Our Respective Dean
                  </h3>
                  <p
                    class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700" data-aos="fade-right"
                  >
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nulla pretium accumsan elementum. Maecenas feugiat quam ut lorem vulputate vulputate.
                  </p>
                  <p
                    class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700" data-aos="fade-right"
                  >
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nulla pretium accumsan elementum. Maecenas feugiat quam ut lorem vulputate vulputate.
                  Maecenas feugiat quam ut lorem vulputate vulputate.
                  </p>
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto" data-aos="fade-up">
                  <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-pink-600"
                  >
                    <img
                      alt="..."
                      src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                      class="w-full align-middle rounded-t-lg"
                    />
                    <blockquote class="relative p-4 mb-4">
                      <svg
                        preserveAspectRatio="none"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 583 95"
                        class="absolute left-0 w-full block"
                        style="height: 95px; top: -94px;"
                      >
                        <polygon
                          points="-30,95 583,95 583,65"
                          class="text-pink-600 fill-current"
                        ></polygon>
                      </svg>
                      <h4 class="text-xl font-bold text-white">
                        Dr. John Doe
                      </h4>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </section>
      </main>

      <footer class="relative bg-[#F1DBC4] pt-8 pb-6">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-[#F1DBC4] fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div class="max-w-2xl mx-auto py-10">
            <div class="text-center">
                <h3 class="text-3xl font-semibold leading-normal mb-3"> Ready to get started at E-Portal? </h3>
                <p class="text-gray-700"> Stay updated. All day, every day. </p>
                <div class="flex justify-center my-10">
                    <div class="flex justify-center items-center">
                        <a href="{{ route('home') }}" data-aos="zoom-in-up">
                      <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#717052] bg-[#717052] transition duration-150 ease-in-out hover:bg-[#7E8057] lg:text-xl lg:font-bold rounded-lg text-white px-10 sm:px-10 border border-[#717052] py-4 text-sm">Get Started</button>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="border-[#717052]"/>
            <div class="mt-16 flex flex-col text-center text-sm text-gray-700">
                <p class="order-2 md:order-1 mt-8 md:mt-0"> &copy; Educational Portal, <span id="date"></span>. </p>
            </div>
        </div>
      </footer>
</body>

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
