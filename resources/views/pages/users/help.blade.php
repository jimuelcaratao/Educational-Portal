<x-guest-layout>
{{-- back to home --}}
<nav class="flex py-3 px-5 text-black bg-gray-50 border" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
    <a href="{{ route('welcome') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900">
    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
    Home
    </a>
    </li>

    <li aria-current="page">
    <div class="flex items-center">
    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
    <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">Help</span>
    </div>
    </li>
    </ol>
    </nav>

    <!-- help -->
    <div class="font-nunito antialiased bg-gray-100 text-gray-900 my-16 flex items-center justify-center">

        <div class="container mx-auto px-4 sm:px-8 max-w-3xl">

            <div class="main-title my-4">
                <h1 class="font-bold text-2xl text-center">FREQUENTLY ASKED QUESTIONS</h1>
                <h1 class="text-xl text-center mt-2">Getting started Questions</h1>
            </div>

            <div class="main-question mb-8 flex flex-col divide-y text-gray-800 text-base">
                <div class="item px-6 py-6" x-data="{isOpen : false}">
                    <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                        <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">What is educational portal?</h4>
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                        Educational portal is the result of hard work of third year students, section a, group 2 of Bachelor of Science in Office Administration in their study entitled “Elevating the Competency of Bachelor of Science in Office Administration Students: Basis for a Proposed Educational Portal”.
                    </div>
                </div>

                <div class="item px-6 py-6" x-data="{isOpen : false}">
                    <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                        <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Why is educational portal important?</h4>
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                        The educational portal is important for the reason that it will help students of Bachelor of Science in Office Administration elevate their competencies and motivation in learning.
                    </div>
                </div>

                <div class="item px-6 py-6" x-data="{isOpen : false}">
                    <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                        <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">How does educational portal work?</h4>
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                        The educational portal will hold the course’s academic achievers, career opportunities, information about the Philippine Association of Students in Office Administration together with the students that embody it, professor’s profile, thesis outputs, applications like speed typing, and stenography dictation.
                    </div>
                </div>

                <div class="item px-6 py-6" x-data="{isOpen : false}">
                    <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                        <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">How to make an account?</h4>
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                        The researchers have already provided an account for each year level to be used.
                    </div>
                </div>
            </div>

            <div class="main-title my-4">
                <h1 class="text-xl text-center mt-2">Security Questions</h1>
            </div>

            <div class="main-question mb-8 flex flex-col divide-y text-gray-800 text-base">
                <div class="item px-6 py-6" x-data="{isOpen : false}">
                    <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                        <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Is your site secured?</h4>
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                        Yes, you will see it with the URL.
                    </div>
                </div>

                <div class="item px-6 py-6" x-data="{isOpen : false}">
                    <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                        <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Does it access my personal information?</h4>
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                        No, since the accounts are provided by the admins of the site.
                    </div>
                </div>

                <div class="item px-6 py-6" x-data="{isOpen : false}">
                    <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                        <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">What are the data accessed by the site?</h4>
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                        Only the data that is allowed by the device used.
                    </div>
                </div>
            </div>

            <div class="main-title my-4">
                <h1 class="text-xl text-center mt-2">Other Questions</h1>
            </div>

            <div class="main-question mb-8 flex flex-col divide-y text-gray-800 text-base">
                <div class="item px-6 py-6" x-data="{isOpen : false}">
                    <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                        <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Can I download thesis outputs?</h4>
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                        No, it can only be accessed by BSOAD students.
                    </div>
                </div>

                <div class="item px-6 py-6" x-data="{isOpen : false}">
                    <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                        <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Are there educational fees to be paid to enroll in the course?</h4>
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                        Yes, the university will give you a list to be paid but the good thing is it is affordable.
                    </div>
                </div>

                <div class="item px-6 py-6" x-data="{isOpen : false}">
                    <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                        <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Do I need to pay to access data included in the site?</h4>
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                        No, the site is completely free for you to access.
                    </div>
                </div>
            </div>

        </div>




    </div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>

</x-guest-layout>
