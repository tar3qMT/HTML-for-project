<?php
// Sample signup backend (you would add real validation and database handling here)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Validate the passwords match and store the user in your database
    // After successful signup, redirect to login page
    header("Location: index.html");
}
?>
