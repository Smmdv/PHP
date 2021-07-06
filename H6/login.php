<?php
$db = new mysqli("localhost","root","","LOGINPHP");
echo "<form method='POST'>
    <input type='text' name='email' placeholder='email'>
    <input type='password' name='password' placeholder='password'>
    <input type='submit' name='submit' value='login'>
</form>";
if (isset($_POST['submit'])) {
    $query = "SELECT * FROM uinfo WHERE email='" . $_POST['email'] ."' AND password='" . $_POST['password']. "'";
    $output = mysqli_query($db, $query);
    $data = mysqli_fetch_array($output);
    if ($data['email'] === $_POST['email'] && $data['password'] === $_POST['password']) {
        echo "Welkom";
    } else {
        echo "email/wachtwoord klopt niet";
    }
}
