
@extends('layouts.admin')
@section('header')
@auth
        

    
        <h2 class="font-semibold text-xl text-white leading-tight flex items-center space-x-2">
            Add A Toilet
            <div class="flex-grow">

            </div>

        </h2>
 


        @endsection

@section('content')
    <div class="py-12 bg-green-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <div class="p-6 bg-green-600 dark:bg-green-600 rounded-lg shadow-sm">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
                        <h2 class="text-2xl font-semibold mb-4">Our Map</h2>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=1spU-V5yT2mrPfqBhfzLo3WoFjwisQ4Y&ehbc=2E312F&noprof=1"
                        width="100%" height="500"></iframe>
                    <div class="p-6 text-white">
                        <h2 class="text-xl font-semibold mb-4">Announcement</h2>
                        <p>If you'd like to contribute and add toilets to our map, we encourage you to do so in a manner
                            that is appropriate and respectful. Please ensure that all inputs, including descriptions
                            and images, adhere to community guidelines and are suitable for a general audience. Let's
                            keep our map inclusive and welcoming for everyone!</p>
                    </div>
                </div>

                <div class="bg-green-600 dark:bg-green-600 rounded-lg shadow-sm">
                    <div class="p-6">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
                            <h2 class="text-2xl font-semibold mb-4">Add A Toilet To The Map</h2>
                        </div>

                        <div class=" text-black">
                            <div class="max-w-lg mx-auto sm:px-6 lg:px-8">
                                <div class=" p-4 bg-white border border-green-300 shadow-sm sm:rounded-lg">
                                    <form enctype="multipart/form-data" action="{{ route('admin.toilets.store') }}"
                                        method="POST">
                                        @csrf
                                        @method('POST')

                                        <div class="mb-4">
                                            <label for="WKT" class="font-bold">Enter A POINT With Latitude And
                                                Longitude</label>
                                            <input type="text" name="WKT" id="WKT"
                                                placeholder="POINT (-6.263287000000001 53.343151)"
                                                class="w-full px-4 py-2 border rounded-md focus:border-green-500"
                                                style="color: black;">
                                            @error('WKT')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="mb-4">
                                            <label for="title" class="font-bold">Title</label>
                                            <input type="text" name="title" id="title"
                                                placeholder="Enter A Title"
                                                class="w-full px-4 py-2 border rounded-md focus:border-green-500"
                                                style="color: black;">
                                            @error('title')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="type" class="font-bold">Type</label>
                                            <select name="type" id="type"
                                                class="w-full px-4 py-2 border rounded-md focus:border-green-500"
                                                style="color: black;">
                                                <option value="Public Toilet">Public Toilet</option>
                                                <option value="Private Toilet">Private Toilet</option>
                                            </select>
                                            @error('type')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="description" class="font-bold">Description</label>
                                            <input type="text" name="description" id="description"
                                                placeholder="Enter description"
                                                class="w-full px-4 py-2 border rounded-md focus:border-green-500"
                                                style="color: black;">
                                            @error('description')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="location" class="font-bold">Location</label>
                                            <input type="text" name="location" id="location"
                                                placeholder="Enter Location"
                                                class="w-full px-4 py-2 border rounded-md focus:border-green-500"
                                                style="color: black;">
                                            @error('location')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="accessibility" class="font-bold">Accessibility</label>
                                            <input type="text" name="accessibility" id="accessibility"
                                                placeholder="Enter Accessibility"
                                                class="w-full px-4 py-2 border rounded-md focus:border-green-500"
                                                style="color: black;">
                                            @error('accessibility')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="opening_hours" class="font-bold">Opening Hours</label>
                                            <input type="text" name="opening_hours" id="opening_hours"
                                                placeholder="Enter Opening Hours"
                                                class="w-full px-4 py-2 border rounded-md focus:border-green-500"
                                                style="color: black;">
                                            @error('opening_hours')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="toilet_image" class="font-bold">Choose A Cover Image For The
                                                Toilet:</label>
                                            <input type="file" name="toilet_image" class="w-full">
                                            @error('toilet_image')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <button
                                            class="inline-block bg-orange-500 dark:bg-orange-600 text-white px-4 py-2 font-bold hover:bg-orange-600 dark:hover:bg-orange-700"
                                            type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="p-6 bg-green-600 dark:bg-green-600 rounded-lg shadow-sm col-span-full">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="flex justify-center">
                            <h2 class="text-2xl font-semibold mb-4">Most Recently Added Toilets</h2>
                        </div>
                        <div class="grid grid-cols-4 md:grid-cols-4 gap-4">
                            @php
                                $recentToilets = \App\Models\Toilet::latest()->take(4)->get();
                            @endphp
                            @foreach ($recentToilets as $toilet)
                                <div class="bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-4 border-4 border-white">
                                    <div class="p-4 text-white">
                                        <h2 class="text-lg font-semibold mb-2">{{ $toilet->title }}</h2>
                                        <p>Created: {{ $toilet->created_at->format('d-m-Y') }}</p>
                                        <div class="flex justify-center mb-2 border border-gray-400 rounded-md p-1 border-4 border-white"
                                        style="background-image: url('{{ $toilet->toilet_image ? asset('storage/images/' . $toilet->toilet_image) : '' }}');
                                               background-size: cover;
                                               background-position: center;
                                               width: 100%;
                                               height: 200px;">
                                       <!-- Empty div for background image -->
                                       @if (!$toilet->toilet_image)
                                           <span>No Image Available</span>
                                       @endif
                                   </div>
                                   
                                        <button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded">
                                            <a href="{{ route('admin.toilets.show', $toilet->id) }}" target="_blank">View Details</a>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="bg-black text-white">
        <div class="max-w-7xl mx-auto px-4 py-6 flex flex-col md:flex-row items-center justify-between">
            <!-- Left Section: Logo and About Us -->
            <div class=" md:mb-0">
                <img src="{{ asset('./images/logo.png') }}" alt="RaceHub Central" class="w-auto h-auto">
                <div class="text-sm w-1/2 py-2">
                    <p>We are a non-profit organisation to help our Irish citizens satisfy their sanitation needs through finding toilets around the country with ease.</p>
                </div>
            </div>
            

            <!-- Right Section: Social Media Links -->
            <div>
                <h2 class="text-xl font-semibold mb-2 ">Connect With Us</h2>
                <div class="flex space-x-4">
                    <a href="#" class="text-sm text-gray-400 hover:text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                            viewBox="0,0,256,256" style="fill:#000000;">
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
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                            viewBox="0,0,256,256" style="fill:#000000;">
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
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                            viewBox="0,0,256,256" style="fill:#000000;">
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
        <div class="bg-black py-2">
            <div class="max-w-7xl mx-auto text-center text-sm">&copy; 2024 The Jacks. All rights
                reserved.</div>
        </div>
    </footer>
    @endauth
    @endsection
