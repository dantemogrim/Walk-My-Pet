@include('errors')
<h1>Välkommen till Walk-My-Pet</h1>
<h2>Logga in eller registrera nytt konto</h2><hr>
<h3>Login</h3>
<form action="login" method="post">
    @csrf
    <div>
        <label for="email">Email</label>
        <input name="email" id="email" type="email" placeholder="john@doe.se"required/>
    </div>
    <div>
        <label for="password">Password</label>
        <input name="password" id="password" type="password" placeholder="password"required />
    </div>
    <button type="submit">Login</button>
</form><hr>



<h3>Register</h3>
<form action="register" method="post">
    @csrf
    <div>
        <label for="name">Name</label>
        <input name="name" id="name" type="name" placeholder="What is your name?" />
    </div>
    <div>
        <label for="email">Email</label>
        <input name="email" id="email" type="email" placeholder="Enter your email..." />
    </div>
    <div>
        <label for="password">Password (atleast 8 characters required</label>
        <input name="password" id="password" type="password" placeholder="Choose your password..."/>
    </div>
       <!-- Regga för ex vilket djur, ras, ålder, kön. Samt om man vill gå med djur eller låter gå med sitt djur. (checkbox ex) -->
    <button type="submit">Register</button>
</form>


<!-- User creation fungerar änna, men redirectar inte korrekt. TODO: Confirm pw-->
