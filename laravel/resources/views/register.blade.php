@include('errors')
<h1>Register</h1>

<form action="register" method="post">
    @csrf
    <div>
        <label for="email">Email</label><br>
        <input name="email" id="email" type="email" placeholder="Enter your email..." /><hr>
    </div>
    <div>
        <label for="password">Password (atleast 8 characters required</label><br>
        <input name="password" id="password" type="password" placeholder="Choose your password..."/><hr>
    </div>
    <button type="submit">Register</button>



</form>
