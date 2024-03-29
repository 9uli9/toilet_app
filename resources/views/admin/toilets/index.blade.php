@extends('layouts.admin')
@section('header')
        <h2 class="font-semibold text-xl text-white leading-tight flex items-center space-x-2">
            toilets
            <span class="icon-padding">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-2" height="1.25em" viewBox="0 0 320 512">
                    <style>svg{fill:#ffffff}</style>
                    <path d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l58.3 97c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9L232 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H152z"/>
                </svg>
            </span>
    
            <div class="flex-grow"></div>
            <div class="flex justify-end">
                <a href="{{ route('admin.toilets.create') }}" class="inline-block bg-green-600 dark:bg-green-700 text-white px-4 py-2 font-bold hover:bg-green-800 dark:hover:bg-green-900">Create</a>
            </div>

        </h2>
    @endsection
    
    @section('content')
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <ul role="list" class="divide-red-100 dark:divide-red-700">
                    <div class="relative overflow-x-auto shadow-md">
                        <table class="w-full text-sm text-left text-red-500 dark:text-red-400">
                            <thead class="text-lg text-red-700 bg-red-50 dark:bg-red-700 dark:text-red-400">
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
                                        <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                                            {{ $toilet->title }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                                            {{ $toilet->type }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                                            {{ $toilet->description }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                                            {{ $toilet->location }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                                            {{ $toilet->accessibility }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                                            {{ $toilet->link }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                                            {{ $toilet->opening_hours }}
                                        </td>

                                        
                                        <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                                            <a href="{{ route('admin.toilets.show', ['toilet' => $toilet->id]) }}" class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Show</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-4 text-red-900 dark:text-white">
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
    @endsection
