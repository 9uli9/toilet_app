

<x-app-layout>
    @section('content')
    <div class="py-6">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg flex justify-between items-center">
                <div>
                   <h1 class="text-black">Search For Toilets By Location</h1> 
                </div>
                <div class="flex justify-end items-center">
                    <input type="text" id="search" placeholder="Search..." class="px-4 py-2 border rounded-md focus:border-green-500 text-black">
                    <button id="searchButton" class="ml-4 px-6 py-2 bg-green-600 text-white font-semibold rounded-md hover:bg-green-700">Search</button>
                </div>
            </div>
                <ul role="list" class="divide-green-100 dark:divide-green-700">
                    <div class="relative overflow-x-auto shadow-md">
                        <table class="w-full text-sm text-left text-green-500 dark:text-green-400">
                            <thead class="text-lg text-green-700 bg-green-50 dark:bg-green-700 dark:text-green-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Type
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Location
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Accesibility
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Link
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Opening Hours
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($toilets as $toilet)
                                    <tr class="bg-black dark:bg-black-800 border-b border-white-100 dark:border-white-700">
                                        <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                            {{ $toilet->title }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                            {{ $toilet->type }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                            {{ $toilet->description }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                            {{ $toilet->location }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                            {{ $toilet->accessibility }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                            {{ $toilet->link }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                            {{ $toilet->opening_hours }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-green-900 whitespace-nowrap dark:text-white">
                                            <a href="{{ route('user.toilets.show', ['toilet' => $toilet->id]) }}" class="inline-block bg-orange-500 dark:bg-orange-600 text-white px-4 py-2 font-bold hover:bg-orange-600 dark:hover:bg-orange-700">Show</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-4 text-green-900 dark:text-white">
                                            No toilets found!
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $toilets->links() }}
                    </div>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    $(document).ready(function() {
        $('#searchButton').click(function() {
            var location = $('#search').val();
            fetchToilets(location);
        });

        function fetchToilets(location) {
            $.ajax({
                url: '{{ route("user.toilets.index") }}',
                type: 'GET',
                data: { location: location },
                success: function(response) {
                    $('#toiletTable').html(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }
    });
</script>
