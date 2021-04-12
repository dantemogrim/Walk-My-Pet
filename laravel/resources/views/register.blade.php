@extends('layouts.app')

<!-- Full page background wrapper. -->
<div class="bg-blue-100 min-h-screen">

    <!-- Header. -->
    <div class="bg-gray-700 flex justify-between items-center">

    <!-- Header - left side. -->
    <div class="flex items-center p-3">
    <a href="/login"><svg class="ml-1 inline-block" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#ffffff" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><path d="M240,108a28,28,0,1,1-28-28A28.03146,28.03146,0,0,1,240,108ZM72,108a28,28,0,1,0-28,28A28.03146,28.03146,0,0,0,72,108ZM92,88A28,28,0,1,0,64,60,28.03146,28.03146,0,0,0,92,88Zm72,0a28,28,0,1,0-28-28A28.03146,28.03146,0,0,0,164,88Zm23.0918,60.84473a35.3317,35.3317,0,0,1-16.8418-21.124,43.99839,43.99839,0,0,0-84.5-.00439,35.2806,35.2806,0,0,1-16.7998,21.105,40.00718,40.00718,0,0,0,34.57226,72.05176,64.08634,64.08634,0,0,1,48.86524-.03711,40.0067,40.0067,0,0,0,34.7041-71.99121Z"></path></svg>
    <p class="inline-block p-3 text-indigo-200">Walk My Pet</p>
    </a>
    </div>
    <!-- Header - right side. -->
    <div>

        <a href="/login"><button class="mr-4 py-2 px-4 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" type="submit">Login</button></a>
    </div>
    </div>

<h3 class="m-6 ml-6 text-3xl">Register:</h3>
<!-- Register area. -->
<div class="bg-blue-100 grid grid-cols-4 gap-7">

<!-- Form wrapper. -->
<form class="pt-1 ml-6 bg-white shadow rounded col-span-2 max-w-screen-sm" action="register" method="post">
    @csrf
    <div class="m-4 ml-6">
        <label class="mr-1" for="name">Name:</label>
        <input class="bg-white-100 border-green-500 border-2 rounded-sm" name="name" id="name" type="name" placeholder="Person Personson" required/>
    </div>
    <div class="m-4 ml-6">
        <label class="mr-1" for="email">E-mail:</label>
        <input class="bg-white-100 border-green-500 border-2 rounded-sm" name="email" id="email" type="email" placeholder="person@email.com" required/>
    </div>
    <div class="m-4 ml-6">
        <label class="mr-1" for="password">Password:</label>
        <input class="bg-white-100 border-green-500 border-2 rounded-sm" name="password" id="password" type="password" placeholder="my-safe-password" required/>
        <br>
        <small class="m-3 mr-1">(Minimum 8 characters.)</small>
    </div>
    <div class="m-4 ml-6">
        <label class="mr-1" for="password-verify">Confirm password:</label>
        <input class="bg-white-100 border-green-500 border-2 rounded-sm" name="password-verify" id="password-verify" type="password" placeholder="my-safe-password" required/>
    </div>
    <button class="ml-6 my-3 py-2 mb-6 px-4 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" type="submit">Register</button>
</form>
<!-- Dog img. -->
<img class="max-w-xs" src="https://media.giphy.com/media/fr4a7HVNfSutlTv02l/giphy.gif">

</div>
@include('errors')
