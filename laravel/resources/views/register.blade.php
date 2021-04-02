<h3>Register:</h3>
<form action="register" method="post">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input name="name" id="name" type="name" placeholder="What is your name?" />
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input name="email" id="email" type="email" placeholder="Enter your email..." required/>
    </div>
    <div>
        <label for="password">Password (atleast 8 characters required)</label>
        <input name="password" id="password" type="password" placeholder="Choose your password..." required/>
    </div>
    <div>
        <label for="password">Confirm password</label>
        <input name="password" id="password" type="password" placeholder="Confirm..." required/>
    </div>
    <div>
        <label for="phone">Phone</label>
        <input name="phone" id="phone" type="phone" placeholder="Phone..."/>
    </div>

    <button type="submit">Register</button>
</form>




