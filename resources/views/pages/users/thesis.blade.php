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
    <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">Thesis</span>
    </div>
    </li>
    </ol>
    </nav>


<div class="py-6 flex flex-col justify-center sm:py-12">
    <section class="py-20 mx-5 md:mx-32 space-y-8 sm:py-20">
        <div class="container flex flex-row items-stretch justify-center w-full" x-data="{tab: 1}">
            <div class="flex flex-col justify-start w-1/4 space-y-4">
                <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 1, ' transform -translate-x-2': tab !== 1}" href="#" @click.prevent="tab = 1">
                    FIRST YEAR
                </a>
                <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 2, ' transform -translate-x-2': tab !== 2}" href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                    SECOND YEAR
                </a>
                <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 4, ' transform -translate-x-2': tab !== 4}" href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                    THIRD YEAR
                </a>
                <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 5, ' transform -translate-x-2': tab !== 5}" href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                    FOURTH YEAR
                </a>
            </div>
            <div class="w-3/4">
                <div class="space-y-6" x-show="tab === 1">
                <div class="holder mx-auto w-10/12 gap-20 grid sm:grid-cols-1 md:grid-cols-2">
                    <div class="mb-10">
                            <embed src="http://yoursite.com/the.pdf" type="application/pdf" class="w-64 h-72 md:w-96 md:h-96" download/>
                    </div>
                    <div class="mb-10">
                        <embed src="http://yoursite.com/the.pdf" type="application/pdf" class="w-64 h-72 md:w-96 md:h-96" download/>
                    </div>
                </div>
                </div>

                <div class="space-y-6" x-show="tab === 2">
                    <div class="holder mx-auto w-10/12 gap-20 grid sm:grid-cols-1 md:grid-cols-2">
                        <div class="mb-10">
                            <embed src="http://yoursite.com/the.pdf" type="application/pdf" class="w-64 h-72 md:w-96 md:h-96" download/>
                    </div>
                    <div class="mb-10">
                        <embed src="http://yoursite.com/the.pdf" type="application/pdf" class="w-64 h-72 md:w-96 md:h-96" download/>
                    </div>
                    </div>
                </div>

                <div class="space-y-6" x-show="tab === 4">
                    <div class="holder mx-auto w-10/12 gap-20 grid sm:grid-cols-1 md:grid-cols-2">
                        <div class="mb-10">
                            <embed src="http://yoursite.com/the.pdf" type="application/pdf" class="w-64 h-72 md:w-96 md:h-96" download/>
                    </div>
                    <div class="mb-10">
                        <embed src="http://yoursite.com/the.pdf" type="application/pdf" class="w-64 h-72 md:w-96 md:h-96" download/>
                    </div>
                    </div>
                </div>

                <div class="space-y-6" x-show="tab === 5">
                    <div class="holder mx-auto w-10/12 gap-20 grid sm:grid-cols-1 md:grid-cols-2">
                        <div class="mb-10">
                            <embed src="http://yoursite.com/the.pdf" type="application/pdf" class="w-64 h-72 md:w-96 md:h-96" download/>
                    </div>
                    <div class="mb-10">
                        <embed src="http://yoursite.com/the.pdf" type="application/pdf" class="w-64 h-72 md:w-96 md:h-96" download/>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
            <!-- .  .
                    I’m Vengeance
            |\_|\
            | a_a\
            | | "]
        ____| '-\___
        /.----.___.-'\
        //        _    \
    //   .-. (~v~) /|
    |'|  /\:  .--  / \
    // |-/  \_/____/\/~|
    |/  \ |  []_|_|_] \ |
    | \  | \ |___   _\ ]_}
    | |  '-' /   '.'  |
    | |     /    /|:  |
    | |     |   / |:  /\
    | |     /  /  |  /  \
    | |    |  /  /  |    \
    \ |    |/\/  |/|/\    \
    \|\ |\|  |  | / /\/\__\
    \ \| | /   | |__
        / |   |____)
        |_/ -->

</x-guest-layout>
