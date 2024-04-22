@extends('layouts.admin')
@section('header')
@auth
        <h2 class="font-semibold text-xl text-white leading-tight flex items-center space-x-2">
            All Reviews
            <div class="flex-grow">
                <div class="flex justify-end items-center">
                    <input rating="text" id="search" placeholder="Search..." class="px-4 py-2 border rounded-md focus:border-green-500 text-black">
                    <button id="searchButton" class="ml-4 px-6 py-2 bg-green-600 text-white font-semibold rounded-md hover:bg-green-700">Search</button>
                </div>
            </div>
        </h2>

        @endsection

        @section('content')

    <div class=" pt-6 max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center"> <!-- Added 'flex justify-center' classes -->
        <h2 class="text-2xl font-semibold mb-4 ">
            Review Index
        </h2>
    </div>

    <div class="pt-6">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <ul role="list" class="divide-green-100 dark:divide-green-700">
                    <div class="relative overflow-x-auto shadow-md">
                        <table id="reviewTable" class="w-full text-sm text-left text-black dark:text-black">
                            <thead
                            class="text-lg text-green-700 bg-green-50 dark:bg-green-700 dark:text-green-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Id
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Toilet
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Rating
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        User
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Admin Actions
                                    </th>
                                   
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($reviews as $review)
                                    <tr class="bg-white dark:bg-white border-b border-gray-200 dark:border-gray-400">
                                        <td class="px-6 py-4 font-medium whitespace-nowrap">
                                            {{ $review->id}}
                                        </td>
                                        <td class="px-6 py-4 font-medium whitespace-nowrap">
                                            {{ $review->title  }}
                                        </td>
                                      
                                        <td class="px-6 py-4 font-medium whitespace-nowrap">
                                            {{ $review->toilet->title }}
                                        </td>
                                        <td class="px-6 py-4 font-medium whitespace-nowrap">
                                            {{ $review->rating }}
                                        </td>
                                        <td class="px-6 py-4 font-medium whitespace-nowrap">
                                            {{ $review->description }}
                                        </td>
                                        <td class="px-6 py-4 font-medium whitespace-nowrap">
                                            {{ $review->user->name }}
                                        </td>
                                        <td class="px-6 py-4 font-medium ">
                                            <div class="flex space-x-4">
                                                <a href="{{ route('admin.reviews.show', ['review' => $review->id]) }}" class="inline-block bg-green-500 dark:bg-green-600 text-white px-4 py-2 font-bold hover:bg-orange-600 dark:hover:bg-orange-700">Show</a>
                                                <a href="{{ route('admin.reviews.edit', $review->id) }}" class="inline-block bg-orange-500 dark:bg-orange-600 text-white px-4 py-2 font-bold hover:bg-orange-600 dark:hover:bg-orange-700">Edit</a>
                                                <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="inline-block bg-red-500 dark:bg-red-600 text-white px-4 py-2 font-bold hover:bg-red-600 dark:hover:bg-red-700" onclick="return confirm('Are you sure you want to delete this review?')">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-4">
                                            No reviews found!
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $reviews->links() }}
                    </div>
                </ul>
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
                            <p>We are a non-profit organisation to help our Irish citizens satisfy their sanitation needs through finding reviews around the country with ease.</p>
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

