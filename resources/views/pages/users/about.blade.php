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
    <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">About</span>
    </div>
    </li>
    </ol>
    </nav>

{{-- Logo --}}
<div class="container px-10 py-5 mx-auto flex flex-wrap items-center justify-center">
    <img class="h-64" src={{ asset('img/course.png') }} alt="logo">
    <p class="max-w-5xl mt-10 text-center">The Official Student Publication of College of Information Technology
        (CBSUA-Sipocot) <br>
        𝗠𝗜𝗦𝗦𝗜𝗢𝗡 <br>
        To Develop creative and critical thinking among the students of the
        College of Information Technology by delivering responsible,
        truthful and reliable campus journalism so as to create an atmosphere of free expression. <br>
        𝗩𝗜𝗦𝗜𝗢𝗡 <br>
        A student-centered publication contributes to social change through journalism and information technology.</p>
        </div>

<!-- Team -->
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
<div class="text-center pb-12">
    <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
        Check our awesome team members
    </h1>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
        <div class="mb-8">
            <img class="object-center object-cover rounded-full h-36 w-36" src="{{asset('img/aeron.jpg')}}" alt="team-1">
        </div>
        <div class="text-center">
            <p class="text-xl text-gray-700 font-bold mb-2">Aeron Dave Olano</p>
            <p class="text-base text-gray-400 font-normal">Aerondave.olano@cbsua.edu.ph</p>
        </div>
    </div>
    <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
        <div class="mb-8">
            <img class="object-center object-cover rounded-full h-36 w-36" src="{{asset('img/mey.jpeg')}}" alt="team-2">
        </div>
        <div class="text-center">
            <p class="text-xl text-gray-700 font-bold mb-2">Maria May Tarnate</p>
            <p class="text-base text-gray-400 font-normal">Mariamay.tarnate@cbsua.edu.ph</p>
        </div>
    </div>
    <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
        <div class="mb-8">
            <img class="object-center object-cover rounded-full h-36 w-36" src="{{asset('img/pim.jpeg')}}" alt="team-3">
        </div>
        <div class="text-center">
            <p class="text-xl text-gray-700 font-bold mb-2">Philip Christian Midem</p>
            <p class="text-base text-gray-400 font-normal">Philipchristian.midem@cbsua.edu.ph</p>
        </div>
    </div>
    <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
        <div class="mb-8">
            <img class="object-center object-cover rounded-full h-36 w-36" src="{{asset('img/bing.jpg')}}" alt="team-4">
        </div>
        <div class="text-center">
            <p class="text-xl text-gray-700 font-bold mb-2">Ma. Rosalea Ansano</p>
            <p class="text-base text-gray-400 font-normal">Mariarosalea.ansano@cbsua.edu.ph</p>
        </div>
    </div>

</div>
</div>

</x-guest-layout>
