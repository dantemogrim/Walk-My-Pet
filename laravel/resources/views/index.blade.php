@extends('layouts.head')
@include('errors')
<h1>Welcome to Walk-My-Pet</h1>
<h2>Log in to your account</h2><hr>
<h3>Login</h3>
<form action="login" method="post">
    @csrf
    <div>
        <label for="email">E-mail</label>
        <input name="email" id="email" type="email" placeholder="john@doe.se"required/>
    </div>
    <div>
        <label for="password">Password</label>
        <input name="password" id="password" type="password" placeholder="password"required />
    </div>
    <button type="submit">Logga in</button>

</form><hr>


<a href="/register"><button type="submit">New? Register an account here</button></a>
<hr>
<a href="/test.blade.php">Laravel Mix App Test</a>
<p class="text-purple-600">This is just to see if the alert works...</p>
