<?php

session_start();

// Check if the user is already logged in, redirect to the to-do list
if (isset($_SESSION['username'])) {
    header('Location: todolist.php');
    exit();
}

// Hardcoded username and password for demonstration purposes
$correctUsername = 'admin';
$correctPassword = 'admin123';

// Check login credentials
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correctUsername && $password === $correctPassword) {
        // Valid credentials, set the username in the session and redirect to the to-do list
        $_SESSION['username'] = $username;
        header('Location: todolist.php');
        exit();
    } else {
        $loginError = 'Invalid username or password';
    }
}

// Create account
if (isset($_POST['createAccount'])) {
    $newUsername = $_POST['newUsername'];
    $newPassword = $_POST['newPassword'];

    // Validate the inputs (add more validation as needed)
    if (!empty($newUsername) && !empty($newPassword)) {
        // Store the new account information (in a real application, this would involve database operations)
        $correctUsername = $newUsername;
        $correctPassword = $newPassword;

        // Inform the user that the account has been created
        $accountCreated = 'Account created successfully! You can now log in.';
    } else {
        $createAccountError = 'Please provide a username and password.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - To-Do List</title>
</head>
<body>

    <h2>Login</h2>

    <?php if (isset($loginError)) : ?>
        <p style="color: red;"><?php echo $loginError; ?></p>
    <?php endif; ?>

    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit" name="login">Login</button>
    </form>

    <h3>Create Account</h3>

    <?php if (isset($createAccountError)) : ?>
        <p style="color: red;"><?php echo $createAccountError; ?></p>
    <?php endif; ?>

    <?php if (isset($accountCreated)) : ?>
        <p style="color: green;"><?php echo $accountCreated; ?></p>
    <?php endif; ?>

    <form action="" method="post">
        <label for="newUsername">New Username:</label>
        <input type="text" id="newUsername" name="newUsername" required>
        <br>
        <label for="newPassword">New Password:</label>
        <input type="password" id="newPassword" name="newPassword" required>
        <br>
        <button type="submit" name="createAccount">Create Account</button>
    </form>

</body>
</html>
