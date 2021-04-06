<h1>Account settings</h1>

<!-- User settings. -->
<h2>Edit user settings:</h2>
<form action="accountsettings" method="post">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input name="name" id="name" type="name" />
        </div>
        {{-- <div>
            <label for="email">E-mail</label>
            <input name="email" id="email" type="email" />
        </div>
        <div>
            <label for="password">Password</label>
            <input name="password" id="password" type="password" />
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input name="phone" id="phone" type="phone" placeholder="070-1234567"/>
        </div>

        <div>
            <label for="info">Info:</label>
            <input name="info" id="info" type="info" placeholder="Write something about yourself."/>
        </div>

        <div>
            <label for="neighborhood">Neighborhood:</label>
            <input name="neighborhood" id="neighborhood" type="neighborhood" placeholder="Which neighborhood do you live in?"/>
        </div>
        <div>
            <label for="pet_owner">Do you own a pet?:</label>
            <input name="pet_owner" id="pet_owner" type="pet_owner" placeholder="Yes/No/Details etc."/>
        </div>
        <div>
            <label for="pet_walker">Do you want to walk with a pet?:</label>
            <input name="pet_walker" id="pet_walker" type="pet_walker" placeholder="Yes/No/Details etc."/>
        </div> --}}

        <button type="submit">Save changes</button>
</form>


<br>

<!-- Pet settings. -->
<h2>Add a pet:</h2>
<form action="add-pet" method="post">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input name="pet-name" id="pet-name" type="pet-name" placeholder="What is your name?" />
        </div>
        <div>
            <div>
                <label for="info">Info:</label>
                <input name="pet-info" id="pet-info" type="pet-info" placeholder="Tell us something about your"/>
            </div>
            <div>
                <div>
                    <label for="species">Species:</label>
                    <input name="pet-species" id="pet-species" type="pet-species" placeholder="What animal do you have?" />
                </div>
                {{-- <label for="pet-img">Profile image:</label>
                <input name="pet-img" id="pet-img" type="pet-img"/>
            </div> --}}
            <button type="submit">Save changes</button>
    </form>
<br>


    <a href="/dashboard">Back</a>

