<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the username and password are correct
    if ($username === "user123" && $password === "zxcvbnm,./") {
        echo "<script>alert('You're in! CTF{W3LL_D0N3_TR4V3L3R}');</script>";
    } else {
        echo "<script>alert('Login failed. Please try again.');</script>";
    }
}
?>
