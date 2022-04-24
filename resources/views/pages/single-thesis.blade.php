<x-guest-layout>

    {{-- back to home --}}
    <nav class="flex py-3 px-5 text-black bg-gray-50 border sticky" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('home') }}"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900">
                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Home
                </a>
            </li>

            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <a href="{{ route('thesis') }}">
                        <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">Thesis</span>
                    </a>
                </div>
            </li>

            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span
                        class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">{{ $thesis->title }}</span>
                </div>
            </li>
        </ol>
    </nav>



    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            {{-- <div class="description text-base text-gray-800 uppercase">
                {{ $thesis->category_name }}
            </div> --}}

            <div class="description my-3 text-2xl md:text-6xl font-bold text-purple-700 text-gray-600 uppercase">
                {{ $thesis->title }}
            </div>

            <div class="description mt-2 mb-2 text-sm text-gray-600 ">
                {{ $thesis->user->name }}
            </div>

            <div class="description text-base text-gray-800 uppercase">
                {{ \Carbon\Carbon::parse($thesis->created_at)->format('M  d, Y - h:i:s A') }}
            </div>


            <div class="flex flex-row justify-end ">
                <div class="mr-4 mt-2 hide-print">
                    @auth
                        <button onclick="window.print()"><i class="fas fa-download fa-lg download"></i>
                        </button>
                    @endauth
                </div>
            </div>




            <div class="mx-16">
                <div class=" justify-center my-16">
                    {{-- <img src="{{ asset('storage/media/thesis/' . $thesis->id . '_' . $thesis->default_photo) }}"
                        class="rounded" alt="{{ $thesis->default_photo }}" /> --}}

                    <embed
                        src="{{ asset('storage/thesis/' . $thesis->thesis_id . '_' . $thesis->pdf) }}#toolbar=0&navpanes=0&scrollbar=0"
                        type="application/pdf" width="100%" height="700px" />
                </div>

                <p class="text-sm text-gray-700">{!! $thesis->body !!}

                </p>
            </div>

        </div>
    </div>

</x-guest-layout>
