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
                <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">History</span>
                </div>
                </li>
                </ol>
                </nav>

     <!-- history -->
     <div id="history" class="container mx-auto px-4 py-28">
        <div id="history" class="text-center pb-8">
            <h1 class="font-bold text-3xl md:text-4xl font-heading text-[#FE6034]">
                Office Management & Administration
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
                        src="img/history/history.png"
                        class="w-full align-middle rounded-lg">
                        <p class="text-md font-light leading-relaxed mt-4 mb-4 text-justify ml-10">
                            <i> Harris & Ewing, photographer. Office. 1935 or 1936. Library of Congress Prints and Photographs Division. </i>
                        </p>
                </div>
            </div>
            <div class="w-full px-4 mr-auto ml-auto">
                {{-- <h3 class="text-3xl mb-2 font-semibold leading-normal">
                    Working with us is a pleasure
                </h3> --}}
                <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-justify">
                    New equipment brings with it new ways of working and new ways of managing offices.
                    The second half of the 19th and early 20th centuries saw an increased need to preparing
                    people to work in a modern office environment, while also helping businesses modernize
                    themselves. Publishers like the Alexander Hamilton Institute which published their <i> Modern
                    Business series </i> increased publishing of a variety of material targeted to modern offices.
                    These were multi-volume sets covering all sorts of topics from banking, insurance, and
                    accounting to the more general volume <i> Organization and Management. </i>
                </p>
                <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-justify">
                    There was also a rise in professional schools teaching business skills through classes and
                    programs to teach skills like typing, shorthand, bookkeeping, etc. These programs, sometimes
                    referred to as "junior business training," taught all things useful for those who wanted to
                    work in offices and also published materials on office management. There were other sources
                    that were designed to be all-purpose office manuals that were quite popular. Individual
                    businesses, particularly large ones, likely had their own way of doing things, but researching
                    them can still be a useful source of information for those skills and procedures that were
                    considered essential. Technology in the second half of the 20th and early 21st century has made
                    changes to the workplace happen even faster. While newer trends like <i> hotelling and telework </i>
                    have history, there are related emerging concepts and trends like coworking or <i> coworking spaces. </i>
                    The rise of technology has also introduced new ways to work and introduced the concept of the
                    <i> digital nomad</i>—those people aided by the use of new technology, who can work from anywhere in
                    the world and are not tied to a physical office.
                </p>
                <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-justify">
                    This section of the guide is intended to provide some sources for researching the
                    changes in managing offices. It is not a complete accounting of resources related to
                    the history and future of office procedures and trends. To understand how things were
                     done during specific time periods, look for books written at that particular time period.
                     Beyond books, searching for articles in academic and trade publications will also offer
                      more specific insight into particular companies, places, and industries that may not be
                      as easily understood by looking at more general sources.
                </p>
                <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-justify">
                    Information and discussion on the office and future of work can happen in all
                    sorts of places. Look at associations and groups that have an interest in related
                    areas. For example, commercial real estate literature will focus on physical spaces
                    and needs, while associations like Society for Human Resource Management (SHRM) and
                    the American Psychological Association are interested in workplace issues and productivity.
                </p>
            </div>
        </div>
    </div>

</x-guest-layout>
