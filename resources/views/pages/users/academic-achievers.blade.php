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
        <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">Academic Achievers</span>
        </div>
        </li>
        </ol>
        </nav>


        <div class="py-6 flex flex-col justify-center sm:py-12">
            <div class="text-center pb-12">
                <h1 class="font-bold text-3xl md:text-4xl font-heading text-[#FE6034]">
                    Academic Achievers
                </h1>
            </div>
            <section class="py-20 mx-5 md:mx-32 space-y-8 sm:py-20">
                <div class="container flex flex-row items-stretch justify-center w-full" x-data="{ tab: 1 }">
                    <div class="flex flex-col justify-start w-1/4 space-y-4">
                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    1,
                                ' transform -translate-x-2': tab !== 1
                            }"
                            href="#" @click.prevent="tab = 1">
                            2019
                        </a>
                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    2,
                                ' transform -translate-x-2': tab !== 2
                            }"
                            href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                            2020
                        </a>
                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    4,
                                ' transform -translate-x-2': tab !== 4
                            }"
                            href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                            2020
                        </a>
                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    5,
                                ' transform -translate-x-2': tab !== 5
                            }"
                            href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                            2021
                        </a>
                    </div>
                    <div class="w-3/4">
                        <div class="space-y-6" x-show="tab === 1">
                            <div class="holder mx-auto w-10/12 gap-20 grid sm:grid-cols-1 md:grid-cols-2">
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/1. GILYN CALIMOSO.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">1. GILYN CALIMOSO</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/2. ADRIAN BAYLOSIS.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">2. ADRIAN BAYLOSIS</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/3. BEJIE JUSAYAN.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">3. BEJIE JUSAYAN</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/3. JEAN DE LUNA.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">3. JEAN DE LUNA</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/4. AILEEN GRACE TUTOPAN.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">4. AILEEN GRACE TUTOPAN</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/5. ALLAISA MAE SANCHEZ.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">5. ALLAISA MAE SANCHEZ</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/5. ANN THONIE GONZALES.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">5. ANN THONIE GONZALES</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/6. CARYL DONATO.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">6. CARYL DONATO</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/6. MIKA DELOS SANTOS.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">6. MIKA DELOS SANTOS</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/7. ANNA MARIE NIEGOS.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">7. ANNA MARIE NIEGOS</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/7. APPLE JOY TENORIO.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">7. APPLE JOY TENORIO</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/7. CRYSTAL MARIE LUCENECIO.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">7. CRYSTAL MARIE LUCENECIO</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/7. HAZEL EYANA.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">7. HAZEL EYANA</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/7. JESSA MAE GAMBA.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">7. JESSA MAE GAMBA</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/7. MARIAN JANE FERNANDEZ.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">7. MARIAN JANE FERNANDEZ</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/7. ROMEO ESTRADA JR.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">7. ROMEO ESTRADA JR </p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/8. CHRISTINE BARROGA.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">8. CHRISTINE BARROGA</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/8. ELLYN ESPAÑO.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">8. ELLYN ESPAÑO</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/9 JOANA MARIA BALUTE.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">9 JOANA MARIA BALUTE</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/9. ANGELICA PARAISO.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">9. ANGELICA PARAISO</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/9. KAYELYN DATU.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">9. KAYELYN DATU</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/9. MA.ROSEMARIE TUSCANO.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">9. MA.ROSEMARIE TUSCANO</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/9. MARJORIE RAMOS.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">9. MARJORIE RAMOS</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/9. REI RICAFRENTE.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">9. REI RICAFRENTE</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/9. RHOANNE BOMBASE.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">9. RHOANNE BOMBASE</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/10. ANGELICA AZNAR.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">10. ANGELICA AZNAR</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/10. CHARLOTTE VILLANUEVA.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">10. CHARLOTTE VILLANUEVA</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/10. LEA BAUTISTA.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">10. LEA BAUTISTA</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/10. MARY ANGELA SAN AGUSTIN.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">10. MARY ANGELA SAN AGUSTIN</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/10.CLARISSA MAE GADOGDOG.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">10.CLARISSA MAE GADOGDOG</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/1st/10.MARJORIE FULGENCIO.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">10.MARJORIE FULGENCIO</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="space-y-6" x-show="tab === 2">
                            <div class="holder mx-auto w-10/12 gap-20 grid sm:grid-cols-1 md:grid-cols-2">
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/2nd/Rank 1 John Lennox Del Monte.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 1 John Lennox Del Monte</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/2nd/Rank 2 Andrea Amor Carniyan.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 2 Andrea Amor Carniyan</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/2nd/Rank 3 Anne Jermaine Bernardo.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 3 Anne Jermaine Bernardo</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/2nd/Rank 3 France Vincent Pagaduan.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 3 France Vincent Pagaduan</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/2nd/Rank 4 Angela Gridel Saladino.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 4 Angela Gridel Saladino</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/2nd/Rank 5 Andrea Claustro.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 5 Andrea Claustro</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/2nd/Rank 6 Mark Emerzon Capiz.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 6 Mark Emerzon Capiz</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/2nd/Rank 7 Millecent Charis Samonte.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 7 Millecent Charis Samonte</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/2nd/Rank 8 Ma. Mariel Sola.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 8 Ma. Mariel Sola</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/2nd/Rank 9 Dave Dacanay.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 9 Dave Dacanay</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/2nd/Rank 9 Rena Llenas.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 9 Rena Llenas</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/2nd/Rank 10 Norlyn Nacion.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 10 Norlyn Nacion</p>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="space-y-6" x-show="tab === 4">
                            <div class="holder mx-auto w-10/12 gap-20 grid sm:grid-cols-1 md:grid-cols-2">
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/1. DIANA TRINIDAD.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">1. DIANA TRINIDAD</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/1. GERLYN-FE MONTILLA.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">1. GERLYN-FE MONTILLA</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/2. XYLEY MAE VILLAROSA.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">2. XYLEY MAE VILLAROSA</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/3. APRIL ROSE DELA SALA.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">3. APRIL ROSE DELA SALA</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/4. JENEVIEVE GAJANO.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">4. JENEVIEVE GAJANO</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/5. XYRENE JOICE FLORENCIO.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">5. XYRENE JOICE FLORENCIO</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/6. JEANNETE KIRSTEN MATEO.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">6. JEANNETE KIRSTEN MATEO</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/6. MARIFE PAMEN.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">6. MARIFE PAMEN</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/7. JAMES MOSCOSA.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">7. JAMES MOSCOSA</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/7. PHOL BRYAN PAMOR.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">7. PHOL BRYAN PAMOR</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/7. RACHEL AQUINO.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">7. RACHEL AQUINO</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/7. RICA MAE BUQUING.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">7. RICA MAE BUQUING</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/8. NICOLE TOTANIS.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">8. NICOLE TOTANIS</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/9. MARVIN PASTOLERO.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">9. MARVIN PASTOLERO</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/10. CHARLENE KAYE ACIBAR.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">10. CHARLENE KAYE ACIBAR</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/3rd/10. JEREMIAH FERNANDO.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">10. JEREMIAH FERNANDO</p>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="space-y-6" x-show="tab === 5">
                            <div class="holder mx-auto w-10/12 gap-20 grid sm:grid-cols-1 md:grid-cols-2">
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/4th/Rank 1 Jobelle P. Quirante.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 1 Jobelle P. Quirante</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/4th/Rank 2 Clarissa C. Verdejo.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 2 Clarissa C. Verdejo</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/4th/Rank 2 Mary Grace N. Borres.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 2 Mary Grace N. Borres</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/4th/Rank 2 Tyan H. Ng.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 2 Tyan H. Ng</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/4th/Rank 3 Shirel M. Tapacion.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 3 Shirel M. Tapacion</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/4th/Rank 4 Mark Peter Buban.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 4 Mark Peter Buban</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/4th/Rank 4 Mayann Z. De Lima.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 4 Mayann Z. De Lima</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/4th/Rank 5 Marie Ann D. Marcelo.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 5 Marie Ann D. Marcelo</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/4th/Rank 6 Rheya Mae C. Naval.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 6 Rheya Mae C. Naval</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/4th/Rank 7 Jeralyn C. Lopez.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 7 Jeralyn C. Lopez</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/4th/Rank 7 Rachelle Mae R. Aday.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 7 Rachelle Mae R. Aday</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/4th/Rank 8 Arianne T. Matela.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 8 Arianne T. Matela</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/4th/Rank 9 Angelica F. Magdaraog.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 9 Angelica F. Magdaraog</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/4th/Rank 9 Jomarie G. Yurtas.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 9 Jomarie G. Yurtas</p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                                        <div class="mb-8">
                                            <img class="object-center object-cover h-56 w-56"
                                                src="img/achievers/4th/Rank 10 Rose Ann A. Gonzales.jpg"
                                                alt="photo">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">Rank 10 Rose Ann A. Gonzales</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

</x-guest-layout>
