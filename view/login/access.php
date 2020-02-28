<?php
// Need login to go index page
function accessIndex()
{
    // Initialize the session
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: view/login/login.php");
        exit;
    }
}
// Need login to go view page
function accessView()
{
    // Initialize the session
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: ../login/login.php");
        exit;
    }
}

// Test
function accessAdminIndex()
{
    // Initialize the session
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if (!($_SESSION['username'] == 'admin' && $_SESSION['password'] = 123456)) {
        // Go home page
        header("location: ../../index.php");
        exit;
    }
}
// in view
function accessAdminView()
{
    // Initialize the session
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if (!($_SESSION['username'] == 'admin')) {
        // Go home page
        header("location: ../../index.php");
        exit;
    }
}

// Access admin
function admin()
{
    return $_SESSION['username'] == 'admin';
}