<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome to the Dashboard</h2>
    <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
    <p>Your role: <?php echo $_SESSION['role']; ?></p>

    <?php
    if ($_SESSION['role'] === 'admin') {
        echo "<p>You have admin privileges.</p>";
        echo "<a href='admin.php'>Go to Admin Panel</a>";
    } else {
        echo "<p>You are logged in as a regular user.</p>";
    }
    ?>

    <br><br>
    <a href="logout.php">Logout</a>
</body>
</html>
