<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: app/views/dashboard.php");
} else {
    header("Location: app/views/login.php");
}
