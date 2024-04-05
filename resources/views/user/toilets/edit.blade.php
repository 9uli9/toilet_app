<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight flex items-center space-x-2">
            Edit A Toilet On The Map
            <div class="flex-grow"></div>
            <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                <a href="{{ route('user.toilets.show', $toilet->id) }}"
                    class="inline-block bg-orange-500 dark:bg-orange-600 text-white px-4 py-2 font-bold hover:bg-orange-600 dark:hover:bg-orange-700">Back</a>
            </td>
        </h2>
    </x-slot>

    @section('content')

        <div class="py-12 bg-black dark:bg-green-800">
            <diSearch For Toilets By Locationv class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-2">
                    <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=1spU-V5yT2mrPfqBhfzLo3WoFjwisQ4Y&ehbc=2E312F&noprof=1"
                        width="500" height="500"></iframe>
                </div>

                <div class="py-6">
                    <div class="max-w-lg mx-auto sm:px-6 lg:px-8">
                        <div class="my-4 p-4 bg-white border border-green-300 shadow-sm sm:rounded-lg">
                            <form enctype="multipart/form-data" action="{{ route('user.toilets.update', $toilet->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-4">
                                    <label for="point" style="color: black;" class="font-bold">Enter A Point With
                                        Latitude And Longitude</label>
                                    <input type="text" name="point" id="point"
                                        value="{{ old('point', $toilet->point) }}"
                                        placeholder="POINT (-6.263287000000001 53.343151)"
                                        class="w-full px-4 py-2 border rounded-md focus:border-green-500"
                                        style="color: black;">
                                    @error('point')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="mb-4">
                                    <label for="title" style="color: black;" class="font-bold">Title</label>
                                    <input type="text" name="title" id="title"
                                    value="{{ old('title', $toilet->title) }}"
                                     placeholder="Enter A Title"
                                        class="w-full px-4 py-2 border  rounded-md  focus:border-green-500"
                                        style="color: black;">

                                    @error('title')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label style="color: black;" class="font-bold" for="type">Type</label>
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
                                    <label style="color: black;" class="font-bold" for="description">Description</label>
                                    <input type="text" name="description" id="description"
                                    value="{{ old('description', $toilet->description) }}"
                                        placeholder="Enter description"
                                        class="w-full px-4 py-2 border  rounded-md  focus:border-green-500"
                                        style="color: black;">
                                    @error('description')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="location" class="font-bold" style="color: black;">Location</label>
                                    <input type="text" name="location" id="location"
                                    value="{{ old('location', $toilet->location) }}"
                                     placeholder="Enter Location"
                                        class="w-full px-4 py-2 border  rounded-md  focus:border-green-500"
                                        style="color: black;">
                                    @error('location')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="accessibility" class="font-bold" style="color: black;">Accessibility</label>
                                    <input type="text" name="accessibility" id="accessibility"
                                    value="{{ old('accessibility', $toilet->accesibility) }}"
                                        placeholder="Enter accessibility"
                                        class="w-full px-4 py-2 border  rounded-md  focus:border-green-500"
                                        style="color: black;">
                                    @error('accessibility')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="mb-4">
                                    <label for="opening_hours" class="font-bold" style="color: black;">Opening Hours</label>
                                    <input type="text" name="opening_hours" id="opening_hours"
                                    value="{{ old('opening_hours', $toilet->opening_hours) }}"
                                        placeholder="Enter Opening Hours"
                                        class="w-full px-4 py-2 border  rounded-md  focus:border-green-500"
                                        style="color: black;">
                                    @error('opening_hours')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label style="color: black;" class="font-bold" for="toilet_image">Toilet Image</label>
                                    <input type="file" name="toilet_image" id="toilet_image" class="border border-gray-300 p-2 rounded w-full" value="{{ old('toilet_image', $toilet->toilet_image) }}">
                                    @error('toilet_image')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                    @if($toilet->toilet_image)
                                        <div style="color: black;" class="mb-4">
                                            <img width="100" src="{{ asset("storage/images/" . $toilet->toilet_image) }}" alt="Current Toilet Image">
                                        </div>
                                    @endif
                                </div>

                                <div class="flex justify-between">
                                    <form action="{{ route('user.toilets.update', $toilet->id) }}" method="POST">
                                        @csrf
                                    <button type="submit" class="inline-block bg-green-600 text-white px-4 py-2 font-bold hover:bg-green-800 mb-4">Submit</button>
                                    </form>
                            
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </diSearch>
        </div>
        </script>
    </x-app-layout>