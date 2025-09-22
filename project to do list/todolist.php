<?php

session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Check if tasks array is set in the session, if not, initialize an empty array
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Add task to the list
if (isset($_POST['addTask'])) {
    $task = $_POST['task'];
    if (!empty($task)) {
        array_push($_SESSION['tasks'], $task);
    }
}

// Remove task from the list
if (isset($_POST['removeTask'])) {
    $index = $_POST['index'];
    if (isset($_SESSION['tasks'][$index])) {
        unset($_SESSION['tasks'][$index]);
    }
}

// Edit task in the list
if (isset($_POST['editTask'])) {
    $index = $_POST['index'];
    $editedTask = $_POST['editedTask'];
    if (isset($_SESSION['tasks'][$index]) && !empty($editedTask)) {
        $_SESSION['tasks'][$index] = $editedTask;
    }
}

// Logout
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP To-Do List</title>
</head>
<body>

    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>

    <h3>To-Do List</h3>

    <form action="" method="post">
        <label for="task">Add Task:</label>
        <input type="text" id="task" name="task" required>
        <button type="submit" name="addTask">Add</button>
    </form>

    <ul>
        <?php foreach ($_SESSION['tasks'] as $index => $task) : ?>
            <li>
                <?php echo $task; ?>
                <form action="" method="post" style="display: inline;">
                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                    <input type="text" name="editedTask" placeholder="Edit Task" required>
                    <button type="submit" name="editTask">Edit</button>
                </form>
                <form action="" method="post" style="display: inline;">
                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                    <button type="submit" name="removeTask">Remove</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <form action="" method="post">
        <button type="submit" name="logout">Logout</button>
    </form>

</body>
</html>
