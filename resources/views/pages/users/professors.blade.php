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
                <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">Professors</span>
                </div>
                </li>
                </ol>
                </nav>

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
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/DR. GINALYN RODRIGUEZ-Doctor of Philosophy Major in Educational Management.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">DR. GINALYN RODRIGUEZ-Doctor of Philosophy Major in Educational Management</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/DR. RENZ CATHERINE DOMINGO.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">DR. RENZ CATHERINE DOMINGO-Doctor of Philosophy Major in Educational Management</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/DR. RUBY CAGADAS.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">DR. RUBY CAGADAS</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/DR.RODORA DE LUNA.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">DR.RODORA DE LUNA</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/DR.RYLAND RUIZ.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">DR.RYLAND RUIZ</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/PROF ALBERT SANTIAGO.-Master of Business Administrationpng.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">PROF ALBERT SANTIAGO.-Master of Business Administrationpng</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/PROF BRYAN RAMIREZ.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">PROF BRYAN RAMIREZ</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/PROF MA. CONCEPTION ZAPANTA.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">PROF MA. CONCEPTION ZAPANTA</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/PROF. ADELA ENTINO-Master of Business Administration.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">PROF. ADELA ENTINO-Master of Business Administration</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/PROF. CARLA  AGTE.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">PROF. CARLA  AGTE</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/PROF. GINA GILI-Master of Business Administration.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">PROF. GINA GILI-Master of Business Administration</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/PROF. ISABELO LAYON.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">PROF. ISABELO LAYON</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/PROF. JAN KRISHNA PAREDES- Master of Business Administration.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">PROF. JAN KRISHNA PAREDES- Master of Business Administration</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/PROF. JOAN SALUBA- Master in Public Administration.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">PROF. JOAN SALUBA- Master in Public Administration</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/PROF. JOANNE DUMANAYOS.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">PROF. JOANNE DUMANAYOS</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/PROF. JOCELYN SALBATUNA.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">PROF. JOCELYN SALBATUNA</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/PROF. JOHN MARQUEZ.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">PROF. JOHN MARQUEZ</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/PROF. MA. JOSE BUYA.-Master of Arts in Education, Major in Administration and Supervision png.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">PROF. MA. JOSE BUYA.-Master of Arts in Education, Major in Administration and Supervision png</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/PROF. MICAH MARTIN-Took units in Masteral at PUP, Open University.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">PROF. MICAH MARTIN-Took units in Masteral at PUP, Open University</p>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8">
                        <img class="object-center object-cover h-56 w-56"
                            src="img/prof/PROF. ROMELA NALAZON.png"
                            alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">PROF. ROMELA NALAZON</p>
                    </div>
                </div>


            </div>
        </div>

</x-guest-layout>
