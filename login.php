<?php
// Sample login backend (you would add real validation and session handling here)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Here you would validate credentials with the database
    // After successful login, redirect to home
    header("Location: home.html");
}
?>
