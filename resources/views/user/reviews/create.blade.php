<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight flex items-center space-x-2">
            Review A Toilet
            <div class="flex-grow">
                
            </div>
            
        </h2>
    </x-slot>

    @section('content')
        <div class="py-12 bg-black dark:bg-green-800">
            
                <div class=" bg-green-600 dark:bg-green-700 overflow-hidden shadow-sm mb-2">
                    <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=1spU-V5yT2mrPfqBhfzLo3WoFjwisQ4Y&ehbc=2E312F&noprof=1"
                        width="500" height="500"></iframe>
                </div>

                

                <div class="py-6">
                    <div class="max-w-lg mx-auto sm:px-6 lg:px-8">
                        <div class="my-4 p-4 bg-white border border-green-300 shadow-sm sm:rounded-lg">

                            
                            <form enctype="multipart/form-data" action="{{ route('user.reviews.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @csrf
                                @method('POST')

                        
                              
                                
                                
                                

                                <div class="mb-4">
                                    <label for="title" style="color: black;" class="font-bold">Title</label>
                                    <input type="text" name="title" id="title" placeholder="Enter A Title"
                                        class="w-full px-4 py-2 border  rounded-md  focus:border-green-500"
                                        style="color: black;">

                                    @error('title')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                         

                                <div class="mb-4">
                                    <label style="color: black;" class="font-bold" for="description">Description</label>
                                    <input type="text" name="description" id="description"
                                        placeholder="Enter description"
                                        class="w-full px-4 py-2 border  rounded-md  focus:border-green-500"
                                        style="color: black;">
                                    @error('description')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label style="color: black;" class="font-bold" for="rating">Rating</label>
                                    <input type="text" name="rating" id="rating"
                                        placeholder="Enter rating"
                                        class="w-full px-4 py-2 border  rounded-md  focus:border-green-500"
                                        style="color: black;">
                                    @error('rating')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- <div class="mb-4">
                                    <label style="color: black;" for="toilet_id" class="block font-bold mb-1" placeholder="Select toilet">Select toilet:</label>
                                    <select name="toilet_id" id="toilet_id" class="border border-gray-300 p-2 w-full">
                                        <option value="" disabled selected>Select toilet</option>
                                        @foreach ($toilets as $toilet)
                                            <option value="{{ $toilet->id }}">{{ $toilet->id }} {{ $toilet->title }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}

                                
                                <div class="mb-4" style="display: none;">
                                    <label for="user_id" style="color: black;" class="font-bold">Toilet ID</label>
                                    <input type="hidden" name="toilet_id" value="{{ $toilet->id }}">
                                </div>

                                <div class="mb-4" style="display: none;">
                                    <label for="user_id" style="color: black;" class="font-bold">User ID</label>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" id="user_id">
                                </div>
                                


                                <div class="mb-4">
                                    <label style="color: black;" for="toilet_image" class="block font-bold mb-1">Choose A
                                        Cover Image:</label>
                                    <input style="color: black;" type="file" name="toilet_image"
                                        placeholder="toilet Image" class="w-full mt-6" field="toilet_image" />
                                </div>

                                <button
                                    class="inline-block bg-green-600 text-white px-4 py-2 font-bold hover:bg-green-800 "
                                    type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        </script>
    </x-app-layout>
