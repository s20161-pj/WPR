<!DOCTYPE html>
<html>

<body>

  <h2> Booking form</h2>

  <form action="zad3.php"  method="post">
    <label for="number">Number of guests:</label><br>
    <select name="guests" required>
      <option value="" disabled selected>Choose option</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      
    </select>
    </br>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="" required><br>
    <label for="surnamename">Surname:</label><br>
    <input type="text" id="surname" name="surname" value="" required><br>
     <label for="address">Address:</label><br>
    <input type="text" id="address" name="address" value="" required><br>
    <label for="email">e-mail:</label><br>
    <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br>
    <label for="phone">Phone number (xxx-xx-xxx):</label><br>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br>
    <label for="credit_card">Credit card number:</label><br>
    <input type="text" id="credit_card" name="credit_card" value="" required><br></br>
    <label for="check_in">Check-in:</label>
    <input type="date" id="check_in" name="check_in" required>
    <label for="check_out">Check-out:</label>
    <input type="date" id="check_out" name="check_out" required><br><br>
    <input type="checkbox" id="additional_bed" name="additional_bed" value=" ">
    <label for="additional_bed"> Additional bed</label><br><br>
    <label for="room_facilities">Room facilities:</label><br>
    <select name="room_facilities[]" id="room_facilities" multiple>
      <option value="none" disabled selected>Choose option</option>
      <option value="kitchen">kitchen</option>
      <option value="private_bathroom">private bathroom</option>
      <option value="balcony">balcony</option>
      <option value="coffe_machine">coffe machine</option>
      <option value="ellectric_kettle">ellectric_kettle</option>
      <option value="air_conditioning">air conditioning</option>
    </select></br></br>
    <label>
        <tr>
            <td>Load data from CSV</td>
            <td><input type="checkbox" id="csv" name="csv"></td>
            <br>
            <td><input type="submit" value="Send"/></td>
        </tr>
    </label>
    <br><br>
  </form>
</body>
</html>