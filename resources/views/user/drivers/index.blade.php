<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight flex items-center space-x-2">
            Drivers
            <span class="icon-padding">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-2" height="1.25em" viewBox="0 0 320 512">
                    <style>svg{fill:#ffffff}</style>
                    <path d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l58.3 97c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9L232 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H152z"/>
                </svg>
            </span>
    
            <div class="flex-grow"></div>
    

        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <ul role="list" class="divide-red-100 dark:divide-red-700">
                    <div class="relative overflow-x-auto shadow-md">
                        <table class="w-full text-sm text-left text-red-500 dark:text-red-400">
                            <thead class="text-lg text-red-700 bg-red-50 dark:bg-red-700 dark:text-red-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        First Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Last Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Image
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($drivers as $driver)
                                    <tr class="bg-black dark:bg-black-800 border-b border-white-100 dark:border-white-700">
                                        <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                                            {{ $driver->first_name }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                                            {{ $driver->last_name }}
                                        </td>
                                        
                                        <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                                            @if($driver->driver_image)
                                                <img width="50" src="{{ asset("storage/images/" . $driver->driver_image) }}" alt="Img" />
                                            @else
                                                <span>No Image Available</span>
                                            @endif
                                        </td>

                                        
                                        <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                                            <a href="{{ route('user.drivers.show', ['driver' => $driver->id]) }}" class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Show</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-4 text-red-900 dark:text-white">
                                            No Drivers found!
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $drivers->links() }}
                    </div>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
