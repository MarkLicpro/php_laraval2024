<h3>Form</h3>
<form action="form.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" placeholder= "Name"><br>
    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age"><br>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['name'])) {
    echo  $_POST['name']. "<br>";
    echo  $_POST['age']. "<br>";
}
?>