<?php
?>
<form Action="/hotels/store" Method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"> </br>
    <label for="address_1">Address 1:</label>
    <input type="text" name="address_1" id="address_1"></br>
    <label for="address_2">Address 2:</label>
    <input type="text" name="address_2" id="address_2"></form></br>
    <label for="city">City:</label>
    <input type="text" name="city" id="city"></br>
    <label for="state">State:</label>
    <input type="text" name="state" id="state"></br>
    <label for="zip">Zip:</label>
    <input type="text" name="zip" id="zip"></br>
    <label for="description">Description:</label>
    <input type="text" name="description" id="description"></br>
    <label for="image">Image:</label>
    <input type="text" name="image" id="image"></br>
    <button type="submit">Submit</button>
</form>
