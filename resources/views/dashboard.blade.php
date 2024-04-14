<x-app-layout>
    @auth

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-white leading-tight flex items-center space-x-2">
                Welcome, {{ Auth::user()->name }}! <!-- Adding welcome message and user's name -->
                <div class="flex-grow"></div>
                <script type='text/javascript' src='https://storage.ko-fi.com/cdn/widget/Widget_2.js'></script>
                <script type='text/javascript'>
                    kofiwidget2.init('Support The Jacks', '#f97718', 'D1D6WK9YP');
                    kofiwidget2.draw();
                </script>
            </h2>
        </x-slot>




        <div class="py-12 bg-white dark:bg-green-800">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
                <h2 class="text-2xl font-semibold mb-4">Welcome To "The Jacks", Irelands's No.1 Toilet Locator App Assesible
                    And Managed By The Irish Themselves!</h2>
            </div>




            <!-- Best Rated Toilets Section -->




            <!-- First section with full width -->

            <section class="bg-black dark:bg-green-800">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-2">
                        <div class="grid grid-cols-1 md:grid-cols-2 border-4 border-white">
                            <iframe
                                src="https://www.google.com/maps/d/u/0/embed?mid=1spU-V5yT2mrPfqBhfzLo3WoFjwisQ4Y&ehbc=2E312F&noprof=1"
                                width="620" height="460"></iframe>
                            <div class="m-12 text-white">
                                <h2 class="text-xl font-semibold mb-4">Our Purpose</h2>
                                <p>Welcome to The Jacks, your central hub for all things related to toilets. With our
                                    app, you
                                    can effortlessly find toilets, track their features, and contribute to building a
                                    comprehensive database of toilet facilities.</p>
                                <p>Support toilet accessibility initiatives by sharing information about accessible
                                    toilets,
                                    ratings, and reviews. Keep track of toilet locations, opening hours, and cleanliness
                                    status.
                                </p>
                                <p>The Jacks app was developed with the aim of improving toilet access and promoting
                                    better
                                    sanitation practices. Our mission is to provide a user-friendly platform for both
                                    toilet
                                    users and facility owners, making toilet-related information easily accessible to
                                    everyone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>






            <!-- YouTube Video Section -->

            <div class="py-12 bg-white dark:bg-green-800">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
                    <!-- Added 'flex justify-center' classes -->
                    <h2 class="text-2xl font-semibold mb-4">Videos</h2>
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2 md:grid-cols-2 gap-8">
                    <!-- First YouTube Video -->
                    <div class="bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4 border-4 border-white">
                        <div class="p-6 text-white">
                            <h2 class="text-2xl font-semibold mb-4">Dublin Cities Unused Toilets</h2>
                            <div class="aspect-w-16 aspect-h-9 ">
                                <iframe class="rounded-lg" width="540" height="300"
                                    src="https://irishtimes-prod.video.arc-cdn.net/irishtimes/2021/10/19/616ede2cc9e77c0007f6119b/main.mp4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="mt-4">
                                <h3 class="text-xl font-semibold mb-2">Dublin Cities Unused Toilets</h3>
                                <p>Up to the 1970s there were sixty staffed public toilets in Dublin. Today there are
                                    less than
                                    a handful public conveniences.</p>
                                <button
                                    class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded">
                                    <a href="https://www.irishtimes.com/news/environment/toilet-rollout-plan-for-dublin-city-to-involve-coffee-dock-operators-1.4528534?fbclid=IwAR1K3XfHDDP9HoCo1YhUvH-79kn6MP4bJJj7GFPoa1erdeBU_jPFgmSjAR4_aem_AWFWgSYX8SnH2QVhr7YWYl_fMZzI43SakR3XR_CijONDezm_l7qEvwAaiEhrVkSM1qd4K1kCdp6JKPz1-mk5Pyn7"
                                        target="_blank">Read</a>
                                </button>
                            </div>
                        </div>
                    </div>


                    <!-- Second YouTube Video -->

                    <div
                        class="bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4 border-4 border-white border-4 border-white">
                        <div class="p-6 text-white">
                            <h2 class="text-2xl font-semibold mb-4">Does Dublin have enough toilets?</h2>
                            <div class="aspect-w-16 aspect-h-9">
                                <iframe width="540" height="300"
                                    src="https://www.youtube.com/embed/sYJEJoZFF-Y?si=Rk4Dyy3Y6ypP3zx1&amp;start=1"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="mt-4">
                                <h3 class="text-xl font-semibold mb-2">Does Dublin city have enough public toilets?</h3>
                                <p>Dublin city is often criticised for its lack of facilities.One of the biggest strains
                                    on the
                                    city is the lack of public toilets. This was particularly made apparent during the
                                    Covid-19
                                    pandemic.However with the city busier than ever the conversation is cropping up more
                                    and
                                    more.</p>
                                <button
                                    class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded">
                                    <a href="https://www.dublinlive.ie/news/dublin-news/opinion-lack-public-toilets-dublin-20444316"
                                        target="_blank">Read</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class=" bg-white dark:bg-green-800">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
                    <h2 class="text-2xl font-semibold mb-4">Articles</h2>
                </div>

                <div class=" bg-white dark:bg-green-800">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="flex flex-wrap justify-between border-4 border-white">

                            <!-- First Image and Article Section -->
                            <div class="w-full md:w-1/4 lg:w-1/4 bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm ">
                                <div class="p-4 text-white">
                                    <h2 class="text-xl font-semibold mb-4">Featured Image</h2>
                                    <img src="https://www.irelandbeforeyoudie.com/wp-content/uploads/2024/02/ib4ud-collages-1-1536x864.png"
                                        alt="Featured Image" class="w-full rounded-lg">
                                </div>
                                <div class="p-4 text-white">
                                    <h3 class="text-lg font-semibold mb-2">Let’s talk about the LACK of public TOILETS
                                        in Dublin
                                    </h3>
                                    <p class="text-sm">Up until the 1970s, there were dozens of public toilets scattered
                                        around
                                        Dublin. Now, there are only just a couple.</p>
                                    <button
                                        class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded">
                                        <a href="https://www.irelandbeforeyoudie.com/lets-talk-about-the-lack-of-public-toilets-in-dublin/"
                                            target="_blank">Read</a>
                                    </button>
                                </div>
                            </div>

                            <!-- Second Image and Article Section -->
                            <div class="w-full md:w-1/2 lg:w-1/4 bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm ">
                                <div class="p-4 text-white">
                                    <h2 class="text-xl font-semibold mb-4">Featured Image</h2>
                                    <img src="https://www.irishtimes.com/resizer/gullXiU7hp8oYK7mlQ3btbCvIu4=/1600x0/filters:format(jpg):quality(70)/cloudfront-eu-central-1.images.arcpublishing.com/irishtimes/6EA2R5XPII3WV2RWKZ2DTDCXVM.jpg"
                                        alt="Featured Image" class="w-full rounded-lg">
                                </div>
                                <div class="p-4 text-white">
                                    <h3 class="text-lg font-semibold mb-2">‘Crazy’: Why would people object to public
                                        toilets in
                                        Dublin city?</h3>
                                    <p class="text-sm">First facility beside DCU opened last year but remaining five
                                        sites are still
                                        unused</p>
                                    <button
                                        class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded">
                                        <a href="https://www.irishtimes.com/ireland/dublin/2022/06/10/crazy-why-would-people-object-to-public-toilets-in-dublin-city/"
                                            target="_blank">Read</a>
                                    </button>
                                </div>
                            </div>

                            <!-- Third Image and Article Section -->
                            <div class="w-full md:w-1/2 lg:w-1/4 bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm ">
                                <div class="p-4 text-white">
                                    <h2 class="text-xl font-semibold mb-4">Featured Image</h2>
                                    <img src="https://focus.independent.ie/thumbor/zfIEPRLuTMcQlOubAINckWPFyJY=/0x0:630x405/fit-in/960x640/prod-mh-ireland/f3786a6d-86f0-4a7c-b61c-8d79607d677f/d9ceba98-2cca-4612-9060-14cb55d13268/f3786a6d-86f0-4a7c-b61c-8d79607d677f.jpg"
                                        alt="Featured Image" class="w-full rounded-lg">
                                </div>
                                <div class="p-4 text-white">
                                    <h3 class="text-lg font-semibold mb-2">Campaigners call for more public toilets in
                                        Dublin city
                                        centre</h3>
                                    <p class="text-sm">‘Not much has changed’ despite promises during pandemic</p>
                                    <button
                                        class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded">
                                        <a href="https://www.independent.ie/regionals/dublin/dublin-news/campaigners-call-for-more-public-toilets-in-dublin-city-centre/a1320410093.html"
                                            target="_blank">Read</a>
                                    </button>
                                </div>
                            </div>

                            <!-- Fourth Image and Article Section -->
                            <div class="w-full md:w-1/2 lg:w-1/4 bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm ">
                                <div class="p-4 text-white">
                                    <h2 class="text-xl font-semibold mb-4">Featured Image</h2>
                                    <img src="https://i.guim.co.uk/img/media/2078afc95f596a330a9ff9b050733a4cb777a93d/56_263_3443_2066/master/3443.jpg?width=620&dpr=2&s=none"
                                        alt="Featured Image" class="w-full rounded-lg">
                                </div>
                                <div class="p-4 text-white">
                                    <h3 class="text-lg font-semibold mb-2">Why lack of public toilets in Dublin City
                                        Centre is a
                                        female issue.</h3>
                                    <p class="text-sm">"Women lose hours of their lives waiting in queues for the
                                        toilet because of
                                        the failure of planning and design, it’s a man's world.</p>
                                    <button
                                        class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded">
                                        <a href="https://www.dublinlive.ie/news/dublin-news/opinion-lack-public-toilets-dublin-20444316"
                                            target="_blank">Read</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-12 bg-white dark:bg-green-800">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div
                                class="bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4 border-4 border-white">
                                <div class="p-6 text-white">
                                    <h2 class="text-2xl font-semibold mb-4">Contact Us</h2>
                                    <div class="py-6">
                                        <div class="max-w-lg mx-auto sm:px-6 lg:px-8">
                                            <div
                                                class="my-4 p-4 bg-white border border-green-300 shadow-sm sm:rounded-lg text-black">


                                                <form action="#" method="POST">
                                                    <div class="mb-4">
                                                        <label for="name"
                                                            class="block text-sm font-medium">Name</label>
                                                        <input type="text" name="name" id="name"
                                                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="email"
                                                            class="block text-sm font-medium">Email</label>
                                                        <input type="email" name="email" id="email"
                                                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="message"
                                                            class="block text-sm font-medium">Message</label>
                                                        <textarea name="message" id="message" rows="4"
                                                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"></textarea>
                                                    </div>
                                                    <div>
                                                        <button type="submit"
                                                            class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-white hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-500 focus:ring-opacity-50">Send
                                                            Message</button>
                                                    </div>
                                                    <script type='text/javascript' src='https://storage.ko-fi.com/cdn/widget/Widget_2.js'></script>
                                                    <script type='text/javascript'>
                                                        kofiwidget2.init('Support The Jacks', '#f97718', 'D1D6WK9YP');
                                                        kofiwidget2.draw();
                                                    </script>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                                <div class="p-6">
                                    <div
                                        class="bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4 border-4 border-white">
                                        <section class="py-12 bg-white dark:bg-green-800">
                                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                                <div class="flex justify-center">
                                                    <h2 class="text-2xl font-semibold mb-4">Most Recently Added Toilets
                                                    </h2>
                                                </div>
                                                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
                                                    @php
                                                        $recentToilets = \App\Models\Toilet::latest()->take(2)->get();
                                                    @endphp
                                                    @foreach ($recentToilets as $toilet)
                                                        <div
                                                            class="bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4  border-4 border-white">
                                                            <div class="p-4 text-white">
                                                                <h2 class="text-xl font-semibold mb-4">{{ $toilet->title }}
                                                                </h2>
                                                                <p>Created: {{ $toilet->created_at->format('d-m-Y') }}</p>
                                                                <div
                                                                    class="flex justify-center mb-4 border border-gray-400 rounded-md p-1 border-4 border-white">

                                                                    @if ($toilet->toilet_image)
                                                                        <img width="100%"
                                                                            src="{{ asset('storage/images/' . $toilet->toilet_image) }}" />
                                                                    @else
                                                                        <span>No Image Available</span>
                                                                    @endif
                                                                </div>



                                                                <!-- Add more details as needed -->
                                                                <button
                                                                    class=" bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded ">
                                                                    <a href="{{ route('user.toilets.show', $toilet->id) }}"
                                                                        target="_blank">View
                                                                        Details</a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>

                                <!-- Best Rated Toilets Section -->

                            </div>
                        </div>





                        <!-- Footer -->
                        <footer class="bg-black text-white">
                            <div
                                class="max-w-7xl mx-auto px-4 py-8 flex flex-col md:flex-row items-center justify-between">
                                <!-- Left Section: Logo and About Us -->
                                <div class="mb-4 md:mb-0">
                                    <img src="{{ asset('./images/logo.png') }}" alt="RaceHub Central"
                                        class="w-auto h-auto">
                                    <h2 class="text-xl font-semibold mb-2">About Us</h2>
                                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at
                                        volutpat leo.</p>
                                </div>

                                <!-- Middle Section: Quick Links -->
                                <div class="mb-4 md:mb-0">
                                    <h2 class="text-xl font-semibold mb-2">Quick Links</h2>
                                    <ul class="text-sm">
                                        <li><a href="#" class="hover:text-green-500">Home</a></li>
                                        <li><a href="#" class="hover:text-green-500">Services</a></li>
                                        <li><a href="#" class="hover:text-green-500">About Us</a></li>
                                        <li><a href="#" class="hover:text-green-500">Contact</a></li>
                                    </ul>
                                </div>

                                <!-- Right Section: Social Media Links -->
                                <div>
                                    <h2 class="text-xl font-semibold mb-2">Connect With Us</h2>
                                    <div class="flex space-x-4">
                                        <a href="#" class="text-sm text-gray-400 hover:text-green-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50"
                                                height="50" viewBox="0,0,256,256" style="fill:#000000;">
                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                    font-weight="none" font-size="none" text-anchor="none"
                                                    style="mix-blend-mode: normal">
                                                    <g transform="scale(5.12,5.12)">
                                                        <path
                                                            d="M16,3c-7.17,0 -13,5.83 -13,13v18c0,7.17 5.83,13 13,13h18c7.17,0 13,-5.83 13,-13v-18c0,-7.17 -5.83,-13 -13,-13zM37,11c1.1,0 2,0.9 2,2c0,1.1 -0.9,2 -2,2c-1.1,0 -2,-0.9 -2,-2c0,-1.1 0.9,-2 2,-2zM25,14c6.07,0 11,4.93 11,11c0,6.07 -4.93,11 -11,11c-6.07,0 -11,-4.93 -11,-11c0,-6.07 4.93,-11 11,-11zM25,16c-4.96,0 -9,4.04 -9,9c0,4.96 4.04,9 9,9c4.96,0 9,-4.04 9,-9c0,-4.96 -4.04,-9 -9,-9z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                        <a href="#" class="text-sm text-gray-400 hover:text-green-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50"
                                                height="50" viewBox="0,0,256,256" style="fill:#000000;">
                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                    font-weight="none" font-size="none" text-anchor="none"
                                                    style="mix-blend-mode: normal">
                                                    <g transform="scale(5.12,5.12)">
                                                        <path
                                                            d="M41,4h-32c-2.76,0 -5,2.24 -5,5v32c0,2.76 2.24,5 5,5h32c2.76,0 5,-2.24 5,-5v-32c0,-2.76 -2.24,-5 -5,-5zM37,19h-2c-2.14,0 -3,0.5 -3,2v3h5l-1,5h-4v15h-5v-15h-4v-5h4v-3c0,-4 2,-7 6,-7c2.9,0 4,1 4,1z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                        <a href="#" class="text-sm text-gray-400 hover:text-green-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50"
                                                height="50" viewBox="0,0,256,256" style="fill:#000000;">
                                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                    font-weight="none" font-size="none" text-anchor="none"
                                                    style="mix-blend-mode: normal">
                                                    <g transform="scale(5.12,5.12)">
                                                        <path
                                                            d="M12,23.403v-0.013v-13.001l-0.12,-0.089h-0.01l-2.73,-2.02c-1.67,-1.24 -4.05,-1.18 -5.53,0.28c-0.99,0.98 -1.61,2.34 -1.61,3.85v3.602zM38,23.39v0.013l10,-7.391v-3.602c0,-1.49 -0.6,-2.85 -1.58,-3.83c-1.46,-1.457 -3.765,-1.628 -5.424,-0.403l-2.876,2.123l-0.12,0.089zM14,24.868l10.406,7.692c0.353,0.261 0.836,0.261 1.189,0l10.405,-7.692v-13.001l-11,8.133l-11,-8.133zM38,25.889v15.111c0,0.552 0.448,1 1,1h6.5c1.381,0 2.5,-1.119 2.5,-2.5v-21.003zM12,25.889l-10,-7.392v21.003c0,1.381 1.119,2.5 2.5,2.5h6.5c0.552,0 1,-0.448 1,-1z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Bottom Section: Copyright -->
                            <div class="bg-black py-4">
                                <div class="max-w-7xl mx-auto text-center text-sm">&copy; 2024 Your Website. All rights
                                    reserved.</div>
                            </div>
                        </footer>

                    @endauth
</x-app-layout>
