<?php
session_start();



$users = array(
    "Sem" => array("password" => "1", "rol" => "admin"),
    "Som" => array("password" => "2", "rol" => "user"),
);

if(isset($_POST['submit'])
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]]["password"] == $_POST['password']) {
    $_SESSION["user"] = array("naam" => $_POST["login"],
        "password" => $users[$_POST["login"]]['password'],
        "rol" =>$users[$_POST["login"]]['rol']);
    echo  $_SESSION["user"]['naam']." Role:"
        .$_SESSION["user"]["rol"];

} else {
    echo   "inloggen";
}
echo"<form method='POST'>
    <input type='text' name='login' placeholder='login'>
    <input type='password' name='password' placeholder='password'>
    <input type='submit' name='submit' value='login'>
</form>";
echo "<br><a href='admin.php'>mainpage</a>";
echo "<br><a href='admin2.php'>admin</a>";
echo "<br><a href='logout.php'>Logout</a>";