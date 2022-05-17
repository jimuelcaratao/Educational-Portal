<x-guest-layout>

        {{-- back to home --}}
    <nav class="flex py-3 px-5 text-black bg-gray-50 border" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
        <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900">
        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
        Home
        </a>
        </li>

        <li aria-current="page">
        <div class="flex items-center">
        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">Organizations</span>
        </div>
        </li>
        </ol>
        </nav>

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
                <div class="flex justify-center mx-auto">
                    <div class="focus:outline-none" aria-label="card 1">
                        <img role="img" aria-label="code editor" class="focus:outline-none w-full"
                            src="img/org/PASOA OFFICERS.jpg" alt="photo" />
                        {{-- <div class="py-4 px-8 w-full flex justify-between bg-indigo-700">
                            <p class="focus:outline-none text-sm text-white font-semibold tracking-wide">Bruce Wayne
                            </p>
                            <p class="focus:outline-none text-sm text-white font-semibold tracking-wide">13TH Oct, 2020
                            </p>
                        </div> --}}
                        <div class="bg-white px-10 py-6 rounded-bl-3xl rounded-br-3xl">
                            <h1 class="focus:outline-none text-4xl text-gray-900 font-semibold tracking-wider">
                                PASOA</h1>
                            <p
                                class="focus:outline-none text-gray-700 text-base lg:text-lg lg:leading-8 tracking-wide mt-6 w-11/12">
                                PASOA stands for Philippine Association of Students in Office Administration. The PASOA National founded in 2004 is  an organization by which all the office administration from different schools are affiliated to. Every school year PASOA conducts a manipulative skills competition in order for students to show and hone their  skills in different areas of specialization like quiz bees, spoken poetry,  poster and slogan making, singing,  dancing, speed typing, and a lot more.
                                </p>
                            <div class="w-full flex justify-end">
                                <button
                                    class="focus:outline-none focus:ring-2 ring-offset-2 focus:ring-gray-600 hover:opacity-75 mt-4 justify-end flex items-center cursor-pointer">
                                    <a href="{{ route('org-1') }}" class=" text-base tracking-wide text-indigo-700">Read more</a>
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
                    {{-- <div>
                        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-8">
                            <div class="focus:outline-none " aria-label="card 2">
                                <img role="img" aria-label="gaming" class="focus:outline-none w-full"
                                    src="https://cdn.tuk.dev/assets/components/111220/Blg-6/blog(2).png" alt="games" />
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
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
