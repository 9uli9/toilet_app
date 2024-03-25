@extends('layouts.admin')
@section('header')
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl dark:text-white-400 leading-tight">
                {{ __('RaceHub Central Admin Dashboard') }}
            </h2>
    
            <h2 class="text-white">
                You're logged in as an Admin.

            </h2>
        </div>
        @endsection
    



    @section('content')
    @auth
    <div class="py-12 bg-black ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-600 dark:bg-red-700 overflow-hidden shadow-sm mb-4">
                <div class="p-6 text-white">
                    <img src="https://iadt-my.sharepoint.com/personal/n00220743_iadt_ie/Documents/Year%202/Year%202%20Semester%201/Advanced%20Web%20Design/MyLaravelApps/Frame%201.png?Web=1" alt="RaceHub Central" class="w-full h-auto">
                </div>
            </div>
        </div>
    </div>

        <div class="py-12 bg-black dark:bg-red-800">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" bg-red-600 dark:bg-red-700 overflow-hidden shadow-sm mb-2">
                
                </div>
            </div>
        </div>




    @endauth
    @endsection
