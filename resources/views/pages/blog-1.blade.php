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
    <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">Article 1</span>
    </div>
    </li>
    </ol>
    </nav>

    <main class="mt-10">

      <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
        <div class="absolute left-0 bottom-0 w-full h-full z-10"
          style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
        <img src="img/blog/blog-1.jpg" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
        <div class="p-4 absolute bottom-0 left-0 z-20">
        </div>
      </div>

      <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
        <h2 class="text-4xl font-semibold pb-12 leading-tight">
            INTERACTIVE MANIPULATIVE SKILLS, SUPPORTING EACH STUDENTS TO BE
            CONFIDENT AND PROUD OF THEIR OWN TALENT
          </h2>
        <p class="pb-6">“One of the biggest problems in the world is that, so many doesn’t believe they have great talents and can change their life” – Hanna Anerod. At the present generation, many young people are fully convinced they were born with no talent, having this mentality limits themselves to achieve great things in life. PASOA organization believes that people only need encouragement to push them out of their comfort zone and explore more of themselves in order to discover their own capabilities.</p>

        <p class="pb-6">The Philippine Association of Office Administration (PASOA) yearly conducts Manipulative Skills competition to display student’s talent when it comes to dancing, singing, acting, and also skills like speed typing and shorthand writing. It is one of PASOA's most anticipated events, as every student wishes to express their passion. The event of pandemic limits other extra-curricular activities of school but it does not prevent this event from taking place. </p>

        <p class="pb-6">The interactive manipulative skills held on February 15, 2022 was done virtually. It was a successful event to be held online for the first time. The event includes Mr. and Ms. Executives, spoken poetry, singing contest, dance contest, mobile legend tournament, poster and slogan making, and chess competition. This event also allows students to compete in major BSOAD subjects such as stenography dictation and quiz bee, speed typing, office procedures quiz bee, accounting quiz bee, computer quiz bee, and web design making contest.</p>

        <div class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded">
            Each section has a representative for each contest making this event more of a teamwork rather than an individual competition. Students who did not join the competition still show support for their classmates, and make a conscious effort to win their candidate.
        </div>

        <div class="mb-4 md:mb-6 w-full max-w-screen-md mx-auto relative" style="height: 56em;">
            <img src="img/blog/blog-1.jpg" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
            <div class="p-4 absolute bottom-0 left-0 z-20">
            </div>
          </div>

        {{-- <h2 class="text-2xl text-gray-800 font-semibold mb-4 mt-4">Uneasy barton seeing remark happen his has</h2> --}}

        <p class="pb-6">Mr. and Ms. Executive competition is the most anticipated competition in this event. Students were able to express their love of fashion, dressing in executive and casual outfits and making photo shoots displaying their fashion and showcasing their talents are students’ most awaited moments. Spoken word poetry allows students to express their voices and writing skills. Singing and Dance Contests recognized students who have a talent in singing and dancing that helps them to boost their confidence. Poster and Slogan Making Contests help students to show their creativity in their crafts. Chess Competition helps to develop their logic, critical thinking, and problem-solving skills. Mobile Legend tournament activates leadership and teamwork of the contestants although this one is a mobile game, it can still be utilized to teach young people how to work in a team. </p>

        <p class="pb-6">Accounting, Stenography, Office procedure, and Computer quiz bee allow students to recall their previous lesson and exhibit their knowledge on the subject. Students who will rank 1st, 2nd, and 3rd place in every competition will be awarded with certificates and medals. This type of event is extremely beneficial for the students for it enhances their talent and skills.</p>

      </div>
    </main>
    <!-- main ends here -->

  </div>

  <footer class="relative bg-[#292A42] pt-8 pb-6">
    <div class="max-w-2xl mx-auto py-10">

        <div class="flex justify-center items-center m-auto py-4">
            <div class="flex justify-between gap-6">
                <img class="w-20" src="img/ucc.png" alt="ucc-logo">
                <img class="w-20" src="img/course.png" alt="ucc-logo">
            </div>
        </div>

        <div class="text-center">
            <h3 class="text-3xl font-semibold leading-normal mb-3 text-white"> Ready to get started at E-Portal?
            </h3>
            <p class="text-white"> Stay updated. All day, every day. </p>
        </div>
        <hr class="border-white mt-16" />
        <div class="mt-16 flex flex-col text-center text-sm text-white">
            <p class="order-2 md:order-1 mt-8 md:mt-0"> &copy; Educational Portal, <span id="date"></span>. </p>
        </div>
    </div>
</footer>

<script>
    const d = new Date();
    document.getElementById("date").innerHTML = d.getFullYear();
</script>
</x-guest-layout>
