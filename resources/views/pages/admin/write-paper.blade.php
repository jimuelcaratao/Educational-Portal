<x-app-layout>
    <x-slot name="header">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    Write Thesis
                </h2>
            </div>


            <div class=" flex lg:mt-0 lg:ml-4">
                <span class="sm:ml-3">
                    <a href="{{ route('admin.thesis') }}" class="text-decoration-none">
                        <button data-bs-toggle="modal" type="button"
                            class="go-back inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600">
                            Back to Thesis
                        </button>
                    </a>
                </span>
            </div>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p6">

                <div>
                    <div class="md:col-span-2">
                        <div>
                            <form action="{{ route('thesis.write.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-10 py-5 bg-white space-y-6">
                                        <div class="col-span-12">


                                            <label class="block text-sm font-medium text-gray-700">
                                                PDF
                                            </label>
                                            <div
                                                class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">

                                                <div class="space-y-1 text-center">
                                                    <embed id="output_default_photo" class="hidden" src=""
                                                        type="application/pdf" width="700px" height="400px" />

                                                    {{-- <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                        fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path
                                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg> --}}

                                                    {{-- <img id="output_default_photo" class="cursor-pointer mb-4"
                                                        src="{{ asset('img/cover-img.svg') }}"
                                                        style="width:600px;height:300px;"> --}}

                                                    <div class="flex text-sm text-gray-600 mx-auto d-block">
                                                        <label for="default_photo"
                                                            class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                            <span>Upload a PDF</span>
                                                            <input id="default_photo" name="default_photo" type="file"
                                                                required class="sr-only" accept=".pdf">
                                                        </label>
                                                        {{-- <p class="pl-1">or drag and drop</p> --}}
                                                    </div>
                                                    <p class="text-xs text-gray-500">
                                                        PDF up to 5MB
                                                    </p>
                                                </div>


                                            </div>
                                        </div>


                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="title"
                                                class="block text-sm font-medium text-gray-700">Title</label>
                                            <input type="text" name="title" id="title" :value="old('title')" required
                                                placeholder="Title..."
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="author_name"
                                                class="block text-sm font-medium text-gray-700">Author Name (BSOAD
                                                students) </label>
                                            <input type="text" name="author_name" id="author_name"
                                                :value="old('author_name')" required placeholder="John Doe"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3 ">
                                            <label for="course" class="block text-sm font-medium text-gray-700">Course &
                                                Section</label>

                                            <div class="inline-flex gap-3">
                                                <input type="text" name="course" id="course" :value="old('course')"
                                                    required placeholder="BSOAD"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/3 shadow-sm sm:text-sm border-gray-300 rounded-md">

                                                <input type="text" name="year" id="year" :value="old('year')" required
                                                    placeholder="3"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/3 shadow-sm sm:text-sm border-gray-300 rounded-md">

                                                <input type="text" name="section" id="section" :value="old('section')"
                                                    required placeholder="B"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/3 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="published_date"
                                                class="block text-sm font-medium text-gray-700">Year Published
                                                (YYYY) or (YYYY - YYYY)</label>
                                            <input type="text" name="published_date" id="published_date"
                                                :value="old('published_date')" required placeholder="YYYY"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div>
                                            <label for="body" class="block text-sm font-medium text-gray-700">
                                                Description
                                            </label>
                                            <div class="mt-1">
                                                <textarea id="body" name="body" rows="10" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                                    placeholder="you@example.com"></textarea>
                                            </div>
                                            <p class="mt-2 text-sm text-gray-500">
                                                Brief description for your research. URLs are hyperlinked.
                                            </p>
                                        </div>

                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit"
                                            class="publish-article inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Publish
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>


    @push('scripts')
        {{-- <script>
            ClassicEditor
                .create(document.querySelector('#test'))
                .catch(error => {
                    console.error(error);
                });
        </script> --}}
        <script src="https://unpkg.com/flowbite@1.4.2/dist/datepicker.js"></script>
        <script>
            //submit
            $(".publish-article").click(function(e) {
                e.preventDefault();
                swal({
                        title: "Are you Sure?",
                        text: "You are Publishing this article.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $(e.target)
                                .closest("form")
                                .submit(); // Post the surrounding form
                        } else {
                            return false;
                        }
                    });
            });

            //back
            $(".go-back").click(function(e) {
                e.preventDefault();
                swal({
                        title: "Are you Sure?",
                        text: "Once you go back, all data will be lost.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $(e.target)
                            window.location.href = "{{ route('admin.thesis') }}";
                        } else {
                            return false;
                        }
                    });
            });

            $(document).on("change", "#default_photo", function() {
                document.getElementById('output_default_photo').src = window.URL.createObjectURL(this.files[0]);
                $('#output_default_photo').show();
            });

            $('#output_default_photo').click(function() {
                $('#default_photo').trigger('click');
            });
            //CkEditor Version 5           
            ClassicEditor.create(document.getElementById('body'))
                .then(editor => {
                    thisEditor = editor
                });

            //CkEditor Version 4        
            // CKEDITOR.replace('body');
        </script>
    @endpush

</x-app-layout>
