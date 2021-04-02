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
    <div>
        <label for="neighborhood">Neighborhood</label>
        <input name="neighborhood" id="neighborhood" type="neighborhood" placeholder="Neighborhood..."/>
    </div>
    <div>
        <label for="pet_owner">Do you own a pet?</label>
        <input name="pet_owner" id="pet_owner" type="pet_owner" placeholder="Yes/No..."/>
    </div>
    <div>
        <label for="pet_walker">Do you want to walk with a pet?</label>
        <input name="pet_walker" id="pet_walker" type="pet_walker" placeholder="Yes/No..."/>
    </div>
<br>


    <button type="submit">Register</button>
</form>




{{-- <label for="pet_owner">Do you own a pet?</label>
<input type="pet_owner" name="pet_owner" id="pet_owner" list="pet_owner" placeholder="Yes/No">
<datalist id="pet_owner">
    <option value="no" id="pet_owner">
    <option value="yes" id="pet_owner">
  </datalist> --}}


  {{-- <div>
    <input type="text" name="customer-type" list="customer-type">
    <datalist id="customer-type">
      <option value="pet walker" id="pet_walker">
      <option value="pet owner" id="pet_owner">
    </datalist>
       </div> --}}
