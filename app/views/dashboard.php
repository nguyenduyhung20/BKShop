<?php 

$user = $sessionManager->get('user');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $user->getUsername(), " "; echo "You are ", $user->getRole() ;?>!</h1>
    <?php 
    if ( $user->getRole() == Role::ADMIN) {
        echo '<a href="index.php?action=view_user">View Users</a>';
    }
    ?>
    <a href="index.php?action=logout">Logout</a>
</body>
</html>