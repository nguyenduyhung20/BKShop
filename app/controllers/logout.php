<?php
require_once '../models/SessionManager.php';

$sessionManager = new SessionManager();

unset($_SESSION['user_id']);

$sessionManager->endSession();

header("Location: ../../index.php");
?>