<x-app-layout>
    @auth

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight flex items-center space-x-2">
            Welcome!
            <div class="flex-grow">
            </div>
        </h2>

    </x-slot>
        <div class="py-12 bg-black dark:bg-green-800">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-2">
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1spU-V5yT2mrPfqBhfzLo3WoFjwisQ4Y&ehbc=2E312F&noprof=1" width="640" height="480"></iframe>
                    
                </div>
                
            </div>
        </div>

        <div class="py-12 bg-white dark:bg-green-800">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4">
                <div class="p-6 text-white">
                    <p>Welcome to The Jacks, your central hub for all things related to toilets. With our app, you can effortlessly find toilets, track their features, and contribute to building a comprehensive database of toilet facilities.</p>
                    <p>Support toilet accessibility initiatives by sharing information about accessible toilets, ratings, and reviews. Keep track of toilet locations, opening hours, and cleanliness status.</p>
                    <p>The Jacks app was developed with the aim of improving toilet access and promoting better sanitation practices. Our mission is to provide a user-friendly platform for both toilet users and facility owners, making toilet-related information easily accessible to everyone.</p>
                </div>
            </div>
        </div>
    </div>
    @endauth
</x-app-layout>
