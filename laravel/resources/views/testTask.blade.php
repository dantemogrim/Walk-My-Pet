@extends('layouts.app')
@include('errors')

<!-- Full page background wrapper. tog bort 'min-h-screen' tillfälligt -->
<div class="bg-blue-100 ">

    <!-- Header. -->
    <div class="bg-gray-700 flex justify-between items-center">

        <!-- Header - left side. -->
        <div class="flex items-center p-3">
            <a href="/dashboard"><svg class="ml-1 inline-block" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#ffffff" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none"></rect>
                    <path d="M240,108a28,28,0,1,1-28-28A28.03146,28.03146,0,0,1,240,108ZM72,108a28,28,0,1,0-28,28A28.03146,28.03146,0,0,0,72,108ZM92,88A28,28,0,1,0,64,60,28.03146,28.03146,0,0,0,92,88Zm72,0a28,28,0,1,0-28-28A28.03146,28.03146,0,0,0,164,88Zm23.0918,60.84473a35.3317,35.3317,0,0,1-16.8418-21.124,43.99839,43.99839,0,0,0-84.5-.00439,35.2806,35.2806,0,0,1-16.7998,21.105,40.00718,40.00718,0,0,0,34.57226,72.05176,64.08634,64.08634,0,0,1,48.86524-.03711,40.0067,40.0067,0,0,0,34.7041-71.99121Z"></path>
                </svg>
                <p class="inline-block p-3 text-indigo-200">Walk My Pet</p>
            </a>
        </div>
        <!-- Header - right side. -->
        <div>
            <a href="#" class="inline-block p-3 text-indigo-200 hover:text-indigo-100 mr-2">About</a>
            <a href="#" class="inline-block p-3 text-indigo-200 hover:text-indigo-100 mr-2">Contact</a>
            <a href="logout"><button class="m-5 mr-4 py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" type="submit">Logout</button></a>
        </div>
    </div>




    <h1 class="mx-6 mr-3 my-3 font-bold text-3xl">Request walking this pet!</h1>

    <!-- @section('content') -->
    <form class="pt-6 ml-6 bg-white shadow rounded col-span-2 max-w-screen-sm" action="tasks" method="post">
        @csrf
        <label class="m-5 font-semibold mr-1" for="from">From: user->name </label>
        <br>
        <label class="m-5 font-semibold mr-1" for="to">To: pet->owner_id->name (på users)</label>
        <br>
        <label class="m-5 font-semibold mr-1" for="pet">About pet: pet->name </label>
        <br>
        <label class="m-5 font-semibold mr-1" for="phone">Phone: user->phone </label>
        <br>
        <label class="m-5 font-semibold mr-1" for="message">Message</label>
        <br>
        <textarea class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" name="message" id="message" placeholder="Tell them about you and when you are available"></textarea>
        <br>
        <!-- HIDDEN INFO FOR DB -->
        <input type="hidden" id="walker_id" value="user->id ">
        <input type="hidden" id="owner_id" value="user->id">

        <button class="m-5 mr-4 py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" type="submit">Create Task</button>
    </form>
    <!-- @endsection -->

</div>
