
<h1>Edit User</h1>
<form action="index.php?action=update_user&id=<?php echo $user->getId(); ?>" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" value="<?php echo $user->getUsername(); ?>"><br>

    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" value="<?php echo $user->getFirstName(); ?>"><br>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" value="<?php echo $user->getLastName(); ?>"><br>

    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $user->getEmail(); ?>"><br>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" value="<?php echo $user->getPhone(); ?>"><br>

    <label for="address">Address:</label>
    <input type="text" name="address" value="<?php echo $user->getAddress(); ?>"><br>

    <label for="role">Role:</label>
    <select name="role">
        <option value="USER" <?php if ($user->getRole() == 'USER') echo 'selected'; ?>>User</option>
        <option value="ADMIN" <?php if ($user->getRole() == 'ADMIN') echo 'selected'; ?>>Admin</option>
    </select><br>

    <input type="submit" value="Update">
</form>