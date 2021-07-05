<?php
session_start();

if ($_SESSION['user']['rol'] === "admin") {
    if(isset($_SESSION["user"])){
        echo "Welkom ".$_SESSION["user"]["naam"];
    } else {
        header ('location: admin.php');
    }
    echo "<br><a href='index.php'>Loguit</a>";

} else {
    header("Location: index.php");
}