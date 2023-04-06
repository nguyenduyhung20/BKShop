<?php
require_once '../config/config.php';
require_once '../models/UserManager.php';

$userManager = new UserManager($conn);
$users = $userManager->getUsers();

include 'admin_dashboard_view.php';

$conn = null;
?>
