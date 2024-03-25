
@extends('layouts.admin')
    @section('header')
        <h2 class="font-semibold text-xl text-white leading-tight flex items-center space-x-2">
            Show Driver Details
            <span class="icon-padding">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="w-6 h-6 ml-2" viewBox="0 0 1792 1792">
                    <path d="M832 1000V808q-181 16-384 117v185q205-96 384-110zm0-418V385q-172 8-384 126v189q215-111 384-118zm832 463V861q-235 116-384 71V708q-20-6-39-15-5-3-33-17t-34.5-17-31.5-15-34.5-15.5-32.5-13-36-12.5-35-8.5-39.5-7.5-39.5-4-44-2q-23 0-49 3v222h19q102 0 192.5 29t197.5 82q19 9 39 15v188q42 17 91 17 120 0 293-92zm0-427V429q-169 91-306 91-45 0-78-8v196q148 42 384-90zM320 256q0 35-17.5 64T256 366v1266q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23V366q-29-17-46.5-46T64 256q0-53 37.5-90.5T192 128t90.5 37.5T320 256zm1472 64v763q0 39-35 57-10 5-17 9-218 116-369 116-88 0-158-35l-28-14q-64-33-99-48t-91-29-114-14q-102 0-235.5 44T417 1271q-15 9-33 9-16 0-32-8-32-19-32-56V474q0-35 31-55 35-21 78.5-42.5t114-52T696 275t155-19q112 0 209 31t209 86q38 19 89 19 122 0 310-112 22-12 31-17 31-16 62 2 31 20 31 55z" fill="#ffffff"></path>
                </svg>
            </span>

            <div class="flex-grow">

            </div>
        </h2>
    @endsection

   @section('content')
    <div class="py-12">

        <div class="py-12 bg-black dark:bg-red-800">
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="m-2 flex bg-red-600 dark:bg-red-700 overflow-hidden shadow-sm p-4">
                    @if($driver->driver_image)
                        <img width="300" src="{{ asset("storage/images/" . $driver->driver_image) }}" />
                    @else
                        <span>No Image Available</span>
                    @endif
                    <div class="ml-4">
                        <h2 class="text-white text-2xl font-bold mb-2">{{ $driver->first_name }} {{ $driver->last_name }}</h2>
                        <p class="text-white">{{ $driver->description }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <ul role="list" class="divide-red-100 dark:divide-red-700">
                    <div class="relative overflow-x-auto shadow-md">
                        <table class="w-full text-sm text-left text-red-500 dark:text-red-400">
                            <thead class="text-lg text-red-700 bg-red-50 dark:bg-red-700 dark:text-red-400">
                                <tr class="bg-red dark:bg-black-800 border-b border-white-100 dark:border-white-700">
                                    <th class="px-6 py-3 font-bold text-red">Id</th>
                                    <th class="px-6 py-3 font-bold text-red">First Name</th>
                                    <th class="px-6 py-3 font-bold text-red">Last Name</th>
                                    <th class="px-6 py-3 font-bold text-red">Age</th>
                                    <th class="px-6 py-3 font-bold text-red">Image</th>
                                    <th class="px-6 py-3 font-bold text-red">Admin Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-800">
                                <tr class="bg-black dark:bg-black-800 border-b border-white-100 dark:border-white-700">
                                    <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">{{ $driver->id }}</td>
                                    <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">{{ $driver->first_name }}</td>
                                    <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">{{ $driver->last_name }}</td>
                                    <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">{{ $driver->age }}</td>
                                    <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                                        @if($driver->driver_image)
                                            <img width="50" src="{{ asset("storage/images/" . $driver->driver_image) }}" />
                                        @else
                                            <span>No Image Available</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                                        <form method="POST" action="{{ route('admin.drivers.destroy', $driver->id) }}" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-block bg-red-600 dark:bg-red-700 text-white px-4 py-2 font-bold hover:bg-red-800 dark:hover:bg-red-900">Delete</button>
                                        </form>
                                        <a href="{{ route('admin.drivers.edit', $driver->id) }}" class="inline-block bg-yellow-500 dark:bg-yellow-600 text-white px-4 py-2 font-bold hover:bg-yellow-600 dark:hover:bg-yellow-700">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </ul>

                
            </div>
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <ul role="list" class="divide-red-100 dark:divide-red-700">
                    <div class="relative overflow-x-auto shadow-md">
                        <table class="w-full text-sm text-left text-red-500 dark:text-red-400">
                            <thead class="text-lg text-red-700 bg-red-50 dark:bg-red-700 dark:text-red-400">
                                <tr class="bg-red dark:bg-black-800 border-b border-white-100 dark:border-white-700">

                                    <th class="px-6 py-3 font-bold text-red">Id</th>
                                    <th class="px-6 py-3 font-bold text-red">Model</th>
                                    <th class="px-6 py-3 font-bold text-red">Manufacturer</th>
                                    <th class="px-6 py-3 font-bold text-red">Type</th>
                                    <th class="px-6 py-3 font-bold text-red">Fuel</th>
                                    <th class="px-6 py-3 font-bold text-red">Colour</th>
                                    <th class="px-6 py-3 font-bold text-red">VIN</th>
                                    <th class="px-6 py-3 font-bold text-red">VRM</th>
                                    <th class="px-6 py-3 font-bold text-red">Driver</th>
                                    <th class="px-6 py-3 font-bold text-red">Image</th>
                                    <th class="px-6 py-3 font-bold text-red">Admin Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-800">
                             
            
                @if($driver->cars->isNotEmpty())
                    @foreach($driver->cars as $car)
                        <ul role="list" class="divide-red-100 dark:divide-red-700">
                            <div class="relative overflow-x-auto shadow-md">
                                <table class="w-full text-sm text-left text-red-500 dark:text-red-400">
                                    <tbody class="text-gray-800">
                                        <tr class="bg-black dark:bg-black-800 border-b border-white-100 dark:border-white-700">
        
                                            <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">{{ $car->id }}</td>
                                            <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">{{ $car->model }}</td>
                                            <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">{{ $car->manufacturer }}</td>
                                            <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">{{ $car->type }}</td>
                                            <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">{{ $car->fuel }}</td>
                                            <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">{{ $car->colour }}</td>
                                            <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">{{ $car->vin }}</td>
                                            <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">{{ $car->vrm }}</td>

                                            <td class="px-6 py-4 font-medium text-red-900 whitespace-nowrap dark:text-white">
                                            <a href="{{ route('admin.cars.edit', $car->id) }}" class="inline-block bg-yellow-500 dark:bg-yellow-600 text-white px-4 py-2 font-bold hover:bg-yellow-600 dark:hover:bg-yellow-700">Go To Car</a></td>
                     
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </ul>
                    @endforeach
                @else
                <tr>
                    <td colspan="8" class="px-6 py-4 font-semibold text-xl text-red-900  dark:text-black ">
                        No Car Details Found.
                    </td>
                </tr>
                @endif
            </div>
        </div>
        
    </div>

    
    @endsection
