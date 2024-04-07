<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight flex items-center space-x-2">
            Show Toilet Details
            <div class="flex-grow"></div>
            <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                <a href="{{ route('user.toilets.index', $toilet->id) }}"
                    class="inline-block bg-orange-500 dark:bg-orange-600 text-white px-4 py-2 font-bold hover:bg-orange-600 dark:hover:bg-orange-700">Back</a>
            </td>
        </h2>
    </x-slot>

    <div class="py-12 bg-white dark:bg-green-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center"> <!-- Added 'flex justify-center' classes -->
            <h2 class="text-2xl font-semibold mb-4">{{ $toilet->title }}</h2>
        </div>

        <div class="py-12 bg-green-600 dark:bg-green-800">
            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                <div class="m-2 flex bg-green-700 dark:bg-green-900 overflow-hidden shadow-sm p-4">
                    <h2 class="text-lg font-semibold mb-4 text-white">Reviews</h2>
                    @if ($toilet->toilet_image)
                        <img width="300" src="{{ asset('storage/images/' . $toilet->toilet_image) }}" />
                    @else
                        <span>No Image Available</span>
                    @endif
                    
                    <div class="ml-4">
                        <div class="py-6">
                            
                            <div class="overflow-x-auto">
                                <table class="w-full border-collapse table-auto">
                                    <thead>
                                        <tr>
                                            <th class="border px-4 py-2">Title</th>
                                            <th class="border px-4 py-2">Description</th>
                                            <th class="border px-4 py-2">Rating</th>
                                            <th class="border px-4 py-2">User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($toilet->reviews as $review)
                                            <tr>
                                                <td class="border px-4 py-2">{{ $review->title }}</td>
                                                <td class="border px-4 py-2">{{ $review->description }}</td>
                                                <td class="border px-4 py-2">{{ $review->rating }}</td>
                                                <td class="border px-4 py-2">{{ $review->user->name }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="py-6">
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <ul role="list" class="divide-green-100 dark:divide-green-700">
                        <div class="relative overflow-x-auto shadow-md">
                            <table class="w-full text-sm text-left text-green-500 dark:text-green-400">
                                <thead class="text-lg text-green-700 bg-green-50 dark:bg-green-700 dark:text-green-400">
                                    <th class="px-6 py-3 font-bold text-red">Id</th>
                                    <th class="px-6 py-3 font-bold text-red">Point</th>
                                    <th class="px-6 py-3 font-bold text-red">Title</th>
                                    <th class="px-6 py-3 font-bold text-red">Type</th>
                                    <th class="px-6 py-3 font-bold text-red">Description</th>
                                    <th class="px-6 py-3 font-bold text-red">Location</th>
                                    <th class="px-6 py-3 font-bold text-red">Accesibility</th>
                                    <th class="px-6 py-3 font-bold text-red">Opening Hours</th>
                                    <th class="px-6 py-3 font-bold text-red">Image</th>
                                    <th class="px-6 py-3 font-bold text-red">Actions</th>


                                </tr>
                            </thead>
                            <tbody class="text-gray-800">
                               <tr class="bg-black dark:bg-black-800 border-b border-white-100 dark:border-white-700">
                                <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                        {{ $toilet->id }}</td>
                                    <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                        {{ $toilet->point }}</td>
                                    <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                        {{ $toilet->title }}</td>
                                    <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                        {{ $toilet->type }}</td>
                                    <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                        {{ $toilet->description }}</td>
                                    <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                        {{ $toilet->location }}</td>
                                    <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                        {{ $toilet->accesibility }}</td>
                                    <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                        {{ $toilet->opening_hours }}</td>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                        @if($toilet->toilet_image)
                                            <img width="50" src="{{ asset("storage/images/" . $toilet->toilet_image) }}" />
                                        @else
                                            <span>No Image Available</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                        
                                        <a href="{{ route('user.toilets.edit', $toilet->id) }}" class="inline-block bg-orange-500 dark:bg-orange-600 text-white px-4 py-2 font-bold hover:bg-orange-600 dark:hover:bg-orange-700">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </ul>
            </div>
        </div>

    </div>


    
    </div>
    </div>
    </div>





</x-app-layout>
