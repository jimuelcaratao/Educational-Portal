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
        <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">tutorials</span>
        </div>
        </li>
        </ol>
        </nav>

    <!-- tutorials -->
    <div id="history" class="container mx-auto px-4 py-28">
       <div id="history" class="text-center pb-8">
           <h1 class="font-bold text-3xl md:text-4xl font-heading text-[#FE6034]">
            Shorthand Tutorials
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
           <div class="w-full px-4 mr-auto ml-auto">
               <div class="relative flex flex-col min-w-0 break-words w-full mb-2 shadow-lg rounded-lg">
                   <img alt="..."
                       src="img/tut/tut1.png"
                       class="w-full align-middle rounded-lg">
                       <p class="text-md font-light leading-relaxed mt-4 mb-4 text-justify ml-10">
                           <a href="https://youtube.com/channel/UCTIh95KFBM_NArTlGxE5fGA"> https://youtube.com/channel/UCTIh95KFBM_NArTlGxE5fGA </a>
                       </p>
               </div>
           </div>
           <div class="w-full px-4 mr-auto ml-auto">
               {{-- <h3 class="text-3xl mb-2 font-semibold leading-normal">
                   Working with us is a pleasure
               </h3> --}}
               <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-justify">
                Steno Tutorials that you can watch from the YouTube link
                provided. It consists of tutorials from Episode 1 to 23 and some
                other content such as question and answer about shorthand and
                also tips.
               </p>
           </div>

           <div class="w-full px-4 mr-auto ml-auto">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-2 shadow-lg rounded-lg">
                <img alt="..."
                    src="img/tut/tut2.png"
                    class="w-full align-middle rounded-lg">
                    <p class="text-md font-light leading-relaxed mt-4 mb-4 text-justify ml-10">
                        <a href="https://youtube.com/c/Jazvlogandstenography"> https://youtube.com/c/Jazvlogandstenography </a>
                    </p>
            </div>
        </div>
        <div class="w-full px-4 mr-auto ml-auto">
            {{-- <h3 class="text-3xl mb-2 font-semibold leading-normal">
                Working with us is a pleasure
            </h3> --}}
            <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-justify">
                Steno Tutorials that you can watch from the YouTube link
                provided. It consists of Shorthand Lessons 1 to 13 and Medical
                OFP from Lessons 1 to 9.
            </p>
        </div>
       </div>
   </div>

</x-guest-layout>
