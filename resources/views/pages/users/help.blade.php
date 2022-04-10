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

            <div class="main-title my-8">
                <h1 class="font-bold text-2xl text-center">How can we help you?</h1>
            </div>

            <div  x-data class="main-search mb-8 rounded-lg shadow-lg px-6 py-3 w-full flex items-center space-x-6 border border-gray-200 border-opacity-75">
                <button class=" focus:outline-none" @click="$refs.search.focus()">
                    <svg
                        class="w-6 h-6 text-gray-500"
                        fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
                <input x-ref="search" type="text" placeholder="Describe your issue" class="text-base w-full bg-transparent focus:outline-none">
            </div>

            <div class="main-question mb-8 flex flex-col divide-y text-gray-800 text-base">
                <div class="item px-6 py-6" x-data="{isOpen : false}">
                    <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                        <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Popular articles</h4>
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ex. Expedita sunt enim, vel amet cumque nulla illum harum. Similique!
                    </div>
                </div>

                <div class="item px-6 py-6" x-data="{isOpen : false}">
                    <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                        <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Fix problems & request removals</h4>
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ex. Expedita sunt enim, vel amet cumque nulla illum harum. Similique!
                    </div>
                </div>

                <div class="item px-6 py-6" x-data="{isOpen : false}">
                    <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                        <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Browse the web</h4>
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ex. Expedita sunt enim, vel amet cumque nulla illum harum. Similique!
                    </div>
                </div>

                <div class="item px-6 py-6" x-data="{isOpen : false}">
                    <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                        <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Search on your phone or tablet</h4>
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ex. Expedita sunt enim, vel amet cumque nulla illum harum. Similique!
                    </div>
                </div>
            </div>

            <div class="main-images mb-8 ">
                <div class="images grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="image bg-white rounded-lg shadow-lg overflow-hidden">
                        <a href="#">
                            <img src="https://images.unsplash.com/45/QDSMoAMTYaZoXpcwBjsL__DSC0104-1.jpg" alt="Contact with Customer support" title="Contact with Customer support">
                            <span class="text-center p-2 text-gray-700 text-sm inline-block w-full">Customer support</span>
                        </a>
                    </div>

                    <div class="image bg-white rounded-lg shadow-lg overflow-hidden">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a" alt="Send massage to support disk" title="Send massage to support disk">
                            <span class="text-center p-2 text-gray-700 text-sm inline-block w-full">Send massage</span>
                        </a>
                    </div>

                    <div class="image bg-white rounded-lg shadow-lg overflow-hidden">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1488998427799-e3362cec87c3" alt="Write your feedback" title="Write your feedback">
                            <span class="text-center p-2 text-gray-700 text-sm inline-block w-full">Write feedback</span>
                        </a>
                </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>

</x-guest-layout>
