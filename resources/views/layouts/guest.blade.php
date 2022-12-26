<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel-Courses') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/nav.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
    <!-- navbar -->
    <nav class="relative mx-auto p-6">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <!-- logo -->
                <img src="{{asset('laravel-courses/img/logo.png')}}" class="w-64" alt="">
                <!-- menu -->
                <div class="hidden md:flex space-x-6 justify-start pl-3">
                    <a href="{{route('courses')}}" class="hover:text-darkGrayisBlue ">Courses</a>
                    <a href="" class="hover:text-darkGrayisBlue ">Books</a>
                </div>
            </div>
           
           <!--Signup&login button-->
            <div class="flex items-center">
                @if (Auth::check())
                    <span  class="hidden md:block text-sm font-medium text-gray-500 hover:text-gray-900">Welcome : {{Auth::user()->name}}</span>
                    @if (Auth::user()->type === 1)
                        <a href="{{route('dashboard')}}" class="hidden md:block  ml-8 items-center justify-center rounded border border-transparent bg-black px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-500">
                        Dashboard
                        </a>
                    @endif
                    <form class="ml-4" method="post" action="{{'logout'}}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>  
                @else 
                <a href="{{route('login')}}" class="hidden md:block text-sm font-medium text-gray-500 hover:text-gray-900">
                    Sign in
                </a>
                <a href="{{route('register')}}" class="hidden md:block  ml-8 items-center justify-center rounded border border-transparent bg-black px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-500">
                    Sign up
                </a>
                @endif
            </div>
             <!-- Hamburger Icon -->
            <button
                id="menu-btn"
                class="block hamburger md:hidden focus:outline-none">
                <span class="hamburger-top"></span>
                <span class="hamburger-middle"></span>
                <span class="hamburger-bottom"></span>
            </button>
        </div>
        <!-- mobile menu -->
        <div class="md:hidden">
            <div id="menu"
                class="absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md"
        >
                <a href="#" class="text-red-500">Courses</a>
                <a href="#">Books</a>
                <!--Signup&login button-->
                <div class="flex items-center">
                    <a href="#" class="text-sm font-medium text-gray-500 hover:text-gray-900">Sign in</a>
                    <a href="#" class="ml-8 inline-flex items-center justify-center rounded border border-transparent bg-black px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-500">Sign up</a>
                </div>
            </div>
        </div>
       
    </nav><!--end navbar -->
    {{ $slot }}
    <!--Forter Section-->
    <footer class="mx-auto w-full bg-black pt-10 px-20 relative">
        <div class="flex flex-wrap md:flex-row">
            <!-- course by series -->
            <div class="flex-col item-center p-4 space-y-6 rounded-lg md:items-center md:w-1/5">
                <h2 class="text-lg text-white">Course by Series</h2>
                <ul class="mt-5">
                  <li class="mb-2">
                    <a href="{{route('home')}}/series/1" class="text-links text-gray-100 text-base before:text-gray-100">Laravel</a>
                  </li>
                  <li class="mb-2">
                    <a href="{{route('home')}}/series/2" class="text-links text-gray-100 text-base before:text-gray-100">PHP</a>
                  </li>
                  <li class="mb-2">
                    <a href="{{route('home')}}/series/3" class="text-links text-gray-100 text-base before:text-gray-100">Livewire</a>
                  </li>
                  <li class="mb-2">
                    <a href="{{route('home')}}/series/4" class="text-links text-gray-100 text-base before:text-gray-100">Alpine</a>
                  </li>
                  <li class="mb-2">
                    <a href="{{route('home')}}/series/5" class="text-links text-gray-100 text-base before:text-gray-100">Tailwind</a>
                  </li>
                </ul>
            </div>  
            <!-- course by Duration -->
            <div class="flex-col item-center p-4 space-y-6 rounded-lg md:items-center md:w-1/5">
                <h2 class="text-lg text-white">Course by Duration</h2>
                <ul class="mt-5">
                <li class="mb-2">
                    <a href="#" class="text-links text-gray-100 text-base before:text-gray-100">1-5 hours</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="text-links text-gray-100 text-base before:text-gray-100">5-10 hours</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="text-links text-gray-100 text-base before:text-gray-100">10+ hours</a>
                </li>
                </ul>
            </div>  
            <!-- course by level -->
            <div class="flex-col item-center p-4 space-y-6 rounded-lg md:items-center md:w-1/5">
                <h2 class="text-lg text-white">Course by Level</h2>
                <ul class="mt-5">
                <li class="mb-2">
                    <a href="{{route('home')}}/lebel/Beginner" class="text-links text-gray-100 text-base before:text-gray-100">Beginner</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="text-links text-gray-100 text-base before:text-gray-100">Intermediate</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="text-links text-gray-100 text-base before:text-gray-100">Advanced</a>
                </li>
                </ul>
            </div> 
            <!-- course by Platfrom -->
            <div class="flex-col item-center p-4 space-y-6 rounded-lg md:items-center md:w-1/5">
                <h2 class="text-lg text-white">Course by Platform</h2>
                <ul class="mt-5">
                  <li class="mb-2">
                    <a href="{{route('home')}}/platform/laracasts" class="text-links text-gray-100 text-base before:text-gray-100">Laracasts</a>
                  </li>
                  <li class="mb-2">
                    <a href="#" class="text-links text-gray-100 text-base before:text-gray-100">Laravel Daily</a>
                  </li>
                  <li class="mb-2">
                    <a href="#" class="text-links text-gray-100 text-base before:text-gray-100">Codecourse</a>
                  </li>
                </ul>
            </div>
            <!-- course by Topic -->
            <div class="flex-col item-center p-4 space-y-6 rounded-lg md:items-center md:w-1/5">
                <h2 class="text-lg text-white">Course by Topics</h2>
                <ul class="mt-5">
                <li class="mb-2">
                    <a href="{{route('home')}}/topics/eloquent" class="text-links text-gray-100 text-base before:text-gray-100">Eloquent</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="text-links text-gray-100 text-base before:text-gray-100">Validation</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="text-links text-gray-100 text-base before:text-gray-100">Refactoring</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="text-links text-gray-100 text-base before:text-gray-100">Testing</a>
                </li>
                </ul>
            </div>     
        </div> 
        <div class="mx-auto">
            <p class="text-sm text-white p-5 text-center relative"> Developed by <a href="https://raselahmed7.notion.site/raselahmed7/84403431d7f24f8389db0cc2676de23d?v=f3cdd3e354e544448387c42bca145402" target="_blank" class="hover:underline font-medium">Journey to Laravel & Vue Team ⚡️</a></p>
        </div> 
    </footer>
    </body>
</html>
