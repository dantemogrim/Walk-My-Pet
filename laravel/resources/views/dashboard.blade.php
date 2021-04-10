@extends('layouts.app')

<!-- Full page background wrapper. -->

<!-- Header. -->
<div class="bg-gray-700 flex justify-between items-center">

    <!-- Header - left side. -->
    <div class="flex items-center p-3">
        <a href="/dashboard">
            <svg class="ml-1 inline-block" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#ffffff" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><path d="M240,108a28,28,0,1,1-28-28A28.03146,28.03146,0,0,1,240,108ZM72,108a28,28,0,1,0-28,28A28.03146,28.03146,0,0,0,72,108ZM92,88A28,28,0,1,0,64,60,28.03146,28.03146,0,0,0,92,88Zm72,0a28,28,0,1,0-28-28A28.03146,28.03146,0,0,0,164,88Zm23.0918,60.84473a35.3317,35.3317,0,0,1-16.8418-21.124,43.99839,43.99839,0,0,0-84.5-.00439,35.2806,35.2806,0,0,1-16.7998,21.105,40.00718,40.00718,0,0,0,34.57226,72.05176,64.08634,64.08634,0,0,1,48.86524-.03711,40.0067,40.0067,0,0,0,34.7041-71.99121Z"></path></svg>
            <p class="inline-block p-3 text-indigo-200">Walk My Pet</p>
        </a>
    </div>
    <!-- Header - right side. -->
    <div>
        <p class="m-1 inline-block">🐶</p>
        <p class="inline-block text-white m-1">Sort by:</p>
        <a href="#" class="inline-block text-indigo-200 hover:text-indigo-100 m-1">Neighborhood</a>
        <a href="#" class="inline-block mr-1 text-indigo-200 hover:text-indigo-100 m-1">Species</a>
        <p class="m-1 inline-block">🐶</p>


        <a href="/accountsettings"><button class="m-5 mr-4 py-2 px-4 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" type="submit">Account</button></a>

        <a href="logout"><button class="m-5 mr-4 py-2 px-4 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" type="submit">Logout</button></a>
    </div>
</div>
<!-- Main area. -->
<div class="bg-blue-100 min-h-screen flex flex-col">

    @include('errors')
<!-- Logged in greeting. -->
    <div class="bg-white w-1/2 flex flex-col self-center rounded-lg p-2 m-5 round shadow-lg">
    <h1 class="m-5 my-5 text-3xl text-center">Welcome, {{ $currentUser->name }}!</h1>
    <h2 class="m-5 my-1 text-xl text-center">Here you can find all of our registered pet walkers and pet owners. We hope you find who you are looking for.</h2>
    <h2 class="m-5 my-1 text-xl text-center">Good luck and have fun!</h2>
    </div>
    <br>


<!-- All users listed. -->
@foreach($allUsers as $everyUser)
<article class="my-6 p-3 shadow rounded-xl mx-10 bg-green-100">
    <ul>
        <li>
            <li class="bg-blue-300 p-2 text-xl underline">User: {{$everyUser->name }}</li>
            <li class="flex m-2"><div class="font-bold mr-2">E-mail:</div> {{$everyUser->email }}</li>
            <li class="flex m-2"><div class="font-bold mr-2">Phone:</div> +46 {{$everyUser->phone }}</li>
            <li class="flex m-2"><div class="font-bold mr-2">Info:</div> {{$everyUser->info }}</li>
            <li class="flex m-2"><div class="font-bold mr-2">Neighborhood:</div> {{$everyUser->neighborhood }}</li>
            <li class="flex m-2"><div class="font-bold mr-2">Pet owner:</div> {{$everyUser->pet_owner }}</li>
            <li class="flex m-2"><div class="font-bold mr-2">Pet walker:</div> {{$everyUser->pet_walker }}</li>

@if(count($everyUser->pets) > 0)
            <li class="bg-blue-300 p-2 text-xl underline">Pet guardian to:</li>
@endif

            @foreach ($everyUser->pets as $everyUsersPets)
            <li class="flex m-2"><div class="font-bold mr-2">Name:</div> {{ $everyUsersPets->name }}</li>
            <li class="flex m-2"><div class="font-bold mr-2">Species:</div> {{ $everyUsersPets->species }}</li>
            <li class="flex m-2"><div class="font-bold mr-2">Info:</div> {{ $everyUsersPets->info }}</li>
            <hr class="bg-blue-300 h-2">
            @endforeach
        </li>
    </ul>
</article>
@endforeach
</div>


