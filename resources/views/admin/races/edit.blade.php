@extends('layouts.admin')
@section('header')
        <h2 class="font-semibold text-xl text-white leading-tight flex items-center space-x-2">
            Edit Race Details
            <span class="icon-padding">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="w-6 h-6 ml-2" viewBox="0 0 1792 1792">
                    <path d="M832 1000V808q-181 16-384 117v185q205-96 384-110zm0-418V385q-172 8-384 126v189q215-111 384-118zm832 463V861q-235 116-384 71V708q-20-6-39-15-5-3-33-17t-34.5-17-31.5-15-34.5-15.5-32.5-13-36-12.5-35-8.5-39.5-7.5-39.5-4-44-2q-23 0-49 3v222h19q102 0 192.5 29t197.5 82q19 9 39 15v188q42 17 91 17 120 0 293-92zm0-427V429q-169 91-306 91-45 0-78-8v196q148 42 384-90zM320 256q0 35-17.5 64T256 366v1266q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23V366q-29-17-46.5-46T64 256q0-53 37.5-90.5T192 128t90.5 37.5T320 256zm1472 64v763q0 39-35 57-10 5-17 9-218 116-369 116-88 0-158-35l-28-14q-64-33-99-48t-91-29-114-14q-102 0-235.5 44T417 1271q-15 9-33 9-16 0-32-8-32-19-32-56V474q0-35 31-55 35-21 78.5-42.5t114-52T696 275t155-19q112 0 209 31t209 86q38 19 89 19 122 0 310-112 22-12 31-17 31-16 62 2 31 20 31 55z" fill="#ffffff"></path>
                </svg>
            </span>

            <div class="flex-grow"></div>

            <div class="flex justify-end">
                <a href="{{ route('admin.races.show', $race->id) }}" class="inline-block bg-yellow-500 dark:bg-yellow-600 text-white px-4 py-2 font-bold hover:bg-yellow-600 dark:hover:bg-yellow-700">Back</a>
            </div>
        </h2>
    @endsection

   @section('content')
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.races.update', $race->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="title" style="color: black;" class="font-bold">Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $race->title) }}" placeholder="Enter Title" class="text-black w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-red-500 text-black">

                        @error('title')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label style="color: black;" class="font-bold" for="location">Location</label>
                        <input type="text" name="location" id="location" value="{{ old('location', $race->location) }}" placeholder="Enter Location" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-red-500" style="color: black;">
                        @error('location')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label style="color: black;" class="font-bold" for="difficulty">Difficulty</label>
                        <select name="difficulty" id="difficulty" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-red-500" style="color: black;">
                            <option value="" selected disabled>Select Difficulty</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Expert">Expert</option>
                        </select>
                        @error('difficulty')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="start_date"  style="color: black" class="font-bold">Start Date</label>
                        <input type="date" name="start_date" id="start_date" style="color: black;">
                        @error('start_date')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    

                    <div class="mb-4">
                        <label style="color: black;" class="font-bold" for="max_capacity">Max Capacity</label>
                        <input type="text" name="max_capacity" id="max_capacity" value="{{ old('max_capacity', $race->max_capacity) }}" placeholder="Enter Max Capacity" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-red-500" style="color: black;">
                        @error('max_capacity')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex justify-between">
                        <form action="{{ route('admin.races.update', $race->id) }}" method="POST">
                            @csrf
                        <button type="submit" class="inline-block bg-red-600 text-white px-4 py-2 font-bold hover:bg-red-800 mb-4">Submit</button>
                        </form>
                
                        <form action="{{ route('admin.races.destroy', $race->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                
                            <button type="submit" class="inline-block bg-red-600 dark:bg-red-700 text-white px-4 py-2 font-bold hover:bg-red-800 dark:hover:bg-red-900 mb-4">Delete</button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
