<script>
    function validateChangePasswordForm() {
        const newPassword = document.getElementById("new_password").value;
        const confirmPassword = document.getElementById("confirm_password").value;

        if (newPassword === "" || confirmPassword === "") {
            alert("Please fill in all required fields.");
            return false;
        }

        if (newPassword !== confirmPassword) {
            alert("The new password and confirmation password do not match.");
            return false;
        }

        return true;
    }
</script>

<div class="card">
    <div class="card-header">
        <h3>Change Password</h3>
    </div>
    <div class="card-body">
        <?php
        if (isset($_SESSION['change_password_error'])) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
            echo $_SESSION['change_password_error'];
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
            echo '</div>';
            unset($_SESSION['change_password_error']);
        } elseif (isset($_SESSION['change_password_success'])) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo $_SESSION['change_password_success'];
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
            echo '</div>';
            unset($_SESSION['change_password_success']);
        }

        ?>
        <form action="/profile/change_password_handler/" method="POST" onsubmit="return validateChangePasswordForm();">
            <div class="form-group">
                <label for="current_password">Current Password:</label>
                <input type="password" class="form-control" id="current_password" name="current_password" required>
            </div>
            <div class="form-group">
                <label for="new_password">New Password:</label>
                <input type="password" class="form-control" id="new_password" name="new_password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm New Password:</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn btn-primary">Change Password</button>
        </form>
    </div>
</div>