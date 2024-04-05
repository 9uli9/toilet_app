<x-app-layout>
    @auth

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight flex items-center space-x-2">
            Welcome!
            <div class="flex-grow">
            </div>
        </h2>
    </x-slot>

    <div class="py-12 bg-white dark:bg-green-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4">
                <div class="p-6 text-white">
                    <p>Welcome to The Jacks, your central hub for all things related to toilets. With our app, you can effortlessly find toilets, track their features, and contribute to building a comprehensive database of toilet facilities.</p>
                    <p>Support toilet accessibility initiatives by sharing information about accessible toilets, ratings, and reviews. Keep track of toilet locations, opening hours, and cleanliness status.</p>
                    <p>The Jacks app was developed with the aim of improving toilet access and promoting better sanitation practices. Our mission is to provide a user-friendly platform for both toilet users and facility owners, making toilet-related information easily accessible to everyone.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- First section with full width -->
    <div class="py-12 bg-black dark:bg-green-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-2">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1spU-V5yT2mrPfqBhfzLo3WoFjwisQ4Y&ehbc=2E312F&noprof=1" width="640" height="480"></iframe>
            </div>
        </div>
    </div>

<!-- YouTube Video Section -->

<div class="py-12 bg-white dark:bg-green-800">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- First YouTube Video -->
        <div class="bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4">
            <div class="p-6 text-white">
                <h2 class="text-2xl font-semibold mb-4">Watch Our First Video</h2>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe class="rounded-lg" width="540" height="300" src="https://www.youtube.com/embed/YOUR_FIRST_VIDEO_ID" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="mt-4">
                    <h3 class="text-xl font-semibold mb-2">Article Title 1</h3>
                    <p>This is a brief description of the article related to the first video. You can add more details here.</p>
                    <a href="#" class="text-green-500 hover:underline">Read More</a>
                </div>
            </div>
        </div>

        <!-- Second YouTube Video -->
        <div class="bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4">
            <div class="p-6 text-white">
                <h2 class="text-2xl font-semibold mb-4">Watch Our Second Video</h2>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe class="rounded-lg" width="540" height="300" src="https://www.youtube.com/embed/YOUR_SECOND_VIDEO_ID" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="mt-4">
                    <h3 class="text-xl font-semibold mb-2">Article Title 2</h3>
                    <p>This is a brief description of the article related to the second video. You can add more details here.</p>
                    <a href="#" class="text-green-500 hover:underline">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="py-12 bg-white dark:bg-green-800">
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2">
    <!-- First half-width section -->
    
        <div class="max-w-sm mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4">
                <div class="p-6 text-white">
                    <h2 class="text-2xl font-semibold mb-4">First Section</h2>
                    <p>This is the first section with a smaller width.</p>
                </div>
            </div>
        </div>
    

    <!-- Second half-width section -->
    
        <div class="max-w-sm mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4">
                <div class="p-6 text-white">
                    <h2 class="text-2xl font-semibold mb-4">Second Section</h2>
                    <p>This is the second section with a smaller width.</p>
                </div>
            </div>
        </div>
    

    <!-- Third half-width section -->
    
        <div class="max-w-sm mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4">
                <div class="p-6 text-white">
                    <h2 class="text-2xl font-semibold mb-4">Third Section</h2>
                    <p>This is the third section with a smaller width.</p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Image and Article Sections -->
<div class="py-12 bg-white dark:bg-green-800">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-between">
            <!-- First Image and Article Section -->
            <div class="w-full md:w-1/2 lg:w-1/4 bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4">
                <div class="p-4 text-white">
                    <h2 class="text-xl font-semibold mb-4">Featured Image</h2>
                    <img src="https://via.placeholder.com/800x400" alt="Featured Image" class="w-full rounded-lg">
                </div>
                <div class="p-4 text-white">
                    <h2 class="text-xl font-semibold mb-4">Featured Article</h2>
                    <h3 class="text-lg font-semibold mb-2">Article Title</h3>
                    <p class="text-sm">This is a brief description of the article. You can add more details here.</p>
                    <a href="#" class="text-green-500 hover:underline text-sm">Read More</a>
                </div>
            </div>

            <!-- Second Image and Article Section -->
            <div class="w-full md:w-1/2 lg:w-1/4 bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4">
                <div class="p-4 text-white">
                    <h2 class="text-xl font-semibold mb-4">Featured Image</h2>
                    <img src="https://via.placeholder.com/800x400" alt="Featured Image" class="w-full rounded-lg">
                </div>
                <div class="p-4 text-white">
                    <h2 class="text-xl font-semibold mb-4">Featured Article</h2>
                    <h3 class="text-lg font-semibold mb-2">Article Title</h3>
                    <p class="text-sm">This is a brief description of the article. You can add more details here.</p>
                    <a href="#" class="text-green-500 hover:underline text-sm">Read More</a>
                </div>
            </div>

            <!-- Third Image and Article Section -->
            <div class="w-full md:w-1/2 lg:w-1/4 bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4">
                <div class="p-4 text-white">
                    <h2 class="text-xl font-semibold mb-4">Featured Image</h2>
                    <img src="https://via.placeholder.com/800x400" alt="Featured Image" class="w-full rounded-lg">
                </div>
                <div class="p-4 text-white">
                    <h2 class="text-xl font-semibold mb-4">Featured Article</h2>
                    <h3 class="text-lg font-semibold mb-2">Article Title</h3>
                    <p class="text-sm">This is a brief description of the article. You can add more details here.</p>
                    <a href="#" class="text-green-500 hover:underline text-sm">Read More</a>
                </div>
            </div>

            <!-- Fourth Image and Article Section -->
            <div class="w-full md:w-1/2 lg:w-1/4 bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4">
                <div class="p-4 text-white">
                    <h2 class="text-xl font-semibold mb-4">Featured Image</h2>
                    <img src="https://via.placeholder.com/800x400" alt="Featured Image" class="w-full rounded-lg">
                </div>
                <div class="p-4 text-white">
                    <h2 class="text-xl font-semibold mb-4">Featured Article</h2>
                    <h3 class="text-lg font-semibold mb-2">Article Title</h3>
                    <p class="text-sm">This is a brief description of the article. You can add more details here.</p>
                    <a href="#" class="text-green-500 hover:underline text-sm">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Contact Us Form -->
    <div class="py-12 bg-white dark:bg-green-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4">
                <div class="p-6 text-white">
                    <h2 class="text-2xl font-semibold mb-4">Contact Us</h2>
                    <form action="#" method="POST">
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium">Name</label>
                            <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium">Email</label>
                            <input type="email" name="email" id="email" class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-sm font-medium">Message</label>
                            <textarea name="message" id="message" rows="4" class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-white hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-500 focus:ring-opacity-50">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black text-white">
        <div class="max-w-7xl mx-auto px-4 py-8 flex flex-col md:flex-row items-center justify-between">
            <!-- Left Section: Logo and About Us -->
            <div class="mb-4 md:mb-0">
                <h2 class="text-xl font-semibold mb-2">About Us</h2>
                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at volutpat leo.</p>
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
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <!-- Insert your social media icon here -->
                        </svg>
                    </a>
                    <a href="#" class="text-sm text-gray-400 hover:text-green-500">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <!-- Insert your social media icon here -->
                        </svg>
                    </a>
                    <a href="#" class="text-sm text-gray-400 hover:text-green-500">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <!-- Insert your social media icon here -->
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Section: Copyright -->
        <div class="bg-black py-4">
            <div class="max-w-7xl mx-auto text-center text-sm">&copy; 2024 Your Website. All rights reserved.</div>
        </div>
    </footer>

    @endauth
</x-app-layout>
