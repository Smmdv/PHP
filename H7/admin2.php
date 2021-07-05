<?php
session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "admin") {
    echo"Welkom ".$_SESSION["user"]["naam"];
    echo "<br><a href='index.php'>Terug</a>";
} else {
    header('location: admin.php');
}