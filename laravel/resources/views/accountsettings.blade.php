@extends('layouts.app')

<!-- Full page background wrapper. -->
<div class="bg-blue-100 min-h-screen">

    <!-- Header. -->
    <div class="bg-gray-700 flex justify-between items-center">

    <!-- Header - left side. -->
    <div class="flex items-center p-3">
    <a href="/dashboard"><svg class="ml-1 inline-block" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#ffffff" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><path d="M240,108a28,28,0,1,1-28-28A28.03146,28.03146,0,0,1,240,108ZM72,108a28,28,0,1,0-28,28A28.03146,28.03146,0,0,0,72,108ZM92,88A28,28,0,1,0,64,60,28.03146,28.03146,0,0,0,92,88Zm72,0a28,28,0,1,0-28-28A28.03146,28.03146,0,0,0,164,88Zm23.0918,60.84473a35.3317,35.3317,0,0,1-16.8418-21.124,43.99839,43.99839,0,0,0-84.5-.00439,35.2806,35.2806,0,0,1-16.7998,21.105,40.00718,40.00718,0,0,0,34.57226,72.05176,64.08634,64.08634,0,0,1,48.86524-.03711,40.0067,40.0067,0,0,0,34.7041-71.99121Z"></path></svg>
    <p class="inline-block p-3 text-indigo-200">Walk My Pet</p>
    </a>
    </div>
    <!-- Header - right side. -->
    <div>
        <p class="m-1 inline-block">🐶</p>
        <p class="inline-block text-indigo-200 m-1">Sort by:</p>
        <a href="#" class="inline-block text-indigo-200 hover:text-indigo-100 m-1">Neighborhood</a>
        <a href="#" class="inline-block mr-1 text-indigo-200 hover:text-indigo-100 m-1">Species</a>
        <p class="m-1 inline-block">🐶</p>


            <a href="logout"><button class="m-5 mr-4 py-2 px-4 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" type="submit">Logout</button></a>
    </div>
    </div>


<h1 class="mx-6 mr-3 my-3 text-3xl pb-3">Account settings</h1>
@include('errors')

<!-- Edit user settings. -->
<h2 class="mx-6 mr-3 my-3 text-2xl underline">Edit user settings:</h2>
<form class="pt-6 ml-6 bg-white shadow rounded col-span-2 max-w-screen-sm" action="edit-user" method="post">
        @csrf
        <div>
            <label class="m-5 mr-1" for="name">Name:</label>
            <input class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" name="name" id="name" type="name" value="{{ auth()->user()->name }}" placeholder="Person Personson" />
        </div>
       <div>
            <label class="m-5 mr-1" for="email">E-mail:</label>
            <input class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" name="email" id="email" type="email" value="{{ auth()->user()->email }}"/>
        </div>
         <div>
            <label class="m-5 mr-1" for="password">Password:</label>
            <input class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" name="password" id="password" type="password" value="{{ auth()->user()->password }}" />
        </div>

        <div>
            <label class="m-5 mr-1" for="phone">Phone:</label>
            <input class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" name="phone" id="phone" type="text" placeholder="070-1234567"/>
        </div>

        <div>
            <label class="m-5 mr-1" for="info">Info:</label>
            <input class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" name="info" id="info" type="text" placeholder="Write something about yourself."/>
        </div>

        <div>
            <label class="m-5 mr-1" for="neighborhood">Neighborhood:</label>
            <input class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" name="neighborhood" id="neighborhood" type="text" placeholder="Which neighborhood do you live in?"/>
        </div>
        <div>
            <label class="m-5 mr-1" for="pet_owner">Do you own a pet?:</label>
            <select name="pet_walker" id="pet_walker">
                <option class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" value="yes">Yes</option>
                <option class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" value="no">No</option>
            </select>
            <input class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" name="pet-owner" id="pet-owner" type="text" placeholder="Yes/No/Details etc."/>
        </div>
        <div>
            <label class="m-5 mr-1" for="pet_walker">Do you want to walk with a pet?:</label>
            <select name="pet_walker" id="pet_walker">
                <option class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" value="yes">Yes</option>
                <option class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" value="no">No</option>
            </select>
            <input class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" name="pet-walker" id="pet-walker" type="text" placeholder="Yes/No/Details etc."/>
        </div>
        <button class="m-5 mr-4 py-2 px-4 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" type="submit">Update</button>
</form>

<hr class="w-auto h-2 mt-10 bg-blue-200">
<br>


<!-- Edit pet settings. -->
<h2 class="mx-6 mr-3 my-3 text-2xl underline">Add a pet:</h2>
<form class="pt-6 ml-6 bg-white shadow rounded col-span-2 max-w-screen-sm" action="add-pet" method="post">
        @csrf
        <div>
            <label class="m-5 mr-1" for="name">Name:</label>
            <input class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" name="pet-name" id="pet-name" type="pet-name" placeholder="Doggo" />
        </div>
        <div>

                <label class="m-5 mr-1" for="info">Info:</label>
                <input class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" name="pet-info" id="pet-info" type="pet-info" placeholder="Loves fetch."/>
            </div>
            <div>

                    <label class="m-5 mr-1" for="species">Species:</label>
                    <input class="my-2 bg-white-100 border-green-500 border-2 rounded-sm" name="pet-species" id="pet-species" type="pet-species" placeholder="Dog, Shiba Inu." />
                </div>
            <button class="m-5 mr-4 py-2 px-4 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" type="submit">Update</button>
    </form>
<br>

<hr class="w-auto h-2 bg-blue-200">
<br>


<!-- Delete account -->
<h2 class="mx-6 mr-3 my-3 text-2xl underline">Delete account:</h2>
<form class="pt-6 ml-6 bg-red-100 shadow rounded col-span-2 max-w-screen-sm" action="delete-user" method="post">
        @csrf
        <div>
            <label class="m-5 mr-1" for="name">Are you sure you want to delete your account and all associated data?</label>
            <input class="my-2 bg-white-100  border-red-500 border-2 rounded-sm" name="delete-check" id="delete-check" type="checkbox" required />
        </div>
            <button class="m-5 mr-4 py-2 px-4 bg-red-500 text-white rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" type="submit" id="delete-user">Delete</button>
    </form>
<br>

<a href="/dashboard"><button class="mb-5 ml-6 py-2 px-4 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" type="submit">Back</button></a>
<!-- Full page background wrapper - end.  -->
</div>
