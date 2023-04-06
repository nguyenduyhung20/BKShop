<?php
require_once '../config/config.php';
require_once '../models/UserManager.php';
$user_id = isset($_GET['id']) ? $_GET['id'] : null;

if (!$user_id) {
    header('Location: admin_dashboard.php');
    exit();
}

$userManager = new UserManager($conn);
$userManager->deleteUser($user_id);

header('Location: admin_dashboard.php');
exit();
?>
