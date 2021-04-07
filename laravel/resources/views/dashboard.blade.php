@extends('layouts.app')
@include('errors')

<!-- Full page background wrapper. -->
<div class="bg-blue-100 min-h-screen">

    <!-- Header. -->
    <div class="bg-gray-700 flex justify-between items-center">

    <!-- Header - left side. -->
    <div class="flex items-center p-3">
    <svg class="ml-1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#ffffff" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><path d="M240,108a28,28,0,1,1-28-28A28.03146,28.03146,0,0,1,240,108ZM72,108a28,28,0,1,0-28,28A28.03146,28.03146,0,0,0,72,108ZM92,88A28,28,0,1,0,64,60,28.03146,28.03146,0,0,0,92,88Zm72,0a28,28,0,1,0-28-28A28.03146,28.03146,0,0,0,164,88Zm23.0918,60.84473a35.3317,35.3317,0,0,1-16.8418-21.124,43.99839,43.99839,0,0,0-84.5-.00439,35.2806,35.2806,0,0,1-16.7998,21.105,40.00718,40.00718,0,0,0,34.57226,72.05176,64.08634,64.08634,0,0,1,48.86524-.03711,40.0067,40.0067,0,0,0,34.7041-71.99121Z"></path></svg>
    <p class="inline-block p-3 text-indigo-200">Walk My Pet</p>
    </div>
    <!-- Header - right side. -->
    <div>
        <p class="m-1 inline-block">🐶</p>
        <p class="inline-block text-indigo-200 m-1">Sort by:</p>
        <a href="#" class="inline-block text-indigo-200 hover:text-indigo-100 m-1">Neighborhood</a>
        <a href="#" class="inline-block mr-1 text-indigo-200 hover:text-indigo-100 m-1">Species</a>
        <p class="m-1 inline-block">🐶</p>

        <a href="#" class="inline-block ml-10 p-3 text-indigo-200 hover:text-indigo-100">About</a>
        <a href="#" class="inline-block p-3 text-indigo-200 hover:text-indigo-100">Contact</a>

            <a href="/accountsettings"><button class="m-5 mr-4 py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" type="submit">Account settings</button></a>

            <a href="logout"><button class="m-5 mr-4 py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" type="submit">Logout</button></a>
    </div>
    </div>

    <h1 class="m-5 my-5 font-bold text-3xl">Welcome, {{ $user->name }}!</h1>
    <h2 class="m-5 my-1 font-bold text-xl">Here you can find all of our registered walkers and pet owners.</h2>
    <h2 class="m-5 my-1 font-bold text-xl">Good luck and have fun!</h2>





<!-- TEMPLATE - TODO: WE NEED TO IMPLEMENT A FUNCTIONING FOREACH HERE. -->
<article class="my-6 p-5 shadow rounded mt-5 mx-20 bg-blue-300">
    <ul>

        <li>
            <p class="m-2">Name: {{ $user->name }}</p>
            <p class="m-2">E-mail: {{ $user->name }}</p>
            <p class="m-2">Phone: {{ $user->name }}</p>
            <p class="m-2">Info: {{ $user->name }}</p>
            <p class="m-2">(profile img) -> To the right</p>
            <p class="m-2">Neighborhood: {{ $user->name }}</p>
            <p class="m-2">Pet owner: {{ $user->name }}</p>
            <p class="m-2">Pet walker: {{ $user->name }}</p>

        </li>

    </ul>
</article>

<!-- EXAMPLE - TO BE DELETED -->
<article class="my-6 p-5 shadow rounded mt-5 mx-20 bg-blue-300">
    <ul>

        <li>

            <p class="m-2">Name: {{ $user->name }}</p>
            <p class="m-2">E-mail: {{ $user->name }}</p>
            <p class="m-2">Phone: {{ $user->name }}</p>
            <p class="m-2">Info: {{ $user->name }}</p>
            <p class="m-2">(profile img) -> To the right</p>
            <p class="m-2">Neighborhood: {{ $user->name }}</p>
            <p class="m-2">Pet owner: {{ $user->name }}</p>
            <p class="m-2">Pet walker: {{ $user->name }}</p>

        </li>

    </ul>
</article>

<!-- EXAMPLE - TO BE DELETED -->
<article class="my-6 p-5 shadow rounded mt-5 mx-20 bg-blue-300">
    <ul>

        <li>

            <p class="m-2">Name: {{ $user->name }}</p>
            <p class="m-2">E-mail: {{ $user->name }}</p>
            <p class="m-2">Phone: {{ $user->name }}</p>
            <p class="m-2">Info: {{ $user->name }}</p>
            <p class="m-2">(profile img) -> To the right</p>
            <p class="m-2">Neighborhood: {{ $user->name }}</p>
            <p class="m-2">Pet owner: {{ $user->name }}</p>
            <p class="m-2">Pet walker: {{ $user->name }}</p>

        </li>

    </ul>
</article>


<!-- Footer. -->


<!-- Full page background wrapper - end.  -->
</div>
