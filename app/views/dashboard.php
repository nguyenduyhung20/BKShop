<?php 
require_once '../models/SessionManager.php';

$sessionManager = new SessionManager();


if (!$sessionManager->isLoggedIn()) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $sessionManager->get('username'); ?>!</h1>
    <a href="../../index.php?action=logout">Logout</a>
</body>
</html>