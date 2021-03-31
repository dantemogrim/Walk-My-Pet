@include('errors')
<h1>Välkommen till Walk-My-Pet</h1>
<h2>Logga in eller registrera nytt konto</h2>
<form action="login" method="post">
    @csrf
    <div>
        <label for="email">Email</label>
        <input name="email" id="email" type="email" required/>
    </div>
    <div>
        <label for="password">Password</label>
        <input name="password" id="password" type="password" required />
    </div>
    <button type="submit">Login</button>
</form>

<button type="submit">Register</button>




