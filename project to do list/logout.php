<?php

session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // If logged in, destroy the session and redirect to the login page
    session_destroy();
    header('Location: login.php');
    exit();
} else {
    // If not logged in, redirect to the login page
    header('Location: login.php');
    exit();
}
